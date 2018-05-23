@extends('layout')

@section('content')
<div class="container">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="text-center">
          <span style="font-size:18px;">シッター予定</span>
        </div>
      </div>
      <ul class="ul-unstyled">
        @foreach($listings as $listing)
          @foreach($listing->reservations as $reservation)
            <li class="panel-body">
              <div class="row-table">
                <div class="col-md-3 col-sm-3 col-middle row-space-2">
                  <div class="panel-list-img text-center">
                    {{ Html::image("images/{$reservation->listing->photos[0]["image"]}",'a picture') }}
                  </div>
                </div>

                <div class="col-sm-7 col-lg-7 col-middle row-space-2">
                  <span class="listing-title">{{ $reservation->listing->listing_title }}</span>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-10 col-middle row-space-2">
                    {{$reservation->start_date }}~
                </div>

                <div class="col-md-2 col-sm-2 col-xs-10 col-middle row-space-2">
                  {{ Html::image("images/{$reservation->listing->user->avatar}", 'a picture', ['class' => 'img-circle profile-1']) }}
                  {{ $reservation->listing->user->name }}
                </div>
              </div>
            </li>
          @endforeach
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
