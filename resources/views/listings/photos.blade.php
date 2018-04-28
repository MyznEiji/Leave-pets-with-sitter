@extends('verticalnavbar')

@section('vertical')

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-center">
                    <span style="font-size:24px;">リスティング写真の編集</span>
                </div>
            </div>

            <div class="panel-body">

                    <div class="dz-message needsclick">
                        <h3>ファイルをここにドロップしてください。</h3>
                        <strong>アップロードするにはここをクリックしてください</strong>
                    </div>

                    <div class="fallback">
                      <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                          <div>
                            {{ Form::open(['url' => "/listings/{$listing->id}/photos_update", 'method' => 'post', 'class' => 'dropzone', 'id' => 'imageUpload', 'enctype' => 'multipart/form-data',  'files'=> true]) }}
                            {{ csrf_field() }}
                            {{ Form::close() }}
                          </div>
                      </div>
                    </div>




            </div>
        </div>


@endsection
