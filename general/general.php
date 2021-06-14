<!DOCTYPE html>
<?php
$jogador = ""; $cont1 = 0; $cont2 = 0; $cont3 = 0; $cont4 = 0; $cont5 = 0; $cont6 = 0; $jogadas1 = 0;
$jogadas2 = 0; $jogadas3 = 0; $jogadas4 = 0; $jogadas5 = 0; $jogadas6 = 0; $pontuacao1 = 0; $pontuacao2 = 0;
$pontuacao3 = 0; $pontuacao4 = 0; $pontuacao5 = 0; $pontuacao6 = 0; $trinca = 0; $quadra = 0; $fullh = 0;
$seqalt = 0; $seqbai = 0; $general = 0;

$maquina = ""; $cont11 = 0; $cont22 = 0; $cont33 = 0; $cont44 = 0; $cont55 = 0; $cont66 = 0; $jogadas11 = 0;
$jogadas22 = 0; $jogadas33 = 0; $jogadas44 = 0; $jogadas55 = 0; $jogadas66 = 0; $pontuacao11 = 0; $pontuacao22 = 0;
$pontuacao33 = 0; $pontuacao44 = 0; $pontuacao55 = 0; $pontuacao66 = 0; $trinca2 = 0; $quadra2 = 0; $fullh2 = 0;
$seqalt2 = 0; $seqbai2 = 0; $general2 = 0;
if(isset($_GET['jogador'])){
    $jogador = $_GET['jogador'];
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<head>
    <style>
        body{
            background-color: #565656;
            font-family: 'Times New Roman';
        }
        h3{
            font-size: 12pt;
            color: #d3d3d3;
        }
        h1{
            color: #d3d3d3;
        }
    </style>
    <meta charset="UTF-8">
    <title>General</title>
</head>
<body>
<form method="get" action="">
    <div class="form-floating mb-3">
        <br><br><label for="floatingInput"><h3>Insira seu nome</h3></label><br>
        <input style="background-color: #565656; color: #d3d3d3"  type="text" name="jogador" class="form-control" id="jogador" placeholder="exemplo Robertinho" value="<?php echo $jogador; ?>">
        <br><input type="submit" name="enviar" id="enviar" class="btn btn-secondary">
    </div>
</form>
<?php
if(isset($_GET['jogador'])){
    echo "<h3>Dados de $jogador: </h3>";
    $vetorj = array();
    for ($i = 0; $i < 5; $i++){
        $vetorj[$i] = rand(1, 6);
        if ($vetorj[$i] == 2 && $vetorj[$i] == 3 && $vetorj[$i] == 4 && $vetorj[$i] == 5 && $vetorj[$i] == 6){
            $seqalt = 30;
        }

        if ($vetorj[$i] == 1 && $vetorj[$i] == 2 && $vetorj[$i] == 3 && $vetorj[$i] == 4 && $vetorj[$i] == 5){
            $seqbai = 40;
        }

    switch ($vetorj[$i]) {
        case '1':
        echo '<img id="f1" src="img/1.JPG">';
        break;
        case '2':
        echo '<img id="f2" src="img/2.JPG">';
        break;
        case '3':
        echo '<img id="f3" src="img/3.JPG">';
        break;
        case '4':
        echo '<img id="f4" src="img/4.JPG">';
        break;
        case '5':
        echo '<img id="f5" src="img/5.JPG">';
        break;
        case '6':
        echo '<img id="f6" src="img/6.JPG">';
        break;
    }
    }
    $cont = array($cont1, $cont2, $cont3, $cont4, $cont5, $cont6);
    foreach ($vetorj as $dado){
        if ($dado == 1){
            $cont[0]++;
        }
        if ($dado == 2){
            $cont[1]++;            
        }
        if ($dado == 3){
            $cont[2]++;
        }
        if ($dado == 4){
            $cont[3]++;
        }
        if ($dado == 5){
            $cont[4]++;
        }
        if ($dado == 6){
            $cont[5]++;
        }
    }


    if ($cont[0] > 1){
        $jogadas1 = $cont[0];
        $pontuacao1 = $cont[0];
    }
    if ($cont[1] > 1){
        $jogadas2 = $cont[1];
        $pontuacao2 = $cont[1] * 2;
    }
    if ($cont[2] > 1){
        $jogadas3 = $cont[2];
        $pontuacao3 = $cont[2] * 3;
    }
    if ($cont[3] > 1){
        $jogadas4 = $cont[3];
        $pontuacao4 = $cont[3] * 4;
    }
    if ($cont[4] > 1){
        $jogadas5 = $cont[4];
        $pontuacao5 = $cont[4] * 5;
    }
    if ($cont[5] > 1){
        $jogadas6 = $cont[5];
        $pontuacao6 = $cont[5] * 6;
    }


    if ($cont[0] >= 3){
        $trinca = 20;
    }
    if ($cont[1] >= 3){
        $trinca = 20;
    }
    if ($cont[2] >= 3){
        $trinca = 20;
    }
    if ($cont[3] >= 3){
        $trinca = 20;
    }
    if ($cont[4] >= 3){
        $trinca = 20;
    }
    if ($cont[5] >= 3){
        $trinca = 20;
    }


    if ($cont[0] >= 4){
        $quadra = 30;
    }
    if ($cont[1] >= 4){
        $quadra = 30;
    }
    if ($cont[2] >= 4){
        $quadra = 30;
    }
    if ($cont[3] >= 4){
        $quadra = 30;
    }
    if ($cont[4] >= 4){
        $quadra = 30;
    }
    if ($cont[5] >= 4){
        $quadra = 30;
    }

    if ($cont[0] >= 3 && $cont[1] == 2){
        $fullh = 25;
    } else if ($cont[0] >= 3 && $cont[2] == 2){
        $fullh = 25;
    } else if ($cont[0] >= 3 && $cont[3] == 2){
        $fullh = 25;
    } else if ($cont[0] >= 3 && $cont[4] == 2){
        $fullh = 25;
    } else if ($cont[0] >= 3 && $cont[5] == 2){
        $fullh = 25;
    }

    if ($cont[1] >= 3 && $cont[0] == 2){
        $fullh = 25;
    } else if ($cont[1] >= 3 && $cont[2] == 2){
        $fullh = 25;
    } else if ($cont[1] >= 3 && $cont[3] == 2){
        $fullh = 25;
    } else if ($cont[1] >= 3 && $cont[4] == 2){
        $fullh = 25;
    } else if ($cont[1] >= 3 && $cont[5] == 2){
        $fullh = 25;
    }

    if ($cont[2] >= 3 && $cont[0] == 2){
        $fullh = 25;
    } else if ($cont[2] >= 3 && $cont[1] == 2){
        $fullh = 25;
    } else if ($cont[2] >= 3 && $cont[3] == 2){
        $fullh = 25;
    } else if ($cont[2] >= 3 && $cont[4] == 2){
        $fullh = 25;
    } else if ($cont[2] >= 3 && $cont[5] == 2){
        $fullh = 25;
    }

    if ($cont[3] >= 3 && $cont[0] == 2){
        $fullh = 25;
    } else if ($cont[3] >= 3 && $cont[1] == 2){
        $fullh = 25;
    } else if ($cont[3] >= 3 && $cont[2] == 2){
        $fullh = 25;
    } else if ($cont[3] >= 3 && $cont[4] == 2){
        $fullh = 25;
    } else if ($cont[3] >= 3 && $cont[5] == 2){
        $fullh = 25;
    }

    if ($cont[4] >= 3 && $cont[0] == 2){
        $fullh = 25;
    } else if ($cont[4] >= 3 && $cont[1] == 2){
        $fullh = 25;
    } else if ($cont[4] >= 3 && $cont[2] == 2){
        $fullh = 25;
    } else if ($cont[4] >= 3 && $cont[3] == 2){
        $fullh = 25;
    } else if ($cont[4] >= 3 && $cont[5] == 2){
        $fullh = 25;
    }

    if ($cont[5] >= 3 && $cont[0] == 2){
        $fullh = 25;
    } else if ($cont[5] >= 3 && $cont[1] == 2){
        $fullh = 25;
    } else if ($cont[5] >= 3 && $cont[2] == 2){
        $fullh = 25;
    } else if ($cont[5] >= 3 && $cont[3] == 2){
        $fullh = 25;
    } else if ($cont[5] >= 3 && $cont[4] == 2){
        $fullh = 25;
    }

    if ($vetorj[0] == 1 && $vetorj[1] == 1 && $vetorj[2] == 1 && $vetorj[3] == 1 && $vetorj[4] == 1){
        $general = 50;
    }
    if ($vetorj[0] == 2 && $vetorj[1] == 2 && $vetorj[2] == 2 && $vetorj[3] == 2 && $vetorj[4] == 2){
        $general = 50;
    }
    if ($vetorj[0] == 3 && $vetorj[1] == 3 && $vetorj[2] == 3 && $vetorj[3] == 3 && $vetorj[4] == 3){
        $general = 50;
    }
    if ($vetorj[0] == 4 && $vetorj[1] == 4 && $vetorj[2] == 4 && $vetorj[3] == 4 && $vetorj[4] == 4){
        $general = 50;
    }
    if ($vetorj[0] == 5 && $vetorj[1] == 5 && $vetorj[2] == 5 && $vetorj[3] == 5 && $vetorj[4] == 5){
        $general = 50;
    }
    if ($vetorj[0] == 6 && $vetorj[1] == 6 && $vetorj[2] == 6 && $vetorj[3] == 6 && $vetorj[4] == 6){
        $general = 50;
    }
  
    $soma = $vetorj[0] + $vetorj[1] + $vetorj[2] + $vetorj[3] + $vetorj[4];
    $somapontos = $pontuacao1 + $pontuacao2 + $pontuacao3 + $pontuacao4 + $pontuacao5 + $pontuacao6 + $trinca
    + $quadra + $fullh + $seqalt + $seqbai + $general + $soma; 
}

echo "<br><br><h3>Dados da Máquina: </h3>";
$vetorm = array();
    for ($z = 0; $z < 5; $z++){
        $vetorm[$z] = rand(1, 6);
        if ($vetorm[$z] == 2 && $vetorm[$z] == 3 && $vetorm[$z] == 4 && $vetorm[$z] == 5 && $vetorm[$z] == 6){
            $seqalt2 = 30;
        }

        if ($vetorm[$z] == 1 && $vetorm[$z] == 2 && $vetorm[$z] == 3 && $vetorm[$z] == 4 && $vetorm[$z] == 5){
            $seqbai2 = 40;
        }

        switch ($vetorm[$z]){
            case '1':
            echo '<img id="f1" src="img/1.JPG">';
            break;
            case '2':
            echo '<img id="f2" src="img/2.JPG">';
            break;
            case '3':
            echo '<img id="f3" src="img/3.JPG">';
            break;
            case '4':
            echo '<img id="f4" src="img/4.JPG">';
            break;
            case '5':
            echo '<img id="f5" src="img/5.JPG">';
            break;
            case '6':
            echo '<img id="f6" src="img/6.JPG">';
            break;
        }
    }
    $cont2 = array($cont11, $cont22, $cont33, $cont44, $cont55, $cont66);
    foreach ($vetorm as $dado2){
        if ($dado2 == 1){
            $cont2[0]++;
        }
        if ($dado2 == 2){
            $cont2[1]++;            
        }
        if ($dado2 == 3){
            $cont2[2]++;
        }
        if ($dado2 == 4){
            $cont2[3]++;
        }
        if ($dado2 == 5){
            $cont2[4]++;
        }
        if ($dado2 == 6){
            $cont2[5]++;
        }
    }


    if ($cont2[0] > 1){
        $jogadas11 = $cont2[0];
        $pontuacao11 = $cont2[0];
    }
    if ($cont2[1] > 1){
        $jogadas22 = $cont2[1];
        $pontuacao22 = $cont2[1] * 2;
    }
    if ($cont2[2] > 1){
        $jogadas33 = $cont2[2];
        $pontuacao33 = $cont2[2] * 3;
    }
    if ($cont2[3] > 1){
        $jogadas44 = $cont2[3];
        $pontuacao44 = $cont2[3] * 4;
    }
    if ($cont2[4] > 1){
        $jogadas55 = $cont2[4];
        $pontuacao55 = $cont2[4] * 5;
    }
    if ($cont2[5] > 1){
        $jogadas66 = $cont2[5];
        $pontuacao66 = $cont2[5] * 6;
    }


    if ($cont2[0] >= 3){
        $trinca2 = 20;
    }
    if ($cont2[1] >= 3){
        $trinca2 = 20;
    }
    if ($cont2[2] >= 3){
        $trinca2 = 20;
    }
    if ($cont2[3] >= 3){
        $trinca2 = 20;
    }
    if ($cont2[4] >= 3){
        $trinca2 = 20;
    }
    if ($cont2[5] >= 3){
        $trinca2 = 20;
    }


    if ($cont2[0] >= 4){
        $quadra2 = 30;
    }
    if ($cont2[1] >= 4){
        $quadra2 = 30;
    }
    if ($cont2[2] >= 4){
        $quadra2 = 30;
    }
    if ($cont2[3] >= 4){
        $quadra2 = 30;
    }
    if ($cont2[4] >= 4){
        $quadra2 = 30;
    }
    if ($cont2[5] >= 4){
        $quadra2 = 30;
    }

    if ($cont2[0] >= 3 && $cont2[1] == 2){
        $fullh2 = 25;
    } else if ($cont2[0] >= 3 && $cont2[2] == 2){
        $fullh2 = 25;
    } else if ($cont2[0] >= 3 && $cont2[3] == 2){
        $fullh2 = 25;
    } else if ($cont2[0] >= 3 && $cont2[4] == 2){
        $fullh2 = 25;
    } else if ($cont2[0] >= 3 && $cont2[5] == 2){
        $fullh2 = 25;
    }

    if ($cont2[1] >= 3 && $cont2[0] == 2){
        $fullh2 = 25;
    } else if ($cont2[1] >= 3 && $cont2[2] == 2){
        $fullh2 = 25;
    } else if ($cont2[1] >= 3 && $cont2[3] == 2){
        $fullh2 = 25;
    } else if ($cont2[1] >= 3 && $cont2[4] == 2){
        $fullh2 = 25;
    } else if ($cont2[1] >= 3 && $cont2[5] == 2){
        $fullh2 = 25;
    }

    if ($cont2[2] >= 3 && $cont2[0] == 2){
        $fullh2 = 25;
    } else if ($cont2[2] >= 3 && $cont2[1] == 2){
        $fullh2 = 25;
    } else if ($cont2[2] >= 3 && $cont2[3] == 2){
        $fullh2 = 25;
    } else if ($cont2[2] >= 3 && $cont2[4] == 2){
        $fullh2 = 25;
    } else if ($cont2[2] >= 3 && $cont2[5] == 2){
        $fullh2 = 25;
    }

    if ($cont2[3] >= 3 && $cont2[0] == 2){
        $fullh2 = 25;
    } else if ($cont2[3] >= 3 && $cont2[1] == 2){
        $fullh2 = 25;
    } else if ($cont2[3] >= 3 && $cont2[2] == 2){
        $fullh2 = 25;
    } else if ($cont2[3] >= 3 && $cont2[4] == 2){
        $fullh2 = 25;
    } else if ($cont2[3] >= 3 && $cont2[5] == 2){
        $fullh2 = 25;
    }

    if ($cont2[4] >= 3 && $cont2[0] == 2){
        $fullh2 = 25;
    } else if ($cont2[4] >= 3 && $cont2[1] == 2){
        $fullh2 = 25;
    } else if ($cont2[4] >= 3 && $cont2[2] == 2){
        $fullh2 = 25;
    } else if ($cont2[4] >= 3 && $cont2[3] == 2){
        $fullh2 = 25;
    } else if ($cont2[4] >= 3 && $cont2[5] == 2){
        $fullh2 = 25;
    }

    if ($cont2[5] >= 3 && $cont2[0] == 2){
        $fullh2 = 25;
    } else if ($cont2[5] >= 3 && $cont2[1] == 2){
        $fullh2 = 25;
    } else if ($cont2[5] >= 3 && $cont2[2] == 2){
        $fullh2 = 25;
    } else if ($cont2[5] >= 3 && $cont2[3] == 2){
        $fullh2 = 25;
    } else if ($cont2[5] >= 3 && $cont2[4] == 2){
        $fullh2 = 25;
    }

    if ($vetorm[0] == 1 && $vetorm[1] == 1 && $vetorm[2] == 1 && $vetorm[3] == 1 && $vetorm[4] == 1){
        $general2 = 50;
    }
    if ($vetorm[0] == 2 && $vetorm[1] == 2 && $vetorm[2] == 2 && $vetorm[3] == 2 && $vetorm[4] == 2){
        $general2 = 50;
    }
    if ($vetorm[0] == 3 && $vetorm[1] == 3 && $vetorm[2] == 3 && $vetorm[3] == 3 && $vetorm[4] == 3){
        $general2 = 50;
    }
    if ($vetorm[0] == 4 && $vetorm[1] == 4 && $vetorm[2] == 4 && $vetorm[3] == 4 && $vetorm[4] == 4){
        $general2 = 50;
    }
    if ($vetorm[0] == 5 && $vetorm[1] == 5 && $vetorm[2] == 5 && $vetorm[3] == 5 && $vetorm[4] == 5){
        $general2 = 50;
    }
    if ($vetorm[0] == 6 && $vetorm[1] == 6 && $vetorm[2] == 6 && $vetorm[3] == 6 && $vetorm[4] == 6){
        $general2 = 50;
    }
  
    $soma2 = $vetorm[0] + $vetorm[1] + $vetorm[2] + $vetorm[3] + $vetorm[4];
    $somapontos2 = $pontuacao11 + $pontuacao22 + $pontuacao33 + $pontuacao44 + $pontuacao55 + $pontuacao66 
    + $trinca2 + $quadra2 + $fullh2 + $seqalt2 + $seqbai2 + $general2 + $soma2; 

    echo "<br><br> <table class='table table-dark'>
    <thead>
      <tr>
        <th scope='col'>$jogador</th>
        <th scope='col'>Máquina</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td>Jogada 1: $pontuacao1 </td>
            <td>Jogada 1: $pontuacao11</td>
        </tr>
        <tr>
            <td>Jogada 2: $pontuacao2</td>
            <td>Jogada 2: $pontuacao22</td>
        </tr>
        <tr>
            <td>Jogada 3: $pontuacao3</td>
            <td>Jogada 3: $pontuacao33</td>
        </tr>
        <tr>
            <td>Jogada 4: $pontuacao4</td>
            <td>Jogada 4: $pontuacao44</td>
        </tr>
        <tr>
            <td>Jogada 5: $pontuacao5</td>
            <td>Jogada 5: $pontuacao55</td>
        </tr>
        <tr>
        <td>Jogada 6: $pontuacao6</td>
        <td>Jogada 6: $pontuacao66</td>
        </tr>
        <tr>
            <td>Trinca: $trinca</td>
            <td>Trinca: $trinca2</td>
        </tr>
        <tr>
            <td>Quadra: $quadra</td>
            <td>Quadra: $quadra2</td>
        </tr>
        <tr>
            <td>Full House: $fullh</td>
            <td>Full House: $fullh2</td>
        </tr>
        <tr>
            <td>Sequência Alta: $seqalt</td>
            <td>Sequência Alta: $seqalt2</td>
        </tr>
        <tr>
            <td>Sequência Baixa: $seqbai</td>
            <td>Sequência Baixa: $seqbai2</td>
        </tr>
        <tr>
            <td>General: $general</td>
            <td>General: $general2</td>
        </tr>
        <tr>
            <td>Aleatório: $soma</td>
            <td>Aleatório: $soma2</td>
        </tr>
        <tr>
            <td>Total: $somapontos</td>
            <td>Total: $somapontos2</td>
        </tr>
    </tbody>
  </table>
  ";
?>
<?php
    if($somapontos > $somapontos2){
        echo "<br><h1>$jogador Venceu!!!</h1><br>"; 
    } else if ($somapontos2 > $somapontos){
        echo "<br><h1>A Máquina Venceu!!!</h1><br>";
    } else if ($somapontos == $somapontos2 || $somapontos2 == $somapontos){
        echo "<br><h1>Empate!!!</h1><br>";
    }
?>
</body>
</html>