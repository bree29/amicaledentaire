<?php
session_start();

	// page actuelle
	$currentpage = --CURRENTPAGE-- ;
	
  // Détermination des variables à modifier
	$champpwd = "--EVENTNAME--" ; // Nom de la variable permettant l'accès à la page (mise en mémoire de $_SESSION[champpwd] )
	$password = "--PASSWORD--" ; // mot de passe d'accès à la page
	$repertoiregallery = "--EVENTNAME--" ;
	$nameurl = "--EVENTNAME--" ;
	
	$pic = --FPIC-- ; // num première photo de la page
	$ttlpic = --NPICTURES-- ; // nombre de photos au total
	$picparpage = --NPICPERPAGE-- ; // nombre de photos par page - identique pour chaque page d'un même événement !!

   // automatic functions - ne pas modifier
	$ttlpage = ceil($ttlpic / $picparpage);


?>

<!doctype html><html><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Souvenirs : --EVENTTITLE-- | Amicale Dentaire de Clermont-Ferrand</title>

  <!-- --- -->  <!-- CSS -->		<?php include("css.php"); ?>  <!-- --- --><!--[if lt IE 9]>	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--></head><body class="cp-theme-style-1"><!--WRAPPER START--><div id="wrapper">   <!-- ------ -->  <!-- HEADER -->		<?php include("header.php"); ?>  <!-- ------ -->



  <!--BANNER START-->  <div id="inner-banner">    <div class="container">      <h1>--EVENTTITLE--</h1>
      <ol class="breadcrumb">        <li>--JJ--/--MM--/--AAAA--</li>      </ol>    </div>  </div>  <!--BANNER END-->    <!--MAIN START-->  <div id="main">
  

            
           		 <div class="cp-pagination cp-pagination-space"> <nav> <ul class="pagination">
<!-- INDEX -->      			   <li><a href="index.php">Accueil Photos</a></li>
<!-- Déconnection -->			<li><a href="logout.php">Se Déconnecter</a></li>
           		 </ul> </nav> </div>
            
					<div class="cp-pagination cp-pagination-space"> <nav> <ul class="pagination">
<!-- Page -->                  <li class="active"><a href="index.php"><?php echo "Page " . $currentpage ; ?></a></li>
           		 </ul> </nav> </div>


  <?php
//  echo ($currentpage + 1);
?>  
  
<?php

// La session est OK -- OU -- Le formulaire est OK

if (($_SESSION[$champpwd] == $password) OR ($_POST['password'] == $password) OR ($_GET['password'] == $password))
{
	$_SESSION[$champpwd] = $password;
	?>    
<!--GALLERY SECTION START-->
    <section class="cp-gallery padding-tb-60 cp-masonary">      <div class="container">        <ul class="gallery" id="gallery-grid-1-masonrywrap">
<?php 	$npic = 1; ?><?php

	while (($npic <= $picparpage) AND ($pic <= $ttlpic)) {
		$imagename = str_pad($pic, 3, "0", STR_PAD_LEFT) . ".jpg" ; ?>
				 <li class="loop-entry">                <div class="cp-box">                  <div class="frame"> <img src="../images/gallery/<?php echo $repertoiregallery . "/" . $imagename ; ?>" alt="img">                    <div class="caption"> <a href="../images/gallery/<?php echo $repertoiregallery . "/" . $imagename ; ?>" data-rel="prettyPhoto[]" class="zoom"><i class="fa fa-search-plus"></i></a> </div>                  </div>     <center><a href="../images/gallery/<?php echo $repertoiregallery . "/" . "HD-" . $imagename ; ?>">[Télécharger]</a>       </div>              </li>
				 				     	
<?php 		$pic = $pic + 1 ;
				$npic = $npic + 1 ;
	}
	 ?>
        </ul>      </div>    </section>    <!--GALLERY SECTION END-->
    
    
            <!--PAGINATION START-->
            
            <div class="cp-pagination cp-pagination-space">
              <nav>
                <ul class="pagination">
                
<?php  // PREVIOUS
			if ($currentpage > 1) { echo "<li> <a href=\"" . $nameurl . "p" . ($currentpage - 1) . "\" aria-label=\"Previous\"> <i class=\"fa fa-angle-left\"></i> </a> </li>" ; }	else { } ?>


<?php		// Initialisation de la pagination
			$pagination = 1 ;

// PAGE 1 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 1 END			

// PAGE 2 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 2 END			

// PAGE 3 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 3 END			

// PAGE 4 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 4 END			

// PAGE 5 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 5 END			

// PAGE 6 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 6 END			

// PAGE 7 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 7 END			

// PAGE 8 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 8 END			

// PAGE 9 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 9 END			

// PAGE 10 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 10 END

// PAGE 11 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 11 END

// PAGE 12 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 12 END

// PAGE 13 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 13 END

// PAGE 14 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 14 END

// PAGE 15 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 15 END

// PAGE 16 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 16 END

// PAGE 17 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 17 END

// PAGE 18 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 18 END

// PAGE 19 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 19 END

// PAGE 20 START
				if ($ttlpage >= $pagination)
				{
					if ($currentpage == $pagination) { echo "<li class=\"active\">" ; } else { echo "<li>" ; } 
					if ($currentpage != $pagination) { echo "<a href=\"" . $nameurl . "p" . $pagination . "\">" ; } else {echo "<a>" ; }
					echo $pagination . "</a></li>" ;
					$pagination = $pagination + 1 ; // Pagination +1
				}										
				else { }
//PAGE 20 END																				

// FIN PAGINATION
// Réinitialisation
$pagination = 1 ; ?>															


<?php  // NEXT
			if ($currentpage < $ttlpage) { echo "<li> <a href=\"" . $nameurl . "p" . ($currentpage + 1) . "\" aria-label=\"Next\"> <i class=\"fa fa-angle-right\"></i> </a> </li>" ; } else { } ?>

																								
                </ul>
              </nav>
            </div>
            
            <!--PAGINATION END-->


            
    <?php 
}


else
// Le mot de passe a été envoyé (ou pas) et il est pas bon
{
    // Afficher le formulaire de saisie du mot de passe
             
?>
  
<section class="cp-contact-style-1 padding-tb-60">
      <div class="container">
        <div class="row">
          <section class="col-md-12 error-page">            <div class="holder">
 <?php   if (!isset($_POST["password"])) { ?> <h3>Page protégée par mot de passe</h3> <?php  }
			else { ?> <h3>Le mot de passe est incorrect. Réessayez...</h3> <?php } ?>
    <form action="" method="post">
                    <div class="row">
                  <div class="col-md-2">
                    <input type="password" name="password" placeholder="Mot de passe ?" required pattern="[a-zA-Z0-9-\_.]+">
                  </div>
                  <div class="col-md-3">
                    <input type="submit" value="Envoyer">
                  </div>

                </div>
    </form>
    
    

            </div>          </section>        </section>      </section>    </section>


    
     
  <?php } ?>  </div>  <!--MAIN END--> 


     <!--FOOTER START-->  <?php include("footer.php"); ?>  <!--FOOTER END--> </div><!--WRAPPER END--> 
  <!-- ------ -->  <!-- JQUERY -->		<?php include("jquery.php"); ?>  <!-- ------ -->
  </body></html>
