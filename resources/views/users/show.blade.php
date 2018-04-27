@extends('layout')

@section('content')


<!-- チェックマーク -->
@if($user->email)
  <script >
    window.addEventListener("load", function() {
      $("#ver-email").addClass("vertification-checked");
    });
  </script>
@endif

@if($user->phone_number)
  <script >
    window.addEventListener("load", function() {
      $("#ver-tel").addClass("vertification-checked");
    });
  </script>
@endif

@if($user->description)
  <script >
    window.addEventListener("load", function() {
      $("#ver-description").addClass("vertification-checked");
    });
  </script>
@endif




<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-4">
			<div class="user-profile row-space-4 text-center">
				<img class="profile-full img-circle" src="{{ Auth::user()->image }}" alt="">
			</div>

			<div class="panel panel-default verifications hidden-xs hidden-sm">
        <div class="panel-heading">
          認証済みID
        </div>

				<div class="panel-body">
					<div id="ver-email">
						メールアドレス
					</div>
					<br>
					<div id="ver-tel">
						電話番号
					</div>
          <br>
          <div id="ver-description">
            自己紹介
          </div>
					<br>
				</div>
			</div>
		</div>

		<div class="col-lg-9 col-md-8 col-sm-12">
			<h1>こんにちわ {{ $user->name }}さん</h1>
      <p>自己紹介</p>
      {{ $user->description}}
		</div>
	</div>
</div>
@endsection
