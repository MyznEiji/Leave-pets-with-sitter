@extends('layout')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="text-center">
						<span style="font-size:24px;">ペットリスティングを掲載する</span>
					</div>
				</div>

				<div class="panel-body">
					<!-- ここからフォーム -->

          {{ Form::open(['url' => '/listings', 'method' => 'post']) }}
            <div class="row">
              <div class="col-md-12 select">
                <div class="form-group">
                  <label>お家の種類</label>
                  <select name="home_type" class='form-control' autofocus required>
                    <option value="">選択してください</option>
                    <option value="一軒家">一軒家</option>
                    <option value="マンション">マンション</option>
                    <option value="アパート">アパート</option>
                  </select>
                </div>
              </div>
            </div>
            <br>



            <div class="row">
							<div class="col-md-12 select">
								<div class="form-group">
									<label>ペットの種類</label>
                  <select name="pet_type" class='form-control' autofocus required>
                    <option value="">選択してください</option>
                    <option value="犬">犬</option>
                    <option value="猫">猫</option>
                    <option value="鳥類">鳥類</option>
                    <option value="爬虫類">爬虫類</option>
                    <option value="魚類">魚類</option>
                    <option value="両生類">両生類</option>
                    <option value="その他">その他</option>
                  </select>
								</div>
							</div>
						</div>
						<br>



            <div class="row">
							<div class="col-md-12 select">
								<div class="form-group">
									<label>ペットの飼育歴</label>
                  <select name="breeding_years" class='form-control' autofocus required>
                    <option value="">選択してください</option>
                    <option value="1">1年</option>
                    <option value="2">2年</option>
                    <option value="3">3年</option>
                    <option value="4">4年</option>
                    <option value="5">5年</option>
                    <option value="6">6年以上</option>
                  </select>
								</div>
							</div>
						</div>
						<br>



            <div class="row">
              <div class="col-md-12 select">
                <div class="form-group">
                  <label>ペットのサイズ</label>
                  <select name="pet_size" class='form-control' autofocus required>
                    <option value="">選択してください</option>
                    <option value="小型">小型</option>
                    <option value="中型">中型</option>
                    <option value="大型">大型</option>
                    <option value="超大型">超大型</option>
                  </select>
                </div>
              </div>
            </div>
            <br>


            <div class="actions">
              <input type="submit" value="SENT" class= "btn btn-danger">
            </div>


          {{ Form::close() }}
				</div>
			</div>
		</div>
	</div>

</div>



@endsection
