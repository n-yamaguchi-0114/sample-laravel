@extends('layouts.app')
@include('layouts.navigation')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">オペレータ編集</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('operators.update', ['operator'=> $operator->id]) }}">
                        @method('patch')
                        @csrf

                        @error('operator')
                        <div class="col-md-6 invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('名前') }}</label>
                            <div class="col-sm-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $operator->name) }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label">{{ __('メールアドレス') }}</label>
                            <div class="col-sm-8">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $operator->email) }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">{{ __('パスワード') }}</label>
                            <div class="col-sm-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="role" class="col-sm-4 col-form-label">{{ __('権限') }}</label>
                            <div class="col-sm-8">
                                @foreach(App\Models\Operator::ROLE_LIST as $key => $value)
                                <div class="form-check form-check-inline @error('role') is-invalid @enderror">
                                    <input class="form-check-input form-check-inline @error('role') is-invalid @enderror" type="radio" name="role" id="role{{ $key }}" value="{{ $key }}" {{ old('role', $operator->role) == $key ? 'checked': '' }}>
                                    <label class="form-check-label" for="role{{ $key }}">{{ $value }}</label>
                                </div>
                                @endforeach
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary" href="{{ route('operators.show', ['operator'=> $operator->id]) }}">戻る</a>
                            </div>
                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary">更新</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection