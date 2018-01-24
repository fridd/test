<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
class StudentController extends Controller
{
    public function __construct(Student $student)
    {
        $this->student = $student;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $all= $this->student->all();
       return view('student.index',compact('all'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
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
        $all = $request->all();
        $this->student->create($all);
        if($all){
            return response(['message'=>'添加成功'],201);
        }
        return response(['message'=>'添加失败'],400);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $val = $this->student->find($id);
        return view('student.show',compact('val'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $val = $this->student->find($id);
        return view('student.edit',compact('val'));
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
        $all = $request->all();
        $this->student->find($id)->update($all);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->student->destroy($id);
        if($result){
            return response(['message'=>'删除成功'],201);
        }
        return response(['message'=>'删除失败'],400);

    }
}
