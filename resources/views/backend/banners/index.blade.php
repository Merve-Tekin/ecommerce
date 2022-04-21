@extends('backend.layouts.master')

@section('content')
    <div id="main">
        @include('backend.layouts.nav')


        <div class="main-content container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Banners</h3>
                        <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can
                            check the full documentation <a
                                href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class='breadcrumb-header'>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Banners</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="col-lg-12">
                    @include('backend.layouts.notification')
                </div>
                <div class="card">
                    <div class="card-header">
                            Banner
                    </div>
                    <div class="card-body">
                        <table class='table table-striped' id="table1">
                            <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Photo</th>
                                <th>Condition</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banners as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><img src="{{$item->photo}}" alt="banner image" style="max-height: 90px; max-width: 120px" ></td>
                                    <td>
                                        @if($item->condition=='banner')
                                            <span class="badge badge-success">{{$tem->condition}}</span>
                                        @else
                                            <span class="badge badge-primary">{{$tem->condition}}</span>
                                        @endif
                                    </td>

                                </tr>


                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>

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

@endsection

