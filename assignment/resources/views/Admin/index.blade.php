@extends('Admin.layouts.mainlayout')

@section('content')

<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Users</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-topline-green">
                                <div class="card-head">
                                    <header>user</header>
                                    <div class="breadcrumb page-breadcrumb  pull-right">
                                        <a href="{!!url('/admin/create')!!}" id="addRow" class="btn btn-info">
                                            Add New <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                               </div>

                                <div class="card-body ">
                                    <div class="table table-striped table-bordered table-hover table-checkable">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone no.</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($user_list as $key => $category)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $category['first_name'].' '.$category['last_name'] }}</td>
                                                    <td>{{ $category['email'] }}</td>
                                                    <td>{{ $category['mobile'] }}</td>

                                                    <td class="valigntop">
                                                        <div class="btn-group">
                                                            <button
                                                                class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                                type="button" data-toggle="dropdown"
                                                                aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a
                                                                        onclick="deletes('{{$category->id}}', '{{$category->status}}' ,'/delete-user/','/admin','User')">
                                                                        <i class="icon-tag"></i> Delete</a>
                                                                </li>
                                                                <li>
                                                                    @if($category->status == 1)
                                                                    <a
                                                                        href="{{url('/admin/'.$category->id.'/edit')}}">
                                                                        <i class="icon-tag"></i> Edit</a>
                                                                    @else
                                                                    <a href='#'><i class="icon-tag"> Edit</i></a>
                                                                    @endif
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="10">Users Not found!!</td>
                                                </tr>
                                                @endforelse
                                            </tbody                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection