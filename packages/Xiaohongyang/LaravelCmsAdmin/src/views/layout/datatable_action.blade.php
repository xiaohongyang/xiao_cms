<?php foreach ($action as $act): ?>
<a href="<?=$act['route']?>"
   <?php foreach ($act['attribute'] as $attr_name => $attribute):?>
           <?=$attr_name.'="'.$attribute.'"'?>
   <?php endforeach;?>
><?=$act['text']?></a>
<?php endforeach;?>
