<!DOCTYPE>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $titre; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="icon" href="img/index.ico"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script>
        /*$('sidebar').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });*/
        </script>
  </head>
  <body>
  <div class="wrapper">
   
   <input type="checkbox" id="check">
    <!--header area start-->
    <header>
  
    <nav class="navbar navbar-dark justify-content-between bg-info ">
       <!-- <div class="container" >bg-success -->
        <!--<div class="row" width: 100%> >-->
        <div class="col">
        <div class="left_area">
        <h3><font color="black">ENSA DE TANGER</font></h3>
        </div>
        </div>
        <div class="col">
         <label for="check">
          <!--id="sidebar_btn" -->
            <i  class="fas fa-bars btns"></i>
         </label>
        </div>
        <div class=" col d-grid gap-2 d-md-flex justify-content-md-end">
        
             <a class="btn btn-danger" href="index.php" type="button">Deconnexion</a>
        </div>
       <!-- <div class="col btnd">
          <a href="index.php" class="btn btn-outline-dark my-2 my-sm-0 btnd1">Deconnexion</a>
        </div>-->  
       <!-- </div> >-->
     <!--</div>-->
</nav>

    </header>
    <!--header area end-->
    <!--sidebar start-->
  
    <div class="sidebar bg-info">
      <center>
        <img src="img/1.png" class="profile_image" alt=""> 
        <h5><font color="white"><b>Ecole Nationale des Sciences Appliquées de Tanger</b></h5></font>
      </center>
      <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span><font color="black"><b>Dashboard</b></font></span></a>
      <!-- <a href="exemplepdf.php"><i class="fas fa-poll-h"></i><span><font color="black"><b>Fichiers PDfs RAPPORT</b></font></span></a>-->
    </div>
    