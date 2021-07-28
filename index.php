
 
<?php

$page=isset($_REQUEST["page"]) ? $_REQUEST["page"] : '';
$page=$page==""?"home":$page;
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="news.css">
  <title>News</title>

  
</head>

<body>



  <div class="container-fluid">
 

    <nav class="sticky-top head-content">
      <div class="row   ">
        <div class=" col-md-6 col-sm-6 col-6 brand-name ">

          <h3>
            <a href="index.php"> Magazine <sup> TM</sup> </a>
          </h3>


        </div>

        <div class=" col-md-6 col-sm-6 col-6 social-icon">
          <div class="menu-icon">

            <a href="https://www.facebook.com/sapan.yadav.520" target="_blank"> <i
                class="fa fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/sapankr800/" target="_blank"> <i class="fa fa-instagram"></i> </a>
            <a href="https://www.linkedin.com/in/sapan-kumar-12b9ab175" target="_blank"> <i
                class="fa fa-linkedin-square"></i> </a>

          </div>
        </div>
      </div>

    </nav>
    <br>

    <div class="row">
      <div class=" col-md-12 category">
        <a href="index.php" <?php if($page=="home"){ echo ' class="change"'; } ?> > Home </a>
        <a href="index.php?page=business" <?php if($page=="business"){ echo ' class="change"'; } ?> >Business</a>
        <a href="index.php?page=sports" <?php if($page=="sports"){ echo ' class="change"'; } ?> > Sports</a>
        <a href="index.php?page=tech" <?php if($page=="tech"){ echo ' class="change"'; } ?> > Tech</a>
        <a href="index.php?page=entertainment" <?php if($page=="entertainment"){ echo ' class="change"'; } ?> >Entertainment</a>

      </div>
    </div>
    <hr>
  
  
    	 <?php include "data/".$page.".php";?>

  </div>
  

  
  
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Magazine <sup> TM</sup> <br>
        <p class="head"  >Made with <span class=" heart fa fa-heart ">
        </span> & lots of ☕ by sapan kr.</p>
      
      </small>
    </div>
  </footer>
  

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>




</body>

</html>
