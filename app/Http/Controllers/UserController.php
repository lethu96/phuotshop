<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Bill;
use Auth;
use App\TypeProduct;
use App\BillDetail;
use DB;

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
        dd($data);
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

}