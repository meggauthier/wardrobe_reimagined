

<!DOCTYPE html>

<html lang="en">
    
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

      <title>Wardrobe Reimagined</title>
<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
  
   <link href="<?php bloginfo('template_directory');?>/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory');?>/full-slider.css" rel="stylesheet">


<?php wp_head();?>
</head>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand.logo" href="index.html">    <img src="<?php bloginfo('template_directory');?>/Logos/final_logo.jpg"  height="120" width="160" />  </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <?php wp_list_pages( '&title_li='); ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>