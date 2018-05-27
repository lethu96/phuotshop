<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Product;
use App\Size;
use App\Color;

class PropertyController extends Controller
{
    
	public function index()
    {
        $property = Property::paginate(10);
        return  view('admin.property.index',['property' => $property]);
    }

    // public function update(Request $request)
    // {
    //     $data = $request->all();
    //     $size = Size::find($data['id']);
    //     $size->name = $data['name'];
    //     $size->description = $data['description'];
    //     $size->save();
    //     return redirect('/property')->with(['message'=>"Sửa dữ liệu thành công "]);
    // }

    public function getStore(Request $request)
    {
    	$color = Color::all()->toArray();
    	$size = Size::all()->toArray();
    	$product =Product::all()->toArray();

        return view('admin.property.create',['color' => $color, 'size' => $size , 'product' => $product]);
    }
    public function store(Request $request)
    {
    	$data = $request->all();
    	$count = Property::where('product_id', $data['product_id'])
                                    ->where('size_id', $data['size_id'])
                                    ->where('color_id', $data['color_id'])
                                    ->count();
         if($count>0)
         {
         	echo "<script>
	        alert('Đã tồn tại sản phẩm, size , và màu sắc này ');
	        window.location.href='/property/create';
	        </script>";
         }
        
        $newProperty = new Property();
        $newProperty->product_id = $data['product_id'];
        $newProperty->size_id = $data['size_id'];
        $newProperty->color_id = $data['color_id'];
        $newProperty->qty = $data['qty'];
        $newProperty->save();
        return redirect('/property')->with(['message'=>"Thêm dữ liệu thành công "]);
    }


    public function destroy($productId,$sizeId,$colorId)
    {
        Property::where('product_id', $productId)
                ->where('size_id', $sizeId)
                ->where('color_id', $colorId)->delete();
         return redirect('/property')->with(['message'=>' xoá thành công']);
    }
}
