<?php
/** @var $model \app\models\User */

use app\src\form\Form;

$this->title = 'Register';
?>


<div class="page create-category-page">
    <div class="form-container flex">
        <header>
            <div>
                <h1>Register</h1>
            </div>
        </header>

        <?php $form = Form::begin('', 'post') ?>
        <div class="fields">
            <?php echo $form->field($model, 'name') ?>
            <?php echo $form->field($model, 'email') ?>
            <?php echo $form->field($model, 'password')->passwordField() ?>
            <?php echo $form->field($model, 'passwordConfirmation')->passwordField() ?>
        </div>
        <div class="control-buttons flex">
            <button class="control-btn btn-success" type="submit">Register</button>
            <a href="/" class="control-btn btn-cancel">Cancel</a>
        </div>
        <?php Form::end() ?>
    </div>
</div>
