@extends('layouts.frontend')
@section('title')
    المدونة 
@endsection
@section('content')
    <div class="blog">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-lg-4">

                        <div class="blog-item wow animate__fadeInUp">
                            <a href="{{ route('blog', $item->id) }}">
                                <div class="img">
                                    <img src="{{ asset('uploads/' . $item->thumb) }}" alt="" />
                                </div>
                                <div class="item-body">
                                    <h3>{!! Illuminate\Support\Str::limit($item->title, 40) !!} </h3>
                                    <p>
                                        {!! Illuminate\Support\Str::limit($item->description, 80) !!}
                                    </p>

                                    <span>{{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div style="text-align:  center">
                    {{ $blogs->links() }}
                </div>

            </div>



        </div>



        <img src="{{ asset('front/images/circle.png') }}" class="img-back anmation1" alt="" />
        <img src="{{ asset('front/images/Rectangle 3 copy@2x.png') }}" class="img-back-1 anmation3" alt="" />
        <img src="{{ asset('front/images/Rectangle 3@2x.png') }}" class="img-back-2 anmation2" alt="" />
        <img src="{{ asset('front/images/Triangle 1@2x.png') }}" class="img-back-3 anmation4" alt="" />


    </div>
@endsection
