@extends('Admin.layouts.mainlayout')

@section('content')

<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add user</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="/admin">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add user</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Add user</header>
                        </div>
                        <div class="card-body" id="bar-parent">
                            <form action="{!!url('/user_save')!!}" method="POST" id="main_form">
                                {{csrf_field()}}
                                <div class="row">
                                <div class="col-lg-6 p-t-20">
                                        <label for="simpleFormEmail">First Name</label>
                                        <input class="form-control" name="first_name" id="first_name" rows="3"
                                            placeholder="Enter first name"  >
                                        <span class="text-danger error-text first_name_error"  ></span>
                                        </div>
                                    <div class="col-lg-6 p-t-20">
                                        <label for="simpleFormEmail">Last name</label>
                                        <input class="form-control" name="last_name" id="last_name" rows="3"
                                            placeholder="Enter last name"  >
                                            <span class="text-danger error-text last_name_error"  ></span>
                                    </div>
                                    <div class="col-lg-6 p-t-20">
                                        <label for="simpleFormEmail">Email</label>
                                        <input class="form-control" name="email" id="email" rows="3"
                                            placeholder="Enter email"  >
                                            <span class="text-danger error-text email_error"  ></span>

                                    </div>
                                    <div class="col-lg-6 p-t-20">
                                        <label for="simpleFormEmail">Mobile</label>
                                        <input class="form-control" name="mobile" id="mobile" rows="3"
                                            placeholder="Enter mobile"  >
                                            <span class="text-danger error-text mobile_error"  ></span>

                                    </div>

                                    <div class="col-lg-6 p-t-20" id="innersubcategory" style="display: block;">
                                        <label for="simpleFormEmail">Select Roles *</label>
                                        <select id="role_id" name="role_id" class="form-control select2"
                                            data-placeholder="Select Page Type" >
                                            <option value="" selected> Select Page Type </option>
                                            <option value="1"> Admin </option>
                                            <option value="2"> Manager </option>
                                            <option value="3"> Accountant </option>

                                        </select>
                                        <span class="text-danger error-text role_id_error"  ></span>
                                    </div>
                                </div>
                                <br />
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(function(){
        $('#main_form').on('submit',function(e){
            e.preventDefault();
                $.ajax({
                    url:$(this).attr('action'),
                    method:$(this).attr('method'),
                    data: new FormData(this),
                    processData:false,
                    dataType:'json',
                    contentType:false,
                    beforeSend:function(){
                        $(document).find('span.error_text').text('');
                    },success:function(data){
                        if(data.status==0){
                            $.each(data.error ,function(prefix ,val){
                                $('span.'+prefix+'_error').text(val[0]);
                            });
                        }else{
                            $('#main_form')[0].reset();
                            alert('User created successfully please click here to proceed');
                            window.location.href = "/admin";
                        }

                    }
                });
        });
    });
</script>

@endsection