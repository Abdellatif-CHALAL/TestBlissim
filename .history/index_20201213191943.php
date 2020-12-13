<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1 id="t1" class='mb-5 mt-5'>Liste des produits</h1>
            <?php
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://fakestoreapi.com/products',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $arr = json_decode($response, true);
            ?>
            <div class='row mb-5'>
                <?php
                foreach ($arr as $a) {
                    $titre = "";
                    $image = "";
                    $price = 0;
                    $id = 0;
                    foreach ($a as $key => $value) {
                        if ($key === 'id') {
                            $id = $id;
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

                    echo "<div class='col-md-12'>
                            <article class='pin bg-white rounded-top shadow'>
                            <h2 class='h5 pl-1 pt-1 pb-1'><p class='pl-3 pt-3 text-secondary text-decoration-none'>$titre</p></h2>
                                <div class='mw-100 overflow-hidden'>
                                    <img width='100' height='100' src='$image'>
                                </div>
                                <h2 class='h5 pl-3 pt-3'><p class='pl-3 pt-3 text-secondary text-decoration-none'>$price €</p></h2>
                                
                                <div class='ml-3 mr-3 pb-3'>
                                <form method='post' action='ajouterCommentaire.php'>
                                <div class='form-group'>
                                  <label for='commentaire'>Commentaire:</label>
                                  <input type='textarea' class='form-control' value='commentairevalue' id='commentaire' placeholder='commentaire' name='commentaire'>
                                  <input type='hidden' class='form-control' id='idProduit' name='idProduit'>
                                  </div>
                                <button type='submit' class='btn btn-primary'>Submit</button>
                              </form>
                              </div>
                            </article>
                           <br/>
                           <br/>
                     </div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>