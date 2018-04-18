<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RefdiklatperjenjanganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Diklat Penjenjangan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refdiklatperjenjangan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Diklat Penjenjangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idDiklatPerjenjangan',
            'levelDiklatPerjenjangan',
            'namaDiklatPerjenjangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
