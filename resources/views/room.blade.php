@extends('template')
@section('content')
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- Navigation -->
        @include('parts.navigation', [
            'categories' => $options['categories'],
            'rooms' => $options['rooms']
        ])
        <!-- End navigation -->
            <!-- Room -->
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
                    <div id="gallery" style="display:none;">
                        @foreach($room->images as $img)
                            <img alt="Preview Image 1"
                                 src="{{ asset($pathToImg . $img['image_name']) }}"
                                 data-image="{{ asset($pathToImg . $img['image_name']) }}"
                                    {{--data-description="Image Description"--}}>
                        @endforeach
                    </div>
                </div>
                <!-- End gallery -->
            </div>
            <!-- End room -->
        </main>
        <!-- / main body -->
    </div>
@endsection
