<?php
echo form_open();

?>
<input name="title" value="<?php echo $product->getTitle()?>">
<?php
echo form_close();
?>