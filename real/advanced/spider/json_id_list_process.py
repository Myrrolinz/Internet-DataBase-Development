import json

# Team: 布利啾啾迪布利多, NKU
# coding by 徐云凯 1713667
# 对api中国家列表与geojson国家与地区列表进行映射，给出映射表

data_file = open("covid_api.json", 'r')
json_str = json.loads(data_file.read())
id_pid_list = [-1] * 266
for c in json_str["locations"]:
    id_pid_list[c["id"]] = c["pid"]
for i in range(len(id_pid_list)):
    if i % 20 == 0 :
        print()
    print(id_pid_list[i], end=', ')
