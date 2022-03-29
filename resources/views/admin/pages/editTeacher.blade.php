@extends('master')
@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Update Teachers</h3>
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.updateTeacher',$teacher->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Basic Details</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="{{$teacher->tName}}" name="tName" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input name="tImage" type="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select name="subject_id" class="form-control select">
                                        @foreach($subjects as $sub)
                                        <option value="{{$sub->id}}" {{$sub->id == $teacher->subject_id ? 'selected' : ''}}>
                                            {{$sub->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="tGender" value="$teacher->tGender" class="form-control select">
                                        <option @if($teacher->tGender == "Male") selected @endif>Male</option>
                                        <option @if($teacher->tGender == "Female") selected @endif>Female</option>
                                        <option @if($teacher->tGender == "Others") selected @endif>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input name="tBOD" value="{{$teacher->tBOD}}" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input name="tMobile"  value="{{$teacher->tMobile}}" type="string" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Joining Date</label>
                                    <input name="tJD"  value="{{$teacher->tJD}}" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="form-title"><span>Login Details</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text"  value="{{$teacher->tUsername}}" name="tUsername" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Email ID</label>
                                    <input name="tEmail"  value="{{$teacher->tEmail}}" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="tPassword"  value="{{$teacher->tPassword}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="form-title"><span>Address</span></h5>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="tAddress"  value="{{$teacher->tAddress}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input name="tCity"  value="{{$teacher->tCity}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input name="tState"  value="{{$teacher->tState}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input name="tZipcode"  value="{{$teacher->tZipcode}}" type="text" class="form-control">
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