<!DOCTYPE html>
<html>
    <body>
        <?php
            $masv=$_GET["masv"];
            $ten=$_GET["ten"];
            $gioitinh=$_GET["gioitinh"];
            if(strcmp($gioitinh,"nam")==0){
                $gt=1;
            }else{
                $gt=0;
            }
            $ngaysinh=$_GET["ngaysinh"];
            $quequan=$_GET["quequan"];
            $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="qlsv";

                $conn = mysqli_connect($servername, $username,$password, $dbname);

                if (!$conn) {
                    die("Failed to connect DataBase!" .
                mysqli_connect_error());
                }

                $sql="INSERT INTO sinhvien VALUES ('$masv', '$ten', $gt, '$ngaysinh', '$quequan');";
                if(mysqli_query($conn, $sql)){
                    ?>
                    <script>
                        alert("Them thong tin thanh cong!");
                        window.location.replace("thongTinSinhVien.php");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Them thong tin that bai!");
                        window.location.replace("thongTinSinhVien.php");
                    </script>
                    <?php
                }
        ?>
    </body>
</html>