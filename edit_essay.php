<?php
require("database_connect.php");

$edit_id = $_GET['edit_essay_id'];

$sql = " select * from essay where id='$edit_id'";

$essay_query = mysqli_query($GLOBALS['DB'], $sql);

$essay = mysqli_fetch_assoc($essay_query);


if (isset($_POST["update_data"])) {


    $essay_title = $_POST["title"];
    $publisher = $_POST["publisher"];
    $year = $_POST["year"];
    $image = $_FILES['image']['name'];
    $description = $_FILES['description']['name'];

    $targetDir = "uploads/";
    $imagePath = $targetDir . $image;
    $pdfPath = $targetDir . $pdf;

    // آپلود تصویر و پی‌دی‌اف
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    move_uploaded_file($_FILES['pdf']['tmp_name'], $pdfPath);

    $sql = "UPDATE `essay` SET `title` = '$essay_title', `publisher` = '$publisher', `publication_year` = '$year',`image` = '$image' ,`description` = '$description'  WHERE `essay`.`id` = '$edit_id';";


    $insert_query = mysqli_query($GLOBALS['DB'], $sql);

    if ($insert_query) {

        header("location:list_of_essay.php?Updated=1");
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


    <div class="form-container">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">عنوان:</label>
                <input type="text" id="title" name="title" value="<?php echo $essay["title"]; ?>">
            </div>
            <div class="form-group">
                <label for="publisher">ناشر:</label>
                <input type="text" id="publisher" name="publisher" value="<?php echo $essay["publisher"]; ?>">
            </div>
            <div class="form-group">
                <label for="year">سال نشر:</label>
                <input type="date" id="year" name="year" value="<?php echo $essay["publication_year"]; ?>">
            </div>
            <div class="form-group">
                <label for="image">انتخاب تصویر:</label>
                <input type="file" id="image" name="image" value="<?php echo $essay["image"]; ?>" accept="image/*">
            </div>
            <label for="">انتخاب فایل:</label>
            <input type="file" id="description" accept=".pdf" name="description" value="<?php echo $essay["description"]; ?>">
    </div>
    <button type="submit" name="update_data"> ثبت تغییرات </button>
    </form>
    </div>
</body>

</html>