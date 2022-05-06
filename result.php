<?php      

    if (isset($_POST["user_submittion"]) && $_POST["user_nom_prenom"]!="" && $_POST["user_email"]!="" && $_POST["user_message"] != "") {
        # code...
        $user_nom_prenom= "  ".$_POST["user_nom_prenom"];
        $user_email= $_POST["user_email"];
        $user_message= $_POST["user_message"];
    }else{
      header("location:index.html");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Ma balise méta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Martin KPAKPO - Test</title>
  </head>
  <body>
    <div class="container espace_div">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4"><img src="asset/cake.jpg" class="img-fluid" width="100%" alt=""></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <div class="row print_div"><h5 class="h5_print"><?php echo $user_email;?></h5></div>
          <div class="row print_div"><h5>Bonjour</h5> <h5 class="h5_print"><?php echo "&nbsp;".$user_nom_prenom;?></h5></div>  
          <div class="row print_div"><h6>Nous vous remercions pour votre message</h6></div>  
          <div class="row print_div"><div class="col-sm-12 print_message"><h5 class="h5_print"><?php echo $user_message;?></h5></div></div>  
          <div class="row print_div"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At placeat illum rem vitae cupiditate beatae! Fuga, et asperiores impedit quisquam alias harum cupiditate quod quo in, illum odit aspernatur dolores!</p></div>        
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>