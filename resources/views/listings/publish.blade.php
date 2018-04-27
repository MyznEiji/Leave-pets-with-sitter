@extends('verticalnavbar')


@section('vertical')
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-center">
                    <span style="font-size:24px;">公開する</span>
                </div>
            </div>

            <div class="panel-body">

              {{ Form::open(['url' => "/listings/$listing->id/publish_update", 'method' => 'PATCH']) }}

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="publish" class='form-control' autofocus required>
                            <p>選択してください</p>

                            <?php
                              if ($listing->active == 0)
                              {
                                  $result = "公開する";
                              }
                              else {
                                $result = "非公開にする";
                              }
                             ?>

                             
                            <option value="">{{ $result  }}</option>
                            <option value="true">公開する</option>
                            <option value="false">非公開にする</option>
                          </select>
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
