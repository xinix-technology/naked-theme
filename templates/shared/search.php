<div class="listing">
    <div class="nav-mobile hidden-desktop">
        <select class="select-button">
            <option data-url="<?php echo f('controller.redirectUrl') ?>" selected>Search</option>
            <option data-url="<?php echo f('controller.url', '/null/create') ?>">Create</option>
        </select>
    </div>
    <div class="list-user">
        <div class="wrapper">
            <ul class="listview">
                <li class="list-group-container">
                    <ul class="list-group">
                        <?php if ($entries->count()): ?>
                        <?php foreach($entries as $entry): ?>
                            <li class="plain">
                                <a href="<?php echo f('controller.url', '/'.$entry['$id']) ?>">
                                    <?php $schema = $entry->collection->schema(); ?>
                                    <?php echo reset($schema)->format('plain', $entry[key($schema)], $entry) ?>
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


