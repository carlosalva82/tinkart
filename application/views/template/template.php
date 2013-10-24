<!doctype html>
<html>
    <head>
        <title><?php echo $this->template->title->default("Default title"); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $this->template->description; ?>">
        <meta name="author" content="">
        <?php echo $this->template->meta; ?>
        <link type="text/css" href="<?php echo base_url('include/bootstrap3.0/css/bootstrap.min.css') ?>" rel="stylesheet" >
        <link type="text/css" href="<?php echo base_url('include/css/default.css'); ?>" rel="stylesheet" >
        <?php echo $this->template->stylesheet; ?>
    </head>
    <body>

        <?php
        // This is an example to show that you can load stuff from inside the template file
        // echo $this->template->widget("navigation", array('title' => 'Project name'));
        ?>

        <div class="container" style="margin-top: 60px;">
            <?php
            $flashMessage = $this->session->flashdata('message');
            if (!empty($flashMessage)):
                ?>
                <div class="alert alert-<?php echo $flashMessage[0] ?>">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $flashMessage[1] ?>
                </div>
                <?php
            endif;
            ?>
            <?php
            // This is the main content partial
            echo $this->template->content;
            ?>

            <hr>

            <footer>
                <p>
                    <?php
                    // Show the footer partial, and prepend copyright message
                    echo $this->template->footer->prepend("&copy; Special Company " . date('Y'));
                    ?>
                </p>
            </footer>

        </div>
        <script type="text/javascript" src="<?php echo base_url('include/js/jquery-1.10.2.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('include/bootstrap3.0/js/bootstrap.min.js'); ?>"></script>
        <?php echo $this->template->javascript; ?>

    </body>
</html>