<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <title>Soma</title>
        <script>
            function soma(){
                var n1 = parseInt(document.getElementById('n1').value);
                var n2 = parseInt(document.getElementById('n2').value);

                var resultado = n1 + n2;
                document.getElementById("resultado").value=resultado;
            }
        </script>
    </head>
    <body>
        <fieldset>
            <center>
            <input style="text-align:center;" type="text" id="n1" onkeyup="soma()"/>
            <h4>+</h4>
            <input style="text-align:center;" type="text" id="n2" onkeyup="soma()"/>
            <br/>

            <h4>Resultado:</h4>
            <input style="text-align:center;" id="resultado" value="" readonly="readonly"/>

            </center>
        </fieldset>
    </body>
</html>
