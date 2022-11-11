<?php
    session_start();
    $_SESSION["userAccount"] = 1;
    include './connection.php';

    $jsonData = json_decode(file_get_contents('php://input'), true);
    
    if(isset($jsonData["isRequested"])){
        // $insrtStr = "insert into tbl_articles(article_title, article_keyword, article_desc, article_blog, writer_id) values('" . $jsonData["articleName"] . "', '". $jsonData["articleKeyword"]."', '". $jsonData["articleBrief"] ."', '". $jsonData["articleMore"] ."', ". $_SESSION["userAccount"] .")";
        $insrtStr = "INSERT INTO tbl_articles(article_title, article_keyword, article_desc, article_blog, writer_id) VALUES('asd', 'IT', 'asd', 'asd', 1)";

        $resultInsrtQu = mysqli_query($con, $insrtStr);

        if($resultInsrtQu){
            echo "suucessfully inserted record!";
        }else{
            echo "Something went wrong!" . $insrtStr;
        }
    }else{
        header("../");
    }
?>