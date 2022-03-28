@extends('master')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Teachers Details</h3>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="about-info">
                        <h4>About Me</h4>
                        <div class="media mt-3  d-flex">
                            <img src="{{url('/uploads/'.$teacher->tImage)}}" class="me-3 flex-shrink-0" alt="...">
                            <div class="media-body flex-grow-1">
                            <ul>
                                    <li>
                                        <span class="title-span">Full Name : </span>
                                        <span class="info-span">{{$teacher -> tName}}</span>
                                    </li>
                                    
                                    <li>
                                        <span class="title-span">Mobile : </span>
                                        <span class="info-span">{{$teacher -> tMobile}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Email : </span>
                                        <span class="info-span">{{$teacher -> tEmail}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Gender : </span>
                                        <span class="info-span">{{$teacher -> tGender}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">DOB : </span>
                                        <span class="info-span">{{$teacher -> tBOD}}</span>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <p>Hello I am Daisy Parks. Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry, simply dummy text of the printing and
                                    typesetting industry.</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>Address</h5>
                                <p>{{$teacher -> tAddress}}, {{$teacher -> tCity}}, {{$teacher -> tState}}, {{$teacher -> tZipcode}}</p>
                            </div>
                        </div>
                        
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
