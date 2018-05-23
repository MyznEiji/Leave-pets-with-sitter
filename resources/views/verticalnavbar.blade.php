@extends('layout')

@section('content')
<div class="container">
    <div class="col-md-3">
        <!-- vertical-navbar -->
        <div class="sidebar-nav">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                <label style="color: #fff;">他の項目を編集する</label>
              </button>
            </div>
            <div class="navbar-collapse collapse sidebar-navbar-collapse">
              <ul class="nav navbar-nav" id="add_active">
                <li id="basics" class=""><a href="/listings/{{ $listing->id }}/basics">基本事項</a></li>
                <li id="description" class=""><a href="/listings/{{ $listing->id }}/description">リスティングの内容</a></li>
                <li id="address" class=""><a href="/listings/{{ $listing->id }}/address">住所情報</a></li>
                <li id="price" class=""><a href="/listings/{{ $listing->id }}/price">料金</a></li>
                <li id="photos" class=""><a href="/listings/{{ $listing->id }}/photos">写真</a></li>
                <li id="bankaccount" class=""><a href="/listings/{{ $listing->id }}/bankaccount">受取口座情報</a></li>
                <li id="publish" class=""><a href="/listings/{{ $listing->id }}/publish">公開する</a></a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
    </div>
    <div class="col-md-9">
      @yield('vertical')
    </div>



    <!-- リストにactiveクラスをaddする -->
    <script >
      window.onload = function() {
        $("#{{$active_name}}").attr('class', 'active');
      }
    </script>

</div>

@endsection
