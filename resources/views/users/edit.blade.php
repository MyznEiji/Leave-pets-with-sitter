@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3 row-space-4">
    <!-- 自分のプロフィールへのリンク -->



    <a class="btn btn-default btn-full"  href="/users/{{ $user->id }}">自分のプロフィールを確認する</a>
    </div>

    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading">プロフィールを編集</div>
        <div class="panel-body">
          {{ Form::open(['url' => "users/$user->id", 'method' => 'PATCH']) }}

            <div class="form-group">
              <input class="form-control" placeholder="name" type="text" name="name" value="{{$user->name}}" autofocus="true">
            </div>

            <div class="form-group">
              <input class="form-control" placeholder="email" type="text" name="email" value="{{$user->email}}">
            </div>

            <div class="form-group">
              <input class="form-control" placeholder="phone_number" type="text" name="phone_number" value="{{$user->phone_number}}">
            </div>

            <div class="form-group">
              <textarea class="form-control" cols="30" name="description" placeholder="description" rows="10">{{$user->description}}</textarea>
            </div>


            <div class="actions">
              <input class="btn btn-primary"  type="submit" value="SENT">
            </div>
            {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
