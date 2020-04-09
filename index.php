<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <header>
        <nav class="navbar">
          <a href="./">Admin</a>
          <p>Nguyễn Văn Hùng</p>
        </nav>
    </header>
    <main>
      <div class="sidebar">
        <a class="active" href="./">Tài Khoản</a>
        <a href="#thongtin">Thông tin</a>
        <a href="#ctkm">CT Khuyến mại</a>
      </div>
      <div class="content">
        <a class="btn btn-success" href="taotaikhoan.php">Thêm tài khoản</a>
        <table class="table table-striped">
          <tr>
            <th style="border-radius: 10px 0 0 0;">id</th>
            <th>Tên người dùng</th>
            <th>Gmail</th>
            <th>Thông tin</th>
            <th style="border-radius: 0 10px 0 0;">Chức năng</th>
          </tr>
          <?php
            include 'connect.php';
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
              while ($row = $result->fetch_assoc()){
                echo "<tr>
                <td>". $row['id'] ."</td>
                <td>". $row['ten'] ."</td>
                <td>". $row['email'] ."</td>
                <td>". $row['thongtin'] ."</td>
                <td class='chucnang'>
                  <a class='btn btn-outline-primary' href='edit-user.php?edit=$row[id]'>Sửa</a>
                  <a class='btn btn-outline-danger' href='del-user.php?del=$row[id]'>Xoá</a>
                </td>
              </tr>";
              }
            }
          ?>
        </table>
      </div>          
    </main>
    <footer>
      Admin
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>