<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function indexUser(){
        $feedback=Feedback::latest()->paginate(10);
        return view('feedback', compact('feedback'));
    }
    public function index(){
        $feedback=Feedback::latest()->paginate(10);
        return view('feedback.index', compact('feedback'));
    }

    public function create(){
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'text'=>'required|string',
        ]);

        Feedback::create($validated);

        return redirect()->back()
        ->with('success', ' Ваше сообщение было отправленно');
    }

    public function destroy(Feedback $feedback){
        
        $feedback->delete();

        return redirect()->route('feedback.index')->with('success', 'Сообщение удалено!');
    }

    public function show(Feedback $feedback){
        

        return view('feedback.show', compact('feedback'));
    }
}