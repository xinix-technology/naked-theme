<?php
use \Xinix\Theme\NakedTheme\Helper\Form;
?>

<div class="listing">
    <div class="nav-area hidden-mobile">
        <div class="wrapper">
            <?php if ($_POST): ?>
            <!-- <h4><?php echo f('controller.name') ?>: Create</h4> -->
            <div class="row button-form">
                <div class="span-12">
                    <div class="row">
                        <ul class="flat">
                            <li>
                                <a href="<?php echo f('controller.redirectUrl') ?>" class="button">Search</a>
                            </li>
                            <li>
                                <a href="<?php echo f('controller.url', '/null/create') ?>" class="button">Create</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <!-- <h4><?php echo f('controller.name') ?>: Create</h4> -->
            <div class="row button-form">
                <div class="span-12">
                    <div class="row">
                        <ul class="flat">
                            <li>
                                <a href="<?php echo f('controller.redirectUrl') ?>" class="button">Search</a>
                            </li>
                            <li>
                                <a href="<?php echo f('controller.url', '/null/create') ?>" class="button active">Create</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-mobile hidden-desktop">
        <select name="" id="" class="select-button">
            <option value="" class="option">Select</option>
            <option value="" data-url="<?php echo f('controller.redirectUrl') ?>" class="option">Search</option>
            <option value="" data-url="<?php echo f('controller.url', '/null/create') ?>" class="option">Create</option>
        </select>
    </div>
    <div class="list-form">
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
    </div>
    <?php endif ?>
</div>
