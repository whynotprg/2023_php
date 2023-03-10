<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <style>
            .a {
                margin: 30px;
            }
            span {
              color:salmon;
            }
        </style>
        
<?php

include ('./db_conn.php');
?>
<div id="board_area" class="a"> 
  
 <span>자유롭게 글을 쓸 수 있는 게시판입니다.</span>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">번호</th>
      <th scope="col">제목</th>
      <th scope="col">글쓴이</th>
      <th scope="col">작성일</th>
       <th scope="col">추천수</th>
        <th scope="col">조회수</th>
    </tr>
  </thead><tbody>
  
<?php
          $sql = "select * from board order by idx desc limit 0,10"; 
          $result=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);

          for($i=0;$i<$num;$i++) {
            $re=mysqli_fetch_row($result);
            echo "<tr scope='col'><td>$re[0]</td><td><a href='read.php?id=$re[0]'>$re[3]</a></td><td>$re[1]</td><td>$re[5]</td><td>$re[6]</td><td>$re[9]</td></tr>";
          }
           
        ?>
      <tbody>
     </table>
    <div id="write_btn">
      <a href="write.php"><button>글쓰기</button></a>
    </div>
  </div>


