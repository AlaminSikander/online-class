@extends('master')
@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Update Exam</h3>
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.examUpdate', $exam->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Exam Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Exam Name</label>
                                    <input name="examName" value="{{$exam->examName}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select name="examClass" value="{{$exam->examClass}}" class="form-control select">
                                        <option value="">Select Class</option>
                                        <option @if($exam->examClass == "1") selected @endif>1</option>
                                        <option @if($exam->examClass == "2") selected @endif>2</option>
                                        <option @if($exam->examClass == "3") selected @endif>3</option>
                                        <option @if($exam->examClass == "4") selected @endif>4</option>
                                        <option @if($exam->examClass == "5") selected @endif>5</option>
                                        <option @if($exam->examClass == "6") selected @endif>6</option>
                                        <option @if($exam->examClass == "7") selected @endif>7</option>
                                        <option @if($exam->examClass == "8") selected @endif>8</option>
                                        <option @if($exam->examClass == "9") selected @endif>9</option>
                                        <option @if($exam->examClass == "10") selected @endif>10</option>
                                        <option @if($exam->examClass == "11") selected @endif>11</option>
                                        <option @if($exam->examClass == "12") selected @endif>12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select name="subject_id" class="form-control select">
                                        @foreach($subjects as $sub)
                                        <option value="{{$sub->id}}" {{$sub->id == $exam->subject_id ? 'selected' : ''}}>
                                            {{$sub->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" value="{{$exam->examLink}}" name="CS_Link" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input name="examStartTime" type="time" value="{{$exam->examStartTime}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>End Time</label>
                                    <input name="examEndTime" value="{{$exam->examEndTime}}" type="time" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input name="examDate" value="{{$exam->examDate}}" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection