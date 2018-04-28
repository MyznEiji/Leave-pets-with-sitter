@extends('layout')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-center">
                    <span style="font-size:18px;">リスティング一覧</span>
                </div>
            </div>
            <ul class="ul-unstyled">
              @foreach($listings as $listing)

                    <li class="panel-body">
                        <div class="row-table">
                            <div class="col-md-3 col-sm-3 col-middle row-space-2">
                                <div class="panel-list-img text-center">
                                    @if(count($listing->photos) > 0 )
                                      {{ Html::image("images/{$listing->photos[0]->image}") }}
                                    @endif


                                </div>
                            </div>

                            <div class="col-sm-7 col-lg-7 col-middle row-space-2">
                                <span class="listing-title">{{ $listing->listing_title }}</span>
                            </div>

                            <div class="col-md-3 col-sm-3 col-middle row-space-1">
                                <a href="listings/{{$listing->id}}/basics" class="btn btn-primary pull-right">残り5ステップ</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</div>

@endsection
