



 <?php echo "Hello PHP."; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body style="background:url(background_login2.jpg) top center ; background-size:cover;">
    <div class="container-fluid mt-5" >
        <div class="row">
            <div class="col-lg-3 p-5 mx-auto mt-5" style=" border-radius:10px;box-shadow: 0px 0px 8px 0px #000; background:white;">
                <form action="validation.php" method="POST">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Remmber me
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary mt-3">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>