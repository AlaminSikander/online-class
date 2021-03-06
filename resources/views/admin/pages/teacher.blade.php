@extends('master')
@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Teachers</h3>
                
            </div>
            <div class="col-auto text-end float-end ms-auto">
            <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                    Download</a>
                <a href="{{route('admin.addTeacher')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                    {!! Toastr::message() !!}
                        <table class="table table-hover table-center mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Subject</th>
                                    <!-- <th>Subject</th> -->
                                    <th>Mobile Number</th>
                                    <th>Address</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teacher as $data)
                            <tr>
                                
                                    <td>{{$data -> id}}</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{route('admin.teacherProfile',$data->id)}}" class="avatar avatar-sm me-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{url('/uploads/'.$data->tImage)}}" alt="User Image"></a>
                                            <a href="{{route('admin.teacherProfile', $data->id)}}">{{$data -> tName}}</a>
                                        </h2> 
                                        
                                    </td>
                                    <td>{{$data -> tGender}}</td>
                                    <td>{{optional($data -> tSubject)->subject_name}}</td>

                                    <td>{{$data -> tMobile}}</td>
                                    <td>{{$data -> tAddress}}</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="{{route('admin.editTeacher',$data->id)}}" class="btn btn-sm bg-success-light me-2">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('admin.teacherDelete', $data->id)}}" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
