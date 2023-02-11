<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,202302008
 * map controller
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
        $geojson_t = file_get_contents('../web/storage/geojson/Ukraine.json');
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
                $json_data["features"][$c["id"] - 1]["properties"]["event"] = 
                    # $rec == NULL ? 0 : $rec["event"];
                    $rec["event"] == NULL ? "未发生大型战役" : $rec["event"];
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
