<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Innovation One Project: Introduction PHP</title>

    <style>
        .btnVerificar{
            background-color: #4CAF50;
            width: 120px;
            height: 40px;
            color: #FFFFFF;
            border-radius: 5px;
            border: 0px;
        }
        .btnVerificar:hover{
            background-color: #FFFFFF;
            border: 1px solid #4CAF50;
            color: #4CAF50;
        }

        .result{
            width: 220px;
            margin: 0 auto;
            margin-top: 10%;
        }
        input{
            margin: 0 0 10px 0;
            height: 40px;
        }
        p{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="result">
        <p>Improvements</p>
        <p><small> DIO: Introduction PHP</small></p>

        <form action="index.php" method="POST">
            <input type="text" placeholder="Type your name" required="true" name="name">
            <input type="Number" placeholder="Type your age" required="true" name="age">
            <button type="submit" class="btnVerificar">Verify</button>
        </form>

        <?php
            $category = [];

            $category[] = 'Infantil';
            $category[] = 'Adolescente';
            $category[] = 'Adulto';
            $category[] = 'Idoso';

            $name =     $_POST['name'];
            $age =    $_POST['age'];

            $color = '#125713'; //color default

            if(!isset($name) || !isset($age)){
                exit;
            }

            $result = 'Name: ' . $name . ' - Age: ' . $age . '<br />';
            if($age > 0 && $age <= 12)
            {
                //Infantil
                $result .= $category[0];
            }
            else if($age >= 13 && $age < 18)
            {
                //Adolescente
                $result = $category[1];
            }
            else if($age >= 18 && $age < 60)
            {
                //Adulto
                $result .= $category[2];
            }
            else
            {
                //Idoso
                if($age < 0)
                {
                    $result = 'Please, type a valid age!';
                    $color  = '#FF0000';
                } 
                else
                {
                    $result .= $category[3];
                }
            }
        ?>
        <p style="color: <?=$color;?>;">
            <?=($result)? $result : ''; ?>
        </p>
    </div>
</body>
</html>