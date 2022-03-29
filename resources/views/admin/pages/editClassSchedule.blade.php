@extends('master')
@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Update Class Schedule</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.classScheduleUpdate', $classSchedule->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Time Table</span></h5>
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Teacher</label>
                                    <select name="t_id" class="form-control select">
                                        @foreach($teachers as $tea)
                                        <option value="{{$tea->id}}" {{$tea->id == $classSchedule->t_id ? 'selected' : ''}}>
                                            {{$tea->tName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select name="CS_Class" class="form-control select">
                                        <option value="">Select Class</option>
                                        <option @if($classSchedule->CS_Class == "1") selected @endif>1</option>
                                        <option @if($classSchedule->CS_Class == "2") selected @endif>2</option>
                                        <option @if($classSchedule->CS_Class == "3") selected @endif>3</option>
                                        <option @if($classSchedule->CS_Class == "4") selected @endif>4</option>
                                        <option @if($classSchedule->CS_Class == "5") selected @endif>5</option>
                                        <option @if($classSchedule->CS_Class == "6") selected @endif>6</option>
                                        <option @if($classSchedule->CS_Class == "7") selected @endif>7</option>
                                        <option @if($classSchedule->CS_Class == "8") selected @endif>8</option>
                                        <option @if($classSchedule->CS_Class == "9") selected @endif>9</option>
                                        <option @if($classSchedule->CS_Class == "10") selected @endif>10</option>
                                        <option @if($classSchedule->CS_Class == "11") selected @endif>11</option>
                                        <option @if($classSchedule->CS_Class == "12") selected @endif>12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select name="subject_id" class="form-control select">
                                        @foreach($subjects as $sub)
                                        <option value="{{$sub->id}}" {{$sub->id == $classSchedule->subject_id ? 'selected' : ''}}>
                                            {{$sub->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" value="{{$classSchedule->CS_Link}}" name="CS_Link" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input name="CS_date" value="{{$classSchedule->CS_date}}" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input name="CS_StartTime" type="time" value="{{$classSchedule->CS_StartTime}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>End Time</label>
                                    <input name="CS_EndTime" value="{{$classSchedule->CS_EndTime}}" type="time" class="form-control">
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