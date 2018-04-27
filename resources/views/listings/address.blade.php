@extends('verticalnavbar')

@section('vertical')
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-center">
                    <span style="font-size:24px;">住所の編集</span>
                </div>
            </div>

            <div class="panel-body">

              {{ Form::open(['url' => "/listings/{$listing->id}/address_update", 'method' => 'PATCH']) }}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>住所</label>
                                <input type="text" name="address" value="{{ $listing->address }}" placeholder="例: 東京都港区六本木６丁目１１−１" class="form-control">
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
