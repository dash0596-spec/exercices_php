
    <form method="post">
            Choisis un chiffre :
            <select name="chiffre">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input type="submit" value="Valider">
        </form>

        <?php
            if (isset($_POST['chiffre'])):
                $chiffre = $_POST['chiffre'];

                switch ($chiffre):
                    case 1:
                        echo "Vous avez choisi 1 : Accueil";
                        break;
                    case 2:
                        echo "Vous avez choisi 2 : Produits";
                        break;
                    case 3:
                        echo "Vous avez choisi 3 : Services";
                        break;
                    case 4:
                        echo "Vous avez choisi 4 : À propos";
                        break;
                    case 5:
                        echo "Vous avez choisi 5 : Contact";
                        break;
                    default:
                        echo "Choix invalide";
                endswitch;
            endif;
        ?>