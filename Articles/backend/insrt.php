<?php
    session_start();
    include './connection.php';

    $jsonData = json_decode(file_get_contents('php://input'), true);
    
    if(isset($jsonData["isRequested"])){
        $articleAttachedID = rand(0,600).date("Y-m-d").rand(0, 500);
        // $insrtStr = "insert into tbl_articles(article_title, article_keyword, article_desc, article_blog, writer_id) values('" . $jsonData["articleName"] . "', '". $jsonData["articleKeyword"]."', '". $jsonData["articleBrief"] ."', '". $jsonData["articleMore"] ."', ". $_SESSION["user_id"] .")";
        $insrtStr = "insert into tbl_articles(article_attachid, article_title, article_keyword, article_desc, article_blog, writer_id) values('". $articleAttachedID ."', '" . $jsonData["articleName"] . "', '". $jsonData["articleKeyword"]."', '". $jsonData["articleBrief"] ."', '". $jsonData["articleMore"] ."', ". 2 .")";

        $resultInsrtQu = mysqli_query($con, $insrtStr);

        if($resultInsrtQu){
            $selQu = "select article_id from tbl_articles where article_attachid = '" . $articleAttachedID . "'";

            $resultSel = mysqli_query($con, $selQu);
            if($resultSel){
                while($row = mysqli_fetch_assoc($resultSel)){
                    echo $row["article_id"]."sucessfully inserted record!";
                }
            }else{
                echo "Something went wrong!";
            }
        }else{
            echo "Something went wrong!" . $insrtStr;
        }
    }else{
        header("../");
    }
?>