@extends('layout')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Update Course</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Fill Details</li>
            </ol>
            <div class="card">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('courses.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        </div>
                        <!-- <label for="">Course</label>
                        <select name="course_id" id="course_id" class="form-control">
                        @foreach($courses as $course)
                        <option value="{{$course->id}}"> {{$course->course_name}}</option>
                        @endforeach
                        </select> -->
                        <select name="status" id="status" class="form-control">
                            <option value="active" @if($course->status =='active') selected @endif>active</option>
                            <option value="inactive"@if($course->status =='inactive') selected @endif>inactive</option>
                        </select>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
            </div>
        </div>
    </main>
@endsection
