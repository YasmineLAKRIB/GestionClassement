<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FACULTE0000 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faculte0000-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FACCODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FAC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FACAr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
