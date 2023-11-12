<?php 
    	session_start();
    require_once("../../App/classes/connectionClass/StatisticsRun.php");
    $pro=new StatisticsRun();
    $pro->incX(11);

    require_once("../../App/classes/connectionClass/userRun.php");
    require_once("../../App/classes/assistClass/assist.class.php");
    $conect =false;
    if(isset($_SESSION['steS'])){
        $co=$_SESSION['steS'];
        $data=assist::incoder($co);
        $ur=new UserRun();
        $name=$ur->getUserbyEmail($data[1])[1];
        $conect =true;
    }else{
        if(isset($_COOKIE['steC'])){
        $co=$_COOKIE['steC'];
        $data=assist::incoder($co);
        $ur=new UserRun();
        $name=$ur->getUserbyEmail($data[1])[1];
        $conect =true;
    }        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Site</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
                
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        

    </head>
    
    <body>
        <header>   
                         
            <div class="container">
                <div class="row">
                    <nav class=" navbar navbar-expand-lg navbar-light bg-company-green col-lg-12" style="color: #fff;">
                        <div class="col-lg-2" >
                            <a href="../../index.php"><img class="img-fluid" src="../image/LOGO.png"  ></a>  
                        </div>
                        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="col-lg-10">
                        
                            <nav class="navbar navbar-expand-lg navbar-default bg-green" >
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto" style="border-bottom: 1px solid #fff;">
                                        <li class="nav-item" >
                                            <a class="nav-link" href="contact.php"><i class="fa fa-phone"></i> Contactez-nous</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="place.php"><i class="fa fa-map-marker"></i> Nos magasins</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="depliant.php"><i class="fa fa-book"></i> Nos dépliant</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="developpers.php"><i class="fa fa-cog"></i> Développeurs du site</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        
                            <nav class="navbar navbar-expand-lg navbar-light bg-company-green">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <form  style="width: 55%; " action="categorie.php" method="post">
                                        <input type="text" class="form-control" maxlength="20" name="search" placeholder="Tapez ici un produit ou une catégorie de produit">
                                        <button  type="submit" class="btn btn-primary btn-sm my-2 my-sm-0"><i class="fa fa-search"></i> Rechercher</button>
                                    </form>

                                    <ul class="navbar-nav mr-auto" style="margin-left:40px;">
                                        <li class="nav-item" >
                                            <?php 
                                                    if(!$conect)
                                                        echo '<a class="nav-link" href="connect.php"><i class="fa fa-user fa-big"></i><br> Se connecter</a>';
                                                    else
                                                        echo '<a class="nav-link" href="connected.php"><i class="fa fa-user fa-big"></i><br> '.$name.'</a>';
                                                    
                                                ?>
                                        </li>
                                        <li class="nav-item">
                                            <?php 
                                                    if(!$conect)
                                                        echo '<a class="nav-link" href="connect.php"><i class="fa fa-heart fa-big"></i><br> Ma liste</a>';
                                                    else
                                                        echo '<a class="nav-link" href="myliste.php"><i class="fa fa-heart fa-big"></i><br> Ma liste</a>';
                                                    
                                            ?>
                                        </li>
                                        <li class="nav-item">
                                            <?php 
                                                    if(!$conect)
                                                        echo '<a class="nav-link" href="connect.php"><i class="fa fa- fa-shopping-cart fa-big"></i><br> Commande</a>';
                                                    else
                                                        echo '<a class="nav-link" href="commande.php"><i class="fa fa- fa-shopping-cart fa-big"></i><br> Commande</a>';
                                                    
                                            ?>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        
                        </div>
                    </nav>
                </div>
            </div>


            
        </header>
        
        <section class="header_third" >
            <div class="container">
                <div class="row ">
                    <div class="list-group list-group-horizontal" style="width: 100%;">
                        <div class="col-lg-3 nopadding"  data-toggle="collapse" data-target="#NavThird">
                            <a id="nos_produits" class="list-group-item" href="#" style="background: #585858; color: #fff; border-bottom: 5px solid #404040;">
                                <i style="font-size:24px" class="fa">&#xf0c9;</i>  <span style="margin-left: 10px;">Nos produits</span> <i style="margin-left:36px;"class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-lg-3 nopadding"> <a class="list-group-item " href="../../index.php#service">Nos services</a></div>
                        <div class="col-lg-3 nopadding">  <a class="list-group-item " href="../Pages/contact.php">Contactez nous</a></div>
                        <div class="col-lg-3 nopadding activers">  <a class="list-group-item " href="../Pages/place.php">Nos magasin</a></div>
                    </div>
                    <div class="col-lg-3 collapse nopadding NavThird" id="NavThird">
                        <div class="list-group list-group-vertical">
                           <a class="list-group-item " href="categorie.php?cat=PAUTEAUX">PAUTEAUX</a>
                            <a class="list-group-item " href="categorie.php?cat=CABLE">CÂBLES</a>
                            <a class="list-group-item " href="categorie.php?cat=BASE">BASE</a>
                            <a class="list-group-item " href="categorie.php?cat=AUTRE">AUTRES</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 hearchy">
                        <a href="#"><i class="fa fa-home"></i></a> / <small > Nos magasins </small>
                    </div>
                    
                    <div class="col-lg-12 magasin_title">
                        <h2>Nos magasin</h2>
                    </div>
                    <div class="magasin_map ">
                        <div class="col-lg-12 " style="position: relative;">
                            <img src="../image/Map.jpg"  class="img-fluid" position-relative mx-auto>
                        </div>
                        <div class="card local_map col-lg-6 shadow " >
                            <h5>SÉLECTIONNEZ VOTRE UNE DANS LA LISTE:</h5>
                            <select name="" id="place" class="form-control" onchange="hide()">
                                <option value="">Choisir un ville :</option>
                                <option value="marakkech" >Marakkech</option>
                                <option value="beni" >Béni Mellal</option>
                            </select>
                        </div>
                        <div class="card description_map col-lg-6" id="marakkech">
                            <h4><a target="_blank" href="https://goo.gl/maps/Yi743Gba6uwahdDm7"> Marakkech</a></h4>
                            <p >21 BIS RUE 347 ROUTE OURTASS HAY EL MOUKAOUAMA BERKANE <br> 06 77 07 85 00</p>
                            <a target="_blank" href="https://goo.gl/maps/Yi743Gba6uwahdDm7"> <button type="button" class="btn btn-success">Voir le trajet </button></a>
                        </div>
                        <div class="card description_map col-lg-6" id="beni">
                            <h4><a target="_blank" href="https://goo.gl/maps/ZocqyTaYa1zKHocu6">Béni mellal</a></h4>
                            <p >21 BIS RUE 347 ROUTE OURTASS HAY EL MOUKAOUAMA BERKANE <br> 06 77 07 85 00</p>
                            <a target="_blank"href="https://goo.gl/maps/ZocqyTaYa1zKHocu6"><button type="button" class="btn btn-success">Voir le trajet </button></a>
                        </div>
                    </div>
                </div>
            </div>
             
        
        
        
        
        
     <!-- Footer Start -->
	<div class="footer">
		<div class="container">
			<div class="col-3">
				<a href="../Pages/place.php"><p><big>Address MARAKECH:</big><br>Adipisci cum reprehenderit asperiores perferendis amet.</p></a>
				<a href="../Pages/place.php"><p><big>Address BNI MELLAL:</big><br>32°17'49.1"N 6°25'31.0"W</p></a>
				
			</div>
			<div class="col-3">
				<ul>
                    <li><h5><u>Plus d'information</u></h5></li>
					<li><a href="../Pages/contact.php">Contactez-nous</a></li>
					<li><a href="../Pages/place.php">Nos magasins</a></li>
					<li><a href="#">Qui somme nous ?</a></li>
					<li><a href="#">Politique de confidentialité</a></li>
					<li><a href="../Pages/developpers.php">Développeurs du site</a></li>
					<li><a href="../Pages/depliant.php">Nos dépliant</a></li>
				</ul>
			</div>
			<div class="col-3">
				<ul>
					<li><h5><u>Notre site</u></h5></li>
					<li><a href="../Pages/inscrire.php">S'inscrire</a></li>
					<li><a href="../Pages/connect.php">Se connecter</a></li>
                    <?php 
                        if(!$conect){
                            echo '<li><a href="../Pages/connect.php">Mes informations</a></li>';
                        }
                    else {
                        echo '<li><a href="../Pages/connected.php">Mes informations</a></li>';
                    }?>
                    <?php 
                        if(!$conect){
                            echo '<li><a href="../Pages/connect.php">Ma liste</a></li>';
                        }
                    else {
                        echo '<li><a href="../Pages/myliste.php">Ma liste</a></li>';
                    }?>
					
					<?php 
                        if(!$conect){
                            echo '<li><a href="../Pages/connect.php">Mes commandes</a></li>';
                        }
                    else {
                        echo '<li><a href="../Pages/commande.php">Mes commandes</a></li>';
                    }?>
					
                        
                    
                    
					
				</ul>
			</div>
			<div class="col-3">
				<ul>
                    <li>
                        <img src="../image/LOGO.png" class="img-fluid">
                    </li>
					<li style="margin-top: 20px; margin-left:40px; ">
                        <a href="#"><i class="fab fa-instagram fa-3x" style="margin: 0 5px;"></i></a>
                        <a href="#"><i class="fab fa-facebook fa-3x " style="margin: 0 5px;"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-3x " style="margin: 0 5px;"></i></a>
                    </li>
					
					
				</ul>
			</div>            
		</div>
	</div>
	<!-- Footer End -->

	
	<div class="copyright">
		<div class="container">
			<h5>COPYRIGHT © 2020 TOUS LES DROITS SONT RESERVES </h5>
		</div>
	</div>
        
		<script src="../js/ijs.js"></script>
		<script src="../js/script.js"></script>
        <script src="../js/place.js"></script>
    </body>
</html>