<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Middleware</title>
</head>
<body>
    <div class="container">
        <div class="card-header ">
            <h1>Login Page Middleware</h1>
            <a href="register" class="btn btn-success float-end">Registeration</a> <br> <br>
            <div class="card-body">
                <form class="row g-3" action="{{route('loginMatch')}}" method="POST" >
                    @csrf

                    <div class="col-md-10">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-10">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="inputPassword4">
                    </div>



                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </form>
            </div>
        </div>

    </div>
</body>
</html>
