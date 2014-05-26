<div class="listing">
    <div class="nav-area hidden-mobile">
        <div class="wrapper">
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
                                <a href="<?php echo f('controller.url', '/'.\URL::parameter('id')) ?>" class="button">Read</a>
                            </li>
                            <li>
                                <a href="<?php echo f('controller.url', '/'.\URL::parameter('id').'/update') ?>" class="button">Update</a>
                            </li>
                            <li>
                                <a href="<?php echo f('controller.url', '/'.\URL::parameter('id').'/delete') ?>" class="button active">Delete</a>
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
            <option value="" data-url="<?php echo f('controller.url', '/'.\URL::parameter('id')) ?>" class="option">Read</option>
            <option value="" data-url="<?php echo f('controller.url', '/'.\URL::parameter('id').'/update') ?>" class="option">Update</option>
            <option value="" data-url="<?php echo f('controller.url', '/'.\URL::parameter('id').'/delete') ?>" class="option">Delete</option>
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
