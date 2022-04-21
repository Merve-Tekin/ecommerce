@extends('backend.layouts.master')

@section('content')
    <div id="main">
        @include('backend.layouts.nav')


        <div class="main-content container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Add Banners</h3>
                        <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class='breadcrumb-header'>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Banners</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>



            <!-- // Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="">Title<span class="text-danger">*</span></label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Title"
                                                           name="title">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                             <i class="fa fa-picture-o"></i> Choose
                                                             </a>
                                                        </span>
                                                        <input id="thumbnail" class="form-control" type="text" name="filepath">
                                                    </div>
                                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <textarea  id="description" class="form-control" placeholder="Write some text..."
                                                               name="description" >"{{old('description')}}"</textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12" >

                                                <label for="">Condition  </label>
                                                <select name="condition" class="form-control show-tick" >
                                                    <option value="">-- Conditions --</option>
                                                    <option value="banner" {{old('condition')=='banner' ? 'promo': ''}} >Banner</option>
                                                    <option value="promo" {{old('condition')=='banner' ? 'promo': ''}} >Promote</option>
                                                </select>


                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <label for="">Status  </label>
                                                <select name="status" class="form-control show-tick">
                                                    <option value="">-- Status --</option>
                                                    <option value="active" {{old('status')=='active' ? 'selected': ''}} >Active</option>
                                                    <option value="inactive" {{old('status')=='inactive' ? 'selected': ''}} >Inactive</option>
                                                </select>

                                            </div>

                                            <div class="form-group col-12">

                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <form action="{{route('banner.store')}}" method="post"></form>
                                                @csrf
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                        </div>

                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                        <!-- Custom file input start -->
                                        <section id="custom-file-input">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Custom file input</h4>
                                                        </div>
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <div class="row">

                                                                    <div class="col-md-6 mb-1">
                                                                        <fieldset>
                                                                            <div class="input-group">
                                                                                <div class="custom-file">
                                                                                    <input type="file" class="custom-file-input"
                                                                                           id="inputGroupFile02">

                                                                                </div>

                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Custom file input end -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- // Basic multiple Column Form section end -->

            <section class="section">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Default Textarea
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Example
                                        textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                              rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2020 &copy; Voler</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a
                            href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                </div>
            </div>
        </footer>

    </div>
    <script src="{{asset('backend/assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('backend/assets/js/vendors.js')}}"></script>
    <script src="{{asset('backend/assets/js/main.js')}}"></script>
//table-datatable.html
//form-element-input-group.html
//form-element-textarea.html


@endsection
@section('scripts')
            <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
            <script>$('#lfm').filemanager('image');</script>
            <script>
                $(document).ready(function() {
                    $('#description').summernote();
                });
            </script>

@endsection
