<div class="listing">
    <div class="nav-mobile hidden-desktop">
        <select class="select-button">
            <?php if (f('auth.allowed', f('controller.uri'))): ?>
            <option data-url="<?php echo f('controller.uri') ?>" selected>Search</option>
            <?php endif ?>
            <?php if (f('auth.allowed', f('controller.uri', '/null/create'))): ?>
            <option data-url="<?php echo f('controller.url', '/null/create') ?>">Create</option>
            <?php endif ?>
        </select>
    </div>
    <div class="list-user">
        <div class="wrapper">
            <ul class="listview">
                <li class="list-group-container">
                    <ul class="list-group">
                        <?php if (count($entries)): ?>
                        <?php foreach($entries as $entry): ?>
                            <li class="plain">
                                <a href="<?php echo f('controller.url', '/'.$entry['$id']) ?>">
                                    <?php echo $entry->format() ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                        <?php else: ?>
                            <li class="plain" style="text-align: center; border-bottom: 0">
                                <a href="#">
                                    &lt;empty&gt;
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


