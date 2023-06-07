<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Carbon;



class FooterController extends Controller
{
    public function FooterSetup(){

        $allfooter = Footer::find(1);
        return view('admin.footer.footer_all',compact('allfooter'));

    }//End footer method setup

    public function UpdateFooter(Request $request){

        $footer_id = $request->id;

             Footer::findOrFail($footer_id)->update([
            'number' => $request->number,
            'short_description' => $request->short_description,
            'address' => $request->address,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'copyright' => $request->copyright,
 
 

            ]); 
            $notification = array(
            'message' => 'Footer Page Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End footer method to update
    
}
