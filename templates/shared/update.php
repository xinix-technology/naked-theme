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
            <option data-url="<?php echo f('controller.url', '/'.$entry['$id']) ?>">Read</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/'.$entry['$id'].'/update'))): ?>
            <option data-url="<?php echo f('controller.url', '/'.$entry['$id'].'/update') ?>" selected>Update</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/'.$entry['$id'].'/delete'))): ?>
            <option data-url="<?php echo f('controller.url', '/'.$entry['$id'].'/delete') ?>">Delete</option>
            <?php endif ?>
        </select>
    </div>
    <div class="list-form">
        <form method="POST" enctype="multipart/form-data">
            <?php echo Form::create($app->controller->schema())->of($entry)->show() ?>
            <div class="row button-form">
                <div class="span-12">
                    <div class="row">
                        <ul class="flat">
                            <li>
                                <input type="submit" value="Save">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
