<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\TypeProduct;
use App\Size;
use App\Color;
use App\Company;
use DB;

class ProductController extends Controller
{
    public function index()
    {

        $data=Product::paginate(5);
        return view('admin.product.index',['data'=>$data]);
    }

    public function productTop()
    {
        $topProduct = Product::where('status', 1)->get()->toArray();
        return view('client.index',['topProduct'=> $topProduct]);
    }

    public function productDetail($id)
    {
        $product = Product::find($id)->toArray();
        return view('product.detail',['product' => $product]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $product = Product::find($data['id']);
        $product->name = $data['name'];
        $product->type_id = $data['type_id'];
        $product->title = $data['title'];
        $product->price = $data['price'];
        $product->qty = $data['qty'];
        if ($data['description']!=null) {
            $product->description = $data['description'];
        }
       
        if ($request->hasFile('image')) 
        {
            $file = $request->image;
            $file->move("img", $file->getClientOriginalName());
            $product->image = $file->getClientOriginalName();
        }
        $product->save();
        echo "<script>
        alert('Cập nhật sản phẩm thành công ');
        window.location.href='/product';
        </script>";
    }

    public function getStore(Request $request)
    {
        $typeProduct = TypeProduct::all();
        $company =Company::all();
        $size = Size::all();
        $color = Color::all();
        return view('admin.product.create',['typeProduct' => $typeProduct,'size' => $size, 'color' => $color,'company' =>$company]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $product = new Product();
        $product->name = $data['name'];
        $product->type_id = $data['type_id'];
        $product->company_id = $data['company'];
        if(isset($data['sale']))
        {
            $product->sale=$data['sale'];
        }
        $product->title = $data['title'];
        $product->price = $data['price'];
        $product->qty = $data['qty'];
        $product->description = $data['description'];
        if ($request->hasFile('image')) 
        {
            $file = $request->image;
            $file->move("img", $file->getClientOriginalName());
            $product->image = $file->getClientOriginalName();
        }
        $product->save();
        echo "<script>
        alert('Thêm sản phẩm thành công');
        window.location.href='/product';
        </script>";
    }

    public function show($id)
    {
        $data = Product::find($id)->toArray();
        $typeProduct = TypeProduct::all();
        $size = Size::all();
        $color = Color::all();
        return view('admin.product.update',['id'=>$id,'data'=>$data, 'typeProduct' => $typeProduct,'size' => $size, 'color' => $color]);
    }

    public function detail($id)
    {
        $data = Product::find($id)->toArray();
        $typeProduct = DB::table('products')
        ->join('type_product','products.type_id','=','type_product.id')
        ->selectRaw("type_product.name")
        ->where('products.id',$id)->first();
        $properties= DB::table('products')
          ->join('properties','properties.product_id','=','products.id')
          ->join('size','size.id','=','properties.size_id')
          ->join('color','color.id', '=', 'properties.color_id')
          ->selectRaw("size.name as sizename,color.name as colorname")
          ->where('products.id',$id)->get()->toArray();
        return view('admin.product.show',['id'=>$id,'data'=>$data, 'typeProduct' => $typeProduct,'typeProduct' => $typeProduct, 'properties' => $properties]);

    }

    public function destroy($id)
    {
        $val =Product::find($id);
        $val->delete();
        return redirect('/product')->with(['message'=>' xoá thành công']);
    }
}