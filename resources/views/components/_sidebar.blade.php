<div id="sidebar" class="align-self-center col-10 mx-auto">
    <form action="{{ route('employee.store') }}" id="add_employee" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
        <div class="form-group">
            <label for="inputName" class="title">Name</label>
            <input type="text" class="form-control" id="inputName" name="name">
        </div>
        <div class="form-group">
            <label for="inputSurname" class="title">Surname</label>
            <input type="text" class="form-control" id="inputSurname" name="surname">
        </div>
        <div class="form-group">
            <label for="month" class="title">Age</label>
            <div class="row dob_fields">
                <div class="col dob_select_box">
                    <select name="date_of_birth[month]" class="form-control" id="dobmonth" aria-describedby="monthHelp"></select>
                    <small id="monthHelp" class="form-text text-muted">Month</small>
                </div>
                <div class="col dob_select_box">
                    <select name="date_of_birth[day]" class="form-control" id="dobday" aria-describedby="dayHelp"></select>
                    <small id="dayHelp" class="form-text text-muted">Day</small>
                </div>
                <div class="col dob_select_box year">
                    <select name="date_of_birth[year]" class="form-control" id="dobyear" aria-describedby="yearHelp"></select>
                    <small id="yearHelp" class="form-text text-muted">Year</small>
                </div>
            </div>
        </div>
        <label class="title">Gender</label>
        <div class="gender_container">
            <div class="form-check">
                <label class="form-check-label" for="inputGender1">
                    Male

                    <input class="form-check-input" type="radio" name="gender" id="inputGender1" value="male" checked>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="inputGender2">
                    Female

                    <input class="form-check-input" type="radio" name="gender" id="inputGender2" value="female">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="form-group select_box">
            <label for="inputPosition" class="title">Position</label>
            <select class="form-control" id="inputPosition" name="position">
                <option value="accountant">Accountant</option>
                <option value="engineer">Engineer</option>
                <option value="doctor">Doctor</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputSalary" class="title">Salary</label>
            <div class="salary_symbol">
                <input type="number" class="form-control" id="inputSalary" name="salary">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add employee</button>
    </form>

    <form method="post" enctype="multipart/form-data" id="dump-uploader">
        <div class="upload-btn-wrapper">
            <label for="upload-btn" class="btn btn-primary">Upload a file</label>
            <input class="upload-btn" id="upload-btn" type="file" name="dump" accept="application/json"  />
        </div>
    </form>
</div>
