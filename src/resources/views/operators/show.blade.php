@extends('layouts.app')
@include('layouts.navigation')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">オペレータ詳細</div>

                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="id" class="col-sm-4 col-form-label">{{ __('ID') }}</label>
                        <div class="col-sm-8">
                            <span>{{ $operator->id }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-4 col-form-label">{{ __('名前') }}</label>
                        <div class="col-sm-8">
                            <span>{{ $operator->name }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-4 col-form-label">{{ __('メールアドレス') }}</label>
                        <div class="col-sm-8">
                            <span>{{ $operator->email }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="role" class="col-sm-4 col-form-label">{{ __('権限') }}</label>
                        <div class="col-sm-8">
                            <span>{{ App\Models\Operator::ROLE_LIST[$operator->role] }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="created_at" class="col-sm-4 col-form-label">{{ __('作成日時') }}</label>
                        <div class="col-sm-8">
                            <span>{{ $operator->created_at }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="updated_at" class="col-sm-4 col-form-label">{{ __('更新日時') }}</label>
                        <div class="col-sm-8">
                            <span>{{ $operator->updated_at }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-secondary" href="/operators">戻る</a>
                        </div>
                        <div class="col text-end">
                            <a class="btn btn-primary" href="{{ route('operators.edit', ['operator'=> $operator->id]) }}" >
                                編集
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection