<?php
session_start();
require("database_connect.php");

if (!isset($_SESSION['login'])) {

    header("location:login.php?red_un_se_id=1");
}


$edit_id = $_GET['edit_statistic_id'];

$sql = " select * from statistics where id='$edit_id'";

$stat_query = mysqli_query($GLOBALS['DB'], $sql);

$statistic = mysqli_fetch_assoc($stat_query);


if (isset($_POST["update_data"])) {


    $num_student = $_POST["student"];
    $num_teacher = $_POST["teacher"];
    $num_class = $_POST["clas"];
    $num_branch = $_POST["branch"];

    $sql = "UPDATE `statistics` SET `student` = '$num_student', `teacher` = '$num_teacher', `classes` = '$num_class', `branch` = '$num_branch '  WHERE `statistics`.`id` = '$edit_id';";


    $insert_query = mysqli_query($GLOBALS['DB'], $sql);

    if ($insert_query) {

        header("location:list_of_statistics.php?Updated=1");
    }
}
?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>فرم نمونه</title>
    <style>
        body {
            font-family: "Vazir" !important;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin: 10px;
        }

        form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 5px;
            display: block;
        }

        input[type="number"] {
            width: 98%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>

<body>
    <?php

    if (isset($_GET['saved'])) {


        echo "<h1 style=color:green> Statistics Information Saved Succecfully To Database </h1>";
    }


    ?>

    <!-- add your form  -->
    <div class="form-container">
    <h3 style="text-align:center"> ویرایش داده ها</h3>
        
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">دانش آموز:</label>
                <input type="number" id="title" name="student" value="<?php echo $statistic["student"]; ?>">
            </div>
            <div class="form-group">
                <label for="publisher">آموز گار:</label>
                <input type="number" id="publisher" name="teacher" value="<?php echo $statistic["teacher"]; ?>">

                <div class="form-group">
                <label for="class">نمایندگی  :</label>
                <input type="number" id="class" name="clas" value="<?php echo $statistic["classes"]; ?>">
            </div>
            
            <div class="form-group">
                <label for="publisher">نمایندگی  :</label>
                <input type="number" id="publisher" name="branch" value="<?php echo $statistic["branch"]; ?>">
            </div>
           
            <button type="submit" name="update_data"> ثبت تغییرات </button>
        </form>
    </div>
</body>

</html>