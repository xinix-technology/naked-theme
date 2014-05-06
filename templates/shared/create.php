<?php
use \Xinix\Theme\NakedTheme\Helper\Form;
?>

<script type="text/javascript">
    $(".alert p").click(function() {
        $(this).addClass("hide");
    });
</script>
<div class="listing">
    <div class="wrapper">
        <?php if ($_POST): ?>
            <h4><?php echo f('controller.name') ?>: Create</h4>
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
            <h4><?php echo f('controller.name') ?>: Create</h4>
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
