<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
}
