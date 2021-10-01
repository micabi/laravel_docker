@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2>ユーザー一覧</h2>
            @isset( $users )
            <table class="table">
                <tr>
                    <th>名前</th>
                    <th>メール</th>
                    <th>詳細</th>
                </tr>
                @foreach( $users as $user )
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('users.show', ['user' => $user->id]) }}">詳細をみる</a></td>
                </tr>
                @endforeach
            </table><!-- /.table -->
            @endisset

        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection
