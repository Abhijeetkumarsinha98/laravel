<!-- start js include path -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
<script src="{{asset('/themes/bs4/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/themes/bs4/plugins/popper/popper.js')}}"></script>
{{-- <script src="{{asset('/themes/bs4/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script> --}}
{{-- <script src="{{asset('/themes/bs4/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script> --}}

<!-- bootstrap -->
<script src="{{asset('/themes/bs4/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
{{-- <script src="{{asset('/themes/bs4/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script> --}}
<script src="{{asset('/themes/bs4/plugins/select2/js/select2.js')}}"></script>
<script src="{{asset('/themes/bs4/plugins/select2/js/select2-init.js')}}"></script>

<script src="{{asset('/themes/bs4/plugins/sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('/themes/bs4/js/pages/sparkline/sparkline-data.js')}}"></script>
<!-- steps -->
<script src="{{asset('/themes/bs4/js/form-validation-v2.js')}}"></script>

<!--     <script src="{{asset('/themes/bs4/plugins/steps/jquery.steps.js')}}" ></script>
    <script src="{{asset('/themes/bs4/plugins/steps/steps-data.js')}}" ></script> -->

<!-- Common js-->
<!-- <script src="{{asset('/js/mdb.js')}}" ></script> -->
<script src="{{asset('/js/sweetalert.min.js')}}"></script>
<script src="{{asset('/js/sweetalert.js')}}"></script>
<script src="{{asset('/themes/bs4/js/app.js')}}"></script>
<script src="{{asset('/themes/bs4/js/layout.js')}}"></script>
<script src="{{asset('/themes/bs4/js/theme-color.js')}}"></script>
<!-- material -->
<script src="{{asset('/themes/bs4/plugins/material/material.min.js')}}"></script>
<script src="{{asset('/themes/bs4/plugins/material/material.min.js')}}"></script>
<!-- chart js -->
<!-- chart js -->
<script src="{{asset('/themes/bs4/plugins/chart-js/Chart.bundle.js')}}"></script>
<script src="{{asset('/themes/bs4/plugins/chart-js/utils.js')}}"></script>
<script src="{{asset('/themes/bs4/js/pages/chart/chartjs/home-data.js')}}"></script>

<!-- <script src="{{asset('/themes/bs4/js/pages/chart/chartjs/home-data.js')}}" ></script> -->
<!-- summernote -->
<script src="{{asset('/themes/bs4/plugins/summernote/summernote.js')}}"></script>
<script src="{{asset('/themes/bs4/js/pages/summernote/summernote-data.js')}}"></script>

<!-- end js include path -->

<script src="{{asset('/js/toastr.min.js')}}"></script>

<!-- Date Time Picker -->
<script src="{{asset('/themes/bs4/plugins/material-datetimepicker/moment-with-locales.min.js')}}" charset="UTF-8">
</script>
<script src="{{asset('/themes/bs4/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js')}}"
    charset="UTF-8"></script>

<script src="{{asset('/themes/bs4/plugins/material-datetimepicker/datetimepicker.js')}}" charset="UTF-8"></script>
<!-- <script src="{{asset('/themes/bs4/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"  charset="UTF-8"></script>
<script src="{{asset('/themes/bs4/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js')}}"  charset="UTF-8"></script> -->


<!-- ckeditor -->
<script src="{{asset('/themes/ckeditor/ckeditor.js')}}" charset="UTF-8"></script>
<script src="{{asset('/themes/ckeditor/styles.js')}}" charset="UTF-8"></script>
<script src="{{asset('/themes/ckeditor/config.js')}}" charset="UTF-8"></script>
<script src="{{asset('/themes/ckeditor/lang/en.js')}}" charset="UTF-8"></script>
<!-- ckeditor -->

<!--tags input-->
<script src="{{ asset('/plugins/jquery-tags-input/jquery-tags-input.js') }}"></script>
<script src="{{ asset('/plugins/jquery-tags-input/jquery-tags-input-init.js') }}"></script>

<!-- color picker -->
<script src="{{ asset('/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}" charset="UTF-8"></script>
<script src="{{ asset('/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker-init.js') }}" charset="UTF-8"></script>

<script src="{{ asset('js/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{asset('/js/toastr.min.js')}}"></script>



<script type="text/javascript">
    function deletes(id, status, request_url, return_url, model ,is_in_model=null) {

        var text = 'Delete';
        swal({
        title: "Are you sure?",
        text: "Are you sure you want to " + text + " ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#28A745",
        cancelButtonColor: "#DC3545",
        confirmButtonText: "Yes, " + text + " it!",
        closeOnConfirm: false
        }, function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'get',
            data: {
                '_method': 'get',
                'model': model,
                'is_in_model':is_in_model,
                'redirect_url': return_url
            },
            url: request_url + id,
            success: function(data) {
                swal({
                        title: " Success!",
                        text: " " + text + "d " + " Successfully!",
                        type: "success",
                        confirmButtonColor: "#28A745",
                    },
                    function() {
                        window.location.href = return_url;
                    }
                );
            }
        });
        });
}





</script>