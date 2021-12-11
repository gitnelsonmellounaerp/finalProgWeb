<?php 
    include 'config.php';

    //Conexão com a URL
    $url = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=brl&order=market_cap_desc&per_page=20&page=1&sparkline=false";

    $ch = curl_init($url);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $response = curl_exec($ch);
    
    curl_close($ch);

    $total_moedas = json_decode($response, true);
    print_r($total_moedas);

    
  //  $moedas = $total_moedas->id;


    foreach ($total_moedas as $moeda) {

      $sql = "INSERT INTO coins (market_cap_rank, id, symbol, total_volume, current_price, market_cap)
      VALUES (
          '".$moeda->maket_cap_rank."',
          '".$moeda->id."',
          '".$moeda->symbol."',
          '".$moeda->total_volume."',
          '".$moeda->current_price."',
          '".$moeda->market_cap."')";


    } 

?>