<?php

include 'config.php';

    //Conexão com a URL
    $url = "https://rickandmortyapi.com/api/character";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);

    $total_personagens = json_decode($response, true);
    $personagens = $total_personagens['results'];

    foreach ($personagens as $personagem) {
      $sql = "INSERT INTO rick (id, nome, vivo, gender, species, imagens)
      VALUES (
          '".$personagem['id']."',
          '".$personagem['name']."',
          '".$personagem['status']."',
          '".$personagem['gender']."',
          '".$personagem['species']."',
          '".$personagem['image']."')";

        if ($conn->query($sql) === FALSE) {
        }

  }

?>