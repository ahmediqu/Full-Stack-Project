<template>
    <div>

        <div class="card">
            <div class="card-body">
                <form method="post">
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
                                    <option value="1">Test One</option>
                                    <option value="2">Test Two</option>
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
                                <label for="">Parent's / Guardian Contact No. <span class="text-danger"> * </span>
                                </label>
                                <input type="text" class="form-control" name="guardian_contact_no" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for=""> Student NID / Birth Certificate No. </label>
                                <input type="text" class="form-control" name="student_nid">
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
                                    <option value="1">SSC</option>
                                    <option value="2">HSC</option>
                                    <option value="3">Diploma</option>
                                    <option value="4">Dakhil</option>
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
                                <option value="1">Cumilla</option>
                                <option value="1">Dhaka</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">GPA <span class="text-danger"> * </span></label>
                            <input type="number" class="form-control" name="gpa" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Add",

}
</script>
