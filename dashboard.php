<?php $titre = "Dashboard"; ?>
<?php // require 'sidebar.php'; ?>

<!DOCTYPE>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $titre; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="icon" href="img/index.ico"/>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script>
        /*$('sidebar').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });*/
        </script>
  </head>
<body>


<div class="main_content">

<!--<div
  class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');" height="100%">
  <h1 class="mb-3 h2">TABLEAU DE BORD</h1>

</div>-->

<!--****************************************************************************************-->


<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <img src="img/1.png" class="profile_image" alt=""> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <!--<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span><font color="black"><b>Dashboard</b></font></span></a>
        </li>-->
        <!--<li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>-->
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>-->
        <!--<li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>-->
      </ul>
       <div class=" col d-grid gap-2 d-md-flex justify-content-md-end">
        <form action="" method="POST">
             <input type="submit" name="Deconnexion" class="btn btn-danger" type="button" value="Deconnexion"/>
        </form>
        </div>
     <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>


<!--****************************************************************************************-->


  <!--<div class="header container" >
     <img src="/assets/images/ensa.PNG" class="img-fluid" alt=""  max-width= "100%" height= "auto">
    <div class="row ">

      <div class="col justify-content-center">
        
        <h3 ><center>TABLEAU DE BORD</center></h3>
      </div>
    </div>
  </div>-->

  <div  margin="auto" width="95%"  class="d-flex justify-content-center container-fluid align-items-center p-5 text-center shadow-1-strong rounded mb-5 text-white"
  style="background-color: #ABC8E2" height="100%"> 
    <!--<div height="15em"><font color="white" size="5em"><center>Gestion de Scolarité </center></font></div>-->
<!--    <div class="d-flex p-2 bd-highlight justify-content-center"><h4><font color="white" size="5em">Gestion de Scolarité </font></h4></div>-->
    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == "cneinexistant")
        echo "<small><font color=white>CNE INEXISTANT DANS CETTE CLASSE, Redemandez à l'éleve sa classe!</font></small>";
    }

    ?>
    <div class="d-flex container " >
      <div class="row align-items-start">

        <div class="col">
          <div class="card text-dark bg-light mb-3" style="width: 18rem; height :14rem;">
            <div class="card-body">
              <h5 class="card-title">Consulter les résultats d'un Module de GINF2</h5>
              <br><br>
              <br><br>
            
                <a href="affichage.php" class="btn btn-info">Afficher</a>

            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-dark bg-light mb-3" style="width: 18rem; height :14rem;">
            <div class="card-body">
              
              <h5 class="card-title">Mettre à jour les données</h5>
              <br><br><p></p>
              <br><br>
              <a href="usecase.php" class="btn btn-success">Mise à jour</a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card text-dark bg-light mb-3" style="width: 18rem; height :14rem;">
            <div class="card-body">
              <h5 class="card-title">Procès verbal de la filière GINF2</h5>
              <form action="generateurpdf/procesverbal.php" method="GET"><br><br><br><br>
                <input type="submit" class="btn btn-info" name="sub" value="Afficher">
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-start">
        <div class="col">
          <div class="card text-dark bg-light mb-3" style="width: 18rem; height :14rem;">
            <div class="card-body">
              <h5 class="card-title">Relevés de notes des étudiants de GINF2</h5>
              <form action="generateurpdf/releve.php" method="GET">
                <label for="cne"><b><font color="teal">Entrer le CNE:</b></font></label>
                <br>
                <input type="number" id="cne" name="cne"><br><p></p><p></p>
                <input type="submit" class="btn btn-info" name="sub" value="Generer">
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card text-dark bg-light mb-3" style="width: 18rem; height :14rem;">
            <div class="card-body">
              <h5 class="card-title">Attestation de réussite des étudiants de GINF2</h5>
              <form action="generateurpdf/attestation.php" method="GET">
                <label for="cne"><b><font color="teal">Entrer le CNE:</font></b></label>
                <input type="number" id="cne" name="cne"><br><br>
                <input type="submit" class="btn btn-info" name="sub" value="Generer">
              </form>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card text-dark bg-light mb-3" style="width: 18rem; height :14rem;">
            <div class="card-body">
              <h5 class="card-title">Emploi du temps</h5>
              <form action="generateurpdf/emploidutemps.php" method="get">
                <label for="Class"><b><font color="teal">Choisissez une periode:</font></b></label>
                <select name="periode" id="periode">
                  <option value="avant">Avant CC</option>
                  <option value="apres">Apres CC</option>
                </select><br><br><br><p></p>
                <input type="submit" class="btn btn-info" name="sub" value="Generer">
              </form>
            </div>
          </div>
        </div>


      </div>


      <div class="row align-items-start">

        <div class="col">
          <div class="card text-dark bg-light mb-3" style="width: 18rem; height :14rem;">
            <div class="card-body">
              <h5 class="card-title">Cartes d'étudiant </h5>
              <form action="generateurpdf/carte.php" method="GET">
                <label for="class"><b><font color="teal">Choisissez une classe:</font></b></label>
                <select name="class" id="class">
                  <option value="AP1">AP1</option>
                  <option value="AP2">AP2</option>
                  <option value="GINF1">GINF1</option>
                  <option value="GINF2" selected>GINF2</option>
                  <option value="GINF3">GINF3</option>
                  <option value="GIL1">GIL1</option>
                  <option value="GIL2">GIL2</option>
                  <option value="GIL3">GIL3</option>
                  <option value="GSTR1">GSTR1</option>
                  <option value="GSTR2">GSTR2</option>
                  <option value="GSTR3">GSTR3</option>
                  <option value="GSEA1">GSEA1</option>
                  <option value="GSEA2">GSEA2</option>
                  <option value="GSEA3">GSEA3</option>
                  <option value="G3EI1">G3EI1</option>
                  <option value="G3EI2">G3EI2</option>
                  <option value="G3EI3">G3EI3</option>
                </select>

                <label for="cne"><b>Entrer le CNE:</b></label>
                <input type="number" id="cne" name="cne"><br><br>
                <input type="submit" class="btn btn-info" name="sub" value="Generer">
              </form>
            </div>
          </div>
        </div>



        <div class="col">
          <div class="card text-dark bg-light mb-3" style="width: 18rem; height :14rem;">
            <div class="card-body">
              <h5 class="card-title">Générer les fichiers XML des listes de groupes</h5>
              <br><br><br><p></p>
              <a href="generate_liste_groupe.php" class="btn btn-success">Génerer</a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card text-dark bg-light mb-3" style="width: 18rem; height :14rem;">
            <div class="card-body">
              <h5 class="card-title">Affichage PDF des listes de groupes </h5>
              <form action="generateurPdf/listegroupe.php" method="GET">
                <label for="class"><b><font color="teal">Choisissez une classe:</font></b></label>
                <select name="class"  id="class">
                  <option value="AP1">AP1</option>
                  <option value="AP2">AP2</option>
                  <option value="GINF1">GINF1</option>
                  <option value="GINF2" selected>GINF2</option>
                  <option value="GINF3">GINF3</option>
                  <option value="GIL1">GIL1</option>
                  <option value="GIL2">GIL2</option>
                  <option value="GIL3">GIL3</option>
                  <option value="GSTR1">GSTR1</option>
                  <option value="GSTR2">GSTR2</option>
                  <option value="GSTR3">GSTR3</option>
                  <option value="GSEA1">GSEA1</option>
                  <option value="GSEA2">GSEA2</option>
                  <option value="GSEA3">GSEA3</option>
                  <option value="G3EI1">G3EI1</option>
                  <option value="G3EI2">G3EI2</option>
                  <option value="G3EI3">G3EI3</option>
                </select><br><br><br><p></p>
                <input type="submit" class="btn btn-info" name="sub" value="Generer">
              </form>
            </div>
          </div>
        </div>

        

      </div>
    </div>
  </div>

</div>





</body>

</html>

<?php

if(isset($_POST['Deconnexion']))
{
?>
    <script>
      const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
      })

      swalWithBootstrapButtons.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, deconnect!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
      }).then((result) => {
      if (result.isConfirmed) 
      { 
         window.location.href = "index.php";
      }
       
      else if (
    /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
      ) {
      swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your sessionis safe :)',
      'success'
    )
  }
});
    </script>
  <?php
  }