<?php

/* @var $this yii\web\View */
/* @var $model yii\db\ActiveRecord */
/* @var $weather array */
/* @var $cityList array */

use yii\widgets\ActiveForm;

?>

<?php foreach (Yii::$app->session->getAllFlashes () as $type => $message): ?>
    <?php if (Yii::$app->session->hasFlash ($type)): ?>
        <div class="alert alert-<?=$type?>" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <?=$message?>
        </div>
        <?php Yii::$app->session->removeFlash ($type) ?>
    <?php endif; ?>
<?php endforeach ?>

<div class="col-sm-3">
    <?php
    $form = ActiveForm::begin ([
        'id' => 'weather-form',
        'method' => 'post',
        'action' => ['/'],
        'options' => ['class' => 'form-horizontal'],
    ])
    ?>

    <?=$form->field ($model, 'id')->label (false)->dropDownList ($cityList, ['onchange' => 'this.form.submit()'])?>

    <?php ActiveForm::end () ?>
</div>
<div class="clearfix"></div>

<h1><?=$model->name?></h1>

<p>
    Широта: <?=$model->latitude?> &nbsp; Долгота: <?=$model->longitude?>
</p>
Температура: <?=isset($weather['fact']['temp']) ? $weather['fact']['temp'] : 'нет данных'?><br>
Ощущаемая температура: <?=isset($weather['fact']['feels_like']) ? $weather['fact']['feels_like'] : 'нет данных'?><br>
Скорость ветра (в м/с): <?=isset($weather['fact']['wind_speed']) ? $weather['fact']['wind_speed'] : 'нет данных'?><br>

