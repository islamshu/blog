<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
  <div class="main-menu-content">
    {{-- @if(auth()->user()->type  != 'famous' || auth()->user()->famous == null) --}}
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item  ">
            <a href="{{ route('edit_profile') }}">
                <i class="fa fa-user"></i>
                <span class="menu-title">تعديل الملف الشخصي</span></a>
           
        </li>
        <li class="nav-item has-sub ">
          <a href="#">
              <i class="fa fa-rss-square"></i>
              <span class="menu-title">التديونات</span></a>
          <ul class="menu-content" style="">
              <li class="is-shown"><a class="menu-item" href="{{ route('blogs.index') }}">جميع التدوينات</a>
              </li>
              <li class="is-shown"><a class="menu-item" href="{{ route('blogs.create') }}">انشاء جديد </a>
              </li>


          </ul>
      </li>
    </ul>
  </div>
</div>