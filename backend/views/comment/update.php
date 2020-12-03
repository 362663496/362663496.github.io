<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */

$this->title = '修改评论: '.$model->post->title;
$this->params['breadcrumbs'][] = ['label' => '评论列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->post->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改评论';
?>
<div class="comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>