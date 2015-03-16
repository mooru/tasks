<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\controllers\Country;

/* @var $this yii\web\View */
/* @var $model frontend\models\Country */
/* @var $form ActiveForm */
?>
<div class="country-create">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'population') ?>
        <?= $form->field($model, 'code') ?>
        <?= $form->field($model, 'name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- country-create -->
