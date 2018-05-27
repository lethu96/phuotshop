<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;


class FeedbackController extends Controller
{
    public  function index()
    {
    	$feedback = Feedback::all()->toArray();
    	return view('admin.feedback.index',['data' => $feedback]);
    }

    public function destroy($id)
    {
        $val =Feedback::find($id);
        $val->delete();
        return redirect('/feedback')->with(['message'=>' xoá thành công']);
    }

}
