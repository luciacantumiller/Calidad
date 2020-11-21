<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseDestroyRequest;
use App\Http\Requests\CourseStoreRequest;
use App\Models\Course;
use App\Models\JoinCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addCourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Course::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseDestroyRequest $request, Course $course)
    {
        $course->delete();
        return redirect()->route('home');
    }
}
