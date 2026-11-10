
    <form methode ="POST" action = form.php>
        <input type="text" name="prenom" placeholder="prenom" required><br>
        <input type="text" name="nom" paceholder="nom" required ><br>
        <input type="email" name="email" placeholder="prenom"><br>
        <select value="Ville">

            <option value="">--choisir--</option>
            <option value="Dakar">Dakar</option>
            <option value="Thies">Thies</option>
            <option value="Louga">Louga</option>
        </select>
            <br>
        Sexe:
        <input type="radio"  name="sexe" value="Maculin" >Masculin
        <input type="radio" name="sexe" value="Feminin" >Feminin
        <br>
        Centre d interet:
        <input type="chekbook" name="interet[]" value="Sport">Sport
        <input type="chekbook" name="interet[]" value="voyage">Voyage
        <input type="chekbook" name="interet[]" value="Lecture">Lecture
        <input type="chekbook" name="interet[]" value="Informatique">Iformatique
        <input type="chekbook" name="interet[]" value="Restauration">Restauration
        <br>
        <button type="submit" >Envoyer</button>
    </form> 


        


