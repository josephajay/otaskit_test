@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Employee</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile_no">Mobile No.</label>
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ $employee->mobile_no }}">
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <select class="form-control" id="department" name="department">
                            <option value="Sales" @if($employee->department == 'Sales') selected @endif>Sales</option>
                            <option value="Marketing" @if($employee->department == 'Marketing') selected @endif>Marketing</option>
                            <option value="IT" @if($employee->department == 'IT') selected @endif>IT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="Active" @if($employee->status == 'Active') selected @endif>Active</option>
                            <option value="Inactive" @if($employee->status == 'Inactive') selected @endif>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Employee</button>
                </form>
            </div>
        </div>
    </div>
@endsection
