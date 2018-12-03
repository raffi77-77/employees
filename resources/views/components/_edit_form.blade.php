<div class="modal" tabindex="-1" role="dialog" id="edit_employee_form">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background: lightblue">
            <div class="modal-header">
                <h5 class="modal-title">Edit employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="edit_sidebar" class="align-self-center col-10 mx-auto">
                <form action="" id="edit_employee" method="put">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="edit__token">
                    <div class="form-group">
                        <label for="edit_inputName" class="title">Name</label>
                        <input type="text" class="form-control" id="edit_inputName" name="name">
                    </div>
                    <div class="form-group">
                        <label for="edit_inputSurname" class="title">Surname</label>
                        <input type="text" class="form-control" id="edit_inputSurname" name="surname">
                    </div>
                    <div class="form-group">
                        <label for="edit_month" class="title">Age</label>
                        <div class="row dob_fields">
                            <div class="col dob_select_box">
                                <select name="date_of_birth[month]" class="form-control" id="edit_dobmonth" aria-describedby="monthHelp"></select>
                                <small id="edit_monthHelp" class="form-text text-muted">Month</small>
                            </div>
                            <div class="col dob_select_box">
                                <select name="date_of_birth[day]" class="form-control" id="edit_dobday" aria-describedby="dayHelp"></select>
                                <small id="edit_dayHelp" class="form-text text-muted">Day</small>
                            </div>
                            <div class="col dob_select_box year">
                                <select name="date_of_birth[year]" class="form-control" id="edit_dobyear" aria-describedby="yearHelp"></select>
                                <small id="edit_yearHelp" class="form-text text-muted">Year</small>
                            </div>
                        </div>
                    </div>
                    <label class="title">Gender</label>
                    <div class="gender_container">
                        <div class="form-check">
                            <label class="form-check-label" for="edit_inputGender1">
                                Male

                                <input class="form-check-input" type="radio" name="gender" id="edit_inputGender1" value="male" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="edit_inputGender2">
                                Female

                                <input class="form-check-input" type="radio" name="gender" id="edit_inputGender2" value="female">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group select_box">
                        <label for="edit_inputPosition" class="title">Position</label>
                        <select class="form-control" id="edit_inputPosition" name="position">
                            <option value="accountant">Accountant</option>
                            <option value="engineer">Engineer</option>
                            <option value="doctor">Doctor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_inputSalary" class="title">Salary</label>
                        <div class="salary_symbol">
                            <input type="number" class="form-control" id="edit_inputSalary" name="salary">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update employee</button>
                </form>
            </div>

        </div>
    </div>
</div>
