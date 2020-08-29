@extends('layouts.app')

@section('title')
    Select Examination Class
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Select Examination Class') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Form::open( array('url' => 'selectexam', 'class' => 'submit') ) }}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Class</label>
                            <div class="col-md-6">
                                <select name="class" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    @foreach($employeedetail1 as $employeedetail1)
                                        <option value="{{$employeedetail1->class_allocated}}">{{$employeedetail1->class_allocated}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Stream</label>
                            <div class="col-md-6">
                                <select name="stream" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    @foreach($employeedetail2 as $employeedetail2)
                                        <option value="{{$employeedetail2->stream_allocated}}">{{$employeedetail2->stream_allocated}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Subject</label>
                            <div class="col-md-6">
                                <select name="subject" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    @foreach($employeedetail3 as $employeedetail3)
                                        <option value="{{$employeedetail3->subject_allocated}}">{{$employeedetail3->subject_allocated}}</option>
                                    @endforeach
                                </select>
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
