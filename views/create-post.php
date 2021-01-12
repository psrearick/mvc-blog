<?php

/** @var $model \app\models\Post */
/** @var $this \app\src\View */

use app\src\form\Form;
use app\src\form\TextareaField;

$this->title = 'Create Post';
?>

<h1>Create Blog Post</h1>

<?php $form = Form::begin('', 'post') ?>
    <?php echo $form->field($model, 'post_title') ?>
    <?php echo $form->field($model, 'slug') ?>
    <?php echo (new TextareaField($model, 'body'))->__toString() ?>
    <?php echo (new TextareaField($model, 'excerpt'))->__toString() ?>
    <?php echo $form->field($model, 'tags') ?>
    <?php echo $form->field($model, 'image_url') ?>
    <button type="submit">Create</button>
<?php $form::end(); ?>
