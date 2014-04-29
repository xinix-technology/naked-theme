<?php
use \Bono\Helper\URL;

$crit = array();
if ($criteria && $entry) {
    foreach ($criteria as $key => $v) {
        $crit[$key] = @$entry[$v];
    }
}
$entries = Norm::factory($self['foreign'])->find($crit);

$foreign = Norm::factory($self['foreign']);

$controllerConfig = App::getInstance()->config('bono.controllers');
$lowerForeign = '/'.strtolower($self['foreign']);

if (!array_key_exists($lowerForeign, $controllerConfig['mapping'])) {
    foreach($controllerConfig['mapping'] as $k => $v) {
        if (strpos($k, $lowerForeign) !== FALSE) {
            $lowerForeign = $k;
            break;
        }
    }
}
?>

<!-- <input type="text" is="x-select" name="<?php echo $self['name'] ?>" value="<?php echo @$value ?>"
    placeholder="<?php echo $self['label'] ?>"
    url="<?php echo URL::site($lowerForeign) ?>.json"
    foreignkey="<?php echo $self['foreignKey'] ?>"
    foreignlabel="<?php echo $self['foreignLabel'] ?>"
    > -->  <!-- list="list-<?php echo $self['name'] ?>" -->
<!-- <datalist id="list-<?php echo $self['name'] ?>">
    <?php /* foreach ($entries as $entry): ?>
        <?php
        if (is_callable($self['foreignLabel'])):
            $getLabel = $self['foreignLabel'];
            $label = $getLabel($entry);
        else:
            $label = $entry->get($self['foreignLabel']);
        endif
        ?>
        <option value="<?php echo $entry[$self['foreignKey']] ?>" <?php echo ($entry[$self['foreignKey']] === $value ? 'selected' : '') ?>><?php echo $label ?></option>
    <?php endforeach */ ?>
</datalist> -->
<select class="role-select" name="<?php echo $self['name'] ?>" id="">
    <?php  foreach ($entries as $entry): ?>
        <?php
        if (is_callable($self['foreignLabel'])):
            $getLabel = $self['foreignLabel'];
            $label = $getLabel($entry);
        else:
            $label = $entry->get($self['foreignLabel']);
        endif
        ?>
        <option value="<?php echo $entry[$self['foreignKey']] ?>" <?php echo ($entry[$self['foreignKey']] === $value ? 'selected' : '') ?>><?php echo $label ?></option>
    <?php endforeach ?>
</select>

<script type="text/javascript">
    // FIXME create custom event using plain javascript only!
    // (function() {
    //     "use strict";

    //     var $obj = $('[name=<?php echo $self['name'] ?>]');
    //     var criterias = JSON.parse('<?php echo json_encode($criteria) ?>');
    //     var baseUrl = "<?php echo URL::site('/'.$foreign->name). '.json' ?>";
    //     var foreignKey = "<?php echo $self['foreignKey'] ?>";
    //     var foreignLabel = "<?php echo $self['foreignLabel'] ?>";

    //     $(function() {
    //         $obj.trigger('change');
    //     });

    //     if (criteria) {
    //         for(var k in criteria) {
    //             var v = criteria[k];

    //             $('[name=' + v + ']').on('change', function() {
    //                 var crits = {},
    //                     $this = $(this);

    //                 for(var i in criteria) {
    //                     crits[i] = $('[name=' + criteria[i] + ']').val();
    //                 }

    //                 $.get(baseUrl + '?' + $.param(crits)).done(function(data) {
    //                     $obj.html('<option value="">---</option>');
    //                     if (data && data.entries) {
    //                         for(var i in data.entries) {
    //                             var entry = data.entries[i],
    //                                 val = entry[foreignKey];

    //                             $obj.append('<option value="' + val + '" ' + ($obj.attr('data-value') == val ? 'selected' : '') + '>' + entry[foreignLabel] + '</option>');
    //                         }
    //                     }
    //                 });
    //             });
    //         }
    //     }

    // })();
</script>
