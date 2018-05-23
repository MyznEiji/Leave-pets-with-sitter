@extends('verticalnavbar')


@section('vertical')

    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="text-center">
          <span style="font-size:24px;">Calendar</span>

        </div>
      </div>

      <div class="panel-body">

        {{ Form::open(['url' => "/listings/{$listing->id}/calendar_update", 'method' => 'PATCH']) }}

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>予約できない日</label>
                    <input type="text" name="calendar" value="{{ $listing->calendar }}" placeholder="例 20180521 " class="form-control">
                </div>
            </div>
        </div>

        <div class="actions">
          <input type="submit" value="SENT" class= "btn btn-danger">
        </div>
          {{ Form::close() }}
      </div>
    </div>
@endsection
