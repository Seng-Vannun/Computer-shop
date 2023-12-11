<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class Homepage extends Controller
{
    function ShowIndex()
    {
        $product= DB::table('tblproduct')->get();
        $productjoin= DB::table('tblproduct')
            ->join('tblcoverimage','tblproduct.ID','=','tblcoverimage.ProductID')
            ->select('tblproduct.*','tblcoverimage.image_url','tblcoverimage.ProductID')->get();
        return view('index',compact('productjoin','product'));
    }
    function ShowDetail($productid){
        $productimg= DB::table('tblimage')
            ->where('tblimage.ProductID', $productid)
            ->select('tblimage.image_url')
            ->first();
        $productimgs= explode('|', $productimg->image_url);
        //dd($productimgs);
        $productjoin= DB::table('tblproduct')
            ->join('tblcoverimage','tblproduct.ID','=','tblcoverimage.ProductID')
            ->join('tblfeature','tblproduct.ID','=','tblfeature.ProductID')
            ->select('tblproduct.*','tblcoverimage.image_url','tblfeature.name')
            ->where('tblproduct.ID','=', $productid)
            ->first();
       return view('productdetail',compact('productjoin','productimgs'));
    }
    function input (Request $req){
        $req->validate([
            'phone_name'=> 'required',
            'price'=>'required',
            'feature'=>'required'
        ]);
        $qury = DB::table('tblproduct')->insert([
            'Name' => $req->input('phone_name'),
            'Price'=> $req->input('price'),
            'CategoryID'=>"1"
        ]);
        if($qury){
           $id = DB::table('tblproduct')->latest('tblproduct.ID')->first();
           $feature = DB::table('tblfeature')->insert([
               'name'=>$req->input('feature'),
               'ProductID'=>$id->ID
           ]);

           //cover Img upload
           if($coverfile = $req->file('CoverImage')){
                 $coveruploadpath='Cover/';
                 $coverimg_name= md5(rand(1000,10000));
                 $ext = strtolower($coverfile->getClientOriginalExtension());
                 $coverimg_fullname=$coverimg_name.'.'.$ext;
                 $Coverimg_url=$coveruploadpath.$coverimg_fullname;
                 $coverfile->move($coveruploadpath,$coverimg_fullname);
                 $coverimg =DB::table('tblcoverimage')->insert([
                       'image_url' => $Coverimg_url,
                       'ProductID' => $id->ID
                   ]);}
           //multi Upload
            if($files = $req->file('file')){
                $uploadpath='Cover/';
                foreach ($files as $file){
                    $img_name= md5(rand(1000,10000));
                    $Imgext = strtolower($coverfile->getClientOriginalExtension());
                    $img_fullname=$img_name.'.'.$Imgext;
                    $img_url=$uploadpath.$img_fullname;
                    $file->move($uploadpath,$img_fullname);
                    $image[] = $img_url;
                }
                    $img =DB::table('tblimage')->insert([
                        'image_url' => implode('|',$image),
                        'ProductID' => $id->ID
                    ]);
            }

            if($feature && $coverimg && $img){
                return back()->with('Good','something when great');

            }
            else{
                return back()->with('Fail','something when Wrong');
            }
        }
        else{
            return back()->with('Fail','something when Wrong');
        }
    }
}
