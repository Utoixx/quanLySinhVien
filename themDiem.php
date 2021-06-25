<!DOCTYPE html>
<html>
    <body>
        <?php
            $masv=$_GET["masv"];
            $mahp=$_GET["mahp"];
            $diem=$_GET["diem"];
            $diem=floatval($diem);
            echo $mahp;
            echo $masv;
            echo $diem;
            $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="qlsv";

                $conn = mysqli_connect($servername, $username,$password, $dbname);

                if (!$conn) {
                    die("Failed to connect DataBase!" .
                mysqli_connect_error());
                }

                $sql="INSERT INTO diem VALUES ('$masv', '$mahp', $diem);";
                if(mysqli_query($conn, $sql)){
                    ?>
                    <script>
                        window.location.replace("thongTinDiem.php");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Them diem that bai!");
                        window.location.replace("thongTinDiem.php");
                    </script>
                    <?php
                }
        ?>
    </body>
</html>