@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2>ユーザー詳細</h2>

            <form action="{{ route('users.edit', ['user' => $id]) }}" method="get">
                @csrf
                <table class="table">
                    <tr>
                        <th>名前</th>
                        <th>メール</th>
                        <th>役割</th>
                    </tr>
                    <tr>
                        <td>{{ $name }}</td>
                        <td>{{ $email }}</td>
                        <td>{{ $role }}</td>
                    </tr>
                </table><!-- /.table -->
                <input type="submit" value="編集する" class="btn btn-primary">
                <a href="{{ route('users.index') }}">一覧に戻る</a>
            </form>
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection
