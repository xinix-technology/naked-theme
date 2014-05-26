<div class="listing">
    <div class="nav-mobile hidden-desktop">
        <select class="select-button">
            <option data-url="<?php echo f('controller.redirectUrl') ?>">Search</option>
            <option data-url="<?php echo f('controller.url', '/null/create') ?>">Create</option>
            <option data-url="<?php echo f('controller.url', '/'.\URL::parameter('id')) ?>">Read</option>
            <option data-url="<?php echo f('controller.url', '/'.\URL::parameter('id').'/update') ?>">Update</option>
            <option data-url="<?php echo f('controller.url', '/'.\URL::parameter('id').'/delete') ?>" selected>Delete</option>
        </select>
    </div>
    <div class="list-form">
        <?php if ($_POST): ?>
            <!-- <h4><?php echo 'Delete '.f('controller.name').' ('.count($ids).' entries)' ?></h4> -->
            <div class="row button-form">
                <div class="span-12">
                    <div class="row">
                        <ul class="flat">
                            <li>
                                <a href="<?php echo f('controller.redirectUrl') ?>" class="button">Back</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <!-- <h4><?php echo 'Delete '.f('controller.name') ?></h4> -->
            <form method="POST">
                <p>Are you sure want to delete <?php echo count($ids).' entries' ?>?</p>
                <input type="hidden" name="confirm" value="1">
                <div class="row button-form">
                    <div class="span-12">
                        <div class="row">
                            <ul class="flat">
                                <li>
                                    <input type="submit" value="OK">
                                </li>
                                <li>
                                    <a href="<?php echo f('controller.redirectUrl') ?>" class="button">Cancel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        <?php endif ?>
    </div>
</div>
