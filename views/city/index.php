<?php
/* @var $this yii\web\View */

use app\models\City;
use yii\helpers\ArrayHelper;
use yii\jui\AutoComplete;
use yii\widgets\ActiveForm;

?>
    <h1><?=$model->name?></h1>

    <p>
        Широта: <?=$model->latitude?> &nbsp; Долгота: <?=$model->longitude?>
    </p>

<?php

$form = ActiveForm::begin ([
    'id' => 'weather-form',
    'method' => 'post',
    'action' => ['city/index'],
    'options' => ['class' => 'form-horizontal'],
]) ?>

<?=$form->field ($model, 'id')->dropDownList (ArrayHelper::map (City::find ()->all (), 'id', 'name'), ['onchange' => 'this.form.submit()'])?>

<?php ActiveForm::end () ?>