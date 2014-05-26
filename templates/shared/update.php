<?php
use \Xinix\Theme\NakedTheme\Helper\Form;
?>

<div class="listing">
    <div class="nav-area hidden-mobile">
        <div class="wrapper">
            <!-- <h4><?php echo f('controller.name') ?>: Update</h4> -->
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
                            <li>
                                <a href="<?php echo f('controller.url', '/'.$entry['$id']) ?>" class="button">Read</a>
                            </li>
                            <li>
                                <a href="<?php echo f('controller.url', '/'.$entry['$id'].'/update') ?>" class="button active">Update</a>
                            </li>
                            <li>
                                <a href="<?php echo f('controller.url', '/'.$entry['$id'].'/delete') ?>" class="button">Delete</a>
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
            <option value="" data-url="<?php echo f('controller.url', '/'.$entry['$id']) ?>" class="option">Read</option>
            <option value="" data-url="<?php echo f('controller.url', '/'.$entry['$id'].'/update') ?>" class="option">Update</option>
            <option value="" data-url="<?php echo f('controller.url', '/'.$entry['$id'].'/delete') ?>" class="option">Delete</option>
        </select>
    </div>
    <div class="list-form">
        <?php if (!$_POST): ?>
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
        <?php endif ?>
    </div>
</div>
