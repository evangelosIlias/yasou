<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    // Return the view of portfolio
    public function homePortfolio() {
        $portfolio = Portfolio::latest()->get();
        return view('admin.portfolio.home_portfolio', compact('portfolio'));
    }

    public function homeAddPortfolio(){
        return view('admin.portfolio.add_portfolio');

    }

    // Store the portfolio
    public function storePortfolio(Request $request){

        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required',
                
        ], [
            'portfolio_name.required' => 'Portfolio name must be provided',
            'portfolio_title.required' => 'Portfolio title must be provided',
        ]);

        if ($request->file('portfolio_image')) {
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(1020, 519)->save('upload/portfolio/' . $name_gen);

            $save_url = 'upload/portfolio/' . $name_gen;

            Portfolio::insert([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_image' => $save_url,
                'portfolio_description' => $request->portfolio_description,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);

            $not_succ = [
                'message' => 'Home Portfolio and Image banner Inserted Successfully',
                'alert-type' => 'success',
            ];
            
            return redirect()->route('home.portfolio')->with($not_succ);

        } else { 

            Portfolio::insert([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,

            ]);

            $not_info = [
                'message' => 'Home Portfolio without Image Banner Inserted Successfully',
                'alert-type' => 'info',
            ];
            
            return redirect()->route('home.portfolio')->with($not_info);
        }

    }

    // Edit the portfolio
    public function editPortfolio($id) {
        $editPortfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit_portfolio', compact('editPortfolio'));
    }

    // Update the portfolio status
    public function updatePortfolio(Request $request) {

        // dd('Inside updateSlide method');
        $updatePortfolio = $request->id;

        if ($request->file('portfolio_image')) {
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(1020, 519)->save('upload/portfolio/' . $name_gen);

            $save_url = 'upload/portfolio/' . $name_gen;

            Portfolio::findOrFail($updatePortfolio)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
            ]);

            $not_succ = [
                'message' => 'Portfolio and Image banner Updated Successfully',
                'alert-type' => 'success',
            ];
            
            return redirect()->route('home.portfolio')->with($not_succ);

        } else { 

            Portfolio::findOrFail($updatePortfolio)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
            ]);

            $not_info = [
                'message' => 'Portfolio without Image Banner Updated Successfully',
                'alert-type' => 'info',
            ];
            
            return redirect()->route('home.portfolio')->with($not_info);
        }
    }

    // Delete the uploaded image
    public function deletePortfolio($id) {

        $deletePortfolio = Portfolio::findOrFail($id);
        $img = $deletePortfolio->portfolio_image;
        unlink($img);

        Portfolio::findOrFail($id)->delete();

        $not_succ = [
            'message' => 'Portfolio and Image Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($not_succ);
    }

    public function detailsPortfolio($id) {
        $detailsPortfolio = Portfolio::findOrFail($id);
        return view('frontend.portfolio_details', compact('detailsPortfolio'));
    }

}
