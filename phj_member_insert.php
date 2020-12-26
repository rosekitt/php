<?php  //#2 회원정보 처리페이지
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $address  = $_POST["address"];


    $regist_day = date("Y-m-d (H:i)");  


    $con = mysqli_connect("localhost", "root", "", "sample");

    $sql = "insert into phj_member(id, pass, name, address, regist_day, level, point) ";
    $sql .= "values('$id', '$pass', '$name', '$address', '$regist_day', 9, 0)";

    mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);

    echo "
    	      <script>
    	          location.href = 'phj_index.php';
    	      </script>
    	  ";
?>