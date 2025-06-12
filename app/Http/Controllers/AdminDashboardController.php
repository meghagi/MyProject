<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Sales;
use App\Models\User;
use App\Models\Orderitem;
use App\Models\orderstock;
use App\Models\Stationary;
use Illuminate\Support\Facades\Log; 
 // Import the Log facade
 use \Illuminate\Support\Str;
use Illuminate\Http\Request;
use DataTables;
class AdminDashboardController extends Controller
{
    public function admindashboard()
{
    return view('frontend.admindashboard');
}
// public function index4()
// {
//     return view('frontend.index');
// }
public function index1($id=null)
{
  
  {
      $products = Products::all(); // Retrieve all products from the Products model
      return view('frontend.index', compact('products')); // Pass $products to the view
  

//     if ($id) {
        
//         $products = Products::where('id', $id)->get();
//     } else {
//         // Fetch all products
//         $products = Products::all();
//     }
    
//    return view('frontend.index', compact('products'));
 }

  }
  

public function index3()
{
  // $product= Products::get() ;
  echo $id;
  $products = Products::all();
   $data=compact('products');
  // return view('frontend.manageproduct')->with($data);

  return view('frontend.index')->with($data);;
}
public function registerd()
{
    return view('frontend.register1');
}
public function about()
{
    return view('frontend.about-page');
}
public function bags()
{
    return view('frontend.bags');
}
public function beauty()
{
    return view('frontend.beauty');
}
public function becomevendor()
{
    return view('frontend.beauty');
}
public function bicycle()
{
    return view('frontend.bicycle');
}
public function blogdetail()
{
    return view('frontend.blog-details');
}
public function login1()
{
    return view('frontend.login1');
}
public function blogpage()
{
    return view('frontend.blog-page');   
}
public function books($id =null)
{
  $id1=7;
  $products = \DB::table('products')->where('id', $id, $id1)->get();

  // Check if the product exists
  if (!$products) {
      abort(404, "Product not found.");
  }

    return view('frontend.books',compact('products'));   
}
public function cart()
{
    return view('frontend.cart');   
}
public function category()
{
  return view('frontend.category');   
}
public function categorypage()
{
    return view('frontend.category-page'); 
}
public function categorypage2grid()
{
    return view('frontend.category-page(2-grid)'); 
}
public function categorypage3grid()
{
    return view('frontend.category-page(3-grid)'); 
}
public function categorypage4grid()
{
    return view('frontend.category-page(4-grid)');
}
public function categorypage6grid()
{
    return view('frontend.category-page(6-grid)');
}
public function categoryslider()
{
    return view('frontend.category-page(category-slider)');
}
public function categorypagefullwidth()
{
    return view('frontend.category-page(full-width)');
}
public function categorypageinfinitescroll()
{
    return view('frontend.category-page(infinite-scroll)');
}
public function categorypagelistview()
{
    return view('frontend.category-page(list-view)');
}
public function categorypageloadmore()
{
    return view('frontend.category-page(load-more)');
}
public function categorypagemetro()
{
    return view('frontend.category-page(metro)');
}
 public function categorypagemodern()
 {
    return view('frontend.category-page(modern)');
 }
 public function categorynosidebar()
 {
    return view('frontend.category-page(no-sidebar)');
 }
 public function  categoryright()
 {
    return view('frontend.category-page(right)');
 }
 public function categorysidebarpopup()
 {
    return view('frontend.category-page(sidebar-popup)');
 }
 public function categoryvegetables()
 {
    return view('frontend.category-page(vegetables)');
 }
 public function categorytopfilter()
 {
    return view('frontend.category-page(top-filter)');
 }
 public function checkout()
 {
    return view('frontend.checkout');

 }
 public function christmas()
 {
    return view('frontend.christmas');

 }
 public function collection()
 {
    return view('frontend.collection');

 }
 public function comingsoon()
 {
    return view('frontend.coming-soon');

 }
 public function compare2()
 {
    return view('frontend.compare-2');

 }
 public function contact()
 {
    return view('frontend.contact');

 }
 public function electronic1()
 {
    return view('frontend.electronic-1');

 }
 public function electronic2()
 {
    return view('frontend.electronic-2');

 }
 public function electronic3()
 {
    return view('frontend.electronic-3');

 }
 public function elementcategory()
 {
    return view('frontend.element-category');

 }
 public function elementbreadcrumb()
 {
    return view('frontend.element-breadcrumb');

 }
 public function elementfooter()
 {
    return view('frontend.element-footer');

 }
 public function elementheader()
 {
    return view('frontend.element-header');

 }
 public function elementmultipleslider()
 {
    return view('frontend.element-multipleslider');

 }
 public function elementservice()
 {
    return view('frontend.element-service');

 }
 public function elementtab()
 {
    return view('frontend.element-tab');

 }
 public function elementtitle()
 {
    return view('frontend.element-title');

 }
 public function elementproduct()
 {
    return view('frontend.element-product');

 }
 public function elementproductbox()
 {
    return view('frontend.element-productbox');

 }
 public function emailordersuccesstwo()
 {
    return view('frontend.email-order-success-two');
 }
 public function emailordersuccess()
 {
    return view('frontend.email-order-success');
 }
 public function emailtemplatetwo()
 {
    return view('frontend.email-template-two');
 }
 public function emailtemplate()
 {
    return view('frontend.email-template');
 }
 public function faq()
 {
    return view('frontend.faq');
 }
 public function fashion2()
 {
    return view('frontend.fashion-2');
 }
 public function fashion3()
 {
    return view('frontend.fashion-3');
 }
 public function fashion4()
 {
    return view('frontend.fashion-4');
 }
 public function fashion5()
 {
    return view('frontend.fashion-5');
 }
 public function fashion6()
 {
    return view('frontend.fashion-6');
 }
 public function fashion7()
 {
    return view('frontend.fashion-7');
 }

 public function product()
 {
   
  return view('frontend.addproduct');
 }
 public function flower()
 {
   return view('frontend.flower');
 }
 public function fullpage()
 {
   return view('frontend.fullpage');
 }
 public function forgetpwd()
 {
   return view('frontend.forgetpwd');
 }
 public function furniture()
 {
   return view('frontend.furniture');
 }
 public function furniture2()
 {
   return view('frontend.furniture-2');
 }
 public function furniture3()
 {
   return view('frontend.furniture-3');
 }
 public function game()
 {
   return view('frontend.game');
 }
 public function goggles()
 {
   return view('frontend.goggles');
 }
 public function gradient()
 {
   return view('frontend.gradient');
 }
 public function grid2()
 {
   return view('frontend.grid-2');
 }
 public function grid3()
 {
   return view('frontend.grid-3');
 }
 public function grid4()
 {
   return view('frontend.grid-4');
 }

 public function gymproduct()
 {
   return view('frontend.gym-product');
 }
 public function index2()
 {
   return view('frontend.index2');
 }
 public function instagramshop()
 {
   return view('frontend.instagramshop');
 }
 public function invoice1()
 {
   return view('frontend.invoice-1');
 }
 public function invoice2()
 {
   return view('frontend.invoice-2');
 }
 public function invoice3()
 {
   return view('frontend.invoice-3');
 }

 public function invoice4()
 {
   return view('frontend.invoice-4');
 }
 public function invoice5() 
 {
   return view('frontend.invoice-5');
 }
 public function jewellery() 
 {
   return view('frontend.jewellery');
 }
 public function jewellery2() 
 {
   return view('frontend.jewellery-2');
 }
 public function jewellery3() 
 {
   return view('frontend.jewellery-3');
 }
 public function kids() 
 {
   return view('frontend.kids');
 }
 public function leftsidebar() 
 {
   return view('frontend.left-sidebar');
 }
 public function lookbookdemo() 
 {
   return view('frontend.lookbook-demo');
 }
 public function lookbook() 
 {
   return view('frontend.lookbook');
 }
 public function light() 
 {
   return view('frontend.light');
 }
 public function marijuana() 
 {
   return view('frontend.marijuana');
 }
 public function marketplacedemo() 
 {
   return view('frontend.marketplace-demo');
 }
 public function marketplacedemo2() 
 {
   return view('frontend.marketplace-demo=2');
 }
 public function marketplacedemo3() 
 {
   return view('frontend.marketplace-demo-3');
 }
 public function marketplacedemo4() 
 {
   return view('frontend.marketplace-demo-4');
 }
 public function masonary2grid() 
 {
   return view('frontend.masonary-2-grid');
 }
 public function masonary3grid() 
 {
   return view('frontend.masonary-3-grid');
 }
 public function masonary4grid() 
 {
   return view('frontend.masonary-4-grid');
 }
 public function masonaryfullwidth() 
 {
   return view('frontend.masonary-fullwidth');
 }
 public function medical() 
 {
   return view('frontend.medical');
 }
 public function nft() 
 {
   return view('frontend.nft');
 }
 public function nursery() 
 {
   return view('frontend.nursery');
 }
 public function offers() 
 {
   return view('frontend.medical');
 }
 public function ordersuccess() 
 {
   return view('frontend.order-success');
 }
 public function ordertracking() 
 {
   return view('frontend.order-tracking');
 }
public function  orderitem()
{
  return view('frontend.orderitem');
}
public function orderstock()
{
  return view('frontend.orderstock');
}
 public function parallax() 
 {
   return view('frontend.parallax');
 }
 public function perfume() 
 {
   return view('frontend.perfume');
 }
 public function pets() 
 {
   return view('frontend.pets');
 }
 public function productpage3colleft() 
 {
   return view('frontend.product-page(3-col-left)');
 }
 public function productpage3colright() 
 {
   return view('frontend.product-page(3-col-right)');
 }
 public function productpage3column() 

 {
  $products = \DB::table('products')->get(); //
 return view('frontend.product-page(3-column)',compact('products'));
  // $products = \DB::table('products')->where('id', $id)->first();
  // return view('frontend.product-page(3-column)',compact('products'));
  // $products = \DB::table('products')
  // ->where('id', $id)
  // ->where('file1', 'pencils')
  //->first();
 // return view('frontend.product-page(3-column)',compact('products'));
// Debugging output
if (!$products) {
dd("No product found for ID: $id or image does not match.");
}

 }

//  public function stationary() 
//  {
//   $id1=4;
 
//   $products = \DB::table('products')->get();
// $stationary= \DB::table('stationary')->get();


// if (!$stationary) {
//     dd("No product found with file1 .");
// }

// return view('frontend.stationary', compact('stationary','products'));

//  }
 public function stationary()
{
    // Retrieve products from the database
    $products = \DB::table('products')->get();
    
    // Retrieve the stationary item based on the given ID
    // $stationary = \DB::table('stationary')->where('id', $id)->first();

    // Check if the stationary item exists
    if (!$stationary) {
        abort(404, "Stationary product not found."); // Handle the error gracefully
    }

    // Return the view with the stationary item and products
    return view('frontend.stationary', compact('products'));
}

 public function uploadMultipleImages()
 {
  return view('frontend.formuploadeimage');
 }
 public function uploadMultipleImages1(Request $request)
 {
     // Validate the request
  $var= $request->validate([
         //'file1.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
         'Description'=> 'required', 
         
         // Correct validation rule
     ]);
     //dd($var);
 
     $imagePaths = []; 
     
     $stationary= new Stationary;
     $stationary->description=$request['Description'];
     // Initialize $imagePaths array
    //  $stationary->description=$request['description'];
    //  if ($request->hasFile('file1')) {
    //      foreach ($request->file('file1') as $image) {
    //          // Generate a unique filename
    //          $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
    //          // Store the image
    //          $path = $image->storeAs('public/uploads', $imageName);
    //          // Add the path to the array
    //          $imagePaths[] = $path;
    //      }
    //  }
 
     // Save paths to the database (if required)
    //  \DB::table('stationary')->insert([
    //      'file1' => json_encode($imagePaths), // Store as JSON for multiple images
    //      'created_at' => now(),
    //      'updated_at' => now(),
    //  ]);
 
     // Return a view or redirect
     //return view('frontend.formuploadeimage')->with('success', 'Images uploaded successfully!');
     $stationary->save();
     return view('frontend.formuploadeimage')->with('success', 'Images uploaded successfully!');
 }
 
 
 
 
 
 
 
 
 
 
 
 
 public function productpageaccordian($id) 
{
    // Retrieve the product from the database using the given ID
    // $url=url('/pencil','/books','/notebook','/rubber','/stationary')."/" .$id;
    
    $product = \DB::table('products')->where('id', $id)->get();

    // Check if the product exists
    if (!$product) {
        abort(404, "Product not found.");
    }
    // return view('frontend.layout.footer', compact('product'));
    // Pass the product to the view
    return view('frontend.product-page(accordian)', compact('product'));
}


 public function productpagebundle() 
 {
   return view('frontend.product-page(bundle)');
 }

 public function gelpens() 
 {
  $id=6;
    $product = \DB::table('products')->where('id', $id)->get();
    $orderstock = \DB::table('orderstock')->where('id', $id)->get();
    // Check if the product exists
    if (!$product) {
        abort(404, "Product not found.");
    }

    // Pass the product to the view
   // return view('frontend.product-page(accordian)', compact('product'));
   //return view('frontend.product-page(image-outside)', compact('product','orderstock'));

   return view('frontend.gelpens',compact('product'));
 }

 public function rubber() 
 {
  $id=3;
    $product = \DB::table('products')->where('id', $id)->get();
    $orderstock = \DB::table('orderstock')->where('id', $id)->get();
    // Check if the product exists
    if (!$product) {
        abort(404, "Product not found.");
    }

    // Pass the product to the view
   // return view('frontend.product-page(accordian)', compact('product'));
   return view('frontend.rubber', compact('product','orderstock'));
 }
 public function productpageleftimage() 
 {
   return view('frontend.product-page(left-image)');
 }
 public function productpageleftsidebar() 
 {
   return view('frontend.product-page(left-sidebar)');
 }
 public function productpagenosidebar() 
 {
   return view('frontend.product-page(no-sidebar)');
 }
 public function productpagerightimage() 
 {
   return view('frontend.product-page(right-image)');
 }
 public function productpagerightsidebar() 
 {
   return view('frontend.product-page(right-sidebar)');
 }
 public function shoppner() 
 {
  $id1=8;
  $product = \DB::table('products')->where('id',  $id1)->get();

  // Check if the product exists
  if (!$product) {
      abort(404, "Product not found.");
  }
   return view('frontend.shoppner',compact('product'));
 }
 public function crayons() 
 {
  $id1=9;
  $product = \DB::table('products')->where('id',  $id1)->get();

  // Check if the product exists
  if (!$product) {
      abort(404, "Product not found.");
  }
   return view('frontend.crayons',compact('product'));

 }
 public function stationary1() 
 {
  $id1=4;
  $products  = \DB::table('products')->where('id',  $id1)->get();

  // Check if the product exists
  if (! $products) {
      abort(404, "Product not found.");
  }
   return view('frontend.stationary',compact('products'));
 }
 public function stationary2() 
 {
  $id1=4;
  $products5  = \DB::table('products')->where('id',  $id1)->get();

  // Check if the product exists
  if (! $products5) {
      abort(404, "Product not found.");
  }
   return view('frontend.index',compact('products5'));
 }
 public function pencil() 
 {
  $id1=1;
  $product = \DB::table('products')->where('id',  $id1)->get();

  // Check if the product exists
  if (!$product) {
      abort(404, "Product not found.");
  }
   return view('frontend.pencil',compact('product'));
 }
 public function colourfulpencil() 
 {
  $id1=5;
  $product = \DB::table('products')->where('id',  $id1)->get();

  // Check if the product exists
  if (!$product) {
      abort(404, "Product not found.");
  }
   return view('frontend.colorfulpencil',compact('product'));
 }
 public function notebook() 
 {
  $id1=2;
  $product = \DB::table('products')->where('id',  $id1)->get();

  // Check if the product exists
  if (!$product) {
      abort(404, "Product not found.");
  }
  // return view('frontend.layout.footer', compact('product'));
  // Pass the product to the view
  //return view('frontend.product-page(accordian)', compact('product'));
  return view('frontend.notebook', compact('product'));
}
  
 
 public function productpagethumbnail() 
 {
   return view('frontend.product-page(thumbnail)');
 }
 public function productpageverticaltab() 
 {
   return view('frontend.product-page(vertical-tab)');
 }
 public function productpagevideothumbnail() 
 {
   return view('frontend.product-page(video-thumbnail)');
 }
//  public function profile() 
//  {
//    return view('frontend.profile');
//  }
 public function review() 
 {
   return view('frontend.review');
 }
 public function search() 
 {
  $product = \DB::table('products')->where('id', $id)->first();
   return view('frontend.layout.footer', compact($product));
 }
 public function sales() 
 {
   return view('frontend.sales');
 }
 public function shoes()
 {
   return view('frontend.shoes');
 }
 public function sitemap()
 {
   return view('frontend.sitemap');
 }
 public function tab1()
 {
   return view('frontend.tab-1');
 }
 public function tab2()
 {
   return view('frontend.tab-2');
 }
 public function tab3()
 {
   return view('frontend.tab-3');
 }
 public function tab4()
 {
   return view('frontend.tab-4');
 }
 public function tab5()
 {
   return view('frontend.tab-5');
 }
 public function tab6()
 {
   return view('frontend.tab-6');
 }
 public function tab7()
 {
   return view('frontend.tab-7');
 }
 public function tab8()
 {
   return view('frontend.tab-8');
 }
 public function tab9()
 {
   return view('frontend.tab-9');
 }
 public function tab10()
 {
   return view('frontend.tab-10');
 }
 public function tools()
 {
   return view('frontend.tools');
 }
 public function typography()
 {
   return view('frontend.typography');
 }
 public function vegetables()
 {
   return view('frontend.vegetables');
 }
 public function vegetables2()
 {
   return view('frontend.vegetables-2');
 }
 public function vegetables3()
 {
   return view('frontend.vegetables-3');
 }
 public function vegetables4()
 {
   return view('frontend.vegetables-4');
 }
 public function vegetables5()
 {
   return view('frontend.vegetables-5');
 }
 public function vendordashboard()
 {
   return view('frontend.vendordashboard');
 }
 public function videoslider()
 {
   return view('frontend.video-slider');
 }
 public function vendorprofile()
 {
   return view('frontend.vendor-profile');
 }
 public function video()
 {
   return view('frontend.video');
 }
 public function watch()
 {
   return view('frontend.watch');
 }
 public function wishlist()
 {
   return view('frontend.wishlist');
 }
 public function yoga()
 {
   return view('frontend.yoga');
 }

public function registerdstore()
{

}
 public function productstore(Request $request)
 {
   $request->validate([
      "productname"=>"required",
      "Description"=>"required",
      "Quantity"=>"required",
      "price"=>"required",
      "Cost"=>"required",
      "file"=>"required"

   ]);
print_r($request->all());
$product= new Products;

$product->product_name=$request['productname'];
$product->description=$request['Description'];
$product->quantity=$request['Quantity'];
$product->price=$request['price'];
$product->stockprice=$request['Cost'];
$product->file1=$request['file'];

if ($request->hasFile('file')) {
   $file1 = $request->file('file');
   $ext1 = $file1->getClientOriginalExtension();
   $filename1 = time() . '_' . $product->name . '.' . $ext1;
   $file1->move('uploads/', $filename1);
   $product->file1 = $filename1; // Save file name to the model attribute
}

// Save the Student model
$product->save();
// return redirect('/product');
return redirect()->back()->with('success', ' Successfully Saved!!');
   
 }
 public function manageproduct(Request $request)
 {
  // $search = $request->input('search', '');
  // if( $search=="")
  // {
  //   $product=Products::where('product_name','LIKE',"%$search")->get();
  // }
  // else{
   $product= Products::get() ;
   // echo"<pre>";
   // print_r($product->toArray());
   // echo"</pre>";
   // die;

   if ($request->ajax()) {
     
    // $data = User::select('id','name','email','password','language','phonenumber','address','gender','role')->get();
     // Remove this line after debugging

     
     return Datatables::of($data)//$data mei $product
         ->addIndexColumn()
         ->addColumn('action', function ($row) {
             $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
             return $btn;
             // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
             // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
             // return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
        // return response()->json($data);
        //return response()->json(['data' => $data]);
         }
$data=compact('product');
   return view('frontend.manageproduct')->with($data);
 
}
 public function managecustomer(Request $request)
 {
   $customer= Customer::get() ;
   // echo"<pre>";
   // print_r($product->toArray());
   // echo"</pre>";
   // die;

   if ($request->ajax()) {
     
    // $data = User::select('id','name','email','password','language','phonenumber','address','gender','role')->get();
     // Remove this line after debugging

     
     return Datatables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function ($row) {
             $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
             return $btn;
             // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
             // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
             // return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
        // return response()->json($data);
        //return response()->json(['data' => $data]);
         }
$data=compact('customer');
   return view('frontend.managecustomer')->with($data);
 }

public function manageuser(Request $request)
 {
   $user= User::get() ;
   // echo"<pre>";
   // print_r($product->toArray());
   // echo"</pre>";
   // die;

   if ($request->ajax()) {
     
    // $data = User::select('id','name','email','password','language','phonenumber','address','gender','role')->get();
     // Remove this line after debugging

     
     return Datatables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function ($row) {
             $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
             return $btn;
             // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
             // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
             // return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
        // return response()->json($data);
        //return response()->json(['data' => $data]);
         }
$data=compact('user');
   return view('frontend.manageuser')->with($data);
 }
 public function managecategory(Request $request)
 {
   $category= Category::get() ;
   // echo"<pre>";
   // print_r($product->toArray());
   // echo"</pre>";
   // die;

   if ($request->ajax()) {
     
    // $data = User::select('id','name','email','password','language','phonenumber','address','gender','role')->get();
     // Remove this line after debugging

     
     return Datatables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function ($row) {
             $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
             return $btn;
             // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
             // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
             // return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
        // return response()->json($data);
        //return response()->json(['data' => $data]);
         }
$data=compact('category');
   return view('frontend.managecategory')->with($data);
 }
 public function managesales(Request $request)
 {
   $sales= Sales::get() ;
   // echo"<pre>";
   // print_r($product->toArray());
   // echo"</pre>";
   // die;

   if ($request->ajax()) {
     
    // $data = User::select('id','name','email','password','language','phonenumber','address','gender','role')->get();
     // Remove this line after debugging

     
     return Datatables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function ($row) {
             $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
             return $btn;
             // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
             // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
             // return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
        // return response()->json($data);
        //return response()->json(['data' => $data]);
         }
$data=compact('sales');
   return view('frontend.managesales')->with($data);
 }
 public function manageorderitem(Request $request)
 {
   $orderitem= Orderitem::get() ;
   // echo"<pre>";
   // print_r($rderitem->toArray());
   // echo"</pre>";
   // die;

   if ($request->ajax()) {
     
    // $data = User::select('id','name','email','password','language','phonenumber','address','gender','role')->get();
     // Remove this line after debugging

     
     return Datatables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function ($row) {
             $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
             return $btn;
             // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
             // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
             // return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
        // return response()->json($data);
        //return response()->json(['data' => $data]);
         }
$data=compact('orderitem');
   return view('frontend.manageorderitem')->with($data);
 }

 public function destroy($id)
{
    // Debugging: Check if the ID is received correctly.
   // Log::info('Delete Request Received for Product ID:', ['id' => $id]);


    echo "Delete ID: " . $id;
 // die; // Stop further execution to confirm ID is passed.

    // Find the product by ID.
    $product = Products::find($id);
   //  \Log::info($product);
    
    // Check if the product exists.
    if (!is_null($product)) {
      //Log::info('Product Found:', ['product' => $product]);
        $product->delete(); // Delete the product.
        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
    // Log if the product was not found.
   // Log::warning('Product Not Found for Deletion:', ['productid' => $id]);

    // If product doesn't exist, return an error message.
    return redirect()->back()->with('error', 'Product not found.');
}

  public function destroyUser($id)
  {
    echo "Delete ID: " . $id;
     die; // Stop further execution to confirm ID is passed.
   
       // Find the product by ID.
       $user = User::find($id);
      //  \Log::info($product);
       
       // Check if the product exists.
       if (!is_null($user)) {
         //Log::info('Product Found:', ['product' => $product]);
           $user->delete(); // Delete the product.
           return redirect()->back()->with('success', 'User deleted successfully.');
       }
       // Log if the product was not found.
      // Log::warning('Product Not Found for Deletion:', ['productid' => $id]);
   
       // If product doesn't exist, return an error message.
       return redirect()->back()->with('error', 'User not found.'); 
  }
  public function deletesales($id)
{
    // Debugging: Check if the ID is received correctly.
   // Log::info('Delete Request Received for Product ID:', ['id' => $id]);


    echo "Delete ID: " . $id;
 // die; // Stop further execution to confirm ID is passed.

    // Find the product by ID.
    $sales = Sales::find($id);
   //  \Log::info($product);
    
    // Check if the product exists.
    if (!is_null($sales)) {
      //Log::info('Product Found:', ['product' => $product]);
        $sales->delete(); // Delete the product.
        return redirect()->back()->with('success', 'SalesProduct deleted successfully.');
    }
    // Log if the product was not found.
   // Log::warning('Product Not Found for Deletion:', ['productid' => $id]);

    // If product doesn't exist, return an error message.
    return redirect()->back()->with('error', 'SalesProduct not found.');
}
public function edit($id)
{
    echo $id;
    $product = Products::find($id);
    // echo "<pre>";
    // print_r($product);
    // $product = Products::findOrFail($id);
    // return response()->json($product);

    
    // if (is_null($product)) {
    //     return redirect('product');
    // } else {
    //    $url = url('/product/edit') . "/" . $id; // Corrected the variable name and assignment
    //   $title="Update product";
    //     $data=compact('product', 'url','title');
    //     return view('frontend.addproduct')->with($data);
    // }
    if (is_null($product)) {
      return redirect('product');
  } else {
     $url = url('/update') . "/" . $id; // Corrected the variable name and assignment
    $title="Update product";
      $data=compact('product', 'url','title');
       return view('frontend.update')->with($data);
  }
}
public function edit1($id)
{
    echo $id;
    $customers = Customer::find($id);
    // echo "<pre>";
    // print_r($product);
    // $product = Products::findOrFail($id);
    // return response()->json($product);

    
    // if (is_null($product)) {
    //     return redirect('product');
    // } else {
    //    $url = url('/product/edit') . "/" . $id; // Corrected the variable name and assignment
    //   $title="Update product";
    //     $data=compact('product', 'url','title');
    //     return view('frontend.addproduct')->with($data);
    // }
    if (is_null($customers)) {
      return redirect('customers');
  } else {
     $url = url('/update') . "/" . $id; // Corrected the variable name and assignment
    $title="Update Customer";
      $data=compact('customers', 'url','title');
       return view('frontend.updatecustomer')->with($data);
  }
}
public function editcategory($id)
{
    echo $id;
    $category = Category::find($id);
    // echo "<pre>";
    // print_r($product);
    // $product = Products::findOrFail($id);
    // return response()->json($product);

    
    // if (is_null($product)) {
    //     return redirect('product');
    // } else {
    //    $url = url('/product/edit') . "/" . $id; // Corrected the variable name and assignment
    //   $title="Update product";
    //     $data=compact('product', 'url','title');
    //     return view('frontend.addproduct')->with($data);
    // }
    if (is_null($category)) {
      return redirect('category');
  } else {
     $url = url('/update') . "/" . $id; // Corrected the variable name and assignment
    $title="Update category";
      $data=compact('category', 'url','title');
       return view('frontend.updatecategory')->with($data);
  }
}
public function editsale($id)
{
    echo $id;
    $sales=Sales::find($id);

    // echo "<pre>";
    // print_r($product);
    // $product = Products::findOrFail($id);
    // return response()->json($product);

    
    // if (is_null($product)) {
    //     return redirect('product');
    // } else {
    //    $url = url('/product/edit') . "/" . $id; // Corrected the variable name and assignment
    //   $title="Update product";
    //     $data=compact('product', 'url','title');
    //     return view('frontend.addproduct')->with($data);
    // }
    if (is_null($sales)) {
      return redirect('sales');
  } else {
     $url = url('/update') . "/" . $id; // Corrected the variable name and assignment
    $title="Update sales";
      $data=compact('sales', 'url','title');
       return view('frontend.updatesales')->with($data);
  }
}
public function editorder($id)
{
    echo $id;
    $order= Orderitem::find($id);
    // echo "<pre>";
    // print_r($product);
    // $product = Products::findOrFail($id);
    // return response()->json($product);

    
    // if (is_null($product)) {
    //     return redirect('product');
    // } else {
    //    $url = url('/product/edit') . "/" . $id; // Corrected the variable name and assignment
    //   $title="Update product";
    //     $data=compact('product', 'url','title');
    //     return view('frontend.addproduct')->with($data);
    // }
    if (is_null($order)) {
      return redirect('order');
  } else {
     $url = url('/update') . "/" . $id; // Corrected the variable name and assignment
    $title="Update orderitem";
      $data=compact('order', 'url','title');
       return view('frontend.updateorder')->with($data);
  }
}
public function edituser($id)
{
    echo $id;
    $user= User::find($id);
    // echo "<pre>";
    // print_r($product);
    // $product = Products::findOrFail($id);
    // return response()->json($product);

    
    // if (is_null($product)) {
    //     return redirect('product');
    // } else {
    //    $url = url('/product/edit') . "/" . $id; // Corrected the variable name and assignment
    //   $title="Update product";
    //     $data=compact('product', 'url','title');
    //     return view('frontend.addproduct')->with($data);
    // }
    if (is_null($user)) {
      return redirect('user');
  } else {
     $url = url('/update') . "/" . $id; // Corrected the variable name and assignment
    $title="Update user";
      $data=compact('user', 'url','title');
       return view('frontend.updateuser')->with($data);
  }
}
// public function update($id , Request $request)
// {
//   $customers = Customer::find($id);
  
//   return view("frontend.updatecustomer", compact('customers'));
// }

public function update1($id , Request $request)
{
  $product= Products::find($id);
  
  return view("frontend.update", compact('product'));
}

public function update2($id , Request $request)
{
  $category = Category::find($id);
  
  return view("frontend.updatecategory", compact('product'));
}
public function update3($id , Request $request)
{
  $sales = Sales::find($id);
  
  return view("frontend.updatesales", compact('sales'));
}
public function  updateorder($id , Request $request)
{
  $order = Orderitem::find($id);
  return view("frontend.updateorder", compact('order'));
}
public function updateuser($id , Request $request)
{
  $user = User::find($id);
  
  return view("frontend.updateuser", compact('user'));
}
public function updatedata($id , Request $request)
{
  $product= Products::find($id);
  $product->product_name=$request['product_name'];
$product->description=$request['description'];
$product->quantity=$request['quantity'];
$product->price=$request['price'];
$product->stockprice=$request['cost'];
$product->file1=$request['file1'];

if ($request->hasFile('file1')) {
   $file1 = $request->file('file1');
   $ext1 = $file1->getClientOriginalExtension();
   $filename1 = time() . '_' . $product->name . '.' . $ext1;
   $file1->move('uploads/', $filename1);
   $product->file1 = $filename1; // Save file name to the model attribute
}
else {
  // Keep the existing `file1` value if no new file is uploaded
  $product->file1 = $product->getOriginal('file1');
}

// Save the Student model
$product->save();
// return redirect('/product');
return redirect()->back()->with('success', ' Successfully update!!');
   

}
public function updatedata1($id , Request $request)
{
  $customers = Customer::find($id);
  $customers->name=$request['customername'];
$customers->email=$request['Email'];
$customers->contactnumber=$request['contactnumber'];
$customers->DOB=$request['DOB'];
$customers->gender=$request['gender'];
$customers->save();
return redirect()->route('managecustomer')->with('success', 'Customer updated successfully!');
    } 
// return redirect()->back()->with('success', ' Successfully update!!');
    


public function updatedata2($id , Request $request)
{
  $category = Category::find($id);
  
  $category->category_name=$request['categoryname'];
  $category->description=$request['description'];
  $category->price=$request['price'];
  $category->stock=$request['stock'];
  $category->image=$request['file'];
  if ($request->hasFile('image')) {
    $file1 = $request->file('file');
    $ext1 = $file1->getClientOriginalExtension();
    $filename1 = time() . '_' . $category->name . '.' . $ext1;
    $file1->move('uploads/', $filename1);
    $category->image = $filename1; // Save file name to the model attribute
 }
 $category->save();
 // return redirect('/product');
 return redirect()->back()->with('success', ' Successfully update!!');
    

}
public function updatedata3($id , Request $request)
{
  $sales = Sales::find($id);

$sales->product_name=$request['product_name'];
$sales->quantity=$request['quantity'];
$sales->salesprice=$request['salesprice'];
$sales->discount=$request['discount'];
$sales->status=$request['status'];
$sales->save();
}

public function updateorderdata($id , Request $request)
{
  $order = Orderitem::find($id);
  $order->productid = $request->input('productid'); // Use the ID from the URL parameter
  $order->quantity = $request->input('Quantity');
  $order->price = $request->input('price');
  $order->save();
}
public function updateuserdata($id , Request $request)
{
  $request->validate([
    'gender' => 'required|in:Male,Female',
]);
  $user = User::find($id);
  $user->name=$request['name'];
$user->email=$request['email'];
$user->phonenumber=$request['phonenumber'];
$user->adderess=$request['adderess'];
// $user->gender=$request['gender'];
$user->save();
}
// public function updatesave($id, Request $request)
// {

//   $request->validate([
//     'product_name' => 'required|string',
//     'description' => 'nullable|string',
//     'quantity' => 'nullable|integer',
//     'price' => 'nullable|numeric',
//     'stockprice' => 'nullable|numeric',
//     'file1' => 'nullable|string',
// ]);

//    $product = Products::find($id);

//    if ($product) {
//        $product->product_name=$request['product_name'];
//        $product->description = $request['Description'];
//        $product->quantity = $request['Quantity'];
//        $product->price = $request['price'];
//        $product->stockprice=$request['Cost'];
// $product->file1=$request['file'];

// if ($request->hasFile('file')) {
//    $file1 = $request->file('file');
//    $ext1 = $file1->getClientOriginalExtension();
//    $filename1 = time() . '_' . $product->name . '.' . $ext1;
//    $file1->move('uploads/', $filename1);
//    $product->file1 = $filename1; // Save file name to the model attribute
// }
//        $product->save();

//        return response()->json(['status' => 'Product updated successfully']);
//    } else {
//        return response()->json(['status' => 'Product not found'], 404);
//    }
// }
public function read($id , Request $request)
{
  $product = \DB::table('products')->where('id', $id)->first();

 // $product= Products::find($id);
  
  return view("frontend.read", compact('product'));
}
public function search1($id , Request $request)
{
  $product = \DB::table('products')->where('id', $id)->first();

 // $product= Products::find($id);
  
  return view("frontend.read", compact('product'));
}
public function readcategory($id , Request $request)
{
  $category = \DB::table('categories')->where('id', $id)->first();

 // $product= Products::find($id);
  
  return view("frontend.readcategory", compact('category'));
}
public function readcustomer($id , Request $request)
{
  $customer = \DB::table('customers')->where('id', $id)->first();

 // $product= Products::find($id);
  
  return view("frontend.readcustomer", compact('customer'));
}
public function readsale($id , Request $request)
{
  $sales = \DB::table('sales')->where('id', $id)->first();

 // $product= Products::find($id);
  
  return view("frontend.readsale", compact('sales'));
}
public function readorder($id , Request $request)
{
  $orderitem = \DB::table('orderitem')->where('id', $id)->first();

 // $product= Products::find($id);
  
  return view("frontend.readorderitem", compact('orderitem'));
}
public function readuser($id , Request $request)
{
  $users = \DB::table('users')->where('id', $id)->first();

 // $product= Products::find($id);
  
  return view("frontend.readusers", compact('users'));
}
public function customer()
 {
   return view('frontend.customer');
 }

 public function customerstore(Request $request)
 {
   $request->validate([
      "customername"=>"required",
      "Email"=>"required",
      "contactnumber"=>"required",
      "DOB"=>"required",
      "gender"=>"required",
      
   ]);
print_r($request->all());
$customer= new Customer;
$customer->name=$request['customername'];
$customer->email=$request['Email'];
$customer->contactnumber=$request['contactnumber'];
$customer->DOB=$request['DOB'];
$customer->gender=$request['gender'];
$customer->save();
 }
 public function salesstore(Request $request)
 {
  $validatedData= $request->validate([
      "product_name"=>"required",
      "quantity"=>"required",
      "salesprice"=>"required",
      "discount"=>"required",
      "status"=>"required",
      
   ]);
   print_r($validatedData); 

$sales= new Sales;
$sales->product_name=$request['product_name'];
$sales->quantity=$request['quantity'];
$sales->salesprice=$request['salesprice'];
$sales->discount=$request['discount'];
$sales->status=$request['status'];
$sales->save();
return redirect()->route('sales')->with('success', 'Sales record stored successfully!');

 }
 public function destroy1($id)
{
    // Debugging: Check if the ID is received correctly.
   // Log::info('Delete Request Received for Product ID:', ['id' => $id]);


    echo "Delete ID: " . $id;
 // die; // Stop further execution to confirm ID is passed.

    // Find the product by ID.
    $customer = Customer::find($id);
   //  \Log::info($product);
    
    // Check if the product exists.
    if (!is_null($customer)) {
      //Log::info('Product Found:', ['product' => $product]);
      $customer->delete(); // Delete the product.
        return redirect()->back()->with('success', 'Customer deleted successfully.');
    }
    // Log if the product was not found.
   // Log::warning('Product Not Found for Deletion:', ['productid' => $id]);

    // If product doesn't exist, return an error message.
    return redirect()->back()->with('error', 'Customer not found.');
}
public function deleteCategory($id)
{
  // Debugging: Check if the ID is received correctly.
   // Log::info('Delete Request Received for Product ID:', ['id' => $id]);


   echo "Delete ID: " . $id;
   // die; // Stop further execution to confirm ID is passed.
  
      // Find the product by ID.
      $category = Category::find($id);
     //  \Log::info($product);
      
      // Check if the product exists.
      if (!is_null($category)) {
        //Log::info('Product Found:', ['product' => $product]);
        $category->delete(); // Delete the product.
          return redirect()->back()->with('success', 'Category deleted successfully.');
      }
      // Log if the product was not found.
     // Log::warning('Product Not Found for Deletion:', ['productid' => $id]);
  
      // If product doesn't exist, return an error message.
      return redirect()->back()->with('error', 'Category not found.');
}
public function categorystore(Request $request)
{
  $request->validate([
    "categoryname"=>"required",
    "Description"=>"required",
    "price"=>"required",
    "Cost"=>"required",
    "file"=>"required",
  ]);
  print_r($request->all());
  $category = new Category;
  $category->category_name=$request['categoryname'];
  $category->description=$request['Description'];
  $category->price=$request['price'];
  $category->stock=$request['Cost'];
  $category->image=$request['file'];
  if ($request->hasFile('file')) {
    $file1 = $request->file('file');
    $ext1 = $file1->getClientOriginalExtension();
    $filename1 = time() . '_' . $category->name . '.' . $ext1;
    $file1->move('uploads/', $filename1);
    $category->image = $filename1; // Save file name to the model attribute
 }
 if ($category->save()) {
  return response()->json(['status' => 'Category stored successfully']);
} else {
  return response()->json(['status' => 'Failed to store category'], 500);
}

  }
  public function orderstore(Request $request, $id)
  {
      $request->validate([
          "Quantity" => "required",
          "price" => "required",
      ]);
  
      // Check if the product exists with the given ID
      // $product = Products::find($id);
      // if (!$product) {
      //     return response()->json(['error' => 'Product not found.'], 404);
      // }
  
      // Create a new order item
      $order = new Orderitem;
      $order->productid = $request->input('id'); // Use the ID from the URL parameter
      $order->quantity = $request->input('Quantity');
      $order->price = $request->input('price');
      $order->save();
  
      return response()->json(['success' => 'Order item created successfully.']);
  }
  public function  orderstockstore(Request $request)
  {
    $request->validate([
      "customerid"=>"required",
      "order_status"=>"required",
      "price"=>"required",
      
      "BillingDate"=>"required",
      "payment_status"=>"required",
    ]);
    print_r($request->all());
    $orderstock = new orderstock;
    $orderstock->customerid=$request['customerid'];
    
    $orderstock->total_price=$request['price'];
    $orderstock->billing_date=$request['BillingDate'];
    $orderstock->order_status=$request['order_status'];
    $orderstock->payment_status=$request['payment_status'];
    $orderstock->save();
  }



//   public function show($id)
// {
//   $products= \DB::table('products')->where('id', $id)->first();
//   $products = Products::findOrFail($id); 
//     // dd($products);
// // Or use slug if required
//     return view('frontend.index', compact('products'));
// }

public function show($id, $name)
{
    // Fetch the product by ID
    $product = \DB::table('products')->where('id', $id)->first();

    if (!$product) {
        abort(404, "Product not found.");
    }

    // Optionally validate the name
    if (Str::slug($product->product_name) !== $name) {
        abort(404, "Product name mismatch.");
    }

    // Return the product details view
    return view('frontend.product-details', compact('product'));
}

}