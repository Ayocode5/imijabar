<?php

use App\Http\Controllers\Admin\DashboardController as DashboardControllerForAdmin;
use App\Http\Controllers\Admin\DynamicPageController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\FooterColumnController;
use App\Http\Controllers\Admin\GeneralSettingController;

//Admin PanelADMIN AUTHENTICATIONS
use App\Http\Controllers\Admin\Auth\LoginController as LoginControllerForAdmin;
use App\Http\Controllers\Admin\Auth\LogoutController as LogoutControllerForAdmin;
use App\Http\Controllers\Admin\Auth\ForgetPasswordController as ForgetPasswordControllerForAdmin;
use App\Http\Controllers\Admin\Auth\ResetPasswordController as ResetPasswordControllerForAdmin;
use App\Http\Controllers\Admin\Auth\PasswordChangeController as PasswordChangeControllerForAdmin;
use App\Http\Controllers\Admin\Auth\ProfileChangeController as ProfileChangeControllerForAdmin;
use App\Http\Controllers\Admin\Auth\PhotoChangeController;

//Admin PanelROLE CONTROLLER
use App\Http\Controllers\Admin\Role\RoleController;

//Admin PanelSHOP
use App\Http\Controllers\Admin\Shop\CouponController;
use App\Http\Controllers\Admin\Shop\CustomerController;
use App\Http\Controllers\Admin\Shop\ProductController as ProductControllerForAdmin;
use App\Http\Controllers\Admin\Shop\OrderController as OrderControllerForAdmin;
use App\Http\Controllers\Admin\Shop\ShippingController;

//Admin PanelMenu
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProjectController as ProjectControllerForAdmin;
use App\Http\Controllers\Admin\ServiceController as ServiceControllerForAdmin;
use App\Http\Controllers\Admin\SocialMediaItemController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\TeamMemberController as TeamMemberControllerForAdmin;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Controllers\Admin\JobController as JobControllerForAdmin;
use App\Http\Controllers\Admin\FaqController as FaqControllerForAdmin;

//Admin PanelPages
use App\Http\Controllers\Admin\Page\PageAboutController;
use App\Http\Controllers\Admin\Page\PageBlogController;
use App\Http\Controllers\Admin\Page\PageCareerController;
use App\Http\Controllers\Admin\Page\PageContactController;
use App\Http\Controllers\Admin\Page\PageFaqController;
use App\Http\Controllers\Admin\Page\PageHomeController;
use App\Http\Controllers\Admin\Page\PageOtherController;
use App\Http\Controllers\Admin\Page\PagePhotoGalleryController;
use App\Http\Controllers\Admin\Page\PagePrivacyController;
use App\Http\Controllers\Admin\Page\PageProjectController;
use App\Http\Controllers\Admin\Page\PageEventController;
use App\Http\Controllers\Admin\Page\PageServiceController;
use App\Http\Controllers\Admin\Page\PageShopController;
use App\Http\Controllers\Admin\Page\PageTeamController;
use App\Http\Controllers\Admin\Page\PageTermController;
use App\Http\Controllers\Admin\Page\PageVideoGalleryController;

//Admin Panel Gallery
use App\Http\Controllers\Admin\Gallery\PhotoController;
use App\Http\Controllers\Admin\Gallery\VideoController;
use App\Http\Controllers\Admin\Gallery\GalleryCategoryController as GalleryCategoryControllerForAdmin;

//Admin Panel BLOG
use App\Http\Controllers\Admin\Blog\BlogController as BlogControllerForAdmin;
use App\Http\Controllers\Admin\Blog\CategoryController as CategoryControllerForAdmin;
use App\Http\Controllers\Admin\Blog\CommentController;

//Admin Panel EVENT
use App\Http\Controllers\Admin\Event\EventController as EventControllerForAdmin;
use App\Http\Controllers\Admin\Event\EventCategoryController as EventCategoryControllerForAdmin;
use App\Http\Controllers\Admin\Event\EventSportController as EventSportControllerForAdmin;

//Front Panel CUSTOMER
use App\Http\Controllers\Customer\CheckoutController;
use App\Http\Controllers\Customer\DashboardController as DashboardControllerForCustomer;
use App\Http\Controllers\Customer\ForgetPasswordController as ForgetPasswordControllerForCustomer;
use App\Http\Controllers\Customer\LoginController as LoginControllerForCustomer;
use App\Http\Controllers\Customer\LogoutController as LogoutControllerForCustomer;
use App\Http\Controllers\Customer\OrderController as OrderControllerForCustomer;
use App\Http\Controllers\Customer\PasswordChangeController as PasswordChangeControllerForCustomer;
use App\Http\Controllers\Customer\ProfileChangeController as ProfileChangeControllerForCustomer;
use App\Http\Controllers\Customer\RegistrationController;
use App\Http\Controllers\Customer\ResetPasswordController as ResetPasswordControllerForCustomer;

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController as BlogControllerForFront;
use App\Http\Controllers\Front\CategoryController as CategoryControllerForFront;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FaqController as FaqControllerForFront;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\JobController as JobControllerForFront;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\PhotoGalleryController;
use App\Http\Controllers\Front\PrivacyController;
use App\Http\Controllers\Front\ProductController as ProductControllerForFront;
use App\Http\Controllers\Front\ProjectController as ProjectControllerForFront;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\ServiceController as ServiceControllerForFront;
use App\Http\Controllers\Front\SubscriptionController;
use App\Http\Controllers\Front\TeamMemberController as TeamMemberControllerForFront;
use App\Http\Controllers\Front\TermController;
use App\Http\Controllers\Front\VideoGalleryController;

use Illuminate\Support\Facades\Route;

/* --------------------------------------- */
/* Front End */
/* --------------------------------------- */

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [AboutController::class, 'index'])->name('front.about');
Route::get('services', [ServiceControllerForFront::class, 'index'])->name('front.services');
Route::get('service/{slug}', [ServiceControllerForFront::class, 'detail']);
Route::get('blog', [BlogControllerForFront::class, 'index'])->name('front.blogs');
Route::get('blog/{slug}', [BlogControllerForFront::class, 'detail']);
Route::post('blog/comment', [BlogControllerForFront::class, 'comment'])->name('front.comment');
Route::get('category/{slug}', [CategoryControllerForFront::class, 'detail']);
Route::post('search', [SearchController::class, 'index']);
Route::get('search', function () {
    abort(404);
});
Route::get('projects', [ProjectControllerForFront::class, 'index'])->name('front.projects');
Route::get('project/{slug}', [ProjectControllerForFront::class, 'detail']);
Route::get('faq', [FaqControllerForFront::class, 'index'])->name('front.faq');
Route::get('team-members', [TeamMemberControllerForFront::class, 'index'])->name('front.team_members');
Route::get('team-member/{slug}', [TeamMemberControllerForFront::class, 'detail']);
Route::get('photo-gallery', [PhotoGalleryController::class, 'index'])->name('front.photo_gallery');
Route::get('video-gallery', [VideoGalleryController::class, 'index'])->name('front.video_gallery');
Route::get('page/{slug}', [PageController::class, 'detail']);
Route::get('contact', [ContactController::class, 'index'])->name('front.contact');
Route::post('contact/store', [ContactController::class, 'send_email'])->name('front.contact_form');
Route::get('career', [JobControllerForFront::class, 'index'])->name('front.career');
Route::get('job/{slug}', [JobControllerForFront::class, 'detail']);
Route::get('job/apply/{slug}', [JobControllerForFront::class, 'apply']);
Route::post('job/apply/store', [JobControllerForFront::class, 'apply_form'])->name('front.apply_form');
Route::get('shop', [ProductControllerForFront::class, 'index'])->name('front.shop');
Route::get('product/{slug}', [ProductControllerForFront::class, 'detail']);
Route::post('product/cart/add', [ProductControllerForFront::class, 'add_to_cart'])->name('front.add_to_cart');
Route::get('cart', [ProductControllerForFront::class, 'cart'])->name('front.cart');
Route::get('cart/delete/{id}', [ProductControllerForFront::class, 'cart_item_delete']);
Route::post('cart/update', [ProductControllerForFront::class, 'update_cart']);
Route::get('checkout', [ProductControllerForFront::class, 'checkout'])->name('front.checkout');
Route::post('checkout/shipping/update', [ProductControllerForFront::class, 'shipping_update'])->name('front.shipping_update');
Route::post('checkout/coupon/update', [ProductControllerForFront::class, 'coupon_update'])->name('front.coupon_update');
Route::post('subscription', [SubscriptionController::class, 'index'])->name('front.subscription');
Route::get('subscriber/verify/{token}/{email}', [SubscriptionController::class, 'verify']);
Route::get('terms-and-conditions', [TermController::class, 'index'])->name('front.term');
Route::get('privacy-policy', [PrivacyController::class, 'index'])->name('front.privacy');


/* --------------------------------------- */
/* Customer Login and profile management */
/* --------------------------------------- */
Route::get('customer/login', [LoginControllerForCustomer::class, 'index'])->name('customer.login');
Route::post('customer/login/store', [LoginControllerForCustomer::class, 'store'])->name('customer.login.store');
Route::post('customer/checkout/login/store', [CheckoutController::class, 'login'])->name('customer.login_from_checkout_page.store');
Route::get('customer/logout', [LogoutControllerForCustomer::class, 'index'])->name('customer.logout');
Route::get('customer/register', [RegistrationController::class, 'index'])->name('customer.registration');
Route::post('customer/registration/store', [RegistrationController::class, 'store'])->name('customer.registration.store');
Route::get('customer/dashboard', [DashboardControllerForCustomer::class, 'index'])->name('customer.dashboard');
Route::get('customer/registration/verify/{token}/{email}', [RegistrationController::class, 'verify']);
Route::get('customer/forget-password', [ForgetPasswordControllerForCustomer::class, 'index'])->name('customer.forget_password');
Route::post('customer/forget-password/store', [ForgetPasswordControllerForCustomer::class, 'store'])->name('customer.forget_password.store');
Route::get('customer/reset-password/{token}/{email}', [ResetPasswordControllerForCustomer::class, 'index']);
Route::post('customer/reset-password/update', [ResetPasswordControllerForCustomer::class, 'update']);
Route::get('customer/password-change', [PasswordChangeControllerForCustomer::class, 'index'])->name('customer.password_change');
Route::post('customer/password-change/update', [PasswordChangeControllerForCustomer::class, 'update']);
Route::get('customer/profile-change', [ProfileChangeControllerForCustomer::class, 'index'])->name('customer.profile_change');
Route::post('customer/profile-change/update', [ProfileChangeControllerForCustomer::class, 'update']);
Route::get('customer/order', [OrderControllerForCustomer::class, 'index'])->name('customer.order');
Route::post('customer/checkout/billing/shipping', [CheckoutController::class, 'billing_shipping'])->name('customer.billing_shipping_submit');
Route::get('customer/payment', [CheckoutController::class, 'payment'])->name('customer.payment');
Route::post('customer/payment/stripe', [CheckoutController::class, 'stripe'])->name('customer.stripe');
Route::get('customer/execute-payment', [CheckoutController::class, 'paypal']);


/* --------------------------------------- */
/* Admin Login and profile management */
/* --------------------------------------- */

Route::group(['middleware' => ['is_admin'], 'prefix' => 'admin'], function () {

    // Dashboatd
    Route::get('/', fn () => redirect('admin/login'));
    Route::get('/dashboard', [DashboardControllerForAdmin::class, 'index'])->name('admin.dashboard');

    // Authentication
    Route::get('/login', [LoginControllerForAdmin::class, 'index'])->name('admin.login');
    Route::post('/login', [LoginControllerForAdmin::class, 'authenticate'])->name('admin.login.authenticate');
    Route::get('/logout', [LogoutControllerForAdmin::class, 'logout'])->name('admin.logout');

    // Profile Management
    Route::get('/forget-password', [ForgetPasswordControllerForAdmin::class, 'index'])->name('admin.forget_password');
    Route::post('/forget-password/store', [ForgetPasswordControllerForAdmin::class, 'store'])->name('admin.forget_password.store');

    Route::get('/reset-password/{token}/{email}', [ResetPasswordControllerForAdmin::class, 'index']);
    Route::post('/reset-password/update', [ResetPasswordControllerForAdmin::class, 'update']);

    Route::get('/password-change', [PasswordChangeControllerForAdmin::class, 'index'])->name('admin.password_change');
    Route::post('/password-change/update', [PasswordChangeControllerForAdmin::class, 'update']);

    Route::get('/profile-change', [ProfileChangeControllerForAdmin::class, 'index'])->name('admin.profile_change');
    Route::post('/profile-change/update', [ProfileChangeControllerForAdmin::class, 'update']);

    Route::get('/photo-change', [PhotoChangeController::class, 'index'])->name('admin.photo_change');
    Route::post('/photo-change/update', [PhotoChangeController::class, 'update']);



    /* --------------------------------------- */
    /* Blog / News - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'news', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [BlogControllerForAdmin::class, 'index'])->name('admin.news.index');
        Route::get('/create', [BlogControllerForAdmin::class, 'create'])->name('admin.news.create');
        Route::post('/store', [BlogControllerForAdmin::class, 'store'])->name('admin.news.store');
        Route::get('/delete/{id}', [BlogControllerForAdmin::class, 'destroy']);
        Route::get('/edit/{id}', [BlogControllerForAdmin::class, 'edit']);
        Route::post('/update/{id}', [BlogControllerForAdmin::class, 'update']);
    });


    /* --------------------------------------- */
    /* Blog / News Comment - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'comment', 'middleware' => 'can:isEditor'], function () {
        Route::get('/approved', [CommentController::class, 'approved'])->name('admin.comment.approved');
        Route::get('/make-pending/{id}', [CommentController::class, 'make_pending']);
        Route::get('/pending', [CommentController::class, 'pending'])->name('admin.comment.pending');
        Route::get('/make-approved/{id}', [CommentController::class, 'make_approved']);
        Route::get('/delete/{id}', [CommentController::class, 'destroy']);
    });


    /* --------------------------------------- */
    /* Blog / News Category - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'category', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [CategoryControllerForAdmin::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryControllerForAdmin::class, 'create'])->name('admin.category.create');
        Route::post('/store', [CategoryControllerForAdmin::class, 'store'])->name('admin.category.store');
        Route::get('/delete/{id}', [CategoryControllerForAdmin::class, 'destroy']);
        Route::get('/edit/{id}', [CategoryControllerForAdmin::class, 'edit']);
        Route::post('/update/{id}', [CategoryControllerForAdmin::class, 'update']);
    });


    /* --------------------------------------- */
    /* Slider - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'slider', 'middleware' => 'can:isAdmin'], function () {
        Route::get('/', [SliderController::class, 'index'])->name('admin.slider.index');
        Route::get('/create', [SliderController::class, 'create'])->name('admin.slider.create');
        Route::post('/store', [SliderController::class, 'store'])->name('admin.slider.store');
        Route::get('/delete/{id}', [SliderController::class, 'destroy']);
        Route::get('/edit/{id}', [SliderController::class, 'edit']);
        Route::post('/update/{id}', [SliderController::class, 'update']);
    });



    Route::group(['prefix' => 'setting/general', 'middleware' => 'can:isAdmin'], function () {
        /* --------------------------------------- */
        /* Logo - Admin */
        /* --------------------------------------- */
        Route::get('/logo/edit', [GeneralSettingController::class, 'logo_edit'])->name('admin.general_setting.logo');
        Route::post('/logo/update', [GeneralSettingController::class, 'logo_update']);


        /* --------------------------------------- */
        /* Favicon - Admin */
        /* --------------------------------------- */
        Route::get('/favicon/edit', [GeneralSettingController::class, 'favicon_edit'])->name('admin.general_setting.favicon');
        Route::post('/favicon/update', [GeneralSettingController::class, 'favicon_update']);


        /* --------------------------------------- */
        /* Login Background - Admin */
        /* --------------------------------------- */
        Route::get('/loginbg/edit', [GeneralSettingController::class, 'loginbg_edit'])->name('admin.general_setting.loginbg');
        Route::post('/loginbg/update', [GeneralSettingController::class, 'loginbg_update']);


        /* --------------------------------------- */
        /* TopBar - Admin */
        /* --------------------------------------- */
        Route::get('/topbar/edit', [GeneralSettingController::class, 'topbar_edit'])->name('admin.general_setting.topbar');
        Route::post('/topbar/update', [GeneralSettingController::class, 'topbar_update']);


        /* --------------------------------------- */
        /* Banner - Admin */
        /* --------------------------------------- */
        Route::get('/banner/edit', [GeneralSettingController::class, 'banner_edit'])->name('admin.general_setting.banner');
        Route::post('/banner/update', [GeneralSettingController::class, 'banner_update']);


        /* --------------------------------------- */
        /* Footer - Admin */
        /* --------------------------------------- */
        Route::get('/footer/edit', [GeneralSettingController::class, 'footer_edit'])->name('admin.general_setting.footer');
        Route::post('/footer/update', [GeneralSettingController::class, 'footer_update']);


        /* --------------------------------------- */
        /* Sidebar - Admin */
        /* --------------------------------------- */
        Route::get('/sidebar/edit', [GeneralSettingController::class, 'sidebar_edit'])->name('admin.general_setting.sidebar');
        Route::post('/sidebar/update', [GeneralSettingController::class, 'sidebar_update']);


        /* --------------------------------------- */
        /* Color - Admin */
        /* --------------------------------------- */
        Route::get('/color/edit', [GeneralSettingController::class, 'color_edit'])->name('admin.general_setting.color');
        Route::post('/color/update', [GeneralSettingController::class, 'color_update']);


        /* --------------------------------------- */
        /* Preloader - Admin */
        /* --------------------------------------- */
        Route::get('/preloader/edit', [GeneralSettingController::class, 'preloader_edit'])->name('admin.general_setting.preloader');
        Route::post('/preloader/update', [GeneralSettingController::class, 'preloader_update']);


        /* --------------------------------------- */
        /* Sticky Header - Admin */
        /* --------------------------------------- */
        Route::get('/stickyheader/edit', [GeneralSettingController::class, 'stickyheader_edit'])->name('admin.general_setting.stickyheader');
        Route::post('/stickyheader/update', [GeneralSettingController::class, 'stickyheader_update']);


        /* --------------------------------------- */
        /* Google Analytic - Admin */
        /* --------------------------------------- */
        Route::get('/googleanalytic/edit', [GeneralSettingController::class, 'googleanalytic_edit'])->name('admin.general_setting.googleanalytic');
        Route::post('/googleanalytic/update', [GeneralSettingController::class, 'googleanalytic_update']);


        /* --------------------------------------- */
        /* Google Recaptcha - Admin */
        /* --------------------------------------- */
        Route::get('/googlerecaptcha/edit', [GeneralSettingController::class, 'googlerecaptcha_edit'])->name('admin.general_setting.googlerecaptcha');
        Route::post('/googlerecaptcha/update', [GeneralSettingController::class, 'googlerecaptcha_update']);


        /* --------------------------------------- */
        /* Tawk Live Chat - Admin */
        /* --------------------------------------- */
        Route::get('/tawklivechat/edit', [GeneralSettingController::class, 'tawklivechat_edit'])->name('admin.general_setting.tawklivechat');
        Route::post('/tawklivechat/update', [GeneralSettingController::class, 'tawklivechat_update']);


        /* --------------------------------------- */
        /* Cookie Consent - Admin */
        /* --------------------------------------- */
        Route::get('/cookieconsent/edit', [GeneralSettingController::class, 'cookieconsent_edit'])->name('admin.general_setting.cookieconsent');
        Route::post('/cookieconsent/update', [GeneralSettingController::class, 'cookieconsent_update']);
    });


    /* --------------------------------------- */
    /* Page Content Settings - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'page', 'middleware' => 'can:isAdmin'], function () {

        Route::group(['prefix' => 'home'], function () {

            Route::get('/edit', [PageHomeController::class, 'edit'])->name('admin.page_home.edit');
            Route::post('/1', [PageHomeController::class, 'update1']);
            Route::post('/2', [PageHomeController::class, 'update2']);
            Route::post('/3', [PageHomeController::class, 'update3']);
            Route::post('/4', [PageHomeController::class, 'update4']);
            Route::post('/5', [PageHomeController::class, 'update5']);
            Route::post('/6', [PageHomeController::class, 'update6']);
            Route::post('/7', [PageHomeController::class, 'update7']);
            Route::post('/8', [PageHomeController::class, 'update8']);
            Route::post('/9', [PageHomeController::class, 'update9']);
            Route::post('/10', [PageHomeController::class, 'update10']);
        });

        Route::get('/about/edit', [PageAboutController::class, 'edit'])->name('admin.page_about.edit');
        Route::post('/about/update', [PageAboutController::class, 'update']);

        Route::get('/service/edit', [PageServiceController::class, 'edit'])->name('admin.page_service.edit');
        Route::post('/service/update', [PageServiceController::class, 'update']);

        Route::get('/shop/edit', [PageShopController::class, 'edit'])->name('admin.page_shop.edit');
        Route::post('/shop/update', [PageShopController::class, 'update']);

        Route::get('/blog/edit', [PageBlogController::class, 'edit'])->name('admin.page_blog.edit');
        Route::post('/blog/update', [PageBlogController::class, 'update']);

        Route::get('/project/edit', [PageProjectController::class, 'edit'])->name('admin.page_project.edit');
        Route::post('/project/update', [PageProjectController::class, 'update']);

        Route::get('/event/edit', [PageEventController::class, 'edit'])->name('admin.page_event.edit');
        Route::post('/event/update', [PageEventController::class, 'update']);

        Route::get('/faq/edit', [PageFaqController::class, 'edit'])->name('admin.page_faq.edit');
        Route::post('/faq/update', [PageFaqController::class, 'update']);

        Route::get('/team/edit', [PageTeamController::class, 'edit'])->name('admin.page_team.edit');
        Route::post('/team/update', [PageTeamController::class, 'update']);

        Route::get('/photo-gallery/edit', [PagePhotoGalleryController::class, 'edit'])->name('admin.page_photo_gallery.edit');
        Route::post('/photo-gallery/update', [PagePhotoGalleryController::class, 'update']);

        Route::get('/video-gallery/edit', [PageVideoGalleryController::class, 'edit'])->name('admin.page_video_gallery.edit');
        Route::post('/video-gallery/update', [PageVideoGalleryController::class, 'update']);

        Route::get('/contact/edit', [PageContactController::class, 'edit'])->name('admin.page_contact.edit');
        Route::post('/contact/update', [PageContactController::class, 'update']);

        Route::get('/career/edit', [PageCareerController::class, 'edit'])->name('admin.page_career.edit');
        Route::post('/career/update', [PageCareerController::class, 'update']);

        Route::get('/term/edit', [PageTermController::class, 'edit'])->name('admin.page_term.edit');
        Route::post('/term/update', [PageTermController::class, 'update']);

        Route::get('/privacy/edit', [PagePrivacyController::class, 'edit'])->name('admin.page_privacy.edit');
        Route::post('/privacy/update', [PagePrivacyController::class, 'update']);

        Route::group(['prefix' => 'other'], function () {
            Route::get('/edit', [PageOtherController::class, 'edit'])->name('admin.page_other.edit');
            Route::post('/1', [PageOtherController::class, 'update1']);
            Route::post('/2', [PageOtherController::class, 'update2']);
            Route::post('/3', [PageOtherController::class, 'update3']);
            Route::post('/4', [PageOtherController::class, 'update4']);
            Route::post('/5', [PageOtherController::class, 'update5']);
            Route::post('/6', [PageOtherController::class, 'update6']);
            Route::post('/7', [PageOtherController::class, 'update7']);
            Route::post('/8', [PageOtherController::class, 'update8']);
        });
    });


    /* --------------------------------------- */
    /* Dynamic Pages - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'dynamic-page', 'middleware' => 'can:isAdmin'], function () {
        Route::get('/', [DynamicPageController::class, 'index'])->name('admin.dynamic_page.index');
        Route::get('/create', [DynamicPageController::class, 'create'])->name('admin.dynamic_page.create');
        Route::post('/store', [DynamicPageController::class, 'store'])->name('admin.dynamic_page.store');
        Route::get('/delete/{id}', [DynamicPageController::class, 'destroy']);
        Route::get('/edit/{id}', [DynamicPageController::class, 'edit']);
        Route::post('/update/{id}', [DynamicPageController::class, 'update']);
    });



    /* --------------------------------------- */
    /* Event - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'event', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [EventControllerForAdmin::class, 'index'])->name('admin.event.index');
        Route::get('/create', [EventControllerForAdmin::class, 'create'])->name('admin.event.create');
        Route::post('/store', [EventControllerForAdmin::class, 'store'])->name('admin.event.store');
        Route::get('/delete/{id}', [EventControllerForAdmin::class, 'destroy']);
        Route::get('/edit/{id}', [EventControllerForAdmin::class, 'edit']);
        Route::post('/update/{id}', [EventControllerForAdmin::class, 'update']);
        Route::get('/gallery/{id}', [EventControllerForAdmin::class, 'gallerysection']);
        Route::get('/gallery-delete/{id}', [EventControllerForAdmin::class, 'gallerydelete']);
        Route::post('/gallery-store', [EventControllerForAdmin::class, 'gallerystore'])->name('admin.event.gallery-store');

        /* --------------------------------------- */
        /* Event Category - Admin */
        /* --------------------------------------- */
        Route::group(['prefix' => 'category', 'middleware' => 'can:isEditor'], function () {
            Route::get('/', [EventCategoryControllerForAdmin::class, 'index'])->name('admin.event_category.index');
            Route::get('/create', [EventCategoryControllerForAdmin::class, 'create'])->name('admin.event_category.create');
            Route::post('/store', [EventCategoryControllerForAdmin::class, 'store'])->name('admin.event_category.store');
            Route::get('/delete/{id}', [EventCategoryControllerForAdmin::class, 'destroy']);
            Route::get('/edit/{id}', [EventCategoryControllerForAdmin::class, 'edit']);
            Route::post('/update/{id}', [EventCategoryControllerForAdmin::class, 'update']);
        });


        /* --------------------------------------- */
        /* Event Sports - Admin */
        /* --------------------------------------- */
        Route::group(['prefix' => 'sport', 'middleware' => 'can:isEditor'], function () {
            Route::get('/', [EventSportControllerForAdmin::class, 'index'])->name('admin.event_sport.index');
            Route::get('/create', [EventSportControllerForAdmin::class, 'create'])->name('admin.event_sport.create');
            Route::post('/store', [EventSportControllerForAdmin::class, 'store'])->name('admin.event_sport.store');
            Route::get('/delete/{id}', [EventSportControllerForAdmin::class, 'destroy']);
            Route::get('/edit/{id}', [EventSportControllerForAdmin::class, 'edit']);
            Route::post('/update/{id}', [EventSportControllerForAdmin::class, 'update']);
        });
    });





    /* --------------------------------------- */
    /* Project - Admin */
    /* --------------------------------------- */
    // Route::group(['prefix' => 'project', 'middleware' => 'can:isEditor'], function () {
    //     Route::get('/', [ProjectControllerForAdmin::class, 'index'])->name('admin.project.index');
    //     Route::get('/create', [ProjectControllerForAdmin::class, 'create'])->name('admin.project.create');
    //     Route::post('/store', [ProjectControllerForAdmin::class, 'store'])->name('admin.project.store');
    //     Route::get('/delete/{id}', [ProjectControllerForAdmin::class, 'destroy']);
    //     Route::get('/edit/{id}', [ProjectControllerForAdmin::class, 'edit']);
    //     Route::post('/update/{id}', [ProjectControllerForAdmin::class, 'update']);
    //     Route::get('/gallery/{id}', [ProjectControllerForAdmin::class, 'gallerysection']);
    //     Route::get('/gallery-delete/{id}', [ProjectControllerForAdmin::class, 'gallerydelete']);
    //     Route::post('/gallery-store', [ProjectControllerForAdmin::class, 'gallerystore'])->name('admin.project.gallery-store');
    // });


    /* --------------------------------------- */
    /* Photo Gallery - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'photo-gallery', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [PhotoController::class, 'index'])->name('admin.photo.index');
        Route::get('/create', [PhotoController::class, 'create'])->name('admin.photo.create');
        Route::post('/store', [PhotoController::class, 'store'])->name('admin.photo.store');
        Route::get('/delete/{id}', [PhotoController::class, 'destroy']);
        Route::get('/edit/{id}', [PhotoController::class, 'edit']);
        Route::post('/update/{id}', [PhotoController::class, 'update']);
    });


    /* --------------------------------------- */
    /* Video Gallery - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'video-gallery', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [VideoController::class, 'index'])->name('admin.video.index');
        Route::get('/create', [VideoController::class, 'create'])->name('admin.video.create');
        Route::post('/store', [VideoController::class, 'store'])->name('admin.video.store');
        Route::get('/delete/{id}', [VideoController::class, 'destroy']);
        Route::get('/edit/{id}', [VideoController::class, 'edit']);
        Route::post('/update/{id}', [VideoController::class, 'update']);
    });


    /* --------------------------------------- */
    /* Gallery Category - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'gallery-category', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [GalleryCategoryControllerForAdmin::class, 'index'])->name('admin.gallery_category.index');
        Route::get('/create', [GalleryCategoryControllerForAdmin::class, 'create'])->name('admin.gallery_category.create');
        Route::post('/store', [GalleryCategoryControllerForAdmin::class, 'store'])->name('admin.gallery_category.store');
        Route::get('/delete/{id}', [GalleryCategoryControllerForAdmin::class, 'destroy']);
        Route::get('/edit/{id}', [GalleryCategoryControllerForAdmin::class, 'edit']);
        Route::post('/update/{id}', [GalleryCategoryControllerForAdmin::class, 'update']);
    });


    /* --------------------------------------- */
    /* Why Choose Us - Admin */
    /* --------------------------------------- */
    // Route::group(['prefix' => 'why-choose', 'middleware' => 'can:isEditor'], function () {
    //     Route::get('/', [WhyChooseController::class, 'index'])->name('admin.why_choose.index');
    //     Route::get('/create', [WhyChooseController::class, 'create'])->name('admin.why_choose.create');
    //     Route::post('/store', [WhyChooseController::class, 'store'])->name('admin.why_choose.store');
    //     Route::get('/delete/{id}', [WhyChooseController::class, 'destroy']);
    //     Route::get('/edit/{id}', [WhyChooseController::class, 'edit']);
    //     Route::post('/update/{id}', [WhyChooseController::class, 'update']);
    // });



    /* --------------------------------------- */
    /* Service - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'service', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [ServiceControllerForAdmin::class, 'index'])->name('admin.service.index');
        Route::get('/create', [ServiceControllerForAdmin::class, 'create'])->name('admin.service.create');
        Route::post('/store', [ServiceControllerForAdmin::class, 'store'])->name('admin.service.store');
        Route::get('/delete/{id}', [ServiceControllerForAdmin::class, 'destroy']);
        Route::get('/edit/{id}', [ServiceControllerForAdmin::class, 'edit']);
        Route::post('/update/{id}', [ServiceControllerForAdmin::class, 'update']);
    });

    /* --------------------------------------- */
    /* Testimonial - Admin */
    /* --------------------------------------- */
    // Route::group(['prefix' => 'testimonial', 'middleware' => 'can:isEditor'], function () {
    //     Route::get('/', [TestimonialController::class, 'index'])->name('admin.testimonial.index');
    //     Route::get('/create', [TestimonialController::class, 'create'])->name('admin.testimonial.create');
    //     Route::post('/store', [TestimonialController::class, 'store'])->name('admin.testimonial.store');
    //     Route::get('/delete/{id}', [TestimonialController::class, 'destroy']);
    //     Route::get('/edit/{id}', [TestimonialController::class, 'edit']);
    //     Route::post('/update/{id}', [TestimonialController::class, 'update']);
    // });


    /* --------------------------------------- */
    /* Team Member - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'team-member', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [TeamMemberControllerForAdmin::class, 'index'])->name('admin.team_member.index');
        Route::get('/create', [TeamMemberControllerForAdmin::class, 'create'])->name('admin.team_member.create');
        Route::post('/store', [TeamMemberControllerForAdmin::class, 'store'])->name('admin.team_member.store');
        Route::get('/delete/{id}', [TeamMemberControllerForAdmin::class, 'destroy']);
        Route::get('/edit/{id}', [TeamMemberControllerForAdmin::class, 'edit']);
        Route::post('/update/{id}', [TeamMemberControllerForAdmin::class, 'update']);
    });


    /* --------------------------------------- */
    /* Job or Career - Admin */
    /* --------------------------------------- */
    // Route::group(['prefix' => 'job', 'middleware' => 'can:isEditor'], function () {
    //     Route::get('/', [JobControllerForAdmin::class, 'index'])->name('admin.job.index');
    //     Route::get('/create', [JobControllerForAdmin::class, 'create'])->name('admin.job.create');
    //     Route::post('/store', [JobControllerForAdmin::class, 'store'])->name('admin.job.store');
    //     Route::get('/delete/{id}', [JobControllerForAdmin::class, 'destroy']);
    //     Route::get('/edit/{id}', [JobControllerForAdmin::class, 'edit']);
    //     Route::post('/update/{id}', [JobControllerForAdmin::class, 'update']);
    //     Route::get('/application', [JobControllerForAdmin::class, 'view_application'])->name('admin.job.view_application');
    //     Route::get('/application/delete/{id}', [JobControllerForAdmin::class, 'delete_application']);
    // });


    /* --------------------------------------- */
    /* FAQ - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'faq', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [FaqControllerForAdmin::class, 'index'])->name('admin.faq.index');
        Route::get('/create', [FaqControllerForAdmin::class, 'create'])->name('admin.faq.create');
        Route::post('/store', [FaqControllerForAdmin::class, 'store'])->name('admin.faq.store');
        Route::get('/delete/{id}', [FaqControllerForAdmin::class, 'destroy']);
        Route::get('/edit/{id}', [FaqControllerForAdmin::class, 'edit']);
        Route::post('/update/{id}', [FaqControllerForAdmin::class, 'update']);
    });


    /* --------------------------------------- */
    /* Email Template - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'email-template', 'middleware' => 'can:isAdmin'], function () {
        Route::get('/', [EmailTemplateController::class, 'index'])->name('admin.email_template.index');
        Route::get('/edit/{id}', [EmailTemplateController::class, 'edit']);
        Route::post('/update/{id}', [EmailTemplateController::class, 'update']);
    });


    /* --------------------------------------- */
    /* Social Media - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'social-media', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [SocialMediaItemController::class, 'index'])->name('admin.social_media.index');
        Route::get('/create', [SocialMediaItemController::class, 'create'])->name('admin.social_media.create');
        Route::post('/store', [SocialMediaItemController::class, 'store'])->name('admin.social_media.store');
        Route::get('/delete/{id}', [SocialMediaItemController::class, 'destroy']);
        Route::get('/edit/{id}', [SocialMediaItemController::class, 'edit']);
        Route::post('/update/{id}', [SocialMediaItemController::class, 'update']);
    });


    /* --------------------------------------- */
    /* Subscriber - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'subscriber', 'middleware' => 'can:isEditor'], function () {
        Route::get('/', [SubscriberController::class, 'index'])->name('admin.subscriber.index');
        Route::get('/create', [SubscriberController::class, 'create'])->name('admin.subscriber.create');
        Route::post('/store', [SubscriberController::class, 'store'])->name('admin.subscriber.store');
        Route::get('/delete/{id}', [SubscriberController::class, 'destroy']);
        Route::get('/send-email', [SubscriberController::class, 'send_email'])->name('admin.subscriber.send_email');
        Route::post('/send-email-action', [SubscriberController::class, 'send_email_action'])->name('admin.subscriber.send_email_action');
    });


    /* --------------------------------------- */
    /* Coupon - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'coupon', 'middleware' => 'can:isSeller'], function () {
        Route::get('/', [CouponController::class, 'index'])->name('admin.coupon.index');
        Route::get('/create', [CouponController::class, 'create'])->name('admin.coupon.create');
        Route::post('/store', [CouponController::class, 'store'])->name('admin.coupon.store');
        Route::get('/delete/{id}', [CouponController::class, 'destroy']);
        Route::get('/edit/{id}', [CouponController::class, 'edit']);
        Route::post('/update/{id}', [CouponController::class, 'update']);
    });


    /* --------------------------------------- */
    /* Shipping - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'shipping', 'middleware' => 'can:isSeller'], function () {
        Route::get('/', [ShippingController::class, 'index'])->name('admin.shipping.index');
        Route::get('/create', [ShippingController::class, 'create'])->name('admin.shipping.create');
        Route::post('/store', [ShippingController::class, 'store'])->name('admin.shipping.store');
        Route::get('/delete/{id}', [ShippingController::class, 'destroy']);
        Route::get('/edit/{id}', [ShippingController::class, 'edit']);
        Route::post('/update/{id}', [ShippingController::class, 'update']);
    });


    /* --------------------------------------- */
    /* Product - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'product', 'middleware' => 'can:isSeller'], function () {
        Route::get('/', [ProductControllerForAdmin::class, 'index'])->name('admin.product.index');
        Route::get('/create', [ProductControllerForAdmin::class, 'create'])->name('admin.product.create');
        Route::post('/store', [ProductControllerForAdmin::class, 'store'])->name('admin.product.store');
        Route::get('/delete/{id}', [ProductControllerForAdmin::class, 'destroy']);
        Route::get('/edit/{id}', [ProductControllerForAdmin::class, 'edit']);
        Route::post('/update/{id}', [ProductControllerForAdmin::class, 'update']);
    });


    /* --------------------------------------- */
    /* Order - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'order', 'middleware' => 'can:isSeller'], function () {
        Route::get('/', [OrderControllerForAdmin::class, 'index'])->name('admin.order.index');
        Route::get('/create', [OrderControllerForAdmin::class, 'create'])->name('admin.order.create');
        Route::post('/store', [OrderControllerForAdmin::class, 'store'])->name('admin.order.store');
        Route::get('/detail/{id}', [OrderControllerForAdmin::class, 'detail']);
        Route::get('/invoice/{id}', [OrderControllerForAdmin::class, 'invoice']);
        Route::get('/delete/{id}', [OrderControllerForAdmin::class, 'destroy']);
    });


    /* --------------------------------------- */
    /* Customer - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'customer', 'middleware' => 'can:isSeller'], function () {
        Route::get('/', [CustomerController::class, 'index'])->name('admin.customer.index');
        Route::get('/detail/{id}', [CustomerController::class, 'detail']);
        Route::get('/make-active/{id}', [CustomerController::class, 'make_active']);
        Route::get('/make-pending/{id}', [CustomerController::class, 'make_pending']);
        Route::get('/delete/{id}', [CustomerController::class, 'destroy']);
    });


    /* --------------------------------------- */
    /* Footer Columns - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'footer', 'middleware' => 'can:isAdmin'], function () {
        Route::get('/', [FooterColumnController::class, 'index'])->name('admin.footer.index');
        Route::get('/create', [FooterColumnController::class, 'create'])->name('admin.footer.create');
        Route::post('/store', [FooterColumnController::class, 'store'])->name('admin.footer.store');
        Route::get('/delete/{id}', [FooterColumnController::class, 'destroy']);
        Route::get('/edit/{id}', [FooterColumnController::class, 'edit']);
        Route::post('/update/{id}', [FooterColumnController::class, 'update']);
    });


    /* --------------------------------------- */
    /* Menu - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'menu', 'middleware' => 'can:isAdmin'], function () {
        Route::get('/', [MenuController::class, 'index'])->name('admin.menu.index');
        Route::post('/update', [MenuController::class, 'update']);
    });



    /* --------------------------------------- */
    /* Admin Users and Roles - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'role', 'middleware' => 'can:isAdmin'], function () {
        Route::get('/user', [RoleController::class, 'user'])->name('admin.role.user');
        Route::get('/user-create', [RoleController::class, 'user_create'])->name('admin.role.user-create');
        Route::post('/user-store', [RoleController::class, 'user_store'])->name('admin.role.user-store');
        Route::get('/user/edit/{id}', [RoleController::class, 'user_edit']);
        Route::post('/user/update/{id}', [RoleController::class, 'user_update']);
        Route::get('/user/edit/password/{id}', [RoleController::class, 'user_edit_password']);
        Route::post('/user/update/password/{id}', [RoleController::class, 'user_update_password']);
        Route::get('/user/delete/{id}', [RoleController::class, 'user_destroy']);
        Route::get('/', [RoleController::class, 'index'])->name('admin.role.index');
        Route::get('/create', [RoleController::class, 'create'])->name('admin.role.create');
        Route::post('/store', [RoleController::class, 'store'])->name('admin.role.store');
        Route::get('/delete/{id}', [RoleController::class, 'destroy']);
        Route::get('/edit/{id}', [RoleController::class, 'edit']);
        Route::post('/update/{id}', [RoleController::class, 'update']);
        Route::get('/access-setup/{id}', [RoleController::class, 'access_setup']);
        Route::post('/access-setup-update/{id}', [RoleController::class, 'access_setup_update']);
    });
});
