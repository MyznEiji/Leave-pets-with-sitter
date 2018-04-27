@extends('verticalnavbar')

@section('vertical')
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-center">
                    <span style="font-size:24px;">料金の設定</span>
                </div>
            </div>

            <div class="panel-body">

              {{ Form::open(['url' => "/listings/{$listing->id}/price_update", 'method' => 'PATCH']) }}

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>一泊あたりの料金</label>
                          <div class="input-group">
                            <div class="input-group-addon">円</div>
                            <input type="text" name="price_pernight" value="{{ $listing->price_pernight }}" placeholder="例: 100" class="form-control">
                          </div>
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
