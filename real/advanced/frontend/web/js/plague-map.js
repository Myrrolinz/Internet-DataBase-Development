
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 徐云凯 1713667
 * This is the main control unit of plague-map
 */

$(document).ready(function () {
    var mymap = L.map('plague-map').setView([30, 5], 2);
    var mburl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
    L.tileLayer(mburl, {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/light-v9',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);

    var latestDate
    $.ajax({
        url: "./covid/covid-info",
        type: "GET",
        data: { type: 'latest' },
        async: false,
        dataType: 'json',
        error: function (request) {
            alert("获取疫情数据失败");
        },
        success: function (data) {
            var recdate = data.features[0].properties.date
            latestDate = recdate.substr(0, 4) + '年' +
                parseInt(recdate.substr(5, 2).toString()) + '月' +
                parseInt(recdate.substr(8, 2).toString()) + '日';
                
            geojson = L.geoJson(data, {
                style: style,
                onEachFeature: onEachFeature
            }).addTo(mymap);
        }
    });

    var info = L.control();
    info.onAdd = function (map) {
        this._div = L.DomUtil.create('div', 'info');
        this.update();
        return this._div;
    };
    info.update = function (props) {
        if (!latestDate)
            latestDate = '';
        else
            latestDate.replace()

        this._div.innerHTML =
            '<h4>各国累计确诊人数</h4><p>数据更新于' + latestDate + '</p>' +
            (props ? '<b>' + props.namecn + '</b><br/>' + props.num + ' 人'
                : '鼠标置于对应国家以查看');
    };
    info.addTo(mymap);

    var legend = L.control({ position: 'bottomleft' });
    legend.onAdd = function (map) {
        var div = L.DomUtil.create('div', 'info legend'),
            grades = [0, 10, 100, 500, 1000, 5000, 10000, 100000, 1000000],
            labels = [],
            from, to;
        for (var i = 0; i < grades.length; i++) {
            from = grades[i];
            to = grades[i + 1];

            labels.push('<p class="info-p"><i style="background:' + getColor(from + 1) + '"></i> ' +
                from + (to ? '-' + to : '+') + '</p>');
        }
        div.innerHTML = labels.join("<br>");
        return div;
    };
    legend.addTo(mymap);

    function getColor(d) {
        return d > 1000000 ? '#800026' :
            d > 100000 ? '#BD0026' :
                d > 10000 ? '#E31A1C' :
                    d > 1000 ? '#FC4E2A' :
                        d > 1000 ? '#FD8D3C' :
                            d > 500 ? '#FEB24C' :
                                d > 100 ? '#FED976' :
                                    d > 10 ? '#FFEDA0' :
                                        '#ECECEC';
    }

    function style(feature) {
        return {
            weight: 2,
            opacity: 1,
            color: 'white',
            dashArray: '3',
            fillOpacity: 0.7,
            fillColor: getColor(feature.properties.num)
        };
    }

    function highlightFeature(e) {
        var layer = e.target;
        layer.setStyle({
            weight: 5,
            color: '#666',
            dashArray: '',
            fillOpacity: 0.5
        });
        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
            layer.bringToFront();
        }
        info.update(layer.feature.properties);
    }

    var geojson;
    function resetHighlight(e) {
        geojson.resetStyle(e.target);
        info.update();
    }

    function zoomToFeature(e) {
        mymap.fitBounds(e.target.getBounds());
    }

    function onEachFeature(feature, layer) {
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight,
            click: zoomToFeature
        });
    }
})
