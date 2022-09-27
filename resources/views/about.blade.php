@extends('layouts.frontend')
@section('title')
    من نحن
@endsection
@section('content')
<div class="aboutUs-content">


    <div class="container">
      <h2 class="text-center">من نحن</h2>

      <div class="row">
        <div class="col-lg-6 col-12 col-sm-12 d-flex align-items-end flex-column order-1 order-lg-0">
          <div class="about-item text-end">
            <h3>حكايتنا</h3>
            <h4>إذا كنت تريــــد العمـــل بشغـــف فانضم إلينا</h4>
            <p>لسنا مجرد وكالتك التسويقية فحسب، بل نحن رفاقك الدائمون معك في تحقيق أهداف أعمالك التجارية.</p>
            <p>بومباستك ميديا , وكالة تسويق رقمي بمنهج التسويق بشغف مختصة بخدمات إنتاج المحتوى الرقمي بمعايير عالية
              الجودة والدقة نستخدم الفضاء الالكتروني لتسويق منتجات عملائنا بطريقة إبداعية مبتكرة تواكب متطلبات العملاء
            </p>
            <p>نسعى إلى الارتقاء بجودة أعمالنا دائماً من خلال عقد الشراكات مع المشاريع الصغيرة والمتوسطة في بيئة ملهمة
              ومحفزة</p>

          </div>
        </div>

        <div class="col-lg-6 col-12 col-sm-12 d-flex align-items-end flex-column  order-0 order-lg-1 mb-sm-4">
          <div class="img-box">
            <img src="{{asset('front/images/about-2.png')}}" alt="">
          </div>
        </div>



        <div class="col-lg-6 col-12 col-sm-12 d-flex order-2 order-lg-2 mb-sm-4">
          <div class="img-box">
            <img src="{{asset('front/images/about-1.png')}}" alt="">
          </div>
        </div>

        <div class="col-lg-6 col-12 col-sm-12 d-flex order-3 order-lg-3">
          <div class="about-item text-end">
            <h3>اهدافنا</h3>
            <h4>الأفضل بلا منازع في الوطن .. خبراء التسويق والجرافيك</h4>
            <p>مواكبة كل حديث في عالم التصميم والتسويق
            </p>
            <p>تلبية احتياجات العملاء التسويقية بأفضل الأسعار الممكنة
            </p>
            <p>اتباع نظام اوتوماتيكي في التعامل الداخلي مع أعضاء الشركة وكذلك مع العملاء</p>

          </div>
        </div>


      </div>


    </div>


    </div>



    <img src="{{asset('front/images/circle.png')}}" class="img-back anmation1" alt="" />
    <img src="{{asset('front/images/Rectangle 3 copy@2x.png')}}" class="img-back-3 anmation3" alt="" />
    <img src="{{asset('front/images/Rectangle 3@2x.png')}}" class="img-back-2 anmation2" alt="" />
    <img src="{{asset('front/images/Triangle 1@2x.png')}}" class="img-back-1 anmation4" alt="" />


  </div>
@endsection