<?php
    /*
      Author :      Luke Brown
      License:      Written Permission required
      Created:      July 2014
      URL    :      https://github.com/LukeXF/lukesx-website
      Contact:      me@luke.sx
    */
 ?>
<?php include 'watermark.php' ?>
<html>
    <head>
        <title>Luke.sx</title>        
        <?php include 'header.php' ?>
    </head>
    <?php include 'nav.php' ?>
        
    <div class="piece piece__dark lesson-banner hide-from-mobile">
        <div class="container">
            <h2 class="lessons__quote lesson-banner-title wow fadeInDown">Search Page</h2>
            <h4 class="lesson-date wow fadeInUp">Results from accross the site</h4>
        </div>
    </div>


<!-- POPULAR LESSONS -->
<div class="piece piece_light">
    <div class="container wrap">
        <h2 class="lessons__heading">Search For: <?php echo $_GET['q']; ?></h2>

        <div class="row lesson-set text-center">
            <a href="//iuke.sx">
                    <h1>We're sorry, we haven't implemented that just yet.</h1>                    
            </a>
        </div>
    </div>
</div>

<div class="text-center">
</div>

<?php include 'footer.php' ?>
</body>
</html>