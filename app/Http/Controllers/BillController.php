<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\User;
use App\BillDetail;
use DB;

class BillController extends Controller
{

    // public function test()
    // {
    //     //PurchasedItem::select(DB::raw('COUNT(id) as cnt', 'voucher_id'))->groupBy('voucher_id')->orderBy('cnt', 'DESC')->first();

    //     $users = DB::table('products')
    //                  ->select(DB::raw('count(qty) as totalqty'))
    //                  ->where('status', '<>', 1)
    //                  ->groupBy('product_id')
    //                  ->get();
    //     $qq=DB::table('products')
    //             ->join('bill_detail','bill_detail.product_id','=','products.id')
    //             ->selectRaw("products.*")

    //             $qq= 'SELECT TOP(5) product_id, SUM(qty) AS qty
    //     FROM bill_detail
    //     GROUP BY product_id
    //     ORDER BY SUM(qty) DESC';
    //     dd($qq);
    // }

    public function index()
    {
        $data=Bill::paginate(5);
        return view('admin.bill.index',['data'=> $data]);
    }

    public function detail($id) 
    {
        $bill = Bill::find($id)->toArray();
        $detail= DB::table('products')
        ->join('bill_detail','bill_detail.product_id','=','products.id')
        ->join('bill','bill.id','=','bill_detail.bill_id')
        ->selectRaw("bill_detail.qty as qty,products.name as proname, products.image as proimage, products.price as price, products.sale as sale ")
        ->where('bill.id',$id)->get()->toArray();
        return view('admin.bill.detail',['detail' => $detail,'bill'=>$bill]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $bill = Bill::find($data['id']);
        $bill->status = $data['status'];
        $bill->save();
        return redirect('/bill')->with(['message'=>"Sửa dữ liệu thành công "]);
    }

    public function getStore(Request $request)
    {
        $user = User::all();
        return view('admin.bill.create',['user' => $user]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $bill = new Bill();
        $bill->user_id = $data['user_id'];
        $bill->name_customer = $data['name_customer'];
        $bill->address_customer = $data['   address_customer'];
        $bill->phone_customer = $data['phone_customer'];
        $bill->amount = $data['amount'];
        $bill->price = $data['price'];
        $bill->status = $data[' status'];
        $bill->save();
        return redirect('/bill')->with(['message'=>"Sửa dữ liệu thành công "]);
    }

    public function show($id)
    {
        $data = Bill::find($id)->toArray();
        return view('admin.bill.update',['id'=>$id,'data'=>$data]);
    }

    public function destroy($id)
    {
        $val =Bill::find($id);
        $val->delete();
         return redirect('/bill')->with(['message'=>' xoá thành công']);
    }
    
    public function search(Request $request)
    {
      $data = $request->all();
      $keyWord= $data['search'];
      $results = Bill::where('id', 'LIKE', '%'. $keyWord .'%')
      ->orWhere('name_customer', 'LIKE', '%'. $keyWord .'%')
      ->orWhere('phone_customer', 'LIKE', '%'. $keyWord .'%')
      ->orWhere('type', 'LIKE', '%'. $keyWord .'%')
      ->get();
    return view('admin.bill.search')->with(['results' =>  $results ,'keyword' =>$keyWord]);  
    }
}