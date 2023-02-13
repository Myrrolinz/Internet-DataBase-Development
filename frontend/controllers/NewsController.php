<?php
/**
 * Team:ddl驱动队,NKU
 * coding by guanyunmei,202302008
 * news相关
 */
namespace frontend\controllers;

use Yii;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use common\models\News;
use common\models\Video;


class NewsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $this->layout = 'blog';
        $data = News::getAll(16);//获取所有新闻
        // 将新闻分为四组
        $data1 = $data['news'][0];
        for ($i = 1, $j = 0; $i < 5;) {
            $data2[$j++] = $data['news'][$i++];
        }
        for ($i = 5, $j = 0; $i < 10;) {
            $data3[$j++] = $data['news'][$i++];
        }
        for ($i = 10, $j = 0; $i < 16;) {
            $data4[$j++] = $data['news'][$i++];
        }
        $videos = Video::getAll(5);//获取所有视频
        return $this->render("index", [
            'news1' => $data1,
            'news2' => $data2,
            'news3' => $data3,
            'news4' => $data4,
            'videos' => $videos['videos'],
            'pagination' => $data['pagination'],
        ]);
    }
    
}
