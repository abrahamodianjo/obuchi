<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Carbon;
use Image;

class ServicesController extends Controller
{
    public function AllServices(){

        $services = Services::latest()->get();
        return view('admin.services.all_services',compact('services'));

    } //End All services method

    public function AddServices(){
        
        return view('admin.services.add_services');
    } //End Add services Method

    public function StoreServices(Request $request){

        $request->validate([
           
            'services_title' => 'required',
          
        ], [

            
            'services_title.required' => 'Service Title is Required',
        ]);

        if ($request->file('services_image')) {
            $image = $request->file('services_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(323,240)->save('upload/services/'.$name_gen);
            $save_url = 'upload/services/'.$name_gen;

            Services::insert([
                'services_title' => $request->services_title,
                'services_description' => $request->services_description,
                'services_image' => $save_url,
                'created_at' => Carbon::now()

            ]); 
            $notification = array(
            'message' => 'Service Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.services')->with($notification);


        }

    }//End Store services Method

    public function EditServices($id){
        $services = Services::findOrFail($id);
        return view('admin.services.edit_services',compact('services'));

    }//End Edit Services Method 

    public function UpdateServices(Request $request){

        $services_id = $request->id;

            if ($request->file('services_image')) {
                $image = $request->file('services_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
    
                Image::make($image)->resize(323,240)->save('upload/services/'.$name_gen);
                
                $save_url = 'upload/services/'.$name_gen;
    
                Services::findOrFail($services_id)->update([

                    'services_title' => $request->services_title,
                    'services_description' => $request->services_description,
                    'services_image' => $save_url,
                    'updated_at' => Carbon::now()
                
    
                ]); 
                $notification = array(
                'message' => 'Services Updated Successfully', 
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.services')->with($notification);

        } else {
            Services::findOrFail($services_id)->update([
                'services_title' => $request->services_title,
                'services_description' => $request->services_description,
                'updated_at' => Carbon::now()
                
                
            ]);

            $notification = array (
                'message' => 'Services Updated without Image Successfully',
                'alert-type'=>'success'
            );

            return redirect()->route('all.services')->with($notification);
        } //End else statement 

    }//End update Services Method 

    public function DeleteServices($id){
        $services = Services::findOrFail($id);
        $img = $services->services_image;
        unlink($img);

        Services::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Services Data Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//End Delete services method
}
