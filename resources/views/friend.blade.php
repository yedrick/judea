
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<style>
        /* Importing fonts from Google */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');



    body {
        min-height: 100vh;
        background: linear-gradient(to bottom, #000428, #004683);
    }

    .container {
        margin-top: 100px;
    }

    .container .row .col-lg-4 {
        display: flex;
        justify-content: center;
    }

    .card {
        position: relative;
        padding: 0;
        margin: 0 !important;
        border-radius: 20px;
        overflow: hidden;
        max-width: 280px;
        max-height: 340px;
        cursor: pointer;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);

    }

    .card .card-image {
        width: 100%;
        max-height: 340px;
    }

    .card .card-image img {
        width: 100%;
        max-height: 340px;
        object-fit: cover;
    }

    .card .card-content {
        position: absolute;
        bottom: -180px;
        color: #fff;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(15px);
        min-height: 140px;
        width: 100%;
        transition: bottom .4s ease-in;
        box-shadow: 0 -10px 10px rgba(255, 255, 255, 0.1);
        border-top: 1px solid rgba(255, 255, 255, 0.2);
    }

    .card:hover .card-content {
        bottom: 0px;
    }

    .card:hover .card-content h4,
    .card:hover .card-content h5 {
        transform: translateY(10px);
        opacity: 1;
    }

    .card .card-content h4,
    .card .card-content h5 {
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 3px;
        text-align: center;
        transition: 0.8s;
        font-weight: 500;
        opacity: 0;
        transform: translateY(-40px);
        transition-delay: 0.2s;
    }

    .card .card-content h5 {
        transition: 0.5s;
        font-weight: 200;
        font-size: 0.8rem;
        letter-spacing: 2px;
    }

    .card .card-content .social-icons {
        list-style: none;
        padding: 0;
    }


    .card .card-content .social-icons li {
        margin: 10px;
        transition: 0.5s;
        transition-delay: calc(0.15s * var(--i));
        transform: translateY(50px);
    }


    .card:hover .card-content .social-icons li {
        transform: translateY(20px);
    }

    .card .card-content .social-icons li a {
        color: #fff;
    }

    .card .card-content .social-icons li a span {
        font-size: 1.3rem;
    }

    @media(max-width: 991.5px) {
        .container {
            margin-top: 20px;
        }

        .container .row .col-lg-4 {
            margin: 20px 0px;
        }
    }
</style>
</head>
<body>
    <div class="container">
        <h1 class="" style="color:#fff; text-aling:center"> <center>SELECCIONA AL MEJOR AMIGO DEL CAMPAMENTO ({{ strtoupper($texto) }})</center></h1>
        <div class="row">
            @foreach ($campa as $item)
                @if ($item->id != auth()->user()->campamenti_id)
                <div class="col-lg-4 p-4">
                    <div class="card p-0">
                        <div class="card-image">
                            {{-- <img src="https://images.pexels.com/photos/2746187/pexels-photo-2746187.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> --}}
                            <img src="{{ asset('asset/img/profil/'.$item->image) }}" style="width: 250px; height: 250px;" alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">{{ $item->name }}</h4>
                            <h5>Edad: {{ $item->age }}</h5>
                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="{{ url('process/vote/'.$item->id) }}" class="btn btn-danger">
                                        Votar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif

            @endforeach

        </div>
    </div>
</body>
</html>
