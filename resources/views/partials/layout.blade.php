<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data->title }}</title>
    <script src="https://kit.fontawesome.com/243a102842.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="blur-content"></div>
    @include('partials.navbar')

    @yield('content')

    
    @if (request()->path() != 'make-an-application')
        <section class="contact-us pt-4 pb-4" style="background-image:url({{ asset('assets/images/contact-bg.jpg') }})">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 text-center">
                        <h2>Bize Ulaş!</h2>
                    </div>
                </div>
                <form action="#" class="row" @required(true)>
                    @csrf

                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" @required(true) placeholder="Ad & Soyad" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" @required(true) placeholder="E-Mail Adresi" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" @required(true) placeholder="Telefon No." class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <textarea class="form-control" @required(true) placeholder="Mesajınız" name="" id="" cols="30"
                                rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <button class="form-submit" type="submit">Gönder</button>

                    </div>
                    
                </form>

            </div>
        </section>
    @endif
    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/438937/jquery.transform2d.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
