@extends('layouts.app')

@section('title')
    Employee List
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Employee List') }}</div>

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
                                    <th>Emp No</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Class Alctd</th>
                                    <th>Stream Alctd</th>
                                    <th>Subject Alctd</th>
                                    <th>Status</th>
                                    <th>Photo</th>
                                    <th>Decision</th>
                                </tr>
                                
                            </thead>
                            <tfoot>
                                <tr>
                                    <th colspan="9">{{ $employeelist->links() }}</th>
                                </tr>
                                <tr>
                                    <th>S.No</th>
                                    <th>Emp No</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Class Alctd</th>
                                    <th>Stream Alctd</th>
                                    <th>Subject Alctd</th>
                                    <th>Status</th>
                                    <th>Photo</th>
                                    <th>Decision</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach($employeelist as $employeelist)
                                    <tr>
                                        <td>{{ $count ++ }}</td>
                                        <td>{{$employeelist->employee_nnumber}}</td>
                                        <td>{{$employeelist->employee_designation}}</td>
                                        <td>{{$employeelist->employee_department}}</td>
                                        <td>{{$employeelist->class_allocated}}</td>
                                        <td>{{$employeelist->stream_allocated}}</td>
                                        <td>{{$employeelist->subject_allocated}}</td>
                                        <td>{{$employeelist->status}}</td>
                                        <td>
                                            <img src="{{asset('uploads/employee')}}/{{$employeelist->photograph}}" alt="Employee Image" class="img-thumbnail rounded mx-auto d-block" style="height:50px; width: 50px;">
                                        </td>
                                        <td>
                                            {{ Form::open( array( 'url' => 'employeelist/'.$employeelist->employee_nnumber, 'class' => 'apprdisappr', 'method' => 'PUT' ) ) }}
                                                @if($employeelist->status == "NOT APPROVED")
                                                    <input type="hidden" name="status" value="APPROVED">
                                                    <button type="submit" class="btn btn-success">
                                                        {{ __('APPROVE') }}
                                                    </button>
                                                @else
                                                    <input type="hidden" name="status" value="NOT APPROVED">
                                                    <button type="submit" class="btn btn-danger">
                                                        {{ __('DISAPPROVE') }}
                                                    </button>
                                                @endif
                                            {{ Form::close() }}
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
