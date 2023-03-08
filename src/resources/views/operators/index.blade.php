@extends('layouts.app')
@include('layouts.navigation')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mb-3">オペレータ一覧</h2>
        </div>
        <div class="col text-end">
            <a class="btn btn-primary" href="{{ route('operators.create') }}">新規作成</a>
        </div>
    </div>
    <table class="table table-primary table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">名前</th>
                <th scope="col">メールアドレス</th>
                <th scope="col">作成日</th>
                <th scope="col">更新日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($operators as $operator)
            <tr>
                <td>
                    <a href="{{ route('operators.show', ['operator'=> $operator->id]) }}" >{{ $operator->id }}</a>
                </td>
                <td>{{ $operator->name }}</td>
                <td>{{ $operator->email }}</td>
                <td>{{ $operator->created_at }}</td>
                <td>{{ $operator->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection