@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Search Shop') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('search')}}">
                            @csrf
                        <div class="row mb-3">
                            <label for="shop_name" class="col-md-4 col-form-label text-md-end">{{ __('Shop Name') }}</label>

                            <div class="col-md-6">
                                <input id="shop_name" type="text" class="form-control @error('shop_mame') is-invalid @enderror" name="shop_name" value="{{ old('shop_name') }}" autocomplete="shop_name" autofocus>

                                @error('shop_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="shop_pref" class="col-md-4 col-form-label text-md-end">{{ __('Shop Pref') }}</label>

                            <div class="col-md-6">
                                <input id="shop_pref" type="text" class="form-control @error('shop_pref') is-invalid @enderror" name="shop_pref" value="{{ old('shop_pref') }}"  autocomplete="shop_pref" autofocus>

                                @error('shop_pref')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="shop_city" class="col-md-4 col-form-label text-md-end">{{ __('Shop City') }}</label>

                            <div class="col-md-6">
                                <input id="shop_city" type="text" class="form-control @error('shop_city') is-invalid @enderror" name="shop_city"  autocomplete="shop_city">

                                @error('shop_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nearest_station" class="col-md-4 col-form-label text-md-end">{{ __('Nearest Station') }}</label>

                            <div class="col-md-6">
                                <input id="nearest_station" type="text" class="form-control @error('nearest_station') is-invalid @enderror" name="nearest_station" autocomplete="nearest_station">

                                @error('nearest_station')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="budget_min" class="col-md-4 col-form-label text-md-end">{{ __('Budget Min') }}</label>

                            <div class="col-md-6">
                                <input id="budget_min" type="text" class="form-control @error('budget_min') is-invalid @enderror" name="budget_min"  autocomplete="budget_min">

                                @error('budget_min')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="budget_max" class="col-md-4 col-form-label text-md-end">{{ __('Budget Max') }}</label>

                            <div class="col-md-6">
                                <input id="budget_man" type="number" class="form-control @error('budget_max') is-invalid @enderror" name="budget_max" autocomplete="budget_max">

                                @error('budget_max')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="use_case" class="col-md-4 col-form-label text-md-end">{{ __('Use Case') }}</label>
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="use_case[]" value="1">宴会
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="use_case[]" value="2">少人数
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="use_case[]" value="3">女子会
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="food" class="col-md-4 col-form-label text-md-end">{{ __('Food') }}</label>
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="food[]" value="1">海鮮
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="food[]" value="2">銘柄牛
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="food[]" value="3">地酒
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="food[]" value="4">クラフトビール
                                </div>
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>

                            </div>
                        </div>

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
