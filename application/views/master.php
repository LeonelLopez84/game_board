<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rifa Distroller</title>

    <!-- Bootstrap Core CSS -->
   <?php
   		echo link_tag('assets/bower_components/bootstrap/dist/css/bootstrap.min.css');
		echo link_tag('assets/bower_components/font-awesome/css/font-awesome.min.css');
        echo link_tag('assets/css/rifa.css');
        
	?>
    <link href="//fonts.googleapis.com/css?family=Short+Stack" media="screen" rel="stylesheet" type="text/css">
</head>


<body>

    <div class="container-fluid">

		<?php echo $this->section('content') ?>
	</div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
               
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/rifa.js'); ?>"></script>
</body>

</html>


</body>
</html>