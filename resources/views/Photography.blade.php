@extends('layouts.frontend')
@section('title')
    التصوير 
@endsection
@section('content')
<div class="feat-content wow animate__fadeInUp">

    <div class="container">

        <div class="img-feat wow animate__fadeInUp">
            <img src="{{asset('front/images/innerFeatures/Layer 1030.png')}}" alt="">
        </div>

        <h2>التصويــــر</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="feat-item wow animate__fadeInUp">
                    <div class="img-box">
                        <img src="{{asset('front/images/innerFeatures/camera/camera.png')}}" alt="">
                    </div>
                    <h3>تصاميم المواقع الالكترونية</h3>
                    <p>تصوير المنتجات أو الخدمات المختلفة بصور إحترافية تلبي تطلاعتكم</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="feat-item wow animate__fadeInUp">
                    <div class="img-box">
                        <img src="{{asset('front/images/innerFeatures/camera/drone.png')}}" alt="">
                    </div>
                    <h3>تصويـــــر جـــــوي</h3>
                    <p>قادرين على تقديم خدمة التصوير الجوي لنشاطاتكم التجارية بالشكل المناسب.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="feat-item wow animate__fadeInUp">
                    <div class="img-box">
                        <img src="{{asset('front/images/innerFeatures/camera/video-camera.png')}}" alt="">
                    </div>
                    <h3>تصويــــر وفيديــــو</h3>
                    <p>قادرين على التعاون معكم لبناء فيديو دعائي متكامل من النص والسيناريو حتى التصوير والإخراج</p>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="feat-item wow animate__fadeInUp">
                    <div class="img-box">
                        <img src="{{asset('front/images/innerFeatures/camera/selfie.png')}}" alt="">
                    </div>
                    <h3>lifeStyle تصويـــــر </h3>
                    <p>العمل على تقديم خدمة التصوير مع الأشخاص لإعطاء منتجاتك وخدماتك مزيداً من الحياة</p>
                </div>
            </div>

        </div>


        <a href="https://forms.monday.com/forms/96471629b5c89f652efd60eea03ef544?r=use1" class="btn demand-btn wow animate__fadeInUp">اطلب خدمتك</a>



    </div>



    <img src="{{asset('front/images/circle.png')}}" class="img-back anmation1" alt="" />
    <img src="{{asset('front/images/Rectangle 3 copy@2x.png')}}" class="img-back-1 anmation3" alt="" />
    <img src="{{asset('front/images/Rectangle 3@2x.png')}}" class="img-back-2 anmation2" alt="" />
    <img src="{{asset('front/images/Triangle 1@2x.png')}}" class="img-back-3 anmation4" alt="" />


  </div>
@endsection