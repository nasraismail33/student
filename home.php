<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    
<div id="mother">
    <form action="" method="POST">
        <!-- لوحة التعلم -->
        <aside>
            <div id="div">
                <img src="" alt="لوجو الموقع">
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