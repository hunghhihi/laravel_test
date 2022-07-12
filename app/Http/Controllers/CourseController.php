<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vocabulary;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $vocabularies = Vocabulary::whereUserId(Auth::id())->get();
        return view('course.index', [
            'vocabularies' => $vocabularies
        ]);
    }
    public function createVocabulary(Request $request)
    {

        $request->validate([
            'word' => 'required|string|max:255',
            'mean' => 'required|string|max:255',
            'example' => 'required|string|max:255',
        ]);
        $vocabulary = Vocabulary::create([
            'user_id' => Auth::id(),
            'word' => $request->word,
            'meaning' => $request->mean,
            'example' => $request->example
        ]);
        return redirect()->back();
    }
}
