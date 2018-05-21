<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Bill;
use Auth;
use App\TypeProduct;
use App\BillDetail;
use DB;
use Validator;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $data=User::whereIn('status',[1,2])->get()->toArray();
        return view('admin.user.index',['data'=>$data]);
    }

    public function listcustomer()
    {
        $data=User::where('status','=',0)->get()->toArray();
        return view('admin.customer.index',['data'=>$data]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $user = User::find($data['id']);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->address = $data['address'];
        $user->birthday = $data['birthday'];
        $user->phone = $data['phone'];
        $user->gender = $data['gender'];
        $user->status = $data['status'];
        $user->save();
        return redirect('/user')->with(['message'=>"Sửa dữ liệu thành công "]);
    }

    public function getStore(Request $request)
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->address = $data['address'];
        $user->birthday = $data['birthday'];
        $user->phone = $data['phone'];
        $user->gender = $data['gender'];
        if(isset($data['status']))
        {
            $user->status = $data['status'];
        }
        
        $user->save();
        return redirect('/user')->with(['message'=>"Sửa dữ liệu thành công "]);
    }

    public function show($id)
    {
        $data = User::find($id)->toArray();
        return view('admin.user.update',['id'=>$id,'data'=>$data]);
    }

    public function destroy($id)
    {
        $val =User::find($id);
        $val->delete();
         return redirect('/user')->with(['message'=>' xoá thành công']);
    }

    public function detail()
    {
        $id=Auth::user()->id;
        $data= DB::table('products')
        ->join('bill_detail','products.id','=','bill_detail.product_id')
        ->join('bill','bill.id', '=', 'bill_detail.bill_id')
        ->join('users','users.id', '=', 'bill.user_id')
        ->selectRaw("products.*,bill.*,bill.id as madonhang,bill_detail.qty as soluong")
        ->where('users.id',$id)->get()->toArray();
         $cate = TypeProduct::all()->toArray();
        return view('user.user',['data' =>$data,'cate' => $cate]);
    }

    public function getchangePass()
    {
        $cate = TypeProduct::all()->toArray();
        return view('user.changepass',['cate' => $cate]);
    }

    public function admin_credential_rules(array $data)
    {
      $messages = [
        'current-password.required' => 'Please enter current password',
        'password.required' => 'Please enter password',
      ];

      $validator = Validator::make($data, [
        'current-password' => 'required',
        'password' => 'required|same:password',
        'password_confirmation' => 'required|same:password',     
      ], $messages);

      return $validator;
    } 

    public function changepass(Request $request)
    {
      if(Auth::Check())
      {
        $request_data = $request->All();
        $validator = $this->admin_credential_rules($request_data);
        if($validator->fails())
        {
            $errors=$validator->getMessageBag()->toArray();
           return redirect()->back()->withErrors($errors)->withInput();
        }
        else
        {  

          $current_password = Auth::User()->password;           
          if(Hash::check($request_data['current-password'], $current_password))
          {     

            $user_id = Auth::User()->id;                       
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request_data['password']);;
            $obj_user->save(); 

            echo "<script>
            alert('Đổi Mật khẩu thành công');
            window.location.href='/user-acount';
            </script>";
          }
          else{
                $errors = array('current-password' => 'Please enter correct current password');
               return redirect()->back()->withErrors($errors)->withInput(); 
          }
        }        
      }
      else
      {
        return redirect()->to('/');
      }    
    }

    public function adminchangepass(Request $request)
    {
      if(Auth::Check())
      {
        $request_data = $request->All();
        $validator = $this->admin_credential_rules($request_data);
        if($validator->fails())
        {
            $errors=$validator->getMessageBag()->toArray();
           return redirect()->back()->withErrors($errors)->withInput();
        }
        else
        {  

          $current_password = Auth::User()->password;           
          if(Hash::check($request_data['current-password'], $current_password))
          {     

            $user_id = Auth::User()->id;                       
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request_data['password']);;
            $obj_user->save(); 

            echo "<script>
            alert('Đổi Mật khẩu thành công');
            window.location.href='/admin-acount';
            </script>";
          }
          else{
                $errors = array('current-password' => 'Please enter correct current password');
               return redirect()->back()->withErrors($errors)->withInput(); 
          }
        }        
      }
      else
      {
        return redirect()->to('/home');
      }    
    }

}