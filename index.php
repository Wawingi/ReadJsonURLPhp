<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $url = "http://localhost:8080/AgendaWS/webresources/agenda/Pessoa/listar2";
            $json = file_get_contents($url);
            $data = json_decode($json);
            
            //print_r($data);
            foreach ($data as $dado):
                echo "Nome: ". $dado->nome;
                echo " || Idade: ". $dado->idade;
                echo " || Genero: ". $dado->genero;
                echo " || Telefone: ". $dado->telefone;
                echo '<br>';
            endforeach;
        ?>
    </body>
</html>
