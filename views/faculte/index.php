<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\FACULTE;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FACULTE0000Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faculte 0000s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculte0000-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Faculte 0000', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FACCODE',
            'FAC',
            'FACAr',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, FACULTE $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'FACCODE' => $model->FACCODE]);
                 }
            ],
        ],
    ]); ?>


</div>
