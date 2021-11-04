<?php echo file_get_contents("subpages/head.php"); ?>

<body>

<?php echo file_get_contents("subpages/banniere.php"); ?>    

<div class="" id="fondModeNuit">
        <div class="cadreCentral" id="cadreCentral">
    
<?php echo file_get_contents("subpages/barreReseauxSociaux.php"); ?> 
    
            <div class="conteneurArticle" id="conteneur">
    
                <!-- QUELQUE PART ICI UN LIEN-ANCHOR VERS LA RECETTE -->
    
                <div class="topLineArticles">
                    <div class="titreArticle">Contact</div>
                    <div class="topLineRight">
                        <div class="modeNuit" id="darkMode"><img src="img/eye-solid.svg" alt=""></div>
                        <!-- <a href="#ingredients">
                            <div class="anchorLink"><img src="img/level-down-alt-solid.svg" alt=""></div>
                        </a> -->
                    </div>
                </div>
      
    
    
                <div class="chapeauArticle">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi laboriosam veritatis dolores pariatur minus temporibus facere assumenda quia placeat asperiores maiores, mollitia porro nihil ipsum nemo itaque officiis repellat dolorum!
                    Minus est reiciendis rem nostrum facere fuga soluta blanditiis totam. Consectetur animi id voluptate itaque delectus, iste rem. Ratione nesciunt libero dolores obcaecati harum consequuntur rem asperiores porro hic adipisci.</p>
                    </div>

                <div class="formulaire">
                    <ul>
                        <div class="styleInput">
                            <li><label for="">Nom: </label>
                            <br>
                            <input type="text" placeholder="Martin"></li>
                        </div>

                        <div class="styleInput">
                            <li><label for="">Prénom: </label>
                            <br>
                            <input type="text" placeholder="Jean"></li>
                        </div>
                        
                        <div class="styleInput">
                            <li><label for="">Adresse mail: </label>
                            <br>
                            <input type="email" placeholder="exemple@email.com"></li>
                        </div>

                        <div class="styleInput">
                            <li><label for="">Votre message: </label>
                            <br>
                            <textarea name="" id="" cols="27" rows="10"></textarea>
                            <!-- <input type="text"></li> -->
                        </div>

                        <div class="styleInput">
                            <li><label for="">Pour quelle raison me contactez-vous?</label>
                            <br>
                            <select name="raisonContact" id="">
                                <option value="professionnelle">Professionnelle</option>
                                <option value="participation">Participer au site</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>

                        <div class="styleInput">
                            <li><label for="">Comment m'avez-vous connu?</label>
                            <br>
                            <div class="inputRadio">
                                <label for="">Bouche à oreille</label><input type="radio" name="mode">
                                <label for="">Un petit creux</label><input type="radio" name="mode">
                            </div>
                            </li>    
                        </div>

                        <div class="styleInput">
                            <li><input type="submit" class="bouttonEnvoyer" text="Envoyer"></li>
                        </div>
                    </ul>
                </div>
  
    
            </div>
    
<?php echo file_get_contents("subpages/mobileDroit.php"); ?>
    
<?php echo file_get_contents("subpages/carresRecettesSmall.php"); ?>
    
        </div>
    
</div>  

<?php echo file_get_contents("subpages/footer.php"); ?>