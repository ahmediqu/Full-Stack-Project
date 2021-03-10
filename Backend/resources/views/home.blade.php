@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <form method="post" action="{{ route('student.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Student Basic Information</h2>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Student's Fullname <span class="text-danger"> * </span></label>
                                <input type="text" class="form-control" name="fullname" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Program's <span class="text-danger"> * </span></label>

                                <select name="program_id" class="form-control" required>
                                    <option value="" selected disabled>Select Programs</option>
                                    @foreach($programs as $program)
                                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Student photo</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h2>Student Personal Information</h2>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Father's name <span class="text-danger"> * </span> </label>
                                <input type="text" class="form-control" name="father_name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Mother's name <span class="text-danger"> * </span> </label>
                                <input type="text" class="form-control" name="mother_name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Guardian / Referrer name </label>
                                <input type="text" class="form-control" name="guardian_name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Student Contact No.<span class="text-danger"> * </span> </label>
                                <input type="text" class="form-control" name="student_contact_no" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Parent's / Guardian Contact No. <span
                                        class="text-danger"> * </span>
                                </label>
                                <input type="text" class="form-control" name="parent_contact_no" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for=""> Student NID / Birth Certificate No. </label>
                                <input type="text" class="form-control" name="student_nid_no">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for=""> Student email </label>
                                <input type="text" class="form-control" name="student_email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for=""> Present Address <span class="text-danger"> * </span></label>
                                <textarea name="student_present_address" class="form-control" cols="3"
                                          rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h2>Student Academic Information</h2>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Select Examination <span class="text-danger"> * </span></label>
                                <select name="examination_id" id="" class="form-control" required>
                                    <option value="" selected disabled>Select Examination</option>
                                    @foreach($examinations as $examination)
                                        <option value="{{ $examination->id }}">{{ $examination->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Roll Number <span class="text-danger"> * </span></label>
                            <input type="text" class="form-control" name="roll_no">
                        </div>
                        <div class="col-md-3">
                            <label for="">Registration Number <span class="text-danger"> * </span></label>
                            <input type="text" class="form-control" name="registration_no" required>
                        </div>
                        <div class="col-md-2">
                            <label for="">Passing year <span class="text-danger"> * </span></label>
                            <input type="text" class="form-control" name="passing_year" required>
                        </div>
                        <div class="col-md-2">
                            <label for="">Board <span class="text-danger"> * </span></label>
                            <select name="board_id" class="form-control" required>
                                @foreach($boards as $board)
                                    <option value="{{ $board->id }}">{{ $board->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">GPA <span class="text-danger"> * </span></label>
                            <input type="number" class="form-control" name="gpa" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary"> Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
