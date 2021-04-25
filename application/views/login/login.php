<!doctype html>
<html lang="en">

<head>
    <title>Tahfidz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <style>
    html {
        height: 100%;

    }

    body {
        /* background-color: #28df99 !important; */
        height: 100% !important;
    }

    p{
        font-family: 'Nunito' !important;
    }

    .container {
        height: 100% !important;
    }

    @font-face {
        font-family: gloss;
        src: url(http://web-tahfidz.sditwahdahbtg.com/home_assets/gloss.ttf);
    }

    .gloss {
        font-family: 'gloss'!important;
        color: black;
    }
</style>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container h-100">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="mt-4">
                                <h1 class="gloss mt-2 my-2" style=" text-align:center; color: #28df99 !important">Tahfidz</h1>
                                <p class=" mt-2 my-2" style=" text-align:center; color: #150129 !important">Aplikasi Setoran
                                    Hafalan Quran, <br> Pondok Pesantren Nayla Risqianan</p>
                                    <p class=" mt-2 my-2" style=" text-align:center; "> <strong>Login</strong> </p>
                                </div>

                                <div class="card-body">


                                    <form method="POST" action="http://web-tahfidz.sditwahdahbtg.com/login/student">
                                        <input type="hidden" name="_token" value="3m3ijB79ytXuZo1lrBWVQEGuzlBZ75SWrEL5D6Fy">
                                        <div class="form-group row">
                                            <label for="email"
                                            class="col-md-4 col-form-label text-md-right">Email</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                class="form-control " name="email"
                                                value="" required autocomplete="email" autofocus>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                            class="col-md-4 col-form-label text-md-right">Password</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                class="form-control " name="password"
                                                required autocomplete="current-password">

                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-border border-dark">
                                                    Login
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>