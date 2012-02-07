<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url(); ?>" />
    <meta name="viewport" content="user-scalable=no, width=device-width" />
	<title>CI Gallery</title>
	<meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/docs.css" rel="stylesheet">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href=#>soapbox.io</a>
        </div>
    </div>
</div>
<div class="container">

    <header class="jumbotron subhead">
        <h1>CI Gallery</h1>
        <p class="lead">CodeIgniter Image Gallery is styled by Bootstrap and allows you to upload your images, see thumbmails, and view them full size.</p>
    </header>
	<ul class="thumbnails" >
		<?php if (isset($images) && count($images)):
			foreach($images as $image):	?>

			<li class="thumbnail">
				<a href="<?php echo $image['url']; ?>">
					<img src="<?php echo $image['thumb_url']; ?>" />
				</a>				
			</li>
		<?php endforeach; else: ?>
        <div class="row">
			<div class="span4 offset1">Please Upload an Image</div>
        </div>
		<?php endif; ?>
	</ul>
	<div class="well">
		<?php
		echo form_open_multipart('gallery');
		echo form_upload('userfile');
		echo form_submit('upload', 'Upload');
		echo form_close();
		?>		
	</div>
</div><!-- /container -->
</body>
</html>