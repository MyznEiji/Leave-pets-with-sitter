@extends('layout')

@section('content')
<div class="container auth_form">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center form_color">
      <h2>Log in</h2><hr><br><br>
      {{ Form::open() }}
          <div class="form-group has-success">
              <label>Nickname <em>(6 characters maximum)</em><br><label><br>
              <input type='text' placeholder="Nickname" name="name" autofocus="autofocus" class="form-control">
          </div><br><br>

          <div class="form-group has-success">
              <label>Email</label><br>
              <input type="email" placeholder="email" name="email" class="form-control">
          </div><br><br>

          <div class="form-group has-success">
              <label>Password</label>
              @if (false)
                  <em>(6 characters minimum)</em>
              @endif
              <br />
              <input type="password" placeholder="password" name="password" autocomplete="off" class="form-control">
          </div><br><br>

          <div class="form-group has-success">
              <label>password confirmation</label><br>
              <input type="password" placeholder="password_confirmation" name="password_confirmation" autocomplete="off" class="form-control">
          </div><br><br>

          <div class="actions">
              <input type="submit" class="btn btn-success" value="Sign up">
          </div><br><br>
      {{ Form::close() }}

    </div>
  </div>
</div>
@endsection
