<?php

/** @var $model \app\models\Category */
/** @var $this \app\src\View */

use app\src\form\Form;

$this->title = 'Edit Category - ' . $model->category;

?>

<div class="page create-category-page">
    <div class="form-container flex">
        <header>
            <div>
                <h1>Edit Category</h1>
            </div>
        </header>
        <?php $form = Form::begin('', 'post') ?>
        <div class="fields">
            <?php echo $form->field($model, 'category') ?>
        </div>
        <div class="control-buttons flex">
            <button class="control-btn btn-success" type="submit">Edit</button>
            <a class="control-btn btn-cancel" href="/categories">Cancel</a>
        </div>
        <?php $form::end(); ?>
    </div>
</div>

