<div class="listing">
    <div class="nav-mobile hidden-desktop">
        <select class="select-button">
            <?php if (f('auth.allowed', f('controller.uri'))): ?>
            <option data-url="<?php echo f('controller.uri') ?>">Search</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/null/create'))): ?>
            <option data-url="<?php echo f('controller.url', '/null/create') ?>">Create</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/'.\URL::parameter('id')))): ?>
            <option data-url="<?php echo f('controller.url', '/'.\URL::parameter('id')) ?>">Read</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/'.\URL::parameter('id').'/update'))): ?>
            <option data-url="<?php echo f('controller.url', '/'.\URL::parameter('id').'/update') ?>">Update</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/'.\URL::parameter('id').'/delete'))): ?>
            <option data-url="<?php echo f('controller.url', '/'.\URL::parameter('id').'/delete') ?>" selected>Delete</option>
            <?php endif ?>
        </select>
    </div>
    <div class="list-form">
        <?php if ($_POST): ?>
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
            <?php $id = explode(',', \URL::parameter('id')) ?>
            <form method="POST">
                <p>Are you sure want to delete <?php echo @count($id).' entries' ?>?</p>
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
