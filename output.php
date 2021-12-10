<?php 
    include 'config.php';

    //Conexão com a URL
    $url = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=brl&order=market_cap_desc&per_page=20&page=1&sparkline=false";

    $ch = curl_init($url);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $response = curl_exec($ch);
    
    curl_close($ch);

    $total_moedas = json_decode($response, TRUE);

    
  //  $moedas = $total_moedas->id;


    foreach ($total_moedas as $moeda) {

        $moeda_idControle = $moeda['market_cap_rank'];
        $moeda_id = $moeda['id'];
        $moeda_symbol= $moeda['symbol'];
        $moeda_name = $moeda['name'];
        $moeda_tvolume = $moeda['total_volume'];
        $moeda_current = $moeda['current_price'];
        $moeda_marketCap = $moeda['market_cap'];

        $sql = "insert into coins (market_cap_rank, id, symbol, name, current_price, market_cap, total_volume)
        values ('$moeda_idControle', '$moeda_id', '$moeda_symbol', '$moeda_name', '$moeda_tvolume', '$moeda_current', '$moeda_marketCap')";

    } 

?>