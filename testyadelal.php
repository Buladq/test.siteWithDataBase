
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест</title>
    <link rel="stylesheet" href="css/mainfortestcssnew.css">


    <link rel="apple-touch-icon" sizes="180x180" href="fa/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fa/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fa/favicon-16x16.png">
    <link rel="manifest" href="fa/site.webmanifest">
    <link rel="mask-icon" href="fa/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">



</head>

<body>
<form method='get'>


    <div class="razmetka">
        <h3> Что такое java?</h3>
        <div class="form_radio">
            <ul>
                 <input name="answer[0]" value="Неверно"  type="radio"> Игра для телефона <br>
                <input name="answer[0]" value="Верно" type="radio"> Язык программирования <br>
                <input name="answer[0]" value="Неверно"  type="radio"> Заставка перед игрой на телефон <br>

            </ul>
        </div>



        <h3> Что такое ООП? </h3>
        <div class="form_radio">
            <ul>

                <input name="answer[1]" checked="checked"  value="Неверно"  type="radio"> Оптимальное определение программирования <br>
                <input name="answer[1]" value="Неверно"  type="radio"> Очень одинокий програмист <br>
                <input name="answer[1]" value="Верно"  type="radio"> Объектно-ориентированное программирование <br>

            </ul>
        </div>




        <h3> Для чего применяется sql? </h3>
        <div class="form_radio">
            <ul>
                <input name="answer[2]"  value="Верно"  type="radio"> Для работы с базами данных <br>
                <input name="answer[2]" value="Неверно"  type="radio"> Для создания классы <br>
                <input name="answer[2]" value="Неверно"  type="radio"> Для исправления ошибки в коде <br>

            </ul>
        </div>




        <h3> Что такое "класс" в Java? </h3>
        <div class="form_radio">
            <ul>
                <input name="answer[3]" value="Неверно" id="value1" type="radio"> Группа из людей <br>
                <input name="answer[3]" value="Верно" id="value2" type="radio"> Элемент ООП <br>
                <input name="answer[3]" value="Неверно" id="value3" type="radio"> Просто одно из возможных названий переменной <br>

            </ul>



<?php
error_reporting(0);
$conn = new PDO("mysql:host=localhost;dbname=benik", "root", "");


$sql = "SELECT `Id` FROM `persons` ORDER BY `Id` DESC LIMIT 1";
if($result = $conn->query($sql)) {
    $rowsCount = $result->num_rows; // количество полученных строк
    foreach ($result as $row) {
    }

}
$resuld=$row["Id"];


$k=0;
                    foreach($_GET['answer'] as $value)
                    {
                        if ($value=='Верно') {
                            $k=$k+1;

                        }




                    if ($k==0){
                        header("Location: freshman.php");

                        $sql = "SELECT `Id` FROM `persons` ORDER BY `Id` DESC LIMIT 1";
                        if($result = $conn->query($sql)) {
                            $rowsCount = $result->num_rows; // количество полученных строк
                            foreach ($result as $row) {
                            }

                        }
                        $resuld=$row["Id"];



                        $sql1 = "INSERT INTO fresham (Id_fresh) VALUES ($resuld)";
                        if($conn->query($sql1)){
                            //echo "Данные успешно добавлены";
                        } else{
                            //echo "Ошибка: " . $conn->error;
                        }





                    }
                    if ($k==1){
                        header("Location: jun.php");

                        $sql = "SELECT `Id` FROM `persons` ORDER BY `Id` DESC LIMIT 1";
                        if($result = $conn->query($sql)) {
                            $rowsCount = $result->num_rows; // количество полученных строк
                            foreach ($result as $row) {
                            }

                        }
                        $resuld=$row["Id"];



                        $sql1 = "INSERT INTO junior (Id_jun) VALUES ($resuld)";
                        if($conn->query($sql1)){
                            //echo "Данные успешно добавлены";
                        } else{
                            //echo "Ошибка: " . $conn->error;
                        }


                    }
                        if ($k==2){
                            header("Location: mid.php");



                            $sql = "SELECT `Id` FROM `persons` ORDER BY `Id` DESC LIMIT 1";
                            if($result = $conn->query($sql)) {
                                $rowsCount = $result->num_rows; // количество полученных строк
                                foreach ($result as $row) {
                                }

                            }
                            $resuld=$row["Id"];



                            $sql1 = "INSERT INTO middle (Id_mid) VALUES ($resuld)";
                            if($conn->query($sql1)){
                                //echo "Данные успешно добавлены";
                            } else{
                                //echo "Ошибка: " . $conn->error;
                            }

                        }
                        if ($k>2){
                            header("Location: sen.php");



                            $sql = "SELECT `Id` FROM `persons` ORDER BY `Id` DESC LIMIT 1";
                            if($result = $conn->query($sql)) {
                                $rowsCount = $result->num_rows; // количество полученных строк
                                foreach ($result as $row) {
                                }

                            }
                            $resuld=$row["Id"];



                            $sql1 = "INSERT INTO senior (Id_sen) VALUES ($resuld)";
                            if($conn->query($sql1)){
                                //echo "Данные успешно добавлены";
                            } else{
                                //echo "Ошибка: " . $conn->error;
                            }

                        }
                }





            ?>

















</body>
<body2>




    <div class="wrapper">
        <button class="form__button" ">Отправить</button>

        <!--        <button class="form__button" type="submit" id="myButton">-->
        <!--            Отправить-->
        <!--        </button>-->


    </div>
</body2>


</html>