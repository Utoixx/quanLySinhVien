<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td{
                border-style: solid;
                border-collapse: collapse;
            }
            form{
                border-style: solid;
                border-collapse: collapse;
                width: fit-content;
            }
        </style>
    </head>
    <body>
        <h3>THONG TIN DIEM</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>Ma hoc phan</th>
                <th>Ma sinh vien</th>
                <th>Diem</th>
                <th></th>
                <th></th>
            </tr>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="qlsv";
                $conn = mysqli_connect($servername, $username,$password, $dbname);

                if (!$conn) {
                    die("Connection failed: " .
                mysqli_connect_error());
                }

                $sql="select masv, mahp, diemhp from diem";
                $result= mysqli_query($conn, $sql);
                $i=1;
                while($row= mysqli_fetch_assoc($result)){
                    $masv=$row["masv"];
                    $mahp=$row["mahp"];
                    $masv.="/";
                    $masv.=$mahp;
            ?>  
                <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo $row["mahp"]?></td>
                    <td><?php echo $row["masv"]?></td>
                    <td><?php echo $row["diemhp"]?></td>
                    <td>Sua</td>
                    <td><a href="xoaDiem.php?masv=<?php echo $masv?>">Xoa</a></td>
                </tr>
            <?php
                }
            ?>
            <tr>
            </tr>
        <br>
        </table>
        <h3>THEM DIEM</h3>
        <form action="themDiem.php" method="GET">
            <label>Ma mon hoc</label><br>
            <input type="text" id="mahp" name="mahp"><br>
            <label>Ma sinh vien</label><br>
            <input type="text" id="masv" name="masv"><br>
            <label>Diem</label><br>
            <input type="text" id="diem" name="diem"><br>
            <input type="submit" value="Them">
        </form>
    </body>
</html>