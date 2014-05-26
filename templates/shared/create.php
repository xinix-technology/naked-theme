<?php
use \Xinix\Theme\NakedTheme\Helper\Form;
?>

<div class="listing">
    <div class="nav-mobile hidden-desktop">
        <select class="select-button">
            <option data-url="<?php echo f('controller.redirectUrl') ?>">Search</option>
            <option data-url="<?php echo f('controller.url', '/null/create') ?>" selected>Create</option>
        </select>
    </div>

    <div class="list-form">
        <?php // if ($app->request->isGet()): ?>
        <form method="POST">
            <?php echo Form::create()->of($entry)->show() ?>
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
