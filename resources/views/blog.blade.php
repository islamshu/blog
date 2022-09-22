@extends('layouts.frontend')
@section('content')
     <div class="maqal-content wow animate__fadeInUp">

        <div class="container">

            <div class="img-maqal wow animate__fadeInUp">
                <img src="{{ asset('uploads/'.$blog->image) }}" alt="">
            </div>

            <h2>{!! $blog->title !!}    </h2>
          <p>{!! $blog->description !!}</p>


        </div>



        <img src="images/circle.png" class="img-back anmation1" alt="" />
        <img src="images/Rectangle 3 copy@2x.png" class="img-back-1 anmation3" alt="" />
        <img src="images/Rectangle 3@2x.png" class="img-back-2 anmation2" alt="" />
        <img src="images/Triangle 1@2x.png" class="img-back-3 anmation4" alt="" />


      </div>
@endsection