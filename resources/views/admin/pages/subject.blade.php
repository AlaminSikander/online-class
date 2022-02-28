@extends('master')
@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Subjects</h3>
                
            </div>
            <div class="col-auto text-end float-end ms-auto">
                <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                    Download</a>
                <a href="{{route('admin.addSubject')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PRE2209</td>
                                    <td>
                                        <h2>
                                            <a>Mathematics</a>
                                        </h2>
                                    </td>
                                    <td>5</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="edit-subject.html" class="btn btn-sm bg-success-light me-2">
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