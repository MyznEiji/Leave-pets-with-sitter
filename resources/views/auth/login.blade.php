@extends('layout')

@section('content')

<div class="container auth_form">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center form_color">
      <h2>Log in</h2><hr><br><br>

      {{ Form::open() }}
          <div class="form-group has-success">
              <label>Email</label><br>
              <input type="email" name="email" placeholder="email" autofocus="autofocus" class="form-control">
          </div><br><br>

          <div class="form-group has-success">
              <label>Password</label><br>
              <input type="password" name="password" placeholder="password" autocomplete="off" class="form-control">
          </div><br><br>


          <div class="form-group has-success">
              <label>Remember me</label><br>
              <input type="checkbox" value="1" name="rememver_me">
          </div><br><br>


          <div class="actions">
              <input type="submit" class="btn btn-success" value="Log in">
          </div><br><br>
      {{ Form::close() }}

    </div>
  </div>
</div>
@endsection
