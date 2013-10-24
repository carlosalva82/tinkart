<a href="<?php echo base_url('/producto/add') ?>" class="btn btn-primary">
    <span class="glyphicon glyphicon-plus"></span>
    add new</a>

<table class="table table-striped">
    <tr>
        <td>title</td>
        <td>Actions</td>

    </tr>
    <?php
    foreach ($products as $product):
        ?>
        <tr>
            <td><?php echo $product->getTitle(); ?></td> 
            <td><a href="<?php echo base_url('/producto/delete/id/' . $product->getId()) ?>" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-trash"></span>
                    delete</a> 
                <a class="btn btn-default btn-sm" href="<?php echo base_url('/producto/edit/id/' . $product->getId()) ?>">

                    <span class="glyphicon glyphicon-edit"></span>
                    edit
                </a>
            </td> 

        </tr>
        <?php
    endforeach;
    ?>
</table>

