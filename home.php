<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <title>student</title>
    <style>
        body{
            background-color: whitesmoke;
            font-family: 'Tajawal', sans-serif;
        }
        #mother{
            width: 100%;
            font-size: 20px;
        }
        main{
            float: left;
            border: 1px solid gray;
            padding: 5px;
        }
        input{
            padding:4px;
            border: 2px solid black;
            text-align:center;
            font-size: 17px;
            font-family: 'Tajawal', sans-serif;
        }
        aside{
            text-align:center;
            width:300px;
            float:right;
            border: 1px solid black;
            padding:10px;
            font-size:20px;
            background-color: silver;
            color:white;
        }
        #tbl{
            width:890px;
            font-size:20px;
        }
        #tbl th{
            background-color: silver;
            color: #000;
            font-size: 20px;
            padding: 10px;
        }
        aside button{
            width: 190px;
            padding: 8px;
            margin-top: 7px;
            font-size: 17px;
            font-family: 'Tajawal', sans-serif;
            font-weight:bold
            


        }




    </style>



</head>
<body dir="rtl">
   <?php 
   $host = 'localhost';
   $user='root'; 
   $pass='root'; 
   $db='student1';
   $con= mysqli_connect('localhost','root','root','student1');


   $res= mysqli_query($con,"select * from student");
   $id=''; 
   $name=''; 
   $address='';
if(isset($_POST['id'])){
    $id= $_POST['id'];

}



   #
   ?> 
<div id="mother">
    <form action="" method="POST">
        <!-- لوحة التعلم -->
        <aside>
            <div id="div">
                <img src="student.png" alt="لوجو الموقع" width="200">
                <h3>لوحة المدير</h3>
                <label for="">رقم الطالب</label><br>
                <input type="text" name="id" id="id"><br>
                <label for=""> اسم الطالب</label><br>
                <input type="text" name="name" id="name">
                <br>
                <label for="">عنوان الطالب</label><br>
                <input type="text" name="address" id="address"><br><br>
                <button name="add">اضافة طالب</button>
                <button name="del">حذف الطالب</button>
            </div>
        </aside>


       <!-- عرض بيانات الطلاب -->
        <main>
            <table id="tbl">
                <tr>
                    <th> الرقم التسلسلي</th>
                    <th> اسم الطالب </th>
                    <th> عنوان الطالب </th>




                </tr>

            </table>
        </main>




    </form>



</div>






</body>
</html>