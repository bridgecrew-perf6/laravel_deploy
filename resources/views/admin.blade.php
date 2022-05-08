@extends('layouts.app', ['authgroup' => 'admin'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if(session('flash_message'))
        <div class="alert alert-primary text-center" role="alert">
            {{session('flash_message')}}
        </div>
    @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">管理者{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{ url('/list') }}">一覧画面に進む</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">店舗登録</div>
                    <div class="card-body">
                        <a href="{{ url('/insert') }}">登録画面に進む</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
