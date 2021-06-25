<!DOCTYPE html>
<html>
    <body>
        <?php
            $mahp=$_REQUEST["mahp"];
            $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="qlsv";
                $conn = mysqli_connect($servername, $username,$password, $dbname);

                if (!$conn) {
                    die("Failed to connect DataBase!" .
                mysqli_connect_error());
                }

                $sql="DELETE FROM hocphan WHERE mahp='$mahp';";
                if(mysqli_query($conn, $sql)){
                    ?>
                    <script>
                        window.location.replace("thongTinHocPhan.php");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                       alert("Xoa thong tin that bai!");
                       window.location.replace("thongTinHocPhan.php");
                    </script>
                    <?php
                }
        ?>
    </body>
</html>