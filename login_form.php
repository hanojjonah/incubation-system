<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- bootstrap links for icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <form class="row g-3 border rounded p-2 text-secondary">
                    <div class="col-12">
                        <a href="#" class="d-flex justify-content-center" style="text-decoration: none;">
                            <img src="images/background01.png" alt="ku_logo" width="50" height="44" class="d-inline-block align-text-top mr-2">

                            <div class="d-inline-block align-middle ms-2">
                                <span class="d-block fw-bold">Chandaria Incubate</span>
                                <span class="d-block fw-bold">Management System</span>
                            </div>
                        </a>
                    </div>
                    <h5 class="text-center">Welcome Back!</h5>
                    <div class="col-12">
                        <label for="userName" class="form-label">Name</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person"></i></div>
                            <input type="text" class="form-control" id="userName" name="userName">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="userEmail" class="form-label">Email</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                            <input type="text" class="form-control" id="userEmail" name="userEmail">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="userPassword">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-50">Sign in
                            <i class="bi bi-box-arrow-in-right ps-3"></i>
                        </button>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <a href="#" class="" style="text-decoration: none">Password recovery</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- bootstrap js links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>