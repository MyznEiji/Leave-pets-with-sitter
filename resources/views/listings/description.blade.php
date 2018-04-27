@extends('verticalnavbar')

@section('vertical')
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-center">
                    <span style="font-size:24px;">リスティング内容の編集</span>
                </div>
            </div>

            <div class="panel-body">
                {{ Form::open(['url' => "/listings/$listing->id/description_update", 'method' => 'PATCH']) }}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>タイトル</label>
                                <input type="text" name="listing_title" value="{{ $listing->listing_title}}" placeholder="リスティングタイトルを記載しましょう" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>内容</label>
                                <textarea name="listing_content" rows="8" class="form-control" placeholder="リスティングの内容について記述してください">{{$listing->listing_content}}</textarea>
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
