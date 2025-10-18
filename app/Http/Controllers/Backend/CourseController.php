<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function course()
    {
        $courses = Course::latest()->get();
        return view('backend.course.course-list', compact('courses'));
    }

    public function courseStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'instructor' => 'required|string|max:255',
            'duration' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $course = new Course();

        $course->title = $request->title;
        $course->instructor = $request->instructor;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->description = $request->description;

        if (isset($request->thumbnail)) {
            $imageName = rand() . '-course-' . '.' . $request->thumbnail->extension();
            $request->thumbnail->move('backend/images/course/', $imageName);

            $course->thumbnail = $imageName;
        }

        $course->save();
        return redirect()->back()->with('success', 'Course added successfully!');
    }

    public function courseDelete($id)
    {
        $course = Course::find($id);

        if ($course->image && file_exists('backend/images/course/' . $course->image)) {
            unlink('backend/images/course/' . $course->image);
        }

        $course->delete();
        toastr()->success('Course Deleted Successfully');
        return redirect()->back();
    }

    // Update Course (Edit)
    public function courseUpdate(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'instructor' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $course = Course::findOrFail($request->id);
        $course->title = $request->title;
        $course->instructor = $request->instructor;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->description = $request->description;

        if ($request->hasFile('thumbnail')) {
            if ($course->thumbnail && file_exists(public_path('backend/images/course/' . $course->thumbnail))) {
                unlink(public_path('backend/images/course/' . $course->thumbnail));
            }
            $imageName = rand() . '-course-' . '.' . $request->thumbnail->extension();
            $request->thumbnail->move('backend/images/course/', $imageName);
            $course->thumbnail = $imageName;
        }

        $course->save();
        return redirect()->back()->with('success', 'Course updated successfully!');
    }
}
