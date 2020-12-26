<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];

    $con = mysqli_connect("localhost", "root", "", "sample");
    $sql = "select * from phj_member where id='$id'";
    $result = mysqli_query($con, $sql);

    $num_match = mysqli_num_rows($result);

    if(!$num_match)
    {
        echo("
               <script>
                 window.alert('로그인 실패')
                 history.go(-1)
               </script>
             ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pass"];
    
        mysqli_close($con);
    
        if($pass != $db_pass)
        {
        
            echo("
                  <script>
                    window.alert('로그인 실패')
                    history.go(-1)
                  </script>
               ");
            exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["userlevel"] = $row["level"];
            $_SESSION["userpoint"] = $row["point"];
            
            echo("
                  <script>
                    window.alert('로그인 되었음')
                    location.href = 'phj_index.php';
                  </script>
                ");
        }
    }
?>
