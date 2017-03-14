<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return('index.blade.php');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return('index.blade.php');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data =  Input::except(array('_token')) ;
        $rule  =  array(
            'name'       => 'required|unique:registered_users',
            'email'      => 'required|email|unique:registered_users',
            'password'   => 'required|min:6|same:cpassword',
            'cpassword'  => 'required|min:6'
        ) ;

        $validator = Validator::make($data,$rule);

        if ($validator->fails())
        {
            return Redirect::to('index')
                ->withErrors($validator->messages());
        }
        else
        {
            Register::saveFormData(Input::except(array('_token','cpassword')));

            return Redirect::to('index')
                ->withMessage('Data inserted');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
