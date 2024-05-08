<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        width: 100px;
        height: 10px;
        background-color: aliceblue;

    }
</style>
<body>

<div>
        <?php
           $favcolor = $_POST["favcolor"];

           switch ($favcolor) {
              case "vermelho":
                echo "<p>Sua cor favorita é vermelho!</p>";
                break;
              case "azul":
                echo "<p>Sua cor favorita é azul!</p>";
                break;
              case "verde":
                echo "<p>Sua cor favorita é verde!</p>";
                break; 
              default:
                echo "<p>Sua cor favorita não é vermelho, azul ou verde!</p>";
            }
        ?>
    </div>
</body>
</html>