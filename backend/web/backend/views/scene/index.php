<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SceneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scenes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scene-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Scene', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'area',
            'type',
            'space',
            'acreage',
            // 'progress',
            // 'title',
            // 'img',
            // 'atitle',
            // 'content:ntext',
            // 'uname',
            // 'uinfo',
            // 'utime',
            // 'udesigner',
            // 'uwork',
            // 'ustatus',
            // 'time',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
