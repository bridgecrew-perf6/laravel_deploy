@extends('layouts.app', ['authgroup' => 'admin'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Shop')}}</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6 text-md-center">
                            {{ __('Shop Name') }}
                        </div>
                        <div class="col-md-6 md-text-left">
                            {{$shop->shop_name}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 text-md-center">
                            {{ __('Shop Pref') }}
                        </div>
                        <div class="col-md-6">
                            {{$shop->shop_pref}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 text-md-center">
                            {{ __('Shop City') }}
                        </div>
                        <div class="col-md-6">
                            {{$shop->shop_city}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 text-md-center">
                            {{ __('Nearest Station') }}
                        </div>
                        <div class="col-md-6">
                              {{$shop->nearest_station}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 text-md-center">
                            {{ __('Budget Min') }}
                        </div>
                        <div class="col-md-6">
                            {{$shop->budget_min}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 text-md-center">
                            {{ __('Budget Max') }}
                        </div>
                        <div class="col-md-6">
                             {{$shop->budget_max}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
