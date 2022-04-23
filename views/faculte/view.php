<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FACULTE0000 */

$this->title = $model->FACCODE;
$this->params['breadcrumbs'][] = ['label' => 'Faculte 0000s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="faculte0000-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'FACCODE' => $model->FACCODE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'FACCODE' => $model->FACCODE], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'FACCODE',
            'FAC',
            'FACAr',
        ],
    ]) ?>

</div>
