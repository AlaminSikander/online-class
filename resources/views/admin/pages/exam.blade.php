@extends('master')
@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Exam Schedule</h3>
            </div>
            <div class="col-auto text-end float-end ms-auto">
            <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                    Download</a>
                <a href="{{route('admin.addExam')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    <th>Exam Name</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Link</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Date</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($examView as $exam)
                                <tr>
                                    <td>{{$exam -> id}}</td>
                                    <td>
                                        <h2>

                                            {{$exam -> examName}}
                                        </h2>
                                        
                                    </td>
                                    <td>{{$exam -> examClass}}</td>
                                    <td>{{optional($exam -> subject)->subject_name}}</td>
                                    <td>{{$exam -> examLink}}</td>
                                    <td>{{$exam -> examStartTime}}</td>
                                    <td>{{$exam -> examEndTime}}</td>
                                    <td>{{$exam -> examDate}}</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="{{route('admin.examEdit', $exam->id)}}" class="btn btn-sm bg-success-light me-2">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('admin.examDelete',$exam->id)}}" class="btn btn-sm bg-danger-light">
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