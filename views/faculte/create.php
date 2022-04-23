<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FACULTE0000 */

$this->title = 'Create Faculte 0000';
$this->params['breadcrumbs'][] = ['label' => 'Faculte 0000s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculte0000-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
