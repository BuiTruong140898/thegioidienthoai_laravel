<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slide;

use App\Product;

use App\productType;

class Pagecontroller extends Controller
{
    
    public function getIndex(){
    	$slide=slide::all();
    	$product=product::all();
        return view('page/trangchu',compact('slide','product'));
    }

    public function getChiTietSanPham(Request $req){
    	$sanpham = product::where('id',$req->id)->first();
    	$sanphamcungloai = product::where('id_type',$sanpham->id_type)->paginate(3);
    	return view("page/chitietsanpham",compact('sanpham','sanphamcungloai'));
    }

    public function getSanPhamTheoLoai(Request $req){
    	$loaisanpham = productType::where('id',$req->id)->first();
    	$sanphamtheoloai = product::where('id_type',$req->id)->get();
    	return view("page/sanphamtheoloai", compact('loaisanpham','sanphamtheoloai'));
    }
}
