<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\wishlist;
use App\Models\Products;
use App\Models\orderstock;
use App\Models\Profile;
use App\Models\Users;
use Illuminate\Support\Facades\Log; 

class UserDashboardController extends Controller
{
    public function userdashboard()
     {
         return view('frontend.dashboard');
    }
    public function userdashboard1()
    {
      // dd(Auth::user());  
      return view('frontend.dashboard1');
   }
   public function addtocart(Request $request)

   {
    $product = \DB::table('products')->get(); //
    
       return view('frontend.addtocart',compact('product'));
  //      $cartItem = Cart::where('productid', $request->productid)
  //      ->where('userid', auth()->id())
  //      ->first();

  //  if ($cartItem) {
       
  //      $cartItem->quantity += $request->quantity ?? 1;
  //      $cartItem->save();
  //  } else {
       
  //      Cart::create([
  //          'userid' => auth()->id(),
  //          'productid' => $request->productid,
  //          'quantity' => $request->quantity ?? 1,
  //      ]);

  }

  public function users()
  {
      // Fetch all users from the database
      $users = User::all(); 

    
      // Pass the $users variable to the view
      return view('frontend.addtocart', compact('users'));
  
  }
  
  public function Mycart()

   {
    $id1=1;
    $product=\DB::table('products')->where('id',  $id1)->get();
  
    // Check if the product exists
    if (!$product) {
        abort(404, "Product not found.");
    }
    //  return view('frontend.pencil',compact('product'));
    // $product=\DB::table('products')->get(); // Ensures a valid product
    //dd($product);
       return view('frontend.layout.footer',compact('product'));
  }
  public function checkout()
  {
      return view('frontend.checkout');
 }
  public function ProductDetail(Request $request)
   {
      
    $productDetail= Products::get() ;
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
 $data=compact('productDetail');
    return view('frontend.productDetail')->with($data);
 
  }

  public function ordertracking(Request $request)
  {
     
   $orderstock= orderstock::get() ;
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
$data=compact('orderstock');
   return view('frontend.ordertracking')->with($data);

 }
  public function addtocartstore(Request $request)
  {
    $request->validate([
        "productid"=>"required",

        "Quantity"=>"required",
       
        "price"=>"required",
     
  
     ]);
  print_r($request->all());
  $cart= new Cart;

$cart->productid=$request['productid'];

$cart->quantity=$request['Quantity'];
$cart->price=$request['price'];
$cart->save();
return redirect()->route('cart');
  }
  public function addwishlist()
  {
   
    $products = \DB::table('products')->get();
    $customers = \DB::table('customers')->get();
    $orderitem = \DB::table('orderitem')->get();
    return view('frontend.wishlistform',compact('products','customers','orderitem'));
 }
  public function wishlist(Request $request)
  {
    $wishlist= wishlist::get() ;
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
$data=compact('wishlist');
   return view('frontend.wishlist')->with($data);

    //   return view('frontend.wishlist');
 }
 public function wishliststore(Request $request)
  {
    $request->validate([
      "productid"=>"required",
      "customerid"=>"required",
      "Orderid"=>"required",
      "Description"=>"required",
      "Quantity"=>"required",
      "price"=>"required",
       "file"=>"required",
     ]);
  print_r($request->all());
  // echo die;
  $cart= new wishlist;

  $cart->productid=$request['productid'];
  $cart->customerid=$request['customerid'];
  $cart->orderid=$request['Orderid'];
  $cart->description=$request['Description'];
  $cart->quantity=$request['Quantity'];
  
  $cart->price=$request['price'];
  $cart->image=$request['file'];
  if ($request->hasFile('file')) {
    $file1 = $request->file('file');
    $ext1 = $file1->getClientOriginalExtension();
    $filename1 = time() . '_' . $cart->name . '.' . $ext1;
    $file1->move('uploads/', $filename1);
    $cart->image = $filename1; // Save file name to the model attribute
 }
 if ($cart->save()) {
  return response()->json(['status' => 'Cart stored successfully']);
} else {
  return response()->json(['status' => 'Failed to store category'], 500);
}
}
// public function continueshopping()
// {
//   return view('frontend.continueshopping');
// }
public function continueshopping1(Request $request)
  {
    $request->validate([
        "Firstname"=>"required",

        "Lastname"=>"required",
       
        "PhoneNumber"=>"required",
        "email"=>"required",
        "adderess"=>"required",
        "total_price"=>"required",
        "billing_date"=>"required",
      "order_status"=>"required",
  
     ]);
  print_r($request->all());
  $orderstock= new  orderstock;

$orderstock->Firstname=$request['Firstname'];

$orderstock->Lastname=$request['Lastname'];
$orderstock->PhoneNumber=$request['PhoneNumber'];
$orderstock->email=$request['email'];
$orderstock->adderess=$request['adderess'];
$orderstock->total_price=$request['total_price'];
$orderstock->billing_date=$request['billing_date'];
// $orderstock->order_status=$request['order_status'];
$orderstock->save();
  }
  public function cart($id , Request $request)
  {
   
    $cart = \DB::table('cart')->where('id', $id)->first();

 // $product= Products::find($id);
  
  return view("frontend.cart", compact('cart'));
  // return view('frontend.layout.header', compact('cart'));

    
 }
 public function cart1()
 {
  

    $cart1 = Cart::all(); // Fetch all cart items
    return view('frontend.cartview', compact('cart1')); // Pass them to the view
  // Pass them to the view
  


   
}
 public function profile() 
 {
   return view('frontend.profile');
 }
 public function profilestore(Request $request) 
 {
  
  $request->validate([
    "Firstname"=>"required",

    "Lastname"=>"required",
   
    "Phonenumber"=>"required",
    "Email"=>"required",
    "message"=>"required",
    "flat"=>"required",
    "Adderess"=>"required",
  "zipcode"=>"required",
  "country"=>"required",
  "city"=>"required",
  "region"=>"required",
  

 ]);
print_r($request->all());
$profile= new Profile;
$profile->Firstname=$request['Firstname'];
$profile->Lastname=$request['Lastname'];
$profile->Phonenumber=$request['Phonenumber'];
$profile->Email=$request['Email'];
$profile->message=$request['message'];
$profile->flat=$request['flat'];
$profile->Adderess=$request['Adderess'];
$profile->zipcode=$request['zipcode'];
$profile->country=$request['country'];
$profile->city=$request['city'];
$profile->region=$request['region'];
$profile->save();




  // return view('frontend.profile');
 }
 public function destroy1($id)
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

public function clearcart($id)
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
// public function cartadd($id , Request $request)
// {
//   $product = \DB::table('products')->where('id', $id)->first();

//   return view("frontend.read", compact('product'));
// }


 public function addtocart1(Request $request , $id)
 {
  // $products = Products::all(); // Retrieves all products from the database.
  // return view('frontend.cart1', compact('products'));
  $products = \DB::table('products')->where('id', $id)->first();

  // Check if the product exists
  if (!$products) {
      abort(404, "Product not found.");
  }
  // return view('frontend.layout.footer', compact('product'));
  // Pass the product to the view
  return view('frontend.cart1', compact('products'));
  return view('frontend.layout.footer', compact('products'));
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
public function update1($id , Request $request)
{
  $product= Products::find($id);
  
  return view("frontend.update", compact('product'));
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



}

