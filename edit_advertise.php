<?php
require("database_connect.php");

$edit_id = $_GET['edit_advertise_id'];

$sql = " select * from advertise where id='$edit_id'";

$advertise_query = mysqli_query($GLOBALS['DB'], $sql);

$advertise = mysqli_fetch_assoc($advertise_query);


if (isset($_POST["update_date"])) {


    $title = $_POST["title"];
    $description =  $_POST["description"];
    $image = $_FILES['image']['name'];
 

    $targetDir = "uploads/";
    $imagePath = $targetDir . $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);  

    $sql = "UPDATE `advertise` SET `title` = '$title',`description` = '$description' ,`image` = '$image'   WHERE `advertise`.`id` = '$edit_id';";


    $insert_query = mysqli_query($GLOBALS['DB'], $sql);

    if ($insert_query) {

        header("location:list_of_advertises.php?Updated=1");
    }
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: "Vazir" !important;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        /* style for form*/

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 100%;
            margin: auto;
            /* مرکز کردن فرم */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 98%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;

        }

        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #4cae4c;
            /* رنگ دکمه هنگام هاور */
        }
    </style>
</head>

<body>


    <?php

    if (isset($_GET['saved'])) {


        echo "<h1 style=color:green> Statistics Information Saved Succecfully To Database </h1>";
    }


    ?>

    <div class="form-container">
        <h3 style="text-align: center;">ثبت اطلاعیه جدید</h3>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">عنوان:</label>
                <input type="text" id="title" name="title" value="<?php echo $advertise["title"]; ?>">
            </div>
            <div class="form-group">
                <label for="text">انتخاب متن:</label>
                <input type="text" id="description" name="description" value="<?php echo $advertise["description"]; ?>">
            </div>
            <div class="form-group">
                <label for="image">انتخاب تصویر:</label>
                <input type="file" id="image" name="image" accept="image/*" value="<?php echo $advertise["image"]; ?>">>
            </div>

            <button type="submit" name="update_date"> ثبت تغییرات </button>
        </form>
    </div>
</body>

</html>