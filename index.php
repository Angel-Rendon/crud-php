<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="app/public/css/index.css">
    <link rel="icon" type="image/x-icon" href="assets/logo-app.png">
    <title>verurera-tech</title>
</head>

<body>
    <div class="container-fluid vh-100 d-flex align-items-center p-0">
        <div class="login-container row-cols-12 d-flex justify-content-center">
            <!-- login container -->
            <div class="login-card row p-3 rounded">
                <!-- Login titulo -->
                <div class="col-sm-12 d-flex justify-content-center align-items-center fs-1 p-0">
                    <p class="font-login bg-success px-5 align-middle fw-bold text-light rounded">
                        login <span class="bi bi-person-circle"></span>
                    </p>
                </div>
                <!-- Login form -->
                <form action="#" class="col-sm-12">
                    <div class="my-3">
                        <label for="exampleInputEmail1" class="font-login form-label fw-bold">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="my-3">
                        <label for="exampleInputPassword1" class="font-login form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Sing in</button>
                </form>
            </div>
        </div>
    </div>
    <!-- scripts bootstrap -->
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>