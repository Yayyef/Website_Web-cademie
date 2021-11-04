<?php echo file_get_contents("subpages/head.php"); ?> 

<body>
<!-- <div class="disclaimerWrapper">
  <div class="disclaimer">
        <p>NOTE WEB@CADEMIE: Je désire faire de ce site un élément important de mon portfolio. En conséquence, toutes les fonctionnalités et éléments d'habillage (la banniere, l'arrière plan) de ce site ne sont pas encore implémentées. Le mobile droit ne fonctionne pas encore comme il le devrait. Tous les liens recettes mènent vers la même page. Pour l'heure, le site compte 6 pages différentes: <a href="">index.php</a>, <a href="recetteTemplate.php">recetteTemplate.php</a>, <a href="article.php">article.php</a>, <a href="ingredients.php">ingredients.php</a>, <a href="contact.php">contact.php</a>, et <a href="apropos.php">apropos.php</a>. Les versions ultérieures du site seront disponibles sur mon gitHub: <a href="https://github.com/Yayyef">https://github.com/Yayyef</a>. Plus d'informations dans la page à propos et le fichier lisez-moi.</p>
  </div>
</div> -->

<?php echo file_get_contents("subpages/banniere.php");?>

  <div class="cadreCentral" id="cadreCentral">
        
<?php echo file_get_contents("subpages/barreReseauxSociaux.php"); ?>
        
<?php echo file_get_contents("subpages/carousel.php"); ?>

<?php echo file_get_contents("subpages/mobileDroit.php"); ?>

        <!-- CARRES POUR LES RECETTES -->
        <div class="conteneurCarres">

            <a href="recetteTemplate.php">
              <div class="carreRecettes">
                <img src="img/gyozas_vignette.png" alt="Image please">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolores harum unde vitae delectus vel?</h2>
              </div>
            </a>

            <a href="recetteTemplate.php">
              <div class="carreRecettes" href="recette.php">
                <img src="img/ramen_vignette.png" alt="Image please">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolores harum unde vitae delectus vel?</h2>
              </div>
            </a>

            <a href="recetteTemplate.php">
              <div class="carreRecettes">
                <img src="img/mapotofu_vignette.png" alt="Image please">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolores harum unde vitae delectus vel?</h2>
              </div>
            </a>

            <a href="recetteTemplate.php">
              <div class="carreRecettes">
                <img src="img/boeufpochesichuan_vignette.png" alt="Image please">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolores harum unde vitae delectus vel?</h2>
              </div>
            </a>

            <a href="recetteTemplate.php">
              <div class="carreRecettes">
                <img src="img/pouletfrit_vignette.png" alt="Image please">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolores harum unde vitae delectus vel?</h2>
              </div>
            </a>

            <a href="recetteTemplate.php">
              <div class="carreRecettes">
                <img src="img/bibimbap_vignette.png" alt="Image please">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolores harum unde vitae delectus vel?</h2>
              </div>
            </a>

            <a href="recetteTemplate.php">
              <div class="carreRecettes">
                <img src="img/tofubraise_vignette.png" alt="Image please">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolores harum unde vitae delectus vel?</h2>
              </div>
            </a>

        </div>

    </div>
    
<?php echo file_get_contents("subpages/footer.php"); ?>