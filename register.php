<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h2, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container w-75">
    <h1 class="my-4">Register</h1>
    <form method="POST" action="./register_proccess.php">
  <div class="mb-3">
  <label for="email">Email:</label>
    <input type="text"  class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    <button type="submit" class="btn btn-primary my-4" value="register">Register</button>
</div>
</form>
    </div>
    </body>
</html>