<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Formulaire </title>
    </head>
   
    <body>

      <form method="get" action="../../controller/routeur.php">

        <fieldset>

          <legend>Formulaire :</legend>

          <p>
            <label for="immat_id">Immatriculation</label> :
            <input type="text" placeholder="256AB34" name="immat" id="immat_id" required/>
        </p>

          <p>
            <label for="couleur_id">Couleur</label> :
            <input type="text" placeholder="Rose" name="couleur" id="couleur_id" required/>
          </p>

          <p>
            <label for="marque_id">Marque</label> :
            <input type="text" placeholder="Renault" name="marque" id="marque_id" required/>
          </p>

          <p>
            <input type="submit" value="Envoyer" />
            <input type='hidden' name='action' value='created'>
          </p>

        </fieldset> 
      </form>


    </body>
</html> 
