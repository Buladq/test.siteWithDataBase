<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>

    <link rel="apple-touch-icon" sizes="180x180" href="fa/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fa/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fa/favicon-16x16.png">
    <link rel="manifest" href="fa/site.webmanifest">
    <link rel="mask-icon" href="fa/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/mainforregcss.css">
</head>


<?php

if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["middlename"])&& isset($_POST["data"])&& isset($_POST["obraz"]) && isset($_POST["polls"]) ) {

    try {
        $conn = new PDO("mysql:host=localhost;dbname=benik", "root", "");
        $sql = "INSERT INTO Persons (Name, Surname, patronymic, birthday, Orazovanie_ID, poll_ID) VALUES (:name, :surname , :middlename,:data,:obraz,:polls)";

        // определяем prepared statement
        $stmt = $conn->prepare($sql);
        // привязываем параметры к значениям
        $stmt->bindValue(":name", $_POST["name"]);
        $stmt->bindValue(":surname", $_POST["surname"]);
        $stmt->bindValue(":middlename", $_POST["middlename"]);
        $stmt->bindValue(":data", $_POST["data"]);
        $stmt->bindValue(":obraz", $_POST["obraz"]);
        $stmt->bindValue(":polls", $_POST["polls"]);

        // выполняем prepared statement
        $affectedRowsNumber = $stmt->execute();
        // если добавлена как минимум одна строка
//        header('Location: ..test.php');

        if($affectedRowsNumber > 0 ){
                    echo "Приглашение отправлено: другу с именем=" . $_POST["name"] ."  на почту: " . $_POST["surname"];
            header("Location: testyadelal.php");
        }

    }
    catch (PDOException $e) {
        echo "<h2 class=\"title-40 area\"><span>Введите все   поля</h2>\n";

    }
}
?>
<body>

<form action="#" method="post" id="form1">
    <ul>
        <li>
            <label> Введите ваше имя:
                <input type="text" class="form-control _req" name="name">
            </label>
        </li>
        <li>
            <label> Введите вашу фамилию:
                <input type="text" class="form-control _req" name="surname">
            </label>
        </li>
        <li>
            <label> Введите ваше отчество:
                <input type="text" class="form-control _req" name="middlename">
            </label>
        </li>
        <li>
            <label for="date"> Дата рождения:
                <input type="date" class="form-control _req" name="data"
                       value=""
                       min="1995-01-01" max="2018-12-31">

            </label>





        </li>
        <li>

            <label for="date">Вид образования:

                <select type="date" class="form-control _req" name="obraz">
                    <option value="0"></option>
                    <option value="1">Школьное</option>
                    <option value="2">Среднее</option>
                    <option value="3">Высшее</option>
                    <option value="4">Неоконченное высшее</option>
                    <option value="5">Аспирантура</option>
                    <option value="6">Магистратура</option>
                    <option value="7">Прохождение курсов</option>
                </select>
            </label>




        </li>


        <li>

            <label for="poll">Ваш пол:

                <select type="poll" class="form-control _req" name="polls">

                    <option value="0"></option>
                    <option value="1">Мужской</option>

                    <option value="2">Женский</option>

                </select>
            </label>




        </li>
    </ul>

    <div class="wrapper"> <button class="form__button" type="submit" id="myButton" >
            Отправить
        </button></div>








</form>
</body>



<!--<script src="css/validacion.js"></script>-->
</html>