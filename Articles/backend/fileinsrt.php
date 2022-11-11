<?php
    include './connection.php';
   
    $temp_dir_file = $_FILES["elemFile"]["tmp_name"];
        $upldedFileName = $_FILES["elemFile"]["name"];
        
        $newFileName = "article_doc". rand(1, 10000). "d_". date("dmy");
        $fileExtnsn = substr($upldedFileName, strrpos($upldedFileName, "."));
        $finalFileName = $newFileName.$fileExtnsn;

        $insrtStr = "insert into tbl_filearticle values(" . $_POST["articleID"] . ", '". $finalFileName ."')";

        $resultInsrtQu = mysqli_query($con, $insrtStr);

        if($resultInsrtQu){
            echo "successfully inserted Data!";
            move_uploaded_file($temp_dir_file, "../assest/".$finalFileName);
        }else{
            echo "Something went wrong!";
        }
?>