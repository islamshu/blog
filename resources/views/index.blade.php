@extends('layouts.frontend')
@section('content')
<header>
  <div class="container">
    <div class="innerHeader">
      <span class="wow animate__fadeInDown "data-wow-delay=".8s">تجربة استثنائية وحلول ابداعية</span>
    <h1 class="wow animate__fadeInUpBig "data-wow-delay=".5s">شريك أعمالك الجديد في التصميم والتسويــــق...</h1>
    <p class="wow animate__fadeInUp "data-wow-delay="1s">رواد في الحلول الابداعية</p>
    <div class="btns wow fadeInLeft"data-wow-delay="1.2s">
      <a href="{{ route('about') }}" class="btn">تعرف على المزيد</a>
      <a href="https://wa.link/ov9tzx" class="btn">تواصل معنا</a>
    </div>
    </div>
  </div>

  <img src="{{asset('front/images/circle.png')}}" class="img-back anmation1" alt="" />
  <img src="{{asset('front/images/Rectangle 3 copy@2x.png')}}" class="img-back-1 anmation3" alt="" />
  <img src="{{asset('front/images/Rectangle 3@2x.png')}}" class="img-back-2 anmation2" alt="" />
  <img src="{{asset('front/images/Triangle 1@2x.png')}}" class="img-back-3 anmation4" alt="" />
</header>

<main>
  <div class="features">
    <div class="container">
      <h2 class="wow animate__fadeInUp">المميزات والخدمات</h2>
      <h4 class="wow animate__fadeInUp">كيف يمكن لبومباستك مساعدتك!</h4>
      <div class="row">
        <div class="col-lg-4">
          <div class="feat-item">
            <img src="{{asset('front/images/features/1.png')}}" class="wow animate__zoomInDown" data-wow-duration="2s" alt="" />
            <h3>التصميم الجرافيكي</h3>
            <p>
              خدمات تصميم متكاملة لكل ما تحتاجه أعمالك من تصاميم الهوية البصرية حتى تصاميم المطبوعات والسوشيال ميديا.

            </p>
            <a href="{{ route('design') }}">المزيد</a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="feat-item">
            <img src="{{asset('front/images/features/2.png')}}" class="wow animate__zoomInDown" data-wow-duration="2s" alt="" />
            <h3>ادارة صفحات السوشال ميديا</h3>
            <p>
              خدمة التصوير الإحترافي للمشاريع والخدمات والمنتجات بطرق وأساليب مختلفة من الفيديو للتصوير الثابت كلاً حسب إحتياجه.              </p>
            <a href="{{ route('soialMedia') }}">المزيد</a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="feat-item">
            <img src="{{asset('front/images/features/3.png')}}" class="wow animate__zoomInDown"data-wow-duration="2s" alt="" />
            <h3>التسويق الالكتروني</h3>
            <p>
              خدمة إدارة الإعلانات على المنصات المختلفة من ميتا , جوجل و سناب شات وتيكتوك , للحصول على أفضل النتائج المتوقعة
            </p>
            <a href="{{ route('marketing') }}">المزيد</a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="feat-item">
            <img src="{{asset('front/images/features/4.png')}}" class="wow animate__zoomInDown" data-wow-duration="2s" alt="" />
            <h3>الاستشارات والتخطيط</h3>
            <p>
              خدمة الإستشارات الخاصة بالمشاريع لتقديم كافة الحلول والإقتراحات الخاصة بأعمالكم .

            </p>
            <a href="{{ route('Consulting') }}">المزيد</a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="feat-item">
            <img src="{{asset('front/images/features/5.png')}}" class="wow animate__zoomInDown" data-wow-duration="2s" alt="" />
            <h3>برمجة المواقع والتطبيقات</h3>
            <p>
              خدمة تطوير الأعمال من خلال بناء موقع إلكتروني أو متجر لخدماتكم وأعمالكم.
            </p>
            <a href="{{ route('design') }}">المزيد</a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="feat-item">
            <img src="{{asset('front/images/features/6.png')}}" class="wow animate__zoomInDown" data-wow-duration="2s" alt="" />
            <h3>تصوير وانتاج الفيديوهات</h3>
            <p>
              نستطيع ان نقرأ جميع افكارك ونجمعها لك بصورة وبلمسات عصرية
              وابداعية
            </p>
            <a href="{{ route('Photography') }}">المزيد</a>
          </div>
        </div>
      </div>
    </div>

    <img src="{{asset('front/images/circle.png')}}" class="img-back anmation1" alt="" />
    <img src="{{asset('front/images/Rectangle 3 copy@2x.png')}}" class="img-back-1 anmation3" alt="" />
    <img src="{{asset('front/images/Rectangle 3@2x.png')}}" class="img-back-3 anmation2" alt="" />
    <img src="{{asset('front/images/Triangle 1@2x.png')}}" class="img-back-2 anmation4" alt="" />
  </div>

  <h2 class="whyUsH2 wow animate__fadeInUp" >لماذا بومباستك ؟!</h2>
  <div class="whyUs" id="ourServices">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="number-item">
            <p class="d-inline-block">+</p> <span data-top="100" class="num">0</span><p class="d-inline-block">K$</p>
            <h5>مصروف الاعلانات</h5>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="number-item">
            <p class="d-inline-block">+</p> <span data-top="5000" class="num">0</span>
            <h5>تصميم سوشيال ميديا</h5>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="number-item">
            <p class="d-inline-block">+</p> <span data-top="200" class="num">0</span>
            <h5>عميل في الوطن العربي</h5>
          </div>
        </div>
      </div>
    </div>

    <img src="{{asset('front/images/circle.png')}}" class="img-back anmation1" alt="" />
    <img src="{{asset('front/images/Rectangle 3 copy@2x.png')}}" class="img-back-1 anmation3" alt="" />
    <img src="{{asset('front/images/Rectangle 3@2x.png')}}" class="img-back-2 anmation2" alt="" />
    <img src="{{asset('front/images/Triangle 1@2x.png')}}" class="img-back-3 anmation4" alt="" />
  </div>

  <div class="container">
    <div class="contact">
      <div class="row align-items-center">
        <div class="col-lg-8 text-end pe-4">
          <h3 class="wow animate__fadeInRight">مهما كانت احتياجاتك</h3>
          <p class="wow animate__fadeInRight">حتى إذا كنت لا تزال غير متأكد من ماهيتها، لا تقلق نحن هنا لمساعدتك!</p>
        </div>

        <div class="col-lg-4">
          <a href="https://forms.monday.com/forms/96471629b5c89f652efd60eea03ef544?r=use1" class="wow animate__fadeInLeft">اطلب خدمتك</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="ourValue " id="ourClients">
      <h2 class="wow animate__fadeInUp">عملائنا يكررون طلب خدماتنا </h2>
      <p class="wow animate__fadeInUp">أكــثر مـن مــرة و هـذا دليـــل رضــاهــم</p>
      <div class="row">
        <div class="col-lg-6">
          <div class="fields">
            <div class="field">
              <h5 class="wow animate__fadeInUp" data-wow-delay="1s">التصوير</h5>
              <span class="amount"><span class="presntege" data-range="50"></span></span>
            </div>

            <div class="field">
              <h5 class="wow animate__fadeInUp" data-wow-delay="1s">التصميم</h5>
              <span class="amount"><span class="presntege" data-range="40"></span></span>
            </div>

            <div class="field">
              <h5 class="wow animate__fadeInUp" data-wow-delay="1s">التسويق</h5>
              <span class="amount"><span class="presntege" data-range="80"></span></span>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="chart1">
            <canvas id="myChart" class="mycharts"></canvas>
          </div>

          <div class="chartLebel wow animate__fadeInUp" data-wow-delay="1s">
            <span class="notmalClients">عملاء دائمين</span>
            <span class="newClients">عملاء جدد</span>
          </div>
        </div>
      </div>

      <img src="{{asset('front/images/circle.png')}}" class="img-back anmation1" alt="" />
      <img src="{{asset('front/images/Rectangle 3 copy@2x.png')}}" class="img-back-3 anmation3" alt="" />
      <img src="{{asset('front/images/Rectangle 3@2x.png')}}" class="img-back-2 anmation2" alt="" />
      <img src="{{asset('front/images/Triangle 1@2x.png')}}" class="img-back-1 anmation4" alt="" />
    </div>
  </div>

  <div class="ourWork" id="ourWork">
    <div class="container">
      <h2 class="wow animate__fadeInUp">اعمالنا</h2>
      <p class="wow animate__fadeInUp">
        تلتزم وكالة بومباستك ميديا بتزويدك بأفضل الخدمات التي يحتاجها عملك والتي ستنقل أعمالك الى المستوى التالي
      </p>

      <ul class="nav nav-pills mb-3 wow animate__fadeInUp" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-soial-tab" data-bs-toggle="pill" data-bs-target="#pills-soial"
            type="button" role="tab" aria-controls="pills-soial" aria-selected="true">
            سوشيال ميديا
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-brand-tab" data-bs-toggle="pill" data-bs-target="#pills-brand"
            type="button" role="tab" aria-controls="pills-brand" aria-selected="false">
            علامة تجارية
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-print-tab" data-bs-toggle="pill" data-bs-target="#pills-print"
            type="button" role="tab" aria-controls="pills-print" aria-selected="false">
            مطبوعات
          </button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-website-tab" data-bs-toggle="pill" data-bs-target="#pills-website"
            type="button" role="tab" aria-controls="pills-website" aria-selected="false">
            مواقع الكترونية
          </button>
        </li>
      </ul>
      <div class="tab-content wow animate__fadeInUp" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-soial" role="tabpanel" aria-labelledby="pills-soial-tab"
          tabindex="0">
          <div class="row">
            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/gallery/152992767/_">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/بيهانس-جاكوزي.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/gallery/152993883/_">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/بيهانس-ماجيك.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/gallery/152993617/_">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/بيهانس-كليك-تيك.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>
          </div>

          <a href="" class="btn btn-more wow animate__fadeInUp">المزيد</a>
        </div>
        <div class="tab-pane fade" id="pills-brand" role="tabpanel" aria-labelledby="pills-brand-tab" tabindex="0">
          <div class="row">
            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/bombasticps">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/قريبا.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/bombasticps">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/قريبا.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/bombasticps">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/قريبا.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>
          </div>

          <a href="" class="btn btn-more wow animate__fadeInUp">المزيد</a>
        </div>
        <div class="tab-pane fade" id="pills-print" role="tabpanel" aria-labelledby="pills-print-tab" tabindex="0">
          <div class="row">
            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/bombasticps">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/قريبا.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/bombasticps">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/قريبا.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/bombasticps">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/قريبا.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>
          </div>

          <a href="" class="btn btn-more wow animate__fadeInUp">المزيد</a>
        </div>
        <div class="tab-pane fade" id="pills-website" role="tabpanel" aria-labelledby="pills-website-tab"
          tabindex="0">
          <div class="row">
            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/bombasticps">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/قريبا.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/bombasticps">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/قريبا.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="item wow animate__fadeInUp">
                <a href="https://www.behance.net/bombasticps">
                  <div class="img-box">
                    <img src="{{asset('front/images/ourWorks/قريبا.png')}}" alt="" />
                  </div>
                </a>
              </div>
            </div>
          </div>

          <a href="" class="btn btn-more wow animate__fadeInUp">المزيد</a>
        </div>
      </div>
    </div>

    <img src="{{asset('front/images/circle.png')}}" class="img-back anmation1" alt="" />
    <img src="{{asset('front/images/Rectangle 3 copy@2x.png')}}" class="img-back-3 anmation3" alt="" />
    <img src="{{asset('front/images/Rectangle 3@2x.png')}}" class="img-back-2 anmation2" alt="" />
    <img src="{{asset('front/images/Triangle 1@2x.png')}}" class="img-back-1 anmation4" alt="" />
  </div>

  <div class="ourClients" id="ourClents">
    <div class="container">
      <h2 class="wow animate__fadeInUp">عملائنا</h2>
      <p class="wow animate__fadeInUp">
        تفخر شركة بومباستك بأنها من خلال فترة عمله الطويلة قد كسبت شريحة واسعة من العملاء في الوطن العربي و تجاوزنا الحدود  مبرهنين بذلك على موثوقية أنظمة الشركة وكفائة عملها و في عدة لغات ومن أهم العملاء:
      </p>
      <div class="row">
        <div class="col-lg-3">
          <div class="item wow animate__fadeInUp" data-wow-delay=".7s" >
            <img src="{{asset('front/images/clients/1.png')}}"alt="" />
          </div>
        </div>

        <div class="col-lg-3">
          <div class="item wow animate__fadeInUp" data-wow-delay="1.4s" >
            <img src="{{asset('front/images/clients/2.png')}}"  alt="" />
          </div>
        </div>

        <div class="col-lg-3">
          <div class="item wow animate__fadeInUp" data-wow-delay="2.1s" >
            <img src="{{asset('front/images/clients/3.png')}}" alt="" />
          </div>
        </div>

        <div class="col-lg-3">
          <div class="item wow animate__fadeInUp"data-wow-delay="2.8s" >
            <img src="{{asset('front/images/clients/4.png')}}" alt="" />
          </div>
        </div>

        <div class="col-lg-3">
          <div class="item wow animate__fadeInUp" data-wow-delay=".7s" >
            <img src="{{asset('front/images/clients/5.png')}}"alt="" />
          </div>
        </div>

        <div class="col-lg-3">
          <div class="item wow animate__fadeInUp" data-wow-delay="1.4s" >
            <img src="{{asset('front/images/clients/6.png')}}"  alt="" />
          </div>
        </div>

        <div class="col-lg-3">
          <div class="item wow animate__fadeInUp" data-wow-delay="2.1s" >
            <img src="{{asset('front/images/clients/7.png')}}" alt="" />
          </div>
        </div>

        <div class="col-lg-3">
          <div class="item wow animate__fadeInUp"data-wow-delay="2.8s" >
            <img src="{{asset('front/images/clients/8.png')}}" alt="" />
          </div>
        </div>


      </div>
    </div>

    <img src="{{asset('front/images/circle.png')}}" class="img-back anmation1" alt="" />
    <img src="{{asset('front/images/Rectangle 3 copy@2x.png')}}" class="img-back-3 anmation3" alt="" />
    <img src="{{asset('front/images/Rectangle 3@2x.png')}}" class="img-back-2 anmation2" alt="" />
    <img src="{{asset('front/images/Triangle 1@2x.png')}}" class="img-back-1 anmation4" alt="" />
  </div>

  <div class="blog" id="blog">
    <div class="container">
      <h2 class="wow animate__fadeInUp">المدونة</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="blog-item wow animate__fadeInUp">
            <a href="">
              <div class="img">
                <img src="{{asset('front/images/blog.jpg')}}" alt="" />
              </div>
              <div class="item-body">
                <h3>كيف تختار افضل منتج</h3>
                <p>
                  تلتزم وكالة بومباستك ميديا بتزويدك بافضل الخدمات التي
                  يحتاجها عملك والتي ستنقل
                </p>
                <span>20/12/2020</span>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="blog-item wow animate__fadeInUp">
            <a href="">
              <div class="img">
                <img src="{{asset('front/images/blog.jpg')}}" alt="" />
              </div>
              <div class="item-body">
                <h3>كيف تختار افضل منتج</h3>
                <p>
                  تلتزم وكالة بومباستك ميديا بتزويدك بافضل الخدمات التي
                  يحتاجها عملك والتي ستنقل
                </p>
                <span>20/12/2020</span>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="blog-item wow animate__fadeInUp">
            <a href="">
              <div class="img">
                <img src="{{asset('front/images/blog.jpg')}}" alt="" />
              </div>
              <div class="item-body">
                <h3>كيف تختار افضل منتج</h3>
                <p>
                  تلتزم وكالة بومباستك ميديا بتزويدك بافضل الخدمات التي
                  يحتاجها عملك والتي ستنقل
                </p>
                <span>20/12/2020</span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <a href="" class="btn btn-more wow animate__fadeInUp">المزيد</a>
    </div>
  </div>

  <div class="container">
    <div class="contact-form" id="contact">
      <h2 class="wow animate__fadeInUp">تواصل معنا</h2>
      <p class="wow animate__fadeInUp">
        اذا كان لديك اي مشكلة او استفسار يمكنك إرسال رسالة وسنرد عليك في أقرب وقت
      </p>

      <div class="row">
        <div class="col-lg-7">
          <form action="" class="wow animate__fadeInRight">
            <div class="form-input">
              <input type="text" class="form-control" placeholder="الاسم" />
            </div>

            <div class="form-input">
              <input type="email" class="form-control" placeholder="البريد الالكتروني" />
            </div>

            <div class="form-input">
              <input type="number" class="form-control" placeholder="رقم الجوال" />
            </div>

            <div class="form-input">
              <input type="text" class="form-control" placeholder="الموضوع" />
            </div>

            <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="الرسالة"></textarea>

            <button class="btn">ارسال</button>
          </form>
        </div>

        <div class="col-lg-5 d-flex align-items-center">
          <div class="img-box wow animate__fadeInLeft">
            <img src="{{asset('front/images/contact.png')}}" alt="" />
          </div>
        </div>
      </div>

      <img src="{{asset('front/images/circle.png')}}" class="img-back anmation1" alt="" />
      <img src="{{asset('front/images/Rectangle 3 copy@2x.png')}}" class="img-back-3 anmation3" alt="" />
      <img src="{{asset('front/images/Rectangle 3@2x.png')}}" class="img-back-2 anmation2" alt="" />
      <img src="{{asset('front/images/Triangle 1@2x.png')}}" class="img-back-1 anmation4" alt="" />
    </div>
  </div>
</main>

<div class="goTop wow animate__fadeInRight">
  <span><i class="fas fa-long-arrow-alt-up"></i></span>
</div>

<div class="whatsUp wow animate__fadeInRight">
  <a href="https://wa.link/ov9tzx"><i class="fab fa-whatsapp"></i></a>
</div>
@endsection
