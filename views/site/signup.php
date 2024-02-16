<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\Alert;
$sessionError = Yii::$app->session->getFlash('error');
if($sessionError){
    echo Alert::widget([
        'options' => ['class' => 'alert-error'],
        'body' => $sessionError,
    ]);
}
?>

<div class="form">
    <div class="form-body">
    <?php $form =  ActiveForm::begin([
        'id'=>'signup-form',
        'action'=>['site/signup'],
    ]);?>

    <?= $form->field($model,'name')->textInput() ?>
    <?= $form->field($model,'email')->textInput() ?>
    <?= $form->field($model,'password')->passwordInput() ?>
    <?= $form->field($model, 'role')->dropDownList([
        'Admin'=>'Admin',
        'User'=>'User',
        'Manager'=>'Manager'
    ])?>   
    <div class="form-group">
        <div>
            <?= Html::submitButton('SignUp', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
 
    </div>
</div>