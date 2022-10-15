<?php  require 'layout/navbar.php'; ?>
    

    <main>
      <!-- Menu pour trouver les membres -->
      <div class="container-fluid text-white-50 pt-4">
        <h1 class=" animate__animated animate__bounceInLeft">Nos différents membres :</h1>
        <ol id="menu">
          <li><a class="member_move" href="#frodon">Fraudons et Sam</a></li>
          <li><a class="member_move" href="#aragorn">Aragorn, Légolas, Gimli</a></li>
          <li><a class="member_move" href="#gandalf">Glandalf</a></li>
          <li><a class="member_move" href="#boromir">Bor-au-mir</a></li>
          <li><a class="member_move" href="">Mer-riz et Pépin</a></li>
      </ol>  
      </div>
        <HR class="mx-auto">

        <!-- Team 1-->
        <div class="text-dark container-fluid mt-4 team1 rounded-3 animate__animated animate__backInRight" id="frodon">

          <div class="row ">
              
              <img src="./Photos/frodon sam.jpg" alt="Photo de Frodon et Sam" class="col-12 col-sm-12 col-md-7 p-4 rounded-5">
          
              <div class="col-12 col-sm-12 col-md-5 p-4 ">
                  <h1 class="text-center pb-4">Fraudons et Sam</h1>
                  <h3 class="pb-2">Nos 2 compagnons issus de la gauche écologiste. </h3>
                  <p>Attachants, faciles à vivre. Sam (à gauche) est très bon cuisinier, Fraudons (à droite) est un opportuniste ayant passé sa vie en viager avec son oncle. <br>
                  Par le biais de cette association, ils auront appris à se connaitre et s'apprécier sous un jour nouveau. </p>
              </div>
          </div>
        </div>
        <HR class="mx-auto">

        <!-- Team 2-->

          <div class="text-white-50 container-fluid team2 rounded-3 animate__animated animate__backInLeft" id="aragorn">

            <div class="row  inverse-order">
                <div class="col-12 col-sm-12 col-md-5 p-4">
                  <h1 class="text-center pb-4">Aragorn Legolas Gimli</h1>
                  <h3 class="pb-2">Nos 3 itinérants. </h3>
                  <p> Ils sont les dignes représentants de leur communauté :  
                    <ul>
                      <li>Aragorn (à gauche) est un descendant <a target="_blank" href="https://gw.geneanet.org/tolkien1?n=of+the+dunedains&oc=2&p=aragorn&type=tree">d'une fière lignée</a>, en communiste qu'il est, il refusa pendant de longues années cet héritage
                  préférant vivre chez son beau-père Elrond.</li> 
                      <li>Legolas (au centre), éternel tanguy, parcours le monde depuis qu'il a été chassé de la forêt de son père. </li> 
                      <li>Enfin, Gimli, à droite. Besogneux, s'adonne à la nouvelle mode du lancer de hache dont il 
                        est vice-champion du monde <a href="https://lescognees.com/technique-lancer-haches/" target="_blank">(en prise marteau)</a> .
                      </li>
                    </ul>  
                  </p>
                  
                </div>
  
                <img src="./Photos/aragorn-legolas-gimli.jpg" alt="Photo d'aragorn-legolas-gimli" class="col-12 col-sm-12 col-md-7 p-4 rounded-5 photo-start">
  
              
            </div>
          </div>
        <HR class="mx-auto">

          <!-- Team 3-->
          <div class="text-white-50 container-fluid team3 rounded-3 animate__animated animate__backInRight" id="gandalf">

            <div class="row">

              <img src="./Photos/gandalf.jpg" alt="Photo de Gandalf" class="col-12 col-sm-12 col-md-7 p-4 rounded-5">

              <div class="col-12 col-sm-12 col-md-5 p-4">
                <h1 class="text-center pb-4">Glandalf</h1>
                <h3 class="pb-2">L'hermite </h3>
                <p>Un sans adresse-fixe qui a roulé sa bosse, fumeur de pipe, spécialiste des feux d'artifice.<br> 
                  Compte se reconvertir en concepteur de pont suite à une mauvaise expérience. </p>
              </div>
            </div>
          </div>

        <HR class="mx-auto">

          <!-- Team 4-->

          <div class="text-white-50 container-fluid team4 rounded-3 animate__animated animate__backInLeft" id="boromir">

            <div class="row inverse-order">
              <div class="col-12 col-sm-12 col-md-5 p-4">
                <h1 class="text-center pb-4">Bor-au-mir</h1>
                <h3 class="pb-2">L'homme de droite</h3>
                <p>Représentant de la droite dure dans notre communauté.<br>
                Il cherche le pouvoir, à rétablir l'ordre régalien et chasser les hordes étrangères de ses terres. </p>
              </div>
            
                
              <img src="./Photos/boromir.jpg" alt="Photo de Boromir" class="col-12 col-sm-12 col-md-7 p-4 rounded-5 photo-start">
  
              
            </div> 
          </div>


          <!-- Team 5-->
          <div class="text-white-50 container">

            <div class="row">

              <div class="col-12 col-sm-5 col-md-4 bg-primary">
                    photo

              </div>

              <div class="col-12 col-sm-7 col-md-8 bg-success">
                    texte
              </div>
            </div>
          </div>

       

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>