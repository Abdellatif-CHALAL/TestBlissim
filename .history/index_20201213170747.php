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
            <h1 id="t1">Liste des produits</h1>
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
            <div class="row mb-5">
                <?php
                foreach ($arr as $a) {
                ?>
                    <div class="col-md-4">
                        <article class="pin bg-white rounded-top shadow">
                            <div class="mw-100 overflow-hidden">
                                <?php
                                foreach ($a as $key => $value) {
                                    if ($key === 'title') {
                                        echo '<h5 class="mt-4 text-center text-muted">Title : ' . $value . '</5>';
                                    }
                                    if ($key === 'image') {
                                        echo "<img src='$value' class='w-100'>";
                                    }
                                ?>
                            </div>
                            <h2 class=" h5 pl-3 pt-3"><a class="pl-3 pt-3 text-secondary text-decoration-none" href="{{ path('app_pins_show',{id:pin.id}) }}">{{ pin.title }}</a></h2>
                            <p class="pl-3 pb-3">Submitted by {{ pin.user.getFullName()}}</p>
                        </article>
                    </div>
            <?php
                                }
                                echo '<br/><br/>';
                            }
            ?>

            </div>
        </div>
    </div>
</body>

</html>