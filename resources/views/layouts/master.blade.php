<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset("assets/CSS/style.css")}}"/>
    <link rel="stylesheet" href="{{asset('assets/CSS/contact.css')}}"/>
    <title>Asosiy</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script defer src="{{asset('assets/js/index.js')}}"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="headerBlock">
            <div class="logoBlock">
                <img src="{{asset('assets/Assets/Icons/logo.svg')}}" alt="" class="logo_img"/>
            </div>
            <nav class="navbar">
                <a href="{{route('index')}}" class="navLink">Asosiy</a>
                <a href="{{route('about')}}" class="navLink">Biz haqimizda</a>
                <a href="{{route('product')}}" class="navLink">Mahsulotlarimiz</a>
                <a href="{{route('comment')}}" class="navLink">Fikrlar</a>
                <a href="{{route('contact')}}" class="navLink">Bog’lanish</a>
            </nav>
        </div>
    </div>
</header>


@yield('content')

<footer>
    <div class="bgbrown">
        <div class="container">
            <div class="instagram_addressBlock">
                <p class="instagram_addressText">
                    Bizning instagram manzilimiz:
                    <a href="#" class="instaLink">@yummy_brand</a>
                </p>
            </div>
            <ul class="footer_block">
                <li class="footerItem">
                    <h5 class="worktimeTitle">Ish vaqti</h5>
                    <p class="worktimeText">Dush-Shan: 9:00 19:00</p>
                    <p class="worktimeText">Yakshanba: 7:00 1:00</p>
                    <p class="worktimeText">Bayramlarda yopiladi</p>
                </li>
                <li class="footerItem">
                    <h5 class="worktimeTitle">Ish vaqti</h5>
                    <p class="worktimeText">Dush-Shan: 9:00 19:00</p>
                    <p class="worktimeText">Yakshanba: 7:00 1:00</p>
                    <p class="worktimeText">Bayramlarda yopiladi</p>
                </li>
                <li class="footerItem">
                    <h5 class="worktimeTitle">Manzil:</h5>
                    <p class="adress">
                        Manzil: Xorazm viloyati, urganch shaxri, Al-xorazmiy ko’chasi,
                        11-uy
                    </p>
                </li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>
