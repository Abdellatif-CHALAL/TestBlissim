<?php
foreach ($arr as $a) {
$titre = "";
$image = "";
$price = 0;
$id = "";
foreach ($a as $key => $value) {
if ($key === 'id') {
$id = 'produit_' . $value;
}
if ($key === 'title') {
$titre = $value;
}
if ($key === 'image') {
$image = $value;
}
if ($key === 'price') {
$price = $value;
}
}
if (empty($_SESSION[$id])) {
echo "<div class='col-md-12'>
    <article class='pin bg-white rounded-top shadow'>
        <h2 class='h5 pl-1 pt-1 pb-1'><p class='pl-3 pt-3 text-secondary text-decoration-none'>$titre</p></h2>
        <div class='mw-100 overflow-hidden'>
            <img width='100' height='100' src='$image'>
        </div>
        <h2 class='h5 pl-3 pt-3'><p class='pl-3 pt-3 text-secondary text-decoration-none'>$price €</p></h2>
        <div class='ml-3 mr-3 pb-3'>
            <form method='post' action='./Controller/ajouterCommentaire.php'>
                <div class='form-group'>
                    <label for='commentaire'>Commentaire:</label>
                    <input type='textarea' class='form-control' id='commentaire' placeholder='commentaire' name='commentaire'>
                    <input type='hidden' class='form-control' value=" . $id . " id='idProduit' name='idProduit'>
                </div>
                <button type='submit' class='btn btn-primary'>Submit</button>
            </form>
        </div>
    </article>
    <br/>
    <br/>
</div>";
} else {
echo "<div class='col-md-12'>
    <article class='pin bg-white rounded-top shadow'>
        <h2 class='h5 pl-1 pt-1 pb-1'><p class='pl-3 pt-3 text-secondary text-decoration-none'>$titre</p></h2>
        <div class='mw-100 overflow-hidden'>
            <img width='100' height='100' src='$image'>
        </div>
        <h2 class='h5 pl-3 pt-3'><p class='pl-3 pt-3 text-secondary text-decoration-none'>$price €</p></h2>
        <div class='ml-3 mr-3 pb-3 bg-white rounded-top shadow'>
            <h2 class='h5 pl-3 pt-3'>Commentaire</h2>
            <p class='pl-3 text-secondary text-decoration-none'>".$_SESSION[$id]->getCommentaire(). "</p>
            <div class='row'>
                <div class='col-md-6'>
                    <form method='post' action='./Controller/supprimerCommentaire.php'>
                        <input type='hidden' class='form-control' value=" . $id . " id='idProduit' name='idProduit'>
                        <br>
                        <br>
                        <button type='submit' class='btn btn-danger'>DELETE</button>
                    </form>
                </div>
                <div class='col-md-6'>
                    <form class='mr-3' method='post' action='./Controller/ajouterCommentaire.php'>
                        <input type='textarea' class='form-control' id='commentaire' placeholder='Entrer nouveau commentaire' name='commentaire'>
                        <br>
                        <input type='hidden' class='form-control' value=" . $id . " id='idProduit' name='idProduit'>
                        <button type='submit' class='btn btn-primary'>MODIFIER</button>
                    </form>
                </div>
            </div>
        </div>
    </article>
    <br/>
    <br/>
</div>";
}
}