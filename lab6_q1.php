<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "Abdul Azim";
        $matric_number = "DI220148";
        $course = "Bachelor Information Technology";
        $year_of_study = "2";
        $adress = "NO 63, Jalan Seri Emas 6, Taman Seri Emas";
    ?>
 <table>
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo "$matric_number"; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
        <td>Year Of Study</td>
        <td><?php echo "$year_of_study"; ?></td>
    </tr>
    <tr>
        <td>Adress</td>
        <td><?php echo "$adress"; ?></td>
    </tr>
 </table>

</body>
</html>