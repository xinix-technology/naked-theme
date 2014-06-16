<?php
use \Xinix\Theme\NakedTheme\Helper\Form;
?>

<div class="listing">
    <div class="nav-mobile hidden-desktop">
        <select class="select-button">
            <option data-url="<?php echo f('controller.redirectUrl') ?>">Search</option>
            <?php if (f('auth.allowed', f('controller.uri', '/null/create'))): ?>
            <option data-url="<?php echo f('controller.url', '/null/create') ?>">Create</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/'.$entry['$id']))): ?>
            <option data-url="<?php echo f('controller.url', '/'.$entry['$id']) ?>" selected>Read</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/'.$entry['$id'].'/update'))): ?>
            <option data-url="<?php echo f('controller.url', '/'.$entry['$id'].'/update') ?>">Update</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/'.$entry['$id'].'/delete'))): ?>
            <option data-url="<?php echo f('controller.url', '/'.$entry['$id'].'/delete') ?>">Delete</option>
            <?php endif ?>
        </select>
    </div>
    <div class="list-form">

        <?php echo Form::create($app->controller->schema())->of($entry)->show(array( 'format' => 'readonly' )) ?>

    </div>
</div>
