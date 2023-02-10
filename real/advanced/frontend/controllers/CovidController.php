<?php

/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 徐云凯 1713667
 * This is the main control unit of plague-map
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\response;
use common\models\CovidMap;

class CovidController extends Controller
{
    public function actionCovidInfo($type)
    {
        $geojson_t = file_get_contents('../web/storage/geojson/countries_data.json');
        $json_data = json_decode($geojson_t,true);
        
        if ($type == "latest"){
            $latestDate = CovidMap::find()->max('date');
            $recs = array("latestDate" => $latestDate);
            $results = CovidMap::find()->where(['date' => $latestDate])->all();

            foreach ($results as $result){
                $recs[$result["pid"]] = $result;
            }

            foreach ($json_data["features"] as $c){
                $json_data["features"][$c["id"] - 1]["properties"]["date"] = $latestDate;
                $rec = isset($recs[$c["id"]]) ? $recs[$c["id"]] : NULL;
                $json_data["features"][$c["id"] - 1]["properties"]["num"] = 
                    $rec == NULL ? 0 : $rec["confirm"];
            }

        }

        Yii::$app->response->format=Response::FORMAT_JSON;
        return $json_data;
    }

    public function actionCountryDetail($pid)
    {
        $json_data = '{"test":"success"}';

        Yii::$app->response->format=Response::FORMAT_JSON;
        return $json_data;
    }
}
