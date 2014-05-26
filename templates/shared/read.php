<?php
use \Xinix\Theme\NakedTheme\Helper\Form;
?>

<div class="listing">
    <div class="nav-mobile hidden-desktop">
        <select class="select-button">
            <option data-url="<?php echo f('controller.redirectUrl') ?>">Search</option>
            <option data-url="<?php echo f('controller.url', '/null/create') ?>">Create</option>
            <option data-url="<?php echo f('controller.url', '/'.$entry['$id']) ?>" selected>Read</option>
            <option data-url="<?php echo f('controller.url', '/'.$entry['$id'].'/update') ?>">Update</option>
            <option data-url="<?php echo f('controller.url', '/'.$entry['$id'].'/delete') ?>">Delete</option>
        </select>
    </div>
    <div class="list-form">

        <?php echo Form::create()->of($entry)->show(array( 'format' => 'readonly' )) ?>

    </div>
</div>
