<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/invitecss.css">
    <title>Invite</title>

    <link rel="apple-touch-icon" sizes="180x180" href="fa/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fa/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fa/favicon-16x16.png">
    <link rel="manifest" href="fa/site.webmanifest">
    <link rel="mask-icon" href="fa/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">



</head>
<body>
<div class="textup">
    <div class="wrap">
        <h2 class="title-40 area"><span>Пригласи   </span>друга</h2>
        <div class="box-price">


            <form action="#" method="post" id="form1">
                <ul>
                    <li>
                        <label> Введите его имя:
                            <input type="text" class="form-control _req" name="name">
                        </label>
                    </li>
                    <li>
                        <label> Почта друга:
                            <input type="text" class="form-control _req" name="email">
                        </label>
                    </li>





                </ul>
        </div>
    </div>



    <?php
    if (isset($_POST["name"]) && isset($_POST["email"])) {

        try {
            $conn = new PDO("mysql:host=localhost;dbname=benik", "root", "");
            $sql = "INSERT INTO inviters (Name, Email) VALUES (:name, :email)";
            // определяем prepared statement
            $stmt = $conn->prepare($sql);
            // привязываем параметры к значениям
            $stmt->bindValue(":name", $_POST["name"]);
            $stmt->bindValue(":email", $_POST["email"]);
            // выполняем prepared statement
            $affectedRowsNumber = $stmt->execute();
            // если добавлена как минимум одна строка
            if($affectedRowsNumber > 0 ){
                echo "Приглашение отправлено: другу с именем=" . $_POST["name"] ."  на почту: " . $_POST["email"];
            }
        }
        catch (PDOException $e) {
            echo "Извините,но вам стоит заполнить поля правильно!" ;
        }
    }
    ?>

<!--    --><?php
//    if (isset($_POST["name"]) && isset($_POST["email"])) {
//
//        $username = $_POST["name"];
//        $userage = $_POST["email"];
//        try {
//            $conn = new PDO("mysql:host=localhost;dbname=benik", "root", "");
//            $sql = "INSERT INTO Users (name, age) VALUES ('$username', $userage)";
//            $affectedRowsNumber = $conn->exec($sql);
//            // если добавлена как минимум одна строка
//            if($affectedRowsNumber > 0 ){
//                echo "Data successfully added: name=$username  age= $userage";
//            }
//        }
//        catch (PDOException $e) {
//            echo "Database error: " . $e->getMessage();
//        }
//    }
//    ?>



</body>
<body1>




    <div class="wrapper">
        <button class="form__button" onclick="alert('Приглашение сейчас обработается!');">Отправить</button>

<!--        <button class="form__button" type="submit" id="myButton">-->
<!--            Отправить-->
<!--        </button>-->


    </div>
</body1>




</html>