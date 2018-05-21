<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
use App\User;
use Carbon\Carbon;
ini_set('max_execution_time', '0');
use App\Http\Controllers\Controller;

class ResetPasswordController extends Controller
{
    public function resetpass(Request $request)
    {
        $mail = $request->email;
        $check_mail = User::where('email',$mail)->get();
        if(isset($check_mail) && count($check_mail)==1){
            $random = rand(10000000,99999999);
            User::where('email',$mail)->update([
                'password'=>bcrypt($random),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);
           
            Mail::send('mailfb', array('newpass'=>$random), function($message) use ($mail){
                $message->to($mail)->subject('HIPPO ONLINE-Cấp mật khẩu mới!');
            });
            Session::flash('flash_message', 'Send message successfully!');
            return redirect('/getMail')->with(['send_cussess'=>""]);
        }
        else{
            return redirect('/getMail')->with(['fail'=>""]);
        }
        
    }
}