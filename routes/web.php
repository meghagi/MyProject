<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
 Route::get('/', function () {
   //return view('welcome');
   return redirect()->route('index');

   // return view('frontend.index');
});

Auth::routes();
Route::get('/index/{id?}', [AdminDashboardController::class, 'index1'])->name('index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[UserDashboardController::class,'userdashboard'])->name('userdashboard');
Route::get('/dashboard1',[UserDashboardController::class,'userdashboard1'])->name('userdashboard1');
Route::get('/admindashboard',[AdminDashboardController::class,'admindashboard'])->name('admindashboard');
Route::get('/registerd',[AdminDashboardController::class,'registerd'])->name('registerd');
// Route::post('/registerdstore',[AdminDashboardController::class,'registerdstore'])->name('registerdstore');
Route::get('/login2',[AdminDashboardController::class,'login1'])->name('login1');
Route::get('/index1',[AdminDashboardController::class,'index1'])->name('index1');

Route::get('/about',[AdminDashboardController::class,'about'])->name('about');
Route::get('/bags',[AdminDashboardController::class,'bags'])->name('bags');
Route::get('/beauty',[AdminDashboardController::class,'beauty'])->name('beauty');
Route::get('/become-vendor',[AdminDashboardController::class,'becomevendor'])->name('become-vendor');
Route::get('/bicycle',[AdminDashboardController::class,'bicycle'])->name('bicycle');
Route::get('/blog-detail',[AdminDashboardController::class,'blogdetail'])->name('blogdetail');
Route::get('/blog-page',[AdminDashboardController::class,'blogpage'])->name('blogpage');
Route::get('/blog(no-sidebar)',[AdminDashboardController::class,'blog(no-sidebar)'])->name('blog(no-sidebar');
Route::get('/blog(right-sidebar)',[AdminDashboardController::class,'blog(right-sidebar)'])->name('blog(right-sidebar');
Route::get('/books/{id?}',[AdminDashboardController::class,'books'])->name('books');
// Route::get('/cart',[UserDashboardController::class,'cart'])->name('cart');
Route::get('/category-page',[AdminDashboardController::class,'categorypage'])->name('categorypage');
Route::get('/category-page(2-grid)',[AdminDashboardController::class,'categorypage2grid'])->name('categorypage2grid');
Route::get('/category-page(3-grid)',[AdminDashboardController::class,'categorypage3grid'])->name('categorypage3grid');
Route::get('/category-page(4-grid)',[AdminDashboardController::class,'categorypage4grid'])->name('categorypage4grid');


Route::get('/category-page(6-grid)',[AdminDashboardController::class,'categorypage6grid'])->name('categorypage6grid');

Route::get('/category-page(category-slider)',[AdminDashboardController::class,'categoryslider'])->name('categoryslider');

Route::get('/category-page(full-width)',[AdminDashboardController::class,'categorypagefullwidth'])->name('categoryfullwidth');
Route::get('/category-page(infinite-scroll)',[AdminDashboardController::class,'categorypageinfinitescroll'])->name('categoryinfinite-scroll');
Route::get('/category-page(list-view)',[AdminDashboardController::class,'categorypagelistview'])->name('categorylistview');
Route::get('/category-page(load-more)',[AdminDashboardController::class,'categorypageloadmore'])->name('categoryload-more');
Route::get('/category-page(metro)',[AdminDashboardController::class,'categorypagemetro'])->name('categorymetro');
Route::get('/category-page(modern)',[AdminDashboardController::class,'categorypagemodern'])->name('categorymodern');
Route::get('/category-page(no-sidebar)',[AdminDashboardController::class,'categorynosidebar'])->name('categorynosidebar');
Route::get('/category-page(right)',[AdminDashboardController::class,'categoryright'])->name('categorypage(right)');
Route::get('/category-page(sidebar-popup)',[AdminDashboardController::class,'categorysidebarpopup'])->name('categorypage(sidebarpopup)');
Route::get('/category-page(top-filter)',[AdminDashboardController::class,'categorytopfilter'])->name('categorypage(topfilter)');
Route::get('/category-page(vegetables)',[AdminDashboardController::class,'categoryvegetables'])->name('categorypage(vegetables)');
Route::get('/checkout',[AdminDashboardController::class,'checkout'])->name('checkout');

Route::get('/christmas',[AdminDashboardController::class,'christmas'])->name('christmas');
Route::get('/collection',[AdminDashboardController::class,'collection'])->name('collection');
Route::get('/coming-soon',[AdminDashboardController::class,'comingsoon'])->name('commingsoon');
Route::get('/compare-2',[AdminDashboardController::class,'compare2'])->name('compare2');
Route::get('/compare',[AdminDashboardController::class,'compare'])->name('compare');
Route::get('/contact',[AdminDashboardController::class,'contact'])->name('contact');
Route::get('/electronic-1',[AdminDashboardController::class,'electronic1'])->name('electronic-1');
Route::get('/electronic-2',[AdminDashboardController::class,'electronic2'])->name('electronic-2');
Route::get('/electronic-3',[AdminDashboardController::class,'electronic3'])->name('electronic-3');
Route::get('/element-breadcrumb',[AdminDashboardController::class,'elementbreadcrumb'])->name('element-breadcrumb');

Route::get('/element-category',[AdminDashboardController::class,'elementcategory'])->name('element-category');
Route::get('/element-footer',[AdminDashboardController::class,'elementfooter'])->name('element-footer');
Route::get('/element-header',[AdminDashboardController::class,'elementheader'])->name('element-header');
Route::get('/element-multipleslider',[AdminDashboardController::class,'elementmultipleslider'])->name('element-multipleslider');
Route::get('/element-product',[AdminDashboardController::class,'elementproduct'])->name('element-product');
Route::get('/element-productbox',[AdminDashboardController::class,'elementproductbox'])->name('element-productbox');
Route::get('/element-sevice',[AdminDashboardController::class,'elementservice'])->name('elementservice');
Route::get('/element-tab',[AdminDashboardController::class,'elementtab'])->name('element-tab');
Route::get('/element-title',[AdminDashboardController::class,'elementtitle'])->name('element-title');
Route::get('/email-order-success-two',[AdminDashboardController::class,'emailordersuccesstwo'])->name('email-order-success-two');
Route::get('/email-order-success',[AdminDashboardController::class,'emailordersuccess'])->name('email-order-success');

Route::get('/email-template-two',[AdminDashboardController::class,'emailtemplatetwo'])->name('emailtemplatetwo');
Route::get('/email-template',[AdminDashboardController::class,'emailtemplate'])->name('emailtemplate');
Route::get('/faq',[AdminDashboardController::class,'faq'])->name('faq');
Route::get('/fashion-2',[AdminDashboardController::class,'fashion2'])->name('fashion2');
Route::get('/fashion-3',[AdminDashboardController::class,'fashion3'])->name('fashion3');
Route::get('/fashion-4',[AdminDashboardController::class,'fashion4'])->name('fashion4');
Route::get('/fashion-5',[AdminDashboardController::class,'fashion5'])->name('fashion5');
Route::get('/fashion-6',[AdminDashboardController::class,'fashion6'])->name('fashion6');
Route::get('/fashion-7',[AdminDashboardController::class,'fashion7'])->name('fashion7');
Route::get('/flower',[AdminDashboardController::class,'flower'])->name('flower');
Route::get('/forget',[AdminDashboardController::class,'forgetpwd'])->name('forgetpwd');
Route::get('/full-page',[AdminDashboardController::class,'fullpage'])->name('fullpage');
Route::get('/furniture-2',[AdminDashboardController::class,'furniture2'])->name('furniture2');
Route::get('/furniture-3',[AdminDashboardController::class,'furniture3'])->name('furniture3');
Route::get('/furniture',[AdminDashboardController::class,'furniture'])->name('furniture');
Route::get('/game',[AdminDashboardController::class,'game'])->name('game');
Route::get('/goggles',[AdminDashboardController::class,'goggles'])->name('goggles');
Route::get('/gradient',[AdminDashboardController::class,'gradient'])->name('gradient');
Route::get('/grid-2',[AdminDashboardController::class,'grid2'])->name('grid2');
Route::get('/grid-3',[AdminDashboardController::class,'grid3'])->name('grid3');
Route::get('/grid-4',[AdminDashboardController::class,'grid4'])->name('grid4');
Route::get('/gym-product',[AdminDashboardController::class,'gymproduct'])->name('gym-product');
Route::get('/index-2',[AdminDashboardController::class,'index2'])->name('index2');
// Route::get('/index',[AdminDashboardController::class,'index'])->name('index');
Route::get('/instagram-shop',[AdminDashboardController::class,'instagramshop'])->name('instagramshp');
Route::get('/invoice-1',[AdminDashboardController::class,'invoice1'])->name('invoice1');
Route::get('/invoice-2',[AdminDashboardController::class,'invoice2'])->name('invoice2');
Route::get('/invoice-3',[AdminDashboardController::class,'invoice3'])->name('invoice-3');
Route::get('/invoice-4',[AdminDashboardController::class,'invoice4'])->name('invoice-4');
Route::get('/invoice-5',[AdminDashboardController::class,'invoice5'])->name('invoice-5');
Route::get('/jewellery',[AdminDashboardController::class,'jewellery'])->name('jewellery');
Route::get('/jewellery-2',[AdminDashboardController::class,'jewellery2'])->name('jewellery-2');
Route::get('/jewellery-3',[AdminDashboardController::class,'jewellery3'])->name('jewellery-3');
Route::get('/kids',[AdminDashboardController::class,'kids'])->name('kids');
Route::get('/left-sidebar',[AdminDashboardController::class,'leftsidebar'])->name('leftsidebar');
Route::get('/lookbook-demo',[AdminDashboardController::class,'lookbookdemo'])->name('lookbookdemo');
Route::get('/light',[AdminDashboardController::class,'light'])->name('light');
Route::get('/lookbook',[AdminDashboardController::class,'lookbook'])->name('lookbook');
Route::get('/marijuana',[AdminDashboardController::class,'marijuana'])->name('marijuana');
Route::get('/marketplace-demo',[AdminDashboardController::class,'marketplacedemo'])->name('marketplacedemo');
Route::get('/marketplace-demo-2',[AdminDashboardController::class,'marketplacedemo2'])->name('marketplacedemo2');
Route::get('/marketplace-demo-3',[AdminDashboardController::class,'marketplacedemo3'])->name('marketplacedemo3');
Route::get('/marketplace-demo-4',[AdminDashboardController::class,'marketplacedemo4'])->name('marketplacedemo4');
Route::get('/masonary-2-grid',[AdminDashboardController::class,'masonary2grid'])->name('masonary-2-grid');
Route::get('/masonary-3-grid',[AdminDashboardController::class,'masonary3grid'])->name('masonary-3-grid');

Route::get('/masonary-4-grid',[AdminDashboardController::class,'masonary4grid'])->name('masonary-4-grid');

Route::get('/masonary-fullwidth',[AdminDashboardController::class,'masonaryfullwidth'])->name('masonaryfullwidth');

Route::get('/medical',[AdminDashboardController::class,'medical'])->name('medical');

Route::get('/nft',[AdminDashboardController::class,'nft'])->name('nft');
Route::get('/nursery',[AdminDashboardController::class,'nursery'])->name('nuoffers');
Route::get('/offers',[AdminDashboardController::class,'offers'])->name('offers');

Route::get('/order-success',[AdminDashboardController::class,'ordersuccess'])->name('order-success');
Route::get('/order-tracking',[AdminDashboardController::class,'ordertracking'])->name('order-tracking');
Route::get('/parallax',[AdminDashboardController::class,'parallax'])->name('parallax');
Route::get('/perfume',[AdminDashboardController::class,'perfume'])->name('perfume');
Route::get('/pets',[AdminDashboardController::class,'pets'])->name('pets');
Route::get('/product',[AdminDashboardController::class,'product'])->name('product');
Route::post('/productstore',[AdminDashboardController::class,'productstore'])->name('productstore');
Route::get('/manageproduct',[AdminDashboardController::class,'manageproduct'])->name('manageproduct');
// Route::get('/delete/{id}',[AdminDashboardController::class,'deleteproduct'])->name('deleteproduct');
Route::get('/managecustomer',[AdminDashboardController::class,'managecustomer'])->name('managecustomer');
Route::get('/managecategory',[AdminDashboardController::class,'managecategory'])->name('managecategory');
Route::get('/manageuser',[AdminDashboardController::class,'manageuser'])->name('manageuser');
Route::get('/managesales',[AdminDashboardController::class,'managesales'])->name('managesales');
Route::get('/delete-customer/{id}', [AdminDashboardController::class, 'destroy1'])->name('deletecustomer');
Route::get('/delete-sales/{id}', [AdminDashboardController::class, 'deletesales'])->name('deletesales');
Route::get('/delete-order/{id}', [AdminDashboardController::class, 'deleteorder'])->name('deleteorder');
Route::delete('/category/{id}', [AdminDashboardController::class, 'deleteCategory'])->name('deletecategory');

Route::get('/delete-product/{id}', [AdminDashboardController::class, 'destroy'])->name('deleteproduct');
Route::get('/delete-user/{id}', [AdminDashboardController::class, 'destroyUser'])->name('deleteusers');
Route::get('edit/{id}',[AdminDashboardController::class,'edit'])->name('edit');
Route::get('/update/{id}',[AdminDashboardController::class,'update'])->name('update');
Route::post('/updatedata/{id}',[AdminDashboardController::class,'updatedata'])->name('updatedata');
Route::get('read/{id}',[AdminDashboardController::class,'read'])->name('read');

Route::get('edit1/{id}',[AdminDashboardController::class,'edit1'])->name('editcustomer');

Route::get('/update1/{id}',[AdminDashboardController::class,'update1'])->name('update1');
Route::post('/updatedata1/{id}',[AdminDashboardController::class,'updatedata1'])->name('updatedata1');

Route::get('/category',[AdminDashboardController::class,'category'])->name('category');
Route::get('editcategory/{id}',[AdminDashboardController::class,'editcategory'])->name('editcategory');
Route::get('/update2/{id}',[AdminDashboardController::class,'update2'])->name('update2');
Route::post('/updatedata2/{id}',[AdminDashboardController::class,'updatedata2'])->name('updatedata2');
Route::get('readcategory/{id}',[AdminDashboardController::class,'readcategory'])->name('readcategory');
Route::get('readcustomer/{id}',[AdminDashboardController::class,'readcustomer'])->name('readcustomer');
Route::get('readsale/{id}',[AdminDashboardController::class,'readsale'])->name('readsale');
Route::get('readorder/{id}',[AdminDashboardController::class,'readorder'])->name('readorder');
Route::get('readuser/{id}',[AdminDashboardController::class,'readuser'])->name('readuser');
Route::get('editsale/{id}',[AdminDashboardController::class,'editsale'])->name('editsale');
Route::get('editorder/{id}',[AdminDashboardController::class,'editorder'])->name('editorder');
Route::get('/updateorder/{id}',[AdminDashboardController::class,'updateorder'])->name('updateorder');
Route::post('/updateorderdata/{id}',[AdminDashboardController::class,'updateorderdata'])->name('updateorderdata');

Route::get('edituser/{id}',[AdminDashboardController::class,'edituser'])->name('edituser');
Route::get('/updateuser/{id}',[AdminDashboardController::class,'updateuser'])->name('updateuser');
Route::post('/updateuserdata/{id}',[AdminDashboardController::class,'updateuserdata'])->name('updateuserdata');

Route::get('/sales',[AdminDashboardController::class,'sales'])->name('sales');
Route::get('/update3/{id}',[AdminDashboardController::class,'update3'])->name('update3');
Route::post('/updatedata3/{id}',[AdminDashboardController::class,'updatedata3'])->name('updatedata3');
Route::post('/salesstore',[AdminDashboardController::class,'salesstore'])->name('salesstore');
Route::post('/categorystore',[AdminDashboardController::class,'categorystore'])->name('categorystore');
Route::get('/orderitem',[AdminDashboardController::class,'orderitem'])->name('orderitem');
Route::get('/manageorderitem',[AdminDashboardController::class,'manageorderitem'])->name('manageorderitem');
// Route::post('/orderstore/{id}',[AdminDashboardController::class,'orderstore'])->name('orderstore');
Route::post('/orderstore/{id}', [AdminDashboardController::class, 'orderstore'])->name('orderstore');

Route::get('/orderstock',[AdminDashboardController::class,'orderstock'])->name('orderstock');
Route::post('/orderstockstore',[AdminDashboardController::class,'orderstockstore'])->name('orderstockstore');
Route::get('/product-page(3-col-left)',[AdminDashboardController::class,'productpage3colleft)'])->name('product-page(3-col-left)');
Route::get('/product-page(3-col-right)',[AdminDashboardController::class,'productpage3colright)'])->name('product-page(3-col-right)');
Route::get('/product-page(3-column)',[AdminDashboardController::class,'productpage3column'])->name('product-page(3-column)');
Route::get('/stationary',[AdminDashboardController::class,'stationary'])->name('stationary');
Route::post('/upload-multiple-images1',[AdminDashboardController::class,'uploadmultipleimages1'])->name('upload-multiple-images1)');
Route::get('/upload-multiple-images',[AdminDashboardController::class,'uploadmultipleimages'])->name('upload-multiple-images)');



Route::get('/product-page(accordian)/{id?}',[AdminDashboardController::class,'productpageaccordian'])->name('product-page(accordian)');
Route::get('/product-page(bundle)',[AdminDashboardController::class,'productpagebundle'])->name('product-page(bundle)');
Route::get('/rubber',[AdminDashboardController::class,'rubber'])->name('rubber');
Route::get('/product-page(image-swatch)',[AdminDashboardController::class,'productpageimageswatch'])->name('product-page(imageswatch)');
Route::get('/product-page(left-image)',[AdminDashboardController::class,'productpageleftimage'])->name('product-page(leftimage)');
Route::get('/product-page(left-sidebar)',[AdminDashboardController::class,'productpageleftsidebar'])->name('product-page(leftsidebar)');
Route::get('/product-page(no-sidebar)',[AdminDashboardController::class,'productpagenosidebar'])->name('product-page(nosidebar)');
Route::get('/product-page(right-image)',[AdminDashboardController::class,'productpagerightimage'])->name('product-page(rightimage)');
Route::get('/product-page(right-sidebar)',[AdminDashboardController::class,'productpagerightsidebar'])->name('product-page(rightsidebar)');
Route::get('/shoppner',[AdminDashboardController::class,'shoppner'])->name('shoppner');
Route::get('/pencil',[AdminDashboardController::class,'pencil'])->name('pencil');
Route::get('/colourfulpencil',[AdminDashboardController::class,'colourfulpencil'])->name('colourfulpencil');
Route::get('/notebook',[AdminDashboardController::class,'notebook'])->name('notebook');
Route::get('/product-page(thumbnail)',[AdminDashboardController::class,'productpagethumbnail'])->name('product-page(thumbnail)');
Route::get('/product-page(vertical-tab)',[AdminDashboardController::class,'productpageverticaltab'])->name('product-page(vertical-tab)');
Route::get('/product-page(video-thumbnail)',[AdminDashboardController::class,'productpagevideothumbnail'])->name('product-page(videothumbnail)');
Route::get('/profile',[UserDashboardController::class,'profile'])->name('profile');
Route::post('/profilestore',[UserDashboardController::class,'profilestore'])->name('profilestore');
Route::get('/review',[AdminDashboardController::class,'review'])->name('review');
Route::get('/search',[AdminDashboardController::class,'search'])->name('search');
Route::get('/shoes',[AdminDashboardController::class,'shoes'])->name('shoes');
Route::get('/sitemap',[AdminDashboardController::class,'sitemap'])->name('sitemap');
Route::get('/tab-1',[AdminDashboardController::class,'tab1'])->name('tab1');
Route::get('/tab-2',[AdminDashboardController::class,'tab2'])->name('tab2');
Route::get('/tab-3',[AdminDashboardController::class,'tab3'])->name('tab3');
Route::get('/tab-4',[AdminDashboardController::class,'tab4'])->name('tab4');
Route::get('/tab-5',[AdminDashboardController::class,'tab5'])->name('tab5');
Route::get('/tab-6',[AdminDashboardController::class,'tab6'])->name('tab6');
Route::get('/tab-7',[AdminDashboardController::class,'tab7'])->name('tab7');
Route::get('/tab-8',[AdminDashboardController::class,'tab8'])->name('tab8');
Route::get('/tab-9',[AdminDashboardController::class,'tab9'])->name('tab9');
Route::get('/tab-10',[AdminDashboardController::class,'tab10'])->name('tab10');
Route::get('/tools',[AdminDashboardController::class,'tools'])->name('tools');
Route::get('/typography',[AdminDashboardController::class,'typography'])->name('typography');
Route::get('/vegetables',[AdminDashboardController::class,'vegetables'])->name('vegetables');
Route::get('/vegetables-2',[AdminDashboardController::class,'vegetables2'])->name('vegetables2');
Route::get('/vegetables-3',[AdminDashboardController::class,'vegetables3'])->name('vegetables3');
Route::get('/vegetables-4',[AdminDashboardController::class,'vegetables4'])->name('vegetables4');
Route::get('/vegetables-5',[AdminDashboardController::class,'vegetables5'])->name('vegetables5');
Route::get('/vendor-dashboard',[AdminDashboardController::class,'vendordashboard'])->name('vendordashboard');
Route::get('/vendor-profile',[AdminDashboardController::class,'vendorprofile'])->name('vendorprofile');
Route::get('/video-slider',[AdminDashboardController::class,'videoslider'])->name('videoslider');
Route::get('/video',[AdminDashboardController::class,'video'])->name('video');
Route::get('/watch',[AdminDashboardController::class,'watch'])->name('watch');
//Route::get('/wishlist',[AdminDashboardController::class,'wishlist'])->name('wishlist');
Route::get('/yoga',[AdminDashboardController::class,'yoga'])->name('yoga');
Route::get('/customer',[AdminDashboardController::class,'customer'])->name('customer');
Route::post('/customerstore',[AdminDashboardController::class,'customerstore'])->name('customerstore');




Route::get('/addtocart',[UserDashboardController::class,'addtocart'])->name('addtocart');
Route::get('/cart',[UserDashboardController::class,'cart'])->name('cart');
Route::get('/Mycart',[UserDashboardController::class,'Mycart'])->name('Mycart');
Route::post('/addtocartstore',[UserDashboardController::class,'addtocartstore'])->name('addtocartstore');
Route::get('/wishlist',[UserDashboardController::class,'wishlist'])->name('wishlist');
Route::get('/addwishlist',[UserDashboardController::class,'addwishlist'])->name('addwishlist');
Route::post('/wishliststore',[UserDashboardController::class,'wishliststore'])->name('wishliststore');
Route::get('/productDetail',[UserDashboardController::class,'ProductDetail'])->name('ProductDetail');
Route::get('/ordertracking',[UserDashboardController::class,'ordertracking'])->name('ordertracking');
Route::get('/checkout',[UserDashboardController::class,'checkout'])->name('checkout');
Route::post('/continueshopping1',[UserDashboardController::class,'continueshopping1'])->name('continueshopping1');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
