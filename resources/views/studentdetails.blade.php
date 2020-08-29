@extends('layouts.app')

@section('title')
    Student Exam Details
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Student Exam Details') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!empty($successmessage))
                        <div class="alert alert-success">
                            {{ $successmessage }}
                        </div>
                    @endif
                    
                    @if(count($errors) > 0)
                        <div class="row">
                            <label class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <div class="alert alert-danger">
                                    Upload Verification <br><br>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                    {{ Form::open( array( 'url' => 'import',  'class' => 'import', 'enctype' => 'multipart/form-data' ) ) }}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Import Excel File</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="studentfile">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Import') }}
                                </button>
                            </div>
                        </div>
                    {{ Form::close() }}

                    {{ Form::open( array( 'url' => 'studentdetails', 'files' => true, 'class' => 'submit' ) ) }}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Registration No.</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="registrationnumber" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Roll No.</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="rollnumber" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Class</label>
                            <div class="col-md-6">
                                <select name="class" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="10TH">10TH</option>
                                    <option value="12TH">12TH</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Stream</label>
                            <div class="col-md-6">
                                <select name="stream" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="GENERAL">GENERAL(10TH)</option>
                                    <option value="MEDICAL">MEDICAL</option>
                                    <option value="NON-MEDICAL">NON-MEDICAL</option>
                                    <option value="COMMERCE">COMMERCE</option>
                                    <option value="ARTS">ARTS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Subject</label>
                            <div class="col-md-6">
                                <select name="subject" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="SCIENCE">SCIENCE</option>
                                    <option value="MATHEMATICS">MATHEMATICS</option>
                                    <option value="ENGLISH">ENGLISH</option>
                                    <option value="SOCIAL STUDIES">SOCIAL STUDIES</option>
                                    <option value="URDU">URDU</option>
                                    <option value="BOTANY">BOTANY</option>
                                    <option value="ZOOLOGY">ZOOLOGY</option>
                                    <option value="CHEMISTRY">CHEMISTRY</option>
                                    <option value="PHYSICS">PHYSICS</option>
                                    <option value="ENVIRONMENT SCIENCE">ENVIRONMENT SCIENCE</option>
                                    <option value="ACCOUNTING">ACCOUNTING</option>
                                    <option value="ECONOMICS">ECONOMICS</option>
                                    <option value="EDUCATION">EDUCATION</option>
                                    <option value="POLITICAL SCIENCE">POLITICAL SCIENCE</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Student Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="studentcode" value="{{ $studentcode }}" required readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Photograph</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="photograph" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
