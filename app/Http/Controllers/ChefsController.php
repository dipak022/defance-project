<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class ChefsController extends Controller
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

    

    public function index(){
        return view('backendpage.chefs.chefs');
   
    }

    public function storechefs(Request $request){    
    	 $data=array();   
         $data['title']=$request->title;
         $data['description']=$request->description;
         $image=$request->image;
 
           if($image){
                 $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                 Image::make($image)->resize(300,300)->save('public/chefs/'.$image_);
                 $data['image']='public/chefs/'.$image_;
                 $done=DB::table('chefs')->insert($data);
 
                 if($done){
                     $notification = array(
                         'message' => 'chefs Added Successfully.',
                         'alert-type' => 'success'
                     );
                 return redirect()->back()->with($notification);
                 }else{
                   $notification = array(
                         'message' => 'chefs Not Added',
                         'alert-type' => 'danger'
                     );
                 return redirect()->back()->with($notification);
                 }
                     
                    
         }

    }

    public function allchefs(){
        $chefs=DB::table('chefs')->get();
    	return view('backendpage.chefs.showchefs',compact('chefs'));
    }

    public function editchefs($id){

        $chefs=DB::table('chefs')->where('id',$id)->first();
     return view('backendpage.chefs.Editchefs',compact('chefs')); 

     
    }

    public function updatechefs(Request $request,$id){
        $data=array();   
        $data['title']=$request->title;
        $data['description']=$request->description;
        $image=$request->image;

          if($image){
                $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('public/chefs/'.$image_);
                $data['image']='public/chefs/'.$image_;
               
                $done=DB::table('chefs')->where('id',$id)->update($data);

                if($done){
                    $notification = array(
                        'message' => 'chefs Update Successfully.',
                        'alert-type' => 'success'
                    );
                return redirect()->route("all.chefs")->with($notification);
                }else{
                  $notification = array(
                        'message' => 'chefs Not Update',
                        'alert-type' => 'danger'
                    );
                return redirect()->back()->with($notification);
                }
                }else{
                    $done=DB::table('chefs')->where('id',$id)->update($data);

                            if($done){
                                $notification = array(
                                    'message' => 'chefs Update Successfully.',
                                    'alert-type' => 'success'
                                );
                            return redirect()->route("all.chefs")->with($notification);
                            }else{
                            $notification = array(
                                    'message' => 'blog Not Update',
                                    'alert-type' => 'danger'
                                );
                            return redirect()->back()->with($notification);
                            }
                }
    }

    public function deletechefs ($id){

        $slidder=DB::table('chefs')->where('id',$id)->first();
        $image=$slidder->image;
        unlink($image);

          $done=DB::table('chefs')->where('id',$id)->delete();
        
        if($done){
            $notification = array(
                'message' => 'chefs Delated Successfully.',
                'alert-type' => 'success'
            );
        return Redirect()->back()->with($notification);
        }else{
          $notification = array(
                'message' => 'chefs Not  Delated.',
                'alert-type' => 'danger'
            );
        return Redirect()->back()->with($notification);
        }

    }
}


