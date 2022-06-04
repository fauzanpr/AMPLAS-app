<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../../assets/css/tukang-profile.css" rel="stylesheet">
    <style>
        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
        }

        @media (min-width: 1025px) {
            .h-custom-2 {
                height: 100%;
            }
        }
    </style>
</head>
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">

                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">Log-In</span>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><br></h3>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example18">Email address</label>
                            <input type="email" id="form2Example18" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example28">Password</label>
                            <input type="password" id="form2Example28" class="form-control form-control-lg" />
                        </div>

                        <div class="form-check d-flex justify-content-start mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                            <label class="form-check-label" for="form1Example3"> Remember password </label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="button">Login</button>
                        </div>

                        <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                        <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

                    </form>

                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                    alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;"> -->
            </div>
        </div>
    </div>
</section>