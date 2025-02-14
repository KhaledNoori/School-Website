

<?php
session_start();
require ("database_connect.php");

if (!isset($_SESSION['login'])) {

  header("location:login.php?red_un_se_id=1");
}
require ("database_connect.php");
$edit_id = $_GET['edit_student_id'];
$sql = "SELECT * FROM topstudent WHERE id = '$edit_id'";
$student_query = mysqli_query($GLOBALS['DB'], $sql);
$student = mysqli_fetch_assoc($student_query);


if(isset($_POST["update_data"])){
$student_name = $_POST['first_name'];
$student_class = $_POST['class'];
$student_position = $_POST['position'];



$image = $_FILES['image']['name'];
$student_description = $_FILES['description']['name'];

$targetDir = "uploads/";
$imagePath = $targetDir . $image;
$pdfPath = $targetDir . $pdf;

// آپلود تصویر و پی‌دی‌اف
move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
move_uploaded_file($_FILES['pdf']['tmp_name'], $pdfPath);


$sql = "update topstudent set `name`= '$student_name', `class`= '$student_class',`position`= '$student_position',`image`= '$image',`description`= '$student_description' WHERE `topstudent`.`id` = '$edit_id';";

$insert_query = mysqli_query($GLOBALS['DB'],$sql);


if($insert_query){
    header("location:list_of_student.php?updated=1");
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
            font-family: "Vazir"!important;
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
        <h3 style="text-align: center;">ویرایش اطلاعات</h3>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">انتخاب تصویر:</label>
                <input type="file" id="image" name="image" accept="image/*" value="<?php echo $student['image']; ?>" required>
            </div>
            <div class="form-group">
                <label for="title">نام :</label>
                <input type="text"  id="name" name="first_name" value="<?php echo $student['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="publisher">صنف</label>
                <input type="text" id="class" name="class" 
                value="<?php echo $student['class']; ?>" required>
            </div>
            <div class="form-group">
                <label for="year"> مقام</label>
                <input type="text" id="position" name="position" 
                value="<?php echo $student['position']; ?>" required>
            </div>
            <div class="form-group">
                <label for="branch-type"> توضیحات</label>
                <input  type="file" id="decription" accept=".pdf" name="description"
                value="<?php echo $student['description'];?>" required>
            </div>
            <button type="submit" name="update_data">ثبت</button>
        </form>
    </div>
</body>
</html>