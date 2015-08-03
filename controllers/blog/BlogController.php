<?php

namespace app\controllers\blog;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\post\Posts;


class BlogController extends Controller
{
    public $layout = 'base';
    public $defaultAction = 'view';

    public function getViewPath()
    {
        return Yii::getAlias('@app/views/blog');
    }

    public function getPagination($query)
    {
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        return $pagination;
    }

    public function actionSortDate($postdate)
    {
        $query = Posts::find()->joinWith('users')->joinWith('postsCategory')->where(['post_date' => $postdate]);
        $pagination = $this->getPagination($query);
        $model = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('view', ['posts' => $model, 'pagination' => $pagination]);
    }

    public function actionSortCategory($categoryid)
    {
        $query = Posts::find()->joinWith('users')->joinWith('postsCategory')->where(['posts_category.category_id' => $categoryid]);
        $pagination = $this->getPagination($query);
        $model = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('view', ['posts' => $model, 'pagination' => $pagination]);
    }
    public function actionSortViews($postviews)
    {
        $query = Posts::find()->joinWith('users')->joinWith('postsCategory')->where(['post_views' => $postviews]);
        $pagination = $this->getPagination($query);
        $model = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('view', ['posts' => $model, 'pagination' => $pagination]);
    }
    public function actionSortAuthor($authorid)
    {
        $query = Posts::find()->joinWith('users')->joinWith('postsCategory')->where(['post_author' => $authorid]);
        $pagination = $this->getPagination($query);
        $model = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('view', ['posts' => $model, 'pagination' => $pagination]);
    }

    public function actionView()
    {
        $query = Posts::find()->with('users', 'postsCategory');
        $pagination = $this->getPagination($query);
        $model = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        //print_r($posts[0]->users[0][user_name]);
        return $this->render('view', ['posts' => $model, 'pagination' => $pagination]);
    }
}