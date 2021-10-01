@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2>ユーザー情報更新</h2>

            <form action="" method="">
                @csrf
                <table class="table">
                    <tr>
                        <th>名前</th>
                        <th>メール</th>
                        <th>役割</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="" value="{{ $name }}"></td>
                        <td><input type="text" name="" value="{{ $email }}"></td>
                        <td><input type="text" name="" value="{{ $role }}"></td>
                    </tr>
                </table><!-- /.table -->
                <input type="submit" value="更新する" class="btn btn-primary">
                <a href="{{ route('users.index') }}">一覧に戻る</a>
            </form>
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection
