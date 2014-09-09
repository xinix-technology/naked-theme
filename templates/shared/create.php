<?php
use \Xinix\Theme\NakedTheme\Helper\Form;
?>

<div class="listing">
    <div class="nav-mobile hidden-desktop">
        <select class="select-button">
            <?php if (f('auth.allowed', f('controller.uri'))): ?>
            <option data-url="<?php echo f('controller.uri') ?>">Search</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/null/create'))): ?>
            <option data-url="<?php echo f('controller.url', '/null/create') ?>" selected>Create</option>
            <?php endif ?>
        </select>
    </div>
    <div class="list-form">
        <?php // if ($app->request->isGet()): ?>
        <form method="POST" enctype="multipart/form-data">
            <?php echo Form::create($app->controller->schema())->of(@$entry)->show() ?>
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
        <?php // endif ?>
    </div>
</div>
