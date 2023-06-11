<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;
use Illuminate\Support\Carbon;
use Image;

class ClientsController extends Controller
{
    public function AllClients(){

        $clients = Clients::latest()->get();
        return view('admin.clients.all_clients',compact('clients'));

    } //End All clients method

    public function AddClients(){
        
        return view('admin.clients.add_clients');
    } //End Add clients Method

    public function StoreClients(Request $request){

        $request->validate([
           
            'clients_title' => 'required',
          
        ], [

            
            'clients_title.required' => 'Clients Title is Required',
        ]);

        if ($request->file('clients_image')) {
            $image = $request->file('clients_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->save('upload/clients/'.$name_gen);
            $save_url = 'upload/clients/'.$name_gen;

            Clients::insert([
                'clients_title' => $request->clients_title,
                'clients_image' => $save_url,
                'created_at' => Carbon::now()

            ]); 
            $notification = array(
            'message' => 'Client Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.clients')->with($notification);


        }

    }//End Store clients Method

    public function EditClients($id){
        $clients = Clients::findOrFail($id);
        return view('admin.clients.edit_clients',compact('clients'));

    }//End Edit clients Method 

    public function UpdateClients(Request $request){

        $clients_id = $request->id;

            if ($request->file('clientsclients_image')) {
                $image = $request->file('clients_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
    
                Image::make($image)->save('upload/clients/'.$name_gen);
                
                $save_url = 'upload/clients/'.$name_gen;
    
                Clients::findOrFail($clients_id)->update([

                    'clients_title' => $request->clients_title,
                    'clients_image' => $save_url,
                    'updated_at' => Carbon::now()
                
    
                ]); 
                $notification = array(
                'message' => 'Clients Updated Successfully', 
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.clients')->with($notification);

        } else {
            Clients::findOrFail($clients_id)->update([
                'clients_title' => $request->clients_title,
                'updated_at' => Carbon::now()
                
                
            ]);

            $notification = array (
                'message' => 'Clients Updated without Image Successfully',
                'alert-type'=>'success'
            );

            return redirect()->route('all.clients')->with($notification);
        } //End else statement 

    }//End update Clients Method 

    public function DeleteClients($id){
        $clients = Clients::findOrFail($id);
        $img = $clients->clients_image;
        unlink($img);

        Clients::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Clients Data Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//End Delete Clients method
}
