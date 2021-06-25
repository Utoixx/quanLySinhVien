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
        <h3>THONG TIN HOC PHAN</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>Ma hoc phan</th>
                <th>Ten hoc phan</th>
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
                $sql="select mahp, tenhp from hocphan";
                $result= mysqli_query($conn, $sql);
                $i=1;
                while($row= mysqli_fetch_assoc($result)){
                    $mahp=$row["mahp"];
            ?>  
                <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo $row["mahp"]?></td>
                    <td><?php echo $row["tenhp"]?></td>
                    <td>Sua</td>
                    <td><a href="xoaHocPhan.php?mahp=<?php echo $mahp; ?>">Xoa</a></td>
                </tr>
            <?php
                }
            ?>
            <tr>
            </tr>
        <br>
        </table>
        <h3>THEM HOC PHAN</h3>
        <form action="themHocPhan.php" method="GET">
            <label>Ma hoc phan</label><br>
            <input type="text" id="mahp" name="mahp"><br>
            <label>Ten</label><br>
            <input type="text" id="tenhp" name="tenhp"><br>
            <input type="submit" value="Them">
        </form>
    </body>
</html>