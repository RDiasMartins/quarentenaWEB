<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Meus Exercícios - Renan </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="estilo.min.css" />
        <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                include "menu.inc";
            ?>
            <br/>

            <table class="table table-light table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Data</th>
                        <th>Exercício</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>19-05-2020</td>
                        <td> <a href="2020.05.19/soma.php"> Soma </a> </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>03-06-2020</td>
                        <td> <a href="2020.06.03/memoria.php"> Jogo da memória </a> </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>12-08-2020</td>
                        <td> <a href="2020.08.12/index.php"> Editor em JQuery </a> </td>
                    </tr>
                </tbody>
            </table>
    </body>
</html>
