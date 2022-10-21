<?php require 'layout/layout.php'; ?>
    
    <main>
        <div class="text-white-50 container">

          <div class="row justify-content-center">

            <div class="col-12 col-md-6 team4 mt-5 rounded-4 mb-5 shadow">
              <form method="#" action="./index.php" class="py-4 px-2 mx-2">

                        <div class="mb-3 form-style">
                          <label for="name" class="form-label">Nom</label>
                          <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" required>
                        </div>

                        <div class="mb-3">
                          <label for="email" class="form-label">Adresse mail</label>
                          <input type="email" class="form-control" id="email" placeholder="Votre mail">
                        </div>

                        <label for="sujet" class="form-label">Sujet</label>
                        <select class="form-select" aria-label="Default select example" id="sujet">
                        
                          <option selected>Sujet de votre demande</option>
                          <option value="soutien">Nous soutenir</option>
                          <option value="join">Nous rejoindre</option>
                          <option value="gift">Faire un don</option>
                          <option value="other">Autre</option>
                        </select>

                        <div class="my-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Votre demande</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        
                        <div class="text-center py-4 form-style">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
              </form>

              
            </div>  

          </div>
        </div>
       

    </main>
    
    

</body>
</html>