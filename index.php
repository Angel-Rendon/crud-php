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
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center p-0">
        <!-- login container -->
        <div class="login-card row p-3 mx-3 d-flex justify-content-center rounded">
            <!-- Login titulo -->
            <div class="
                col-sm-12
                fs-1
                fw-bold
                align-middle
                text-light
                text-center
                p-0
                w-50
                bg-success
                rounded">
                login <span class="bi bi-person-circle"></span>
            </div>
            <!-- Login form -->
            <form action="app/controller/login" method="post" class="col-sm-12">
                <div class="my-3">
                    <label for="emailUser" class="font-login form-label fw-bold">Email address</label>
                    <input type="email" class="form-control" id="emailUser" aria-describedby="emailUser" placeholder="example@gmail.com">
                </div>
                <div class="my-3">
                    <label for="passwordUser" class="font-login form-label fw-bold">Password</label>
                    <input type="password" class="form-control" id="passwordUser">
                </div>
                <button type="submit" class="btn btn-primary w-100">Sing in</button>
            </form>
        </div>
    </div>
    <!-- scripts bootstrap -->
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>