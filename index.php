<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cachorro</title>
        <style>
            h2{
                font: 12pt Arial;
                color: #17a673;
            }    
        </style>
    </head>
    <body>
        <form method="post" action="dados.php">
            <label for="txt">Texto</label>
            <input type="text" name='t'/><br/>
            <label for="itam">Tamanho</label>
            <input type="text" name='tam' id='itam'/><br/>
            <select name="tam" id="itam">
                <option value="8pt">8</option>
                <option value="12pt">12</option>
                <option value="16pt">16</option>
                <option value="20pt">20</option>
                <option value="24pt">24</option>
            </select>
            <br/>
            <label for="icor"> Cor: </label>
            <input type="color" name="cor" id="icor"> </label>
            <br/><br/>
            <input type="submit" value="Gerar"/>
        </form>
    </body>
</html>
