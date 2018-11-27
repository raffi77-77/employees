<div id="sidebar">
    <form action="{{ route('employee.store') }}" id="add_employee" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="inputSurname">Surname</label>
            <input type="text" class="form-control" id="inputSurname" name="surname" placeholder="Enter surname">
        </div>
        <div class="form-group">
            <label for="month">Age</label>
            <select name="date_of_birth[day]" id="dobday"></select>
            <select name="date_of_birth[month]" id="dobmonth"></select>
            <select name="date_of_birth[year]" id="dobyear"></select>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="inputGender1" value="male">
            <label class="form-check-label" for="inputGender1">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="inputGender2" value="female">
            <label class="form-check-label" for="inputGender2">
                Female
            </label>
        </div>
        <div class="form-group">
            <label for="inputPosition">Position</label>
            <select class="form-control" id="inputPosition" name="position">
                <option value="accountant">Accountant</option>
                <option value="engineer">Engineer</option>
                <option value="doctor">Doctor</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputSalary">Salary</label>
            <input type="number" class="form-control" id="inputSalary" name="salary" placeholder="$">
        </div>
        <button type="submit" class="btn btn-primary">Add employee</button>
    </form>
</div>
