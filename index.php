
<?php 

include 'config.php';
include 'output.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>AVALIAÇÃO FINAL</title>
  </head>
  <body>
  <h1 class="text-center">PERSONAGENS DO RICK E MORTY</h1>


<table class='table my-5'>
    <thead>
        <tr>
        <th scope='col'>Imagem</th>
        <th scope='col'>Nome</th>
        <th scope='col'>Gênero</th>
        <th scope='col'>Espécie</th>
        <th scope='col'>Status</th>
        
        </tr>
    </thead>
    <tbody>
<?php 

    $sql = "SELECT id, nome, vivo, gender, species, imagens FROM rick";

    $result = $conn->query($sql);

    if($result){

        while($row = $result->fetch_assoc()) {

            echo "<tr>";
            echo "<th scope='row'><img width='100px' src='".$row['imagens']."'></th>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['species']."</td>";
            echo "<td>".$row['vivo']."</td>";
            echo "</tr>";
        }

    }
  
?>
</tbody>

</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>