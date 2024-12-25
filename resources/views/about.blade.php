@extends('layouts.master')
@section('content')
    <main>
      <div class="container">
        <div class="yummyBlock">
          <div class="yummyTitles">
            <h2 class="yummy_title">Yummy</h2>
            <p class="yummy_text">BIZ BILAN DUNYONI YANADA YORQIN HIS ETING</p>
            <button class="read_more_btn">Ko’proq o’qish</button>
          </div>
          <div class="yummy_image_block">
            <img
              src="{{asset('assets/Assets/Images/image 5.png')}}"
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
              <img src="{{asset('assets/Assets/Images/cake1.png')}}" alt="" class="listItem_img"/>
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
              <button class="buyBtn">HOZIR olish</button>
            </div>
            <img src="{{asset('assets/Assets/Images/cake2.png')}}" alt="" class="listItem_img" />
          </li>
          <li class="listItem">
            <img src="{{('assets/Assets/Images/cake2.png')}}" alt="" class="listItem_img" />
            <div class="aboutUstextBlock">
              <p class="descriptonText">
                Sifat va ishonchlilikka e'tibor qaratgan holda, biz mijozlar
                ehtiyojini qondirishni ta'minlaydigan uzluksiz tarqatish
                tajribasini taqdim etishga intilamiz.
              </p>
              <button class="buyBtn">HOZIR olish</button>
            </div>
          </li>
        </ul>
      </div>
    </main>

@endsection
