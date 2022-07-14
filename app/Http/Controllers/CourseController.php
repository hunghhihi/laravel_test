<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vocabulary;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index(Request $request)
    {

        $request->validate([
            'search' => 'max:255',
        ]);
        if ($request->search) {
            $vocabularies = Vocabulary::whereUserId(Auth::id())->where('word', 'like', '%' . $request->search . '%')->get();
        } else {
            $vocabularies = Vocabulary::whereUserId(Auth::id())->get();
        }
        return view('course.index', [
            'vocabularies' => $vocabularies
        ]);
    }
    public function create()
    {
        return view('course.create');
    }
    public function createVocabulary(Request $request)
    {
        switch ($request->input('action')) {
            case 'back':
                return redirect(route('course'));
                break;
            case 'create':
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
                return redirect(route('course'));
                break;
        }
    }
}
