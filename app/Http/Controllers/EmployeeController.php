<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mockery\Exception;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validator($request);

        $employee = $request->all();

        unset($employee['_token']);

        $tmp_date = $employee['date_of_birth']['day'] . '/'
            . $employee['date_of_birth']['month'] . '/'
            . $employee['date_of_birth']['year'];

        $employee['date_of_birth'] = Carbon::createFromFormat('d/m/Y', $tmp_date);

        Employee::create($employee);
        exit;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validator($request);

        $employee = Employee::findOrFail($id);

        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->gender = $request->gender;
        $employee->position = $request->position;
        $employee->salary = $request->salary;
        $employee->date_of_birth = $request->date_of_birth['day'] . '/'
            . $request->date_of_birth['month'] . '/'
            . $request->date_of_birth['year'];

        $employee->date_of_birth = Carbon::createFromFormat('d/m/Y', $employee->date_of_birth);

        $employee->save();
        exit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return void
     */
    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();
    }


    /**
     * Form custom validator.
     *
     * @param Request $request
     * @return void
    */
    public function validator(Request $request){
        $request->validate([
            'name' => 'string|required',
            'surname' => 'string|required',
            'gender' => 'string|required|in:male,female',
            'position' => 'string|required|in:accountant,engineer,doctor',
            'salary' => 'integer|required',
            'date_of_birth.day' => 'integer|required',
            'date_of_birth.month' => 'integer|required',
            'date_of_birth.year' => 'integer|required',
        ]);
    }


    /**
     * Get list of employees
     * This function is using DATATABLES AJAX
     *
     * @throws \Exception
     * @return DataTables
     */
    public function getEmployeeList(){
        $model = Employee::query();

        return DataTables::of($model)
            ->editColumn('date_of_birth', function($model){
                $date = Carbon::parse($model->date_of_birth);
                $now = Carbon::now();

                return $date->diffInYears($now);
            })
            ->addColumn('actions', function($model){
                return view('components._actions')
                    ->with([
                        'id' => $model->id
                    ])
                    ->render();
            })
            ->rawColumns(['date_of_birth', 'actions'])
            ->make(true);
    }


    /**
     * Get employee data using its ID (AJAX)
     *
     * @param int $id
     * @return void
    */
    public function getEmployeeData($id){
        echo Employee::findOrFail($id);
    }

    /**
     * Upload file method. This method gets the file and dump the data into DB
     *
     * @param Request $request
     * @return void
    */
    public function uploadDump(Request $request){
        $content = file_get_contents( $request->file('file')->path() );
        $table_fields = Employee::tableFields();
        $employees = json_decode($content);


        unset($table_fields[  array_search('created_at', $table_fields) ]);
        unset($table_fields[  array_search('updated_at', $table_fields) ]);
        unset($table_fields[  array_search('id', $table_fields) ]);

        if (json_last_error() == JSON_ERROR_NONE){
            foreach ($employees as $employee_from_dump){
                $has_errors = false;
                foreach ($table_fields as $table_field) {
                    if(!array_key_exists($table_field, $employee_from_dump)){
                        $has_errors = true;
                        break;
                    }
                }

                if(!$has_errors){
                    Employee::create((array)$employee_from_dump);
                }
            }
        }
    }
}
