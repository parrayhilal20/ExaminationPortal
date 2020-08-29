@extends('layouts.app')

@section('title')
    Exam Schedules
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Exam Schedules') }}</div>

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

                    <div class="form-group row">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Class</th>
                                    <th>Stream</th>
                                    <th>Subject</th>
                                    <th>Exam Start Time</th>
                                    <th>Exam End Time</th>
                                    <th>Exam Date</th>
                                    <th>Update</th>
                                </tr>
                                
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Class</th>
                                    <th>Stream</th>
                                    <th>Subject</th>
                                    <th>Exam Start Time</th>
                                    <th>Exam End Time</th>
                                    <th>Exam Date</th>
                                    <th>Update</th>
                                </tr>
                                <tr>
                                    <th colspan="8">{{ $examschedulelist->links() }}</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach($examschedulelist as $examschedulelist)
                                    <tr>
                                        <td>{{$examschedulelist->id}}</td>
                                        <td>{{$examschedulelist->class}}</td>
                                        <td>{{$examschedulelist->stream}}</td>
                                        <td>{{$examschedulelist->subject}}</td>
                                        <td>{{$examschedulelist->start_time}}</td>
                                        <td>{{$examschedulelist->end_time}}</td>
                                        <td>{{$examschedulelist->exam_date}}</td>
                                        <td>
                                            <a href="{{ url('examschedules') }}/{{ $examschedulelist->id }}" class="btn btn-success">EDIT</a>
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
