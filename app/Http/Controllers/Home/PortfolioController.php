<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Carbon;
use Image;

class PortfolioController extends Controller
{
    public function AllPortfolio(){

        $portfolio = Portfolio::latest()->get();
        return view('admin.protfolio.protfolio_all',compact('portfolio'));
   
    }//End Methiod for All Portfolio display

    public function AddPortfolio(){
        return view('admin.protfolio.protfolio_add');

    }

    public function StorePortfolio(Request $request){

        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required',
            'portfolio_image' => 'required',
        ], [

            'portfolio_name.required' => 'Portfolio Name is Required',
            'portfolio_title.required' => 'Portfolio Title is Required',
        ]);

        if ($request->file('portfolio_image')) {
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('upload/portfolio/'.$name_gen);
            $save_url = 'upload/portfolio/'.$name_gen;

            Portfolio::insert([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
                'created_at' => Carbon::now()

            ]); 
            $notification = array(
            'message' => 'Portfolio Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification);


        }
        
        }// End Method for Store Portfolio

        public function EditPortfolio($id){
            
            $portfolio = Portfolio::findOrFail($id);
            return view('admin.protfolio.protfolio_edit',compact('portfolio'));

        }//End Method ofr Edit Portfolio

        
        public function UpdatePortfolio(Request $request){

            $portfolio_id = $request->id;

            if ($request->file('portfolio_image')) {
                $image = $request->file('portfolio_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
    
                Image::make($image)->resize(1020,519)->save('upload/portfolio/'.$name_gen);
                $save_url = 'upload/portfolio/'.$name_gen;
    
                Portfolio::findOrFail($portfolio_id)->update([
                    'portfolio_name' => $request->portfolio_name,
                    'portfolio_title' => $request->portfolio_title,
                    'portfolio_description' => $request->portfolio_description,
                    'portfolio_image' => $save_url,
                    'updated_at' => Carbon::now()
                
    
                ]); 
                $notification = array(
                'message' => 'Porfolio Updated Successfully', 
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.portfolio')->with($notification);

        } else {
            Portfolio::findOrFail($portfolio_id)->update([
                    'portfolio_name' => $request->portfolio_name,
                    'portfolio_title' => $request->portfolio_title,
                    'portfolio_description' => $request->portfolio_description,
                    'updated_at' => Carbon::now()
                
                
            ]);

            $notification = array (
                'message' => 'Portfolio Updated without Image Successfully',
                'alert-type'=>'success'
            );

            return redirect()->route('all.portfolio')->with($notification);
        } //End else statement 

        }//End Method for Update portfolio


        public function DeletePortfolio($id){

            $portfolio = Portfolio::findOrFail($id);
            $img = $portfolio->portfolio_image;
            unlink($img);
    
            Portfolio::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Portfolio Data Deleted Successfully', 
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
    
        }//End Method

            public function PortfolioDetails($id){

                $portfolio = Portfolio::findOrFail($id);
                return view('frontend.protfolio_details',compact('portfolio'));
                
        } //End Method  for Portfoliio Details 
}
