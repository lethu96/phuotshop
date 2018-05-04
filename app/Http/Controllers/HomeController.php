<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\TypeProduct;
use Auth;
use App\User;
use App\Bill;
use DB;
use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
               $bills = DB::table('bill')->where(DB::raw("(DATE_FORMAT(created_at,'%Y'))",DB::raw("sum(total)")),date('Y'))
            ->get();

        $chart = Charts::database($bills, 'line', 'highcharts')
            ->title("Thống kê số lượng đơn dặt hàng hàng tháng")
            ->elementLabel("Tổng số đơn hàng")
            ->dimensions(1000, 500)
            ->responsive(false)
            ->groupByMonth(date('Y'), true);


        $bills = DB::table('bill')
            ->select(DB::raw("DATE_FORMAT(created_at,'%Y-%m') as monthNum"), DB::raw('sum(total) as total'))
            ->groupBy('monthNum')
            ->get();
        return view('admin.index',['chart'=>$chart,'bills'=>$bills]);
    }

    public function edit()
   {
        $id = Auth::user()->id;
        $data = User::where('id',$id)->first();
        return view('user.edit',['data'=>$data]);
   }

    public function logout() 
    {
        Auth::logout();
        return redirect('/login');
    }

}
