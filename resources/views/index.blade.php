@extends('layouts.master')
@section('content')
    <main id="app">
        <div class="container">
            <div class="yummyBlock">
                <div class="yummyTitles">
                    <h2 class="yummy_title">Yummy</h2>
                    <p class="yummy_text">BIZ BILAN DUNYONI YANADA YORQIN HIS ETING</p>
                    <button class="read_more_btn">Ko’proq o’qish</button>
                </div>
                <div class="yummy_image_block">
                    <img
                        src="{{asset('assets//Assets/Images/image 5.png')}}"
                        alt="shirinliklar"
                        class="cake_img"
                    />
                </div>
            </div>
        </div>
        <div class="bgall" id="about-section">
            <div class="container">
                <div class="AboutTitles">
                    <h3 class="aboutUs_text">Biz haqimizda</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="listBlock">
                <li class="listItem">
                    <img src="{{asset('assets//Assets/Images/cake1.png')}}" alt="" class="listItem_img"/>
                    <p class="descriptonText">
                        Bizning loyihamiz 2020-yil tashkil topgan.Biz sizga turli xil
                        shirinliklarni tayyorlab beramiz siz esa bizning shirinliklrimiz
                        bilan dunyoni yanada go’zalroq his eting. siz o’zingiz xoxlagan
                        shirinliklarni buyurtma bering biz sizga tayyorlab beramiz
                    </p>
                </li>
                <li class="listItem">
                    <div class="aboutUstextBlock">
                        <p class="descriptonText">
                            Sizga dunyoning eng yaxshi shokoladlarini yetkazib berish
                            ishtiyoqidamiz.
                        </p>
                        {{--                        <button class="buyBtn">HOZIR olish</button>--}}
                    </div>
                    <img src="{{asset('assets//Assets/Images/cake2.png')}}" alt="" class="listItem_img"/>
                </li>
                <li class="listItem">
                    <img src="{{asset('assets//Assets/Images/cake2.png')}}" alt="" class="listItem_img"/>
                    <div class="aboutUstextBlock">
                        <p class="descriptonText">
                            Sifat va ishonchlilikka e'tibor qaratgan holda, biz mijozlar
                            ehtiyojini qondirishni ta'minlaydigan uzluksiz tarqatish
                            tajribasini taqdim etishga intilamiz.
                        </p>
                        {{--                        <button class="buyBtn">HOZIR olish</button>--}}
                    </div>
                </li>
            </ul>
        </div>
        <div class="bgall" id="myProduct">
            <div class="container">
                <div class="AboutTitles">
                    <h3 class="aboutUs_text">Bizning mahsulotlarimiz</h3>
                </div>
            </div>
        </div>
        <div class="bgBrown">
            <div class="container">
                <ul class="productList">
                    @foreach($products as $product)
                        <li class="productCard">
                            <img  style="width:100%;height:200px;object-fit: cover;border-radius: 10px;" src="{{'storage/'.$product->photo}}" alt="">
                            <div class="productCardtext_price">
                                <p class="productCardtext">{{$product->name   }}</p>

                            </div>
                            <p class="productCardprice" style="margin: 2px">{{$product->description}}</p>
                            <div class="orderBtnBlock">
                                <a href="{{ route('contact', ['id' => $product->id]) }}" type="button" class="orderBtn">Buyurtma berish</a>
                            </div>
                            <div class="commentbox">

                                <ul>
                                    @foreach($comments as $comment)
                                        <p>{{($comment->product_id == $product->id ) ? $comment->username.':'.$comment->comment.$comment->created_at : null }}</p>
                                        <hr>
                                    @endforeach
                                </ul>

                                <form action="{{route('comments.update',$product->id)}}" method="post">

                                    @csrf
                                    @method("PUT")

                                    <div class="inputusername">
                                        <input type="text" name="username" placeholder="username" class="userInput"/>
                                    </div>

                                    <div class="commentInput">
                                        <input
                                            name="comment"
                                            type="text"
                                            placeholder="comment..."
                                            class="commentforInput"
                                        />
                                    </div>

                                    <button type="submit" class="commentSend">Send</button>
                                </form>

                            </div>
                            <div class="commentBoxopen">
                                <i class="fa-solid fa-comment"></i>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="bgContact" id="contactUs">
            <div class="container">
                <div class="contact__T">
                    <p class="contact_Title">Bog'lanish</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contactBlock">
                <form action="{{route('contact.create')}}" class="rightContactblock" method="post">
                    @csrf
                    <div class="flexBox">

                        <div class="nameInputblock">
                            <input
                                name="name"
                                type="text"
                                placeholder="Ismingiz..."
                                class="inputItem"
                            />

                        </div>
                        <div class="nameInputblock">

                            <input
                                name="email"
                                type="email"
                                placeholder="emailingiz..."
                                class="inputItem"
                            />

                        </div>
                        <div class="nameInputblock">

                            <input
                                name="telephone"
                                type="tel"
                                placeholder="Raqamingiz..."
                                class="inputItem"
                            />
                        </div>
                    </div>
                    <div class="messageInput">
              <textarea
                  name="message"
                  id=""
                  cols="112"
                  rows="22"
                  class="inputItem"
                  placeholder="Sizning xabaringiz"
              ></textarea>
                    </div>
                    <div class="sendBtnblock">
                        <button class="messageBtn" type="submit">Xabar yuborish</button>
                    </div>
                </form>
                <div class="leftContactblock">
                    <div class="addresBlock">
                        <h3 class="adressTitle">Manzil</h3>
                        <p class="adressText">XORAZM, URGANCH</p>
                    </div>
                    <div class="addresBlock">
                        <h3 class="adressTitle">Raqam</h3>
                        <p class="adressText">+998886018855</p>
                    </div>
                    <div class="addresBlock">
                        <h3 class="adressTitle">Email</h3>
                        <p class="adressText">yummy_brand@gmail.com</p>
                    </div>
                    <div class="addresBlock">
                        <h3 class="adressTitle">Ish vaqti</h3>
                        <p class="adressText">9:00 - 19:00</p>
                    </div>
                    <div class="contact_icons">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
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
    </main>
@endsection
