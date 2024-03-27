<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/Index.css" media="screen">
    <style>
     html{
    height: 100%;
}

body{
    height: 100%;
}

div.corpo{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

div.container{
    border: solid 5px;
    border-color: rgb(101, 161, 93);
    background-color: rgb(192, 235, 129);
    border-radius: 25px;
    height: min-content;
}
h1,h2{
    text-align: center;
    font-family: 'Courier New', Courier, monospace;
}
div.titulo{
    display: flex;
    justify-content: center;
    align-items: center;
}
img{
    width: 6rem;
    height: 6rem;
}
    </style>
</head>
<body>
    <?php
    function calc() {
    if(isset($_GET['x']) && isset($_GET['y']) && isset ($_GET['operacao'])){
        
        $n1 = $_GET['x'];
        $n2 = $_GET['y'];
        $resultado;

          if($_GET['operacao'] == "soma"){
            $resultado = $_GET['x'] + $_GET['y'];
            echo "$n1 + $n2 = $resultado";
        }

        else if($_GET['operacao'] == "subtracao"){
            $resultado = $_GET['x'] - $_GET['y'];
            echo "$n1 - $n2 = $resultado";
        }

        else if($_GET['operacao'] == "multiplicacao"){
            $resultado = $_GET['x'] * $_GET['y'];
            echo "$n1 * $n2 = $resultado";
        }

        else if($_GET['operacao'] == "divisao"){
            $resultado = $_GET['x'] / $_GET['y'];
            echo "$n1 / $n2 = $resultado";
        }
        
        else{
            echo "Operecação invalida";
        };
      }
    }
      ?>
      <div class="corpo">
        <div class="titulo">
          <h1>Senku's calculator</h1>
          <img src="Senku2.jpg" alt="Senku">
        </div>

        <div class="container">
        <h1>A sua equação é</h1>
        <h2><?php
        calc();
        ?>
        </h2>
        </div>
      </div>
  
</body>
</html>