<!DOCTYPE html>
<html>
    <body>
        <?php
            $mahp=$_GET["mahp"];
            $tenhp=$_GET["tenhp"];
            $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="qlsv";

                $conn = mysqli_connect($servername, $username,$password, $dbname);

                if (!$conn) {
                    die("Failed to connect DataBase!" .
                mysqli_connect_error());
                }

                $sql="INSERT INTO hocphan VALUES ('$mahp', '$tenhp');";
                if(mysqli_query($conn, $sql)){
                    ?>
                    <script>
                        alert("Them hoc phan thanh cong!");
                        window.location.replace("thongTinHocPhan.php");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Them hoc phan that bai!");
                        window.location.replace("thongTinHocPhan.php");
                    </script>
                    <?php
                }
        ?>
    </body>
</html>