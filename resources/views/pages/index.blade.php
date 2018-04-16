@extends('layout')

@section('content')
<ul class="nav nav-pills categories">
    <li class="active"><a href="#">Landscape </a></li>
    <li><a href="#">Macro </a></li>
    <li><a href="#">Portraits </a></li>
    <li><a href="#">Locations </a></li>
    <li><a href="#">Techniques </a></li>
</ul>
<div class="container post">
    <div class="row">
        <div class="col-md-6 post-title">
            <h1>Photography in New York</h1>
            <p class="author"><strong>John Steward</strong> <span class="text-muted">October 6th 2015 </span></p>
        </div>
        <div class="col-md-6 col-md-offset-0 post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sem quam, scelerisque vitae sem non, ornare condimentum leo. Vivamus eros tortor, tincidunt et viverra ac, gravida eu augue. Interdum et malesuada fames ac ante ipsum primis
                in faucibus. Praesent nibh ex, hendrerit at tellus sed, laoreet suscipit leo. </p>
            <p>Curabitur cursus ac quam sit amet mattis. Donec lacinia massa id libero tincidunt, sed ultricies magna eleifend. Integer porta consectetur ipsum sed porttitor. Praesent sed convallis nisi. Mauris eget commodo sem. Sed auctor commodo quam
                eu semper. </p>
            <p>Sed mollis, urna eu tempus facilisis, diam tellus aliquam tortor, et vestibulum ante quam non justo. Nullam luctus rutrum mattis. Maecenas in pharetra mi, vel mollis odio. </p>
            <figure><img class="img-thumbnail" src="assets/img/camera_illustration.jpg">
                <figcaption>Praesent sed convallis nisi </figcaption>
            </figure>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sem quam, scelerisque vitae sem non, ornare condimentum leo. Vivamus eros tortor, tincidunt et viverra ac, gravida eu augue. Interdum et malesuada fames ac ante ipsum primis
                in faucibus. Praesent nibh ex, hendrerit at tellus sed, laoreet suscipit leo. </p>
        </div>
    </div>
</div>
@endsection
