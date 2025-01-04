<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Database Page</title>
        <br><a href="index.php">Kembali ke halaman utama?
        </a></br>
    </head>
    <body>
        <br><table border = 2 cellspacing = 0 cellpadding = 10>
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Email</td>
                <td>Maps</td>
                <td>Date & Time</td>
                <td>Image</td>
            </tr>

            <?php
            require 'function.php';
            $i = 1;
            $rows = mysqli_query($con, "SELECT * FROM tb_geocam ORDER BY id DESC");
            ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td style = "width: 450px; height: 450px;"> <iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>, <?php echo $row["longitude"]; ?>&h1=es;z=14&output=embed' style = "width: 100%; height: 100%;"> </iframe></td>
                    <td><?php echo $row["date"];?></td>
                    <td> <img src="img/<?php echo $row["image"]; ?>" width: 480px title=""></td>
                </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>