<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
  <h2>Đăng nhập</h2>
  <form action="{{url('process')}}" method="post">
    <div class="mb-3 mt-3">
      <label for="text">Name:</label>
      <input type="text" class="form-control" id="usname" placeholder="Nhập name" name="usname">
    </div>
    <div class="mb-3">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Lưu mật khẩu
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Đăng nhập</button>
  </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>