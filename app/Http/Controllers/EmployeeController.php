<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request);


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
    private function validate(Request $request){
        $request->validate([
            'name' => 'string|required',
            'surname' => 'string|required',
            'age' => 'integer|required',
            'gender' => 'string|required|in:male,female',
            'position' => 'string|required|in:accountant,engineer,doctor',
            'salary' => 'integer|required'
        ]);
    }
}
