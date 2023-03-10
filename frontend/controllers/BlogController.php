<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,202302008
 * blog相关
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
use common\models\Article;
use common\models\Category;
use common\models\ArticleSearch;
use common\models\CommentFormB;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class BlogController extends Controller
{
    /**
     * {@inheritdoc}
     */
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

    public function actionView($id) // 用于展示view页面的样式
    {
        $article = Article::findOne($id); // 通过id找到对应的文章
        // 找到热门文章
        $popular = Article::Popular();
        // 找到最新文章
        $recent = Article::Recent();
        // 找到所有分类
        $categories = Category::find()->all();
        // 找到所有评论 通过article_id
        $comments = $article->ArticleComments();
        $commentForm = new CommentFormB();// 评论表单

        $article->viewedCounter();
        // 返回view页面
        return $this->render('view', [
            'article' => $article,
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories,
            'comments' => $comments,
            'commentForm' => $commentForm
        ]);
    }
    // 在单击“我的”后，跳转到mypost.php页面
    public function actionMypost()
    {   
        // 判断是否登录
        if (!Yii::$app->user->isGuest) {
            $this->layout = 'blog';
            $searchModel = new ArticleSearch();
            $dataProvider = new ActiveDataProvider([
                'query' => Article::find()->creator(Yii::$app->user->id)->latest(),
            ]);
            return $this->render('mypost', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        return $this->redirect(['site/login']);
    }


    public function actionInfo($id)
    {
        $this->layout = "blog";
        return $this->render('info', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionUpdate($id)
    {
        $this->layout = "blog";
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    // 用来展示blog页面的样式
    public function actionBlog()
    {

        $this->layout = 'blog';
        $data = Article::getAll(6);// 通过getAll方法找到所有文章
        // 通过for循环将文章分为两个数组
        for ($i = 0, $j = 0; $i < sizeof($data['articles']); $i += 2) {
            $data1[$j++] = $data['articles'][$i];
        }
        for ($i = 1, $k = 0; $i < sizeof($data['articles']); $i += 2) {
            $data2[$k++] = $data['articles'][$i];
        }
        

        $popular = Article::Popular();

        $recent = Article::Recent();

        $categories = Category::find()->all();


        return $this->render("blog", [
            'articles' => $data['articles'],
            'articles1' => $data1,
            'articles2' => $data2,
            'pagination' => $data['pagination'],
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories
        ]);
    }
    // 用于跳转到blog目录部分
    public function actionCategory($id)
    {
        $data = Category::getArticlesByCategory($id);

        $popular = Article::Popular();

        $recent = Article::Recent();

        $categories = Category::find()->all();

        return $this->render("category", [
            'articles' => $data['articles'],
            'pagination' => $data['pagination'],
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories
        ]);
    }
    // 创建新的Action动作
    public function actionCreate()
    {
        // 判断是否登录
        if (!Yii::$app->user->isGuest) { 
        $this->layout = 'blog';
        $model = new Article();
        // 判断是否加载数据
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['info', 'id' => $model->id]);
        }
        // 返回create页面
        return $this->render('create', [
            'model' => $model,
        ]);}
        // 如果没有登录，跳转到登录页面
        return $this->redirect(['site/login']);
    }

    public function actionSetImage($id)
    {
        $this->layout = 'blog';
        $model = new \common\models\ImageUpload();

        if (Yii::$app->request->isPost) {

            $article = $this->findModel($id);

            $model->image = UploadedFile::getInstance($model, 'image');

            if ($article->saveImage($model->uploadFile($model->image, $article->image))) {
                return $this->redirect(['info', 'id' => $article->id]);
            }
        }

        return $this->render('image', ['model' => $model]);
    }

    public function actionSetCategory($id)
    {
        $this->layout = 'blog';
        $article = $this->findModel($id);

        $categories = ArrayHelper::map(Category::find()->all(), 'id', 'title');

        $selectedCategory = $categories[1];

        if (Yii::$app->request->isPost) {
            $category = Yii::$app->request->post('category');
            if ($article->saveCategory($category)) {
                return $this->redirect(['info', 'id' => $article->id]);
            }
        }


        return $this->render('scategory', [
            'article' => $article,
            'selectedCategory' => $selectedCategory,
            'categories' => $categories
        ]);
    }


    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['mypost']);
    }

    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionComment($id)
    {
        $model = new CommentFormB();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            if ($model->saveComment($id)) {
                Yii::$app->getSession()->setFlash('comment', 'Your comment will be added soon!');
                return $this->redirect(['blog/view', 'id' => $id]);
            }
        }
    }

    public function actionSearch($keyword)
    {
        $this->layout = 'blog';
        $query = Article::find()

            ->published()
            ->latest();
        if ($keyword) {
            $query->byKeyword($keyword);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('search', [
            'dataProvider' => $dataProvider
        ]);
    }
}
