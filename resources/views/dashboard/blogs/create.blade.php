@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">التدوينات  </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-content collapse show">

                                <div class="card-body card-dashboard">
                                    @include('dashboard.parts._error')
                                    @include('dashboard.parts._success')

                                    <br>

                                    <form  method="post" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email"> واجهة التدوينة:</label>
                                                    <input type="file" class="form-control thumb" name="thumb" required id="">
                                                </div>
                                                <div class="form-group">
                                                    <img src="" style="width: 100px"
                                                        class="img-thumbnail thumb-preview" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email"> صورة التدوينة:</label>
                                                    <input type="file" class="form-control image" name="image" required id="">
                                                </div>
                                                <div class="form-group">
                                                    <img src="" style="width: 100px"
                                                        class="img-thumbnail image-preview" alt="">
                                                </div>
                                            </div>
                                             <br>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="email"> عنوان التدوينة :</label>
                                                    <textarea name="title" required class="form-control ckeditor" id="" cols="30" rows="10">{{ old('title') }}</textarea>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="email">موضوع التدوينة:</label>
                                                    <textarea name="description" required class="form-control ckeditor" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    
                                        
                
                                        <button type="submit"  class="btn btn-info">اضافة</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>
@endsection
