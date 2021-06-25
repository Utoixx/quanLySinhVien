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
        <h3>THONG TIN SINH VIEN</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>MaSV</th>
                <th>Ten</th>
                <th>Gioi Tinh</th>
                <th>Ngay sinh</th>
                <th>Que Quan</th>
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

                $sql="select masv, ten, gioitinh, ngaysinh, quequan from sinhvien";
                $result= mysqli_query($conn, $sql);
                $i=1;
                while($row= mysqli_fetch_assoc($result)){
                    $masv=$row["masv"];
            ?>  
                <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo $row["masv"]?></td>
                    <td><?php echo $row["ten"]?></td>
                    <td><?php 
                            if($row["gioitinh"]==1)
                                echo "Nam";
                            else   
                                echo "Nu";
                        ?></td>
                    <td><?php echo $row["ngaysinh"]?></td>
                    <td><?php echo $row["quequan"]?></td>
                    <td>Sua</td>
                    <td><a href="xoaSinhVien.php?masv=<?php echo $masv?>">Xoa</a></td>
                </tr>
            <?php
                }
            ?>
            <tr>
            </tr>
        <br>
        </table>
        <h3>THEM SINH VIEN</h3>
        <form action="themSinhVien.php" method="GET">
            <label>Ma sinh vien</label><br>
            <input type="text" id="masv" name="masv"><br>
            <label>Ten</label><br>
            <input type="text" id="ten" name="ten"><br>
            <label>Gioi Tinh</label><br>
            <input type="radio" id="nam" name="gioitinh" value="nam"><lable>Nam</lable><br>
            <input type="radio" id="nu" name="gioitinh" value="nu"><label>Nu</label><br>
            <label>Ngay Sinh</label><br>
            <input type="date" id="ngaysinh" name="ngaysinh"><br>
            <label>Que quan</label><br>
            <input type="text" id="quequan" name="quequan"><br>
            <input type="submit" value="Them">
        </form>
    </body>
</html>