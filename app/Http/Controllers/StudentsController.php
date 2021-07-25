<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Students::all(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = Students::create($request->all());
        return response($students,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students= Students::find($id);
        if(is_null($students))
        {
            return response() ->json(['message'=>'Employee Not Found'], 404);
        }
        return response()->json($students::find($id),200);
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
        $students= Students::find($id);
        if(is_null($students))
        {
            return response() ->json(['message'=>'Employee Not Found'], 404);
        }
        $students-> update($request->all());
         return response($students,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {  
        $students= Students::find($id);
        if(is_null($students))
        {
            return response() ->json(['message'=>'Employee Not Found'], 404);
        }
        ///DELETE
        $students -> delete();
        return response() ->json(null,204);
    }
}
