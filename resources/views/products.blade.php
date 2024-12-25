@extends('layouts.master')
@section('content')
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
@endsection
