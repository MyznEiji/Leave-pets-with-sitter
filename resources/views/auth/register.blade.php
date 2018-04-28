@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

                  {!! Form::open(array('files' => true, 'class' => 'form-horizontal', 'role' => "form")) !!}
                  {{ csrf_field() }}

                   @if (count($errors) > 0)
                     <div id="error_explanation">
                       <ul>
                         @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                         @endforeach
                       </ul>
                     </div>
                   @endif

                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                       {{ Form::label('name', '', ['class' => "col-md-4 control-label" ]) }}
                       <div class="col-md-6">


                           {{ Form::text('name', '', ['placeholder' => '名前を入力', 'id' => 'name', 'class' => "form-control", 'name' => 'name']) }}

                           @if ($errors->has('name'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('name') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>









                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {{ Form::label('email', '', ['class' => "col-md-4 control-label" ]) }}

                       <div class="col-md-6">
                         {{ Form::email('email', '', ['placeholder' => 'メールアドレスを入力', 'id' => 'email', 'class' => "form-control", 'name' => 'email']) }}


                           @if ($errors->has('email'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>


                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                       {{ Form::label('password', '', ['class' => "col-md-4 control-label" ]) }}

                      <div class="col-md-6">
                        {{ Form::password('password', '', ['placeholder' => 'パスワードを入力', 'id' => 'password', 'class' => "form-control", 'name' => 'password']) }}


                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>



                  <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                       {{ Form::label('password_confirmation', '', ['class' => "col-md-4 control-label" ]) }}

                      <div class="col-md-6">
                        {{ Form::password('password_confirmation', '', ['placeholder' => 'パスワードを入力(確認)', 'id' => 'password_confirmation', 'class' => "form-control", 'name' => 'password_confirmation']) }}


                          @if ($errors->has('password_confirmation'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>


                  <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                       {{ Form::label('avatar', '', ['class' => "col-md-4 control-label" ]) }}

                      <div class="col-md-6">
                        {{ Form::file('avatar', '', ['id' => 'avatar', 'class' => "form-control", 'name' => 'avatar']) }}
                      </div>
                  </div>



                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">

                          <button type="submit" class="btn btn-primary">
                              <i class="fa fa-btn fa-user"></i> Register
                          </button>
                      </div>
                  </div>


                   {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
