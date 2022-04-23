<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FACULTE0000 */

$this->title = 'Update Faculte 0000: ' . $model->FACCODE;
$this->params['breadcrumbs'][] = ['label' => 'Faculte 0000s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FACCODE, 'url' => ['view', 'FACCODE' => $model->FACCODE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="faculte0000-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
