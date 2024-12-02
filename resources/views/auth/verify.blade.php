@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Emailni tasdiqlash') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tasdiqlash havolasi emailingizga yuborildi') }}
                        </div>
                    @endif

                    {{ __('Emailingizni tekshiring') }}
                    {{ __("Agar emailingizga havola olmagan bo'lsangiz") }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __("qayta jo'natish uchun bosing") }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
