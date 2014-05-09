<div class="listing">
    <div class="wrapper">
        <?php if ($_POST): ?>
            <h4><?php echo 'Delete '.f('controller.name').' ('.count($ids).' entries)' ?></h4>
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
            <h4><?php echo 'Delete '.f('controller.name') ?></h4>
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
