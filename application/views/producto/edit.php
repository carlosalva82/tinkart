<?php
echo form_open(null, array('class' => 'form-horizontal', 'role' => 'form','style'=>'width:500px; margin:auto'));
echo validation_errors();
?>
<h2><?php echo translate('Edit Product')?></h2>
<div class="form-group">
    <label class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
        <input name="title" value="<?php echo $product->getTitle() ?>" class="form-control">
    </div>


</div>  
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <button type="submit" class="btn btn-primary">save</button>
    </div>
</div>

<?php
echo form_close();
?>