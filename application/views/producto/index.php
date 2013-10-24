<button class="btn btn-primary">
    <span class="glyphicon glyphicon-plus"></span>
    add new</button>

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
            <td><button class="btn btn-sm">
                    <span class="glyphicon glyphicon-trash"></span>
                    delete</button></td> 

        </tr>
        <?php
    endforeach;
    ?>
</table>

