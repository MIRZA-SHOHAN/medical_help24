<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\DataLookupController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\EmailSubscriptionController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\EventController;
use App\Http\Middleware\admin;
use App\Http\Middleware\user;
use App\Models\Page;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
 
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/post-add', [HomeController::class, 'post_add']);
Route::post('/save_doctor', [DoctorController::class, 'store']);
Route::get('/doctor-details', [HomeController::class, 'doctor_details']);

Route::get('/service', [HomeController::class, 'service']);
Route::get('/doctors', [HomeController::class, 'doctor']);
Route::get('/doctor-details/{id}', [TeamMemberController::class, 'show']);
Route::get('/appointment/{id?}', [TeamMemberController::class, 'appointment']);
Route::post('/save_appointment', [TeamMemberController::class, 'appointment_store']);

Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/tos', [HomeController::class, 'tos']);
Route::get('/chat', [HomeController::class, 'chat']);
Route::get('/privacy-policy', [HomeController::class, 'privacy']);
Route::get('/security', [HomeController::class, 'security']);
Route::get('/accessibility', [HomeController::class, 'accessibility']);
Route::view('contact', 'contact');
Route::view('about-us', 'about');
Route::view('my-account', 'my_account');
Route::view('instructors', 'instructors');
Route::view('faq', 'faq');

Route::view('press', 'press');
Route::get('blog',[BlogController::Class,'blog']);
Route::get('blog/{slug}',[BlogController::Class,'show']);
Route::get('page/{id}',[PageController::Class,'show']);


Route::get('404', function () {
    return view('404');  
});
Route::get('maintenance', function () {
    return view('under_construction');  
});


Route::get('/classes', [ClassController::class, 'classes']); 
Route::get('class/{id}', [ClassController::class, 'show']);
Route::get('/events', [EventController::class, 'events']);
Route::get('event/{id}', [EventController::class, 'show']);
Route::post('store_email', [EmailSubscriptionController::class, 'store']);


Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/signin', function () {
    //dd(session('user.user_type'));
    if(session('user.user_type') == 'User'){
        if(session('source')=='cart'){
            return redirect('/checkout');
        }
        return redirect('/');
    }
    else if(session('user.user_type') == 'Admin'){
        return redirect('/admin');
    }
    return view('signin');
})->name('signin');


Route::get('/dashboard', function(){
    if(session('user.user_type') == 'User'){
        return view('home');
    }
    else if(session('user.user_type') == 'Admin'){
        return redirect('/admin');
    }
    return redirect('/signin')->name('signin');
});

Route::get('/admin', function(){
    if(session('user.user_type') == 'Admin'){
        return view('admin.index');
    }
    return redirect('/signin')->name('signin');
});

Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('no-access', function(){
    return redirect('signin');
});
Route::view('contact', 'contact');
Route::view('test', 'layouts/test');
Route::post('contact_form', [EmailSubscriptionController::class, 'contactForm']);

/*user section*/
Route::post('create_user', [UserController::class, 'store']);
//Route::view('signin', 'signin')->name('signin');
Route::post('access-user', [UserController::class, 'signin']);
Route::view('main', 'home_main');
Route::get('verify', [UserController::class, 'verifyUser'])->name('verify.user');
Route::post('reset-password', [UserController::class, 'resetPassword']);
Route::get('reset', [UserController::class, 'resetPass'])->name('reset');
Route::view('new-password', 'new_password')->name('newPassword');
Route::post('new-password-store', [UserController::class, 'newPasswordStore']);


/************************************************************
 //admin section
 ************************************************************/

Route::middleware([admin::class])->group(function () {
    Route::get('settings', [SettingController::class, 'index']);
    Route::post('update_settings', [SettingController::class, 'update']);

    Route::get('profile', [UserController::class, 'edit']);
    Route::post('update_profile', [UserController::class, 'update']);
    Route::get('users', [UserController::class, 'index']);
    Route::post('change_user_status', [UserController::class, 'change_user_status']);
    Route::post('storeUser', [UserController::class, 'storeUser']);
    Route::post('updateUser', [UserController::class, 'updateUser']);
    Route::get('delete-user/{id}', [UserController::class, 'deleteUser']);

    /*blog_category*/
    Route::get('/blog-categories', [BlogCategoryController::class, 'index']);
    Route::post('/store_blog_category', [BlogCategoryController::class, 'store']);
    Route::post('/update_blog_category', [BlogCategoryController::class, 'update']);
    Route::get('/delete_blog_category/{id}', [BlogCategoryController::class, 'destroy']);

    /*data_lookup*/
    Route::get('/data-lookup', [DataLookupController::class, 'index']);
    Route::post('/store_data_lookup', [DataLookupController::class, 'store']);
    Route::post('/update_data_lookup', [DataLookupController::class, 'update']);
    Route::get('/delete_data_lookup/{id}', [DataLookupController::class, 'destroy']);

    /*blog*/
    Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/add-blog', [BlogController::class, 'create']);
    Route::post('/save_blog', [BlogController::class, 'store']);
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit']);
    Route::post('/update_blog', [BlogController::class, 'update']);
    Route::get('/delete-blog/{id}', [BlogController::class, 'destroy']);

    /*product_category*/
    Route::get('/product-categories', [ProductCategoryController::class, 'index']);
    Route::post('/store_product_category', [ProductCategoryController::class, 'store']);
    Route::post('/update_product_category', [ProductCategoryController::class, 'update']);
    Route::get('/delete_product_category/{id}', [ProductCategoryController::class, 'destroy']);

    /*class*/   
    Route::get('/class', [ClassController::class, 'index']);
    Route::get('/add-class', [ClassController::class, 'create']);
    Route::post('/save_class', [ClassController::class, 'store']);
    Route::get('/edit-class/{id}', [ClassController::class, 'edit']);
    Route::post('/update_class', [ClassController::class, 'update']);
    Route::get('/delete-class/{id}', [ClassController::class, 'destroy']);

    /*event*/   
    Route::get('/event', [EventController::class, 'index']);
    Route::get('/add-event', [EventController::class, 'create']);
    Route::post('/save_event', [EventController::class, 'store']);
    Route::get('/edit-event/{id}', [EventController::class, 'edit']);
    Route::post('/update_event', [EventController::class, 'update']);
    Route::get('/delete-event/{id}', [EventController::class, 'destroy']);

   
    /*page*/
    Route::get('/pages', [PageController::class, 'index']);
    Route::get('/add-page', [PageController::class, 'create']);
    Route::post('/save_page', [PageController::class, 'store']);
    Route::get('/edit-page/{id}', [PageController::class, 'edit']);
    Route::post('/update_page', [PageController::class, 'update']);
    Route::get('/delete-page/{id}', [PageController::class, 'destroy']);

    /*post*/
    Route::get('/posts', [PostController::class, 'posts']);
    Route::get('/add-post', [PostController::class, 'create']);
    Route::post('/save_post', [PostController::class, 'store']);
    Route::get('/edit-post/{id}', [PostController::class, 'edit']);
    Route::post('/update_post', [PostController::class, 'update']);
    Route::get('/delete-post/{id}', [PostController::class, 'destroy']);

    /*pricings*/
    Route::get('/pricings', [PricingController::class, 'index']);
    Route::get('/add-pricing', [PricingController::class, 'create']);
    Route::post('/save_pricing', [PricingController::class, 'store']);
    Route::get('/edit-pricing/{id}', [PricingController::class, 'edit']);
    Route::post('/update_pricing', [PricingController::class, 'update']);
    Route::get('/delete-pricing/{id}', [PricingController::class, 'destroy']);
    
    /*team member*/
    Route::get('/doctors', [TeamMemberController::class, 'index']);
    Route::get('/add-doctor', [TeamMemberController::class, 'create']);
    Route::post('/save_team_member', [TeamMemberController::class, 'store']);
    Route::get('/edit-team-member/{id}', [TeamMemberController::class, 'edit']);
    Route::post('/update_team_member', [TeamMemberController::class, 'update']);
    Route::get('/delete-instructor/{id}', [TeamMemberController::class, 'destroy']);
    Route::get('/appointments', [TeamMemberController::class, 'appointment_list']);

    /*hospital*/
    Route::get('/hospitals', [HospitalController::class, 'index']);
    Route::get('/add-hospital', [HospitalController::class, 'create']);
    Route::post('/save_hospital', [HospitalController::class, 'store']);
    Route::get('/edit-hospital/{id}', [HospitalController::class, 'edit']);
    Route::post('/update_hospital', [HospitalController::class, 'update']);
    Route::get('/delete-instructor/{id}', [HospitalController::class, 'destroy']);
  

    /*doctor*/
    Route::get('/doctors', [DoctorController::class, 'index']);
    Route::get('/add-doctor', [DoctorController::class, 'create']);
    // Route::post('/save_doctor', [DoctorController::class, 'store']);
    Route::get('/edit-doctor/{id}', [DoctorController::class, 'edit']);
    Route::post('/update_doctor', [DoctorController::class, 'update']);
    Route::get('/delete-instructor/{id}', [DoctorController::class, 'destroy']);


    /*testimonial*/
    Route::get('/testimonials', [TestimonialController::class, 'index']);
    Route::get('/add-testimonial', [TestimonialController::class, 'create']);
    Route::post('/save_testimonial', [TestimonialController::class, 'store']);
    Route::get('/edit-testimonial/{id}', [TestimonialController::class, 'edit']);
    Route::post('/update_testimonial', [TestimonialController::class, 'update']);
    Route::get('/delete-testimonial/{id}', [TestimonialController::class, 'destroy']);


    /*zone*/
    Route::get('/zones', [ZoneController::class, 'index']);
    Route::get('/add-zone', [ZoneController::class, 'create']);
    Route::post('/save_zone', [ZoneController::class, 'store']);
    Route::get('/edit-zone/{id}', [ZoneController::class, 'edit']);
    Route::post('/update_zone', [ZoneController::class, 'update']);
    Route::get('/delete-zone/{id}', [ZoneController::class, 'destroy']);

});












