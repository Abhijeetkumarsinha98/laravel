<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
<!-- icons -->
<link href="{{asset('/themes/bs4/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
    type="text/css" />
<link href="{{asset('/themes/bs4/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/themes/bs4/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
<!--bootstrap -->
<link href="{{asset('/themes/bs4/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/css/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/themes/bs4/plugins/summernote/summernote.css')}}" rel="stylesheet">
<!-- Material Design Lite CSS -->
<link rel="stylesheet" href="{{asset('/themes/bs4/plugins/material/material.min.css')}}">
<link rel="stylesheet" href="{{asset('/themes/bs4/css/material_style.css')}}">
<!-- inbox style -->
<link href="{{asset('/themes/bs4/css/pages/inbox.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Theme Styles -->
<link href="{{asset('/themes/bs4/css/theme/full/theme_style.css')}}" rel="stylesheet" id="rt_style_components"
    type="text/css" />
<link href="{{asset('/themes/bs4/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/themes/bs4/css/theme/full/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/themes/bs4/css/responsive.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/themes/bs4/css/theme/full/theme-color.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/css/toastr.css')}}" rel="stylesheet" type="text/css" />

<!-- steps -->
<link href="{{asset('/themes/bs4/plugins/steps/steps.css')}}" rel="stylesheet" type="text/css" />
<!-- <link href="{{asset('/themes/bs4/css/pages/formlayout.css')}}"rel="stylesheet" type="text/css" /> -->

<link href="{{asset('/css/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/css/modal.css')}}" rel="stylesheet" type="text/css" />
<!-- ckeditor -->
<link href="{{asset('/themes/ckeditor/contents.css')}}" rel="stylesheet" type="text/css" />
<!-- ckeditor -->

<!-- Date Time Picker -->
<link href="{{asset('/css/daterangepicker.css')}}" rel="stylesheet" media="screen">
<link href="{{asset('/js/datepicker/datepicker3.css')}}" rel="stylesheet" media="screen">

<link href="{{asset('/themes/bs4/plugins/select2/css/select2.css')}}" rel="stylesheet" media="screen">
<link href="{{asset('/themes/bs4/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" media="screen">


<link href="{{asset('/themes/bs4/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css')}}"
    rel="stylesheet" media="screen">

<!--tagsinput-->
<link href="{{asset('/plugins/jquery-tags-input/jquery-tags-input.css')}}" rel="stylesheet">

<!-- colorpicker -->
<link href="{{asset('/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" rel="stylesheet" media="screen">

<style type="text/css">
    .logo-indigo .page-header.navbar .page-logo {
        background-color: transparent;
    }

    .invalid-feedback {
        display: block !important;
        width: 100%;
        margin-top: .25rem;
        font-size: 80%;
        color: #dc3545;
    }

    .btn-group {
        position: static;
    }


    /*.modal .modal-body{
    overflow: auto !important;
    max-height: 400px;
}*/

    @media screen and (max-width: 400px) {
        .btn.btn-sm {
            padding: 6px 18px !important;
        }

        .col-sm-4.col-md-4.col-xs-12.col-12.form-group {
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .page-header.navbar .top-menu {
            clear: none !important;
        }

        .page-header.navbar .page-logo {
            width: auto !important;
        }

        .fixedheight {
            height: 100% !important;
        }
    }

    @media (max-width: 600px) {
        .page-container {
            margin-top: 20px !important;
        }
    }

    @media only screen and (max-width: 414px) {
        .usernav {
            position: inherit !important;
        }
    }

    .hor-menu>li:hover>a {
        background-color: #F4F6F9 !important;
        border-top-color: transparent !important;
        color: #F4F6F9 !important;
    }

    .boxDiv {
        position: relative;
        width: 18%;
        margin-right: 10px;
        display: inline-block;
        vertical-align: top;
    }

    .boxDiv .close {
        font-weight: 500;
        color: black;
        display: flex;
        height: 20px;
        width: 20px;
        font-size: 12px;
        background-color: #2f4f4f59;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        cursor: pointer;
        position: absolute;
        top: -7px;
        right: -7px;
        text-indent: 0;
        text-shadow: none;
        opacity: 0.9;
    }

    .boxDiv .thumb {
        max-height: 103px;
        width: 100%;
        display: block;
    }
</style>