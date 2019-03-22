@extends('template')
@section('content')
    <!-- Room -->
    <style type="text/css">
        @media screen and (min-width: 700px) {
            .ga img:hover {
                -webkit-transform: scale(2.5);
                -ms-transform: scale(2.5);
                transform: scale(2.5);
            }
        }
    </style>
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- Navigation -->
        @include('parts.navigation', [
            'categories' => $options['categories'],
            'rooms' => $options['rooms']
        ])
        <!-- End navigation -->
            <div class="content three_quarter">
                <div class="btmspace-50 center">
                    <h2>{{$room['title']}}</h2>
                    <div class="rooms-block">
                        @foreach($room['sub_title'] as $subTitle)
                            <div class="rooms">
                                <span class="fa fa-key"></span> {{$subTitle}}
                            </div>
                        @endforeach
                    </div>
                </div>
                <p>{{$room['floor']}}</p>
                <p>{!! $room['description'] !!}</p>
                <!-- Description -->
                <div class="col-sm-12 row">
                    <div class="col-sm-6">
                        <h4>{!! $room['column_one'] !!}</h4>
                    </div>
                    <div class="col-sm-6">
                        <h4>{!! $room['column_two'] !!}</h4>
                    </div>
                </div>
                <!-- End description -->
                <!-- Gallery -->
                <div class="col-md-12 row">
                    <hr>
                    @if(count($images))
                        <div class="gal ga">
                            @foreach($images as $img)
                                <img alt="{{ $img['description'] }}"
                                     src="{{ $img['link'] }}">
                            @endforeach
                        </div>
                    @endif
                </div>
                <!-- End gallery -->
            </div>
            <!-- End room -->
        </main>
        <!-- / main body -->
    </div>
@endsection
