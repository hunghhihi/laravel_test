<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vocabulary;

class CourseController extends Controller
{
    public function index($id)
    {
        $vocabularies = Vocabulary::where('user_id','=',$id)->get();
        return view('course.index', ['vocabularies' => $vocabularies,
                                     'user_id' => $id]);
    }
    public function create_vocabulary()
    {
        return view('course.create_vocabulary');
    }
}
