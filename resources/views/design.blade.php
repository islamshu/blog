@extends('layouts.frontend')
@section('title')
    التصميم 
@endsection
@section('content')
<div class="feat-content wow animate__fadeInUp">

    <div class="container">

        <div class="img-feat wow animate__fadeInUp">
            <img src="{{asset('front/{{asset('front/images/innerFeatures/Layer 868.png')}}')}}" alt="">
        </div>

        <h2>التصميــم</h2>
        <div class="row">
           

          <div class="col-lg-4">
            <div class="feat-item wow animate__fadeInUp">
                <div class="img-box">
                    <img src="{{asset('front/images/innerFeatures/design/curve.png')}}" alt="">
                </div>
                <h3>تصاميم السوشيال ميديـــا</h3>
                <p>تصاميم عصرية تنــــاســـــب الســــوق المستهدف بأفكار جديدة ملفتة تحقق تميزك في وسـائل التواصل الإجتماعـي.</p>
            </div>
        </div>

            <div class="col-lg-4">
                <div class="feat-item wow animate__fadeInUp">
                    <div class="img-box">
                        <img src="{{asset('front/images/innerFeatures/design/print.png')}}" alt="">
                    </div>
                    <h3>تصــاميــم المطبوعــات</h3>
                    <p>سواءً كان مشروعك حديثاً او قديماً فأنت بحاجة دائماً للعديد من التصاميم الخاصة بالمطبوعات.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="feat-item wow animate__fadeInUp">
                    <div class="img-box">
                        <img src="{{asset('front/images/innerFeatures/design/branding.png')}}" alt="">
                    </div>
                    <h3>تصميم الهويــة البصريــة</h3>
                    <p>نعمل على بناء هوية بصرية متكاملة لمشروعك لنصنع منه علامة تجارية.</p>
                </div>
            </div>


            <div class="col-lg-4">
              <div class="feat-item wow animate__fadeInUp">
                  <div class="img-box">
                      <img src="{{asset('front/images/innerFeatures/design/world-wide-web.png')}}" alt="">
                  </div>
                  <h3>تصاميم المواقـع الالكترونيـة</h3>
                  <p>نعمل على تصميم الواجهات الأساسيــة للمواقع الإلكترونية من البداية للنهايــة حسب حاجـــة نشاطـــــك التجــــــاري.</p>
              </div>
          </div>


            <div class="col-lg-4">
                <div class="feat-item wow animate__fadeInUp">
                    <div class="img-box">
                        <img src="{{asset('front/images/innerFeatures/design/booking.png')}}" alt="">
                    </div>
                    <h3>تصــاميـم التطبيقـــات</h3>
                    <p>تصميم وبناء واجهة المستخدم لتطبيقات الجوال من الفكرة حتى بوابة الدفع.</p>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="feat-item wow animate__fadeInUp">
                    <div class="img-box">
                        <img src="{{asset('front/images/innerFeatures/design/video.png')}}" alt="">
                    </div>
                    <h3>فيديوهات الرسوم المتحركـــة</h3>
                    <p>تستخدم الرسومات المتحركة النصوص والرمـــــوز والأشكـــــال والمخططـــات والرسومات لتوصيل الأفكار بشكل تجريدي أو رمزي.</p>
                </div>
            </div>


            
        </div>

        <a href="https://forms.monday.com/forms/96471629b5c89f652efd60eea03ef544?r=use1" class="btn demand-btn wow animate__fadeInUp">اطلب خدمتك</a>



    </div>



    <img src="{{asset('front/{{asset('front/images/circle.png')}}')}}" class="img-back anmation1" alt="" />
    <img src="{{asset('front/{{asset('front/images/Rectangle 3 copy@2x.png')}}')}}" class="img-back-1 anmation3" alt="" />
    <img src="{{asset('front/{{asset('front/images/Rectangle 3@2x.png')}}')}}" class="img-back-2 anmation2" alt="" />
    <img src="{{asset('front/{{asset('front/images/Triangle 1@2x.png')}}')}}" class="img-back-3 anmation4" alt="" />


  </div>
@endsection