<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>

<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=cyrillic,latin' rel='stylesheet' type='text/css'>

<?php $this->head() ?>
</head>
<body>
