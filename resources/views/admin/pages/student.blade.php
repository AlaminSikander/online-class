@extends('master')
@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Students</h3>

            </div>
            <div class="col-auto text-end float-end ms-auto">
            <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                    Download</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Parent Name</th>
                                    <th>Mobile Number</th>
                                    <th>Address</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PRE</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{url('backend/img/profiles/avatar-01.jpg')}}"
                                                    alt="User Image"></a>
                                            <a href="student-details.html">Aaliyah</a>
                                        </h2>
                                    </td>
                                    <td>10 A</td>
                                    <td>Jeffrey Wong</td>
                                    <td>097 3584 5870</td>
                                    <td>911 Deer Ridge Drive,USA</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="edit-student.html" class="btn btn-sm bg-success-light me-2">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
