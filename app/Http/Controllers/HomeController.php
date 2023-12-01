<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use App\ProductCategoryMap;
use App\Category;
use App\Product;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function warehouse(Request $request)
    {
        try{            
            $data = Product::with('item');
            if($request->child_category != ''){
                $products =  ProductCategoryMap::where('category_id',$request->child_category)->pluck('product_id')->toArray();
                $data = $data->whereIn('id',$products);
            }elseif($request->sub_category != ''){
                $products =  ProductCategoryMap::where('category_id',$request->sub_category)->pluck('product_id')->toArray();
                $data = $data->whereIn('id',$products);
            }elseif($request->category != ''){
                $products =  ProductCategoryMap::where('category_id',$request->category)->pluck('product_id')->toArray();
                $data = $data->whereIn('id',$products);
            }    
            if($request->search !=''){
                $data = $data->where('name', 'like', "%$request->search%");
            }
            $cat = '';            
            $sub_cat = '';       
            $child_cat = '';

            if(isset($_GET['category'])){
                $cat = $_GET['category']; 
            }

            if(isset($_GET['sub_category'])){
                $sub_cat = $_GET['sub_category']; 
            }

            if(isset($_GET['child_category'])){
                $child_cat = $_GET['child_category'];
            }
            $data = $data->orderby("updated_at", "DESC")->orderby("sort_order", "DESC")->get();
            $categories = Category::where("is_active","Y")->where('is_header','Y')->where('level_id',0)->orderby("sort_order")->get()->toArray();
          
            return view('warehouse')->with(compact("data","categories",'cat','sub_cat','child_cat'));
        }catch(\Exception $e){  
            $data = [
                'input_params' => $request,
                'action' => 'Admin list Orders',
                'exception' => $e->getMessage()
            ];
            Log::info(json_encode($data));
            abort(500);
        }
        return view('warehouse',compact('data','categories'));
    }


    public function searchCategroyListByid2(Request $request){        
        $maincat = Category::where("is_header","Y")->where('level_id',1)->where('parent_id',$request->id)->orderby("sort_order")->get()->toArray();         
         $show='<option value="">Select Sub Category</option>';
        if(!empty($maincat)){
           foreach ($maincat as $key => $value) {
             $show .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
           }
        }   
          return $show;
    }

    public function searchSubCategroyListByid(Request $request){        
        $maincat = Category::where("is_header","Y")->where('level_id',2)->where('parent_id',$request->id)->orderby("sort_order")->get()->toArray();         
        $show='<option value="">Select Child Category</option>';
        if(!empty($maincat)){
           foreach ($maincat as $key => $value) {
             $show .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
           }
        }   
          return $show;
    }

    
}
