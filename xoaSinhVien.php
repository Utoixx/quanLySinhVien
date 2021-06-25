<!DOCTYPE html>
<html>
    <body>
        <?php
            $masv=$_REQUEST["masv"];
            $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="qlsv";
                $conn = mysqli_connect($servername, $username,$password, $dbname);

                if (!$conn) {
                    die("Failed to connect DataBase!" .
                mysqli_connect_error());
                }

                $sql="DELETE FROM sinhvien WHERE masv='$masv';";
                if(mysqli_query($conn, $sql)){
                    ?>
                    <script>
                        window.location.replace("thongTinSinhVien.php");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Xoa thong tin that bai!");
                        window.location.replace("thongTinSinhVien.php");
                    </script>
                    <?php
                }
        ?>
    </body>
</html>