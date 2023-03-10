<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>index.php</title>
    <style>
        body {
            margin: 20px;
        }

        tr {
            padding: 5px;
        }

        a:link{
            text-decoration: none;
            color: black;
        }
    </style>
  </head>
  <table class="table table-striped">
    <tr><td>순번</td><td>아이디</td><td>이름</td><td>핸드폰</td><td>가입날짜</td><td>기타</td>
  <?php
    include('./db_conn.php');
    $query = "select * from register order by id desc";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    for($i = 0; $i < $count; $i++){ 
        $re = mysqli_fetch_row($result); //한줄씩 가져오기
        echo "<tr><td>$re[0]</td><td>$re[1]</td><td>$re[3]</td><td>$re[4]</td><td>$re[5]</td><td><a href='delete_form.php?b=$re[0]'>삭제</a></td>";
    }

    mysqli_close($conn);
  ?>
</table>
<div style = "margin-left: 700px">
    <a href="insert.html" class="btn btn-primary">Member Add</a>
</div>