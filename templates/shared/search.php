<div class="listing">
    <div class="wrapper">
        <h4><?php echo f('controller.name') ?>: List</h4>
        <div class="row button-form">
            <div class="span-12">
                <div class="row">
                    <ul class="flat">
                        <li>
                            <a href="<?php echo f('controller.url', '/null/create') ?>" class="button">Create</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="list-user">
            <ul class="listview">
                <li class="list-group-container">
                    <ul class="list-group">
                        <?php if ($entries->count()): ?>
                        <?php foreach($entries as $entry): ?>
                            <li class="plain">
                                <a href="<?php echo f('controller.url', '/'.$entry['$id']) ?>">
                                    <?php echo $entry[key($entry->collection->schema())] ?>
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
