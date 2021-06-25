<!DOCTYPE html>
<html>
    <body>
        <?php
            $info=$_REQUEST["masv"];
            $info=explode("/", $info);
            $masv=$info[0];
            $mahp=$info[1];
            $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="qlsv";
                $conn = mysqli_connect($servername, $username,$password, $dbname);

                if (!$conn) {
                    die("Failed to connect DataBase!" .
                mysqli_connect_error());
                }

                $sql="DELETE FROM diem WHERE masv='$masv' and mahp='$mahp';";
                if(mysqli_query($conn, $sql)){
                    ?>
                    <script>
                        alert("Xoa thong tin that bai!");
                        window.location.replace("thongTinDiem.php");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Xoa thong tin that bai!");
                        window.location.replace("thongTinDiem.php");
                    </script>
                    <?php
                }
        ?>
    </body>
</html>