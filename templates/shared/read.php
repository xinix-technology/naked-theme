<?php
use \ROH\Theme\V2Theme\Helper\Form;
?>

<script type="text/javascript">
    $(".alert p").click(function() {
        $(this).addClass("hide");
    });
</script>
<div class="listing">
    <div class="wrapper">
        <h4><?php echo f('controller.name') ?></h4>
        <div class="row button-form">
            <div class="span-12">
                <div class="row">
                    <ul class="flat">
                        <li>
                            <a href="<?php echo f('controller.url', '/') ?>" class="button">Back</a>
                        </li>
                        <li>
                            <a href="<?php echo f('controller.url', '/'.$entry['$id'].'/update') ?>" class="button">Update</a>
                        </li>
                        <li>
                            <a href="<?php echo f('controller.url', '/'.$entry['$id'].'/delete') ?>" class="button">Delete</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <form method="POST">
            <?php echo Form::create()->of($entry)->show(array( 'readonly' => true )) ?>
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
</div>
