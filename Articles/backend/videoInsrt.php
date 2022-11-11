<?php
    session_start();
    include './connection.php';

    if(isset($_POST["isRequested"])){
        $insrtStr = "insert into tbl_videoarticle values(" . $_POST["articleID"] . ", '". $_POST["videoLink"] ."')";

        $resultInsrtQu = mysqli_query($con, $insrtStr);

        if($resultInsrtQu){
            echo "successfully inserted Data!";
        }else{
            echo "Something went wrong!";
        }
    }else{
        header("../");
    }
?>