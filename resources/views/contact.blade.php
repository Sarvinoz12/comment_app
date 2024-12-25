@extends('layouts.master')
@section('content')
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

                <input name="order" type="hidden" value="{{$product->name}}">

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
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
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
@endsection
