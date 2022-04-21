<script src="{{asset('backend/assets/js/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('backend/assets/js/app.js')}}"></script>
<script src="{{asset('backend/assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('backend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/dashboard.js')}}"></script>
<script src="{{asset('backend/assets/js/main.js')}}"></script>
//Banner
<script src="{{asset('backend/assets/js/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('backend/assets/js/app.js')}}"></script>

<script src="{{asset('backend/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('backend/assets/js/vendors.js')}}"></script>

<script src="{{asset('backend/assets/js/main.js')}}"></script>
{{--summernote--}}
<script src="{{asset('backend/assets/summernote/summernote.js')}}"></script>
@yield('scripts')

<script>
    setTimeout(function (){
        $('#alert').slideUp();

    },4000);
</script>
