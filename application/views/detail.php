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
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>
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
        <p class="lead"><?php echo $imagename ?></p>
    </header>

        <a href="">
            <img src= "<?php echo 'images/'.$imagename ?>" />
        </a>

</div>


</body>
</html>