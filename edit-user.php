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
        <a href="#news">Thông tin</a>
        <a href="#contact">CT Khuyến mại</a>
      </div>
      <div class="content">
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
            $idtk = $_GET['edit'];
            $sql = "SELECT * FROM user WHERE id = '$idtk'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
              while ($row = $result->fetch_assoc()){
                echo "
                  <form action='update-user.php' method='POST' role='form'>
                    <tr>
                      <td><input type='num' name='edit-id' value='$row[id]'></td>
                      <td><input type='text' name='edit-ten' value='$row[ten]'></td>
                      <td><input type='text' name='edit-email' value='$row[email]'></td>
                      <td><input type='text' name='edit-thongtin' value='$row[thongtin]'></td>
                      <td class='chucnang'>
                        <input class='btn btn-outline-primary' type='submit' value='Lưu'>
                        <a class='btn btn-outline-danger' href='./'>Huỷ</a>
                      </td>
                    </tr>
                  </form>
                ";
              }
            }
          ?>
        </table>                 
      </div>   
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>