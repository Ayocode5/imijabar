<?php


/*** Admin Panel Controllers */

// Auth Controller
use App\Http\Controllers\Admin\Auth\LoginController as LoginControllerForAdmin;
use App\Http\Controllers\Admin\Auth\LogoutController as LogoutControllerForAdmin;
use App\Http\Controllers\Admin\Auth\ForgetPasswordController as ForgetPasswordControllerForAdmin;
use App\Http\Controllers\Admin\Auth\ResetPasswordController as ResetPasswordControllerForAdmin;
use App\Http\Controllers\Admin\Auth\PasswordChangeController as PasswordChangeControllerForAdmin;
use App\Http\Controllers\Admin\Auth\ProfileChangeController as ProfileChangeControllerForAdmin;
use App\Http\Controllers\Admin\Auth\PhotoChangeController;

use App\Http\Controllers\Admin\DashboardController as DashboardControllerForAdmin;
use App\Http\Controllers\Admin\Registrations\ClubController;
use App\Http\Controllers\Admin\Registrations\KisController;
use App\Http\Controllers\Admin\Registrations\EventOrganizerRegistrationController;
use App\Http\Controllers\Admin\DynamicPageController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SocialMediaItemController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\Organizations\CommitteeController as CommitteeAdminController;
use App\Http\Controllers\Admin\Organizations\GreetingController as GreetingAdminController;
use App\Http\Controllers\Admin\Organizations\AgendaController as AgendaAdminController;
use App\Http\Controllers\Admin\Organizations\InfoController as InfoAdminController;
use App\Http\Controllers\Admin\Gallery\PhotoController;
use App\Http\Controllers\Admin\Gallery\VideoController;
use App\Http\Controllers\Admin\Gallery\GalleryCategoryController as GalleryCategoryControllerForAdmin;
use App\Http\Controllers\Admin\Blog\BlogController as BlogControllerForAdmin;
use App\Http\Controllers\Admin\Blog\CategoryController as CategoryControllerForAdmin;
use App\Http\Controllers\Admin\Event\EventController as EventControllerForAdmin;
use App\Http\Controllers\Admin\Event\EventCategoryController as EventCategoryControllerForAdmin;
use App\Http\Controllers\Admin\Event\EventSportController as EventSportControllerForAdmin;
use App\Http\Controllers\Admin\Event\EventSponsorController as EventSponsorControllerForAdmin;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\AdvertisementController;
use App\Http\Controllers\Admin\CommunitiesController;
use App\Http\Controllers\Admin\Page\PageHomeController;
use App\Http\Controllers\Admin\Page\PageBlogController;
use App\Http\Controllers\Admin\Page\PageAboutController;
use App\Http\Controllers\Admin\Page\PageEventController;
use App\Http\Controllers\Admin\Page\PageGalleryController;
// use App\Http\Controllers\Admin\Page\PageFaqController;
use App\Http\Controllers\Admin\Page\PageTeamController;



/**
 * Front Panel Controllers
 */
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\SubscriptionController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\News\IndexController as NewsIndexController;
use App\Http\Controllers\Front\News\DetailController as NewsDetailControler;
use App\Http\Controllers\Front\News\SearchController as NewsSearchController;
use App\Http\Controllers\Front\Event\IndexController as EventIndexController;
use App\Http\Controllers\Front\Event\SearchController as EventSearchController;
use App\Http\Controllers\Front\Event\DetailController as EventDetailController;
use App\Http\Controllers\Front\Registrations\KISController as FrontKISController;
use App\Http\Controllers\Front\Registrations\KTAController as FrontKTAController;
use App\Http\Controllers\Front\Registrations\ClubController as FrontClubController;
use App\Http\Controllers\Front\Registrations\EOController as FrontEOController;
use App\Http\Controllers\Front\GalleryController as FrontGalleryController;
use App\Http\Controllers\Front\Organizations\CommitteeController;
use Illuminate\Support\Facades\Route;

/* --------------------------------------- */
/* Front Panel */
/* --------------------------------------- */
Route::get('/', [HomeController::class, 'index']);
Route::post('/subscription', [SubscriptionController::class, 'subscribe'])->name('front.subscription');
Route::get('/subscriber/verify/{token}/{email}', [SubscriptionController::class, 'verify']);

Route::group(["prefix" => "about"], function() {
    Route::get('/', [AboutController::class, "index"])->name('front.about');
    Route::get('/club/{category}', [AboutController::class, "club_list"])->name("front.about.club");
    Route::get('/club-data/{category}', [AboutController::class, "club_data"]);
});

Route::group(["prefix" => "organizations"], function() {
    Route::get('/committee', [CommitteeController::class, "index"]);
    Route::get('/committee-data', [CommitteeController::class, "committee_data"]);
});

Route::get('/news', NewsIndexController::class)->name('front.news');
Route::get('/news/search/', NewsSearchController::class)->name('front.news.search');
Route::get('/news/{slug}', NewsDetailControler::class);
Route::get('/event', EventIndexController::class)->name('front.event');
Route::get('/event/search/', EventSearchController::class)->name('front.event.search');
Route::get('/event/{slug}', EventDetailController::class);
Route::group(['prefix' => 'registration'], function () {
    Route::get('/kis', [FrontKISController::class, "index"]);
    Route::get('/kis/form', [FrontKISController::class, "getForm"])->name('kis.registration.form');
    Route::post('/kis/form', [FrontKISController::class, "store"])->name('kis.registration.store');
    Route::get('/kta', FrontKTAController::class);
    Route::get('/club', [FrontClubController::class, "index"])->name("club.registration.index");
    Route::get('/club/form', [FrontClubController::class, "getForm"])->name('club.registration.form');
    Route::post('/club/form', [FrontClubController::class, "store"])->name('club.registration.store');
    Route::get('/eo', [FrontEOController::class, "index"])->name("eo.registration.index");
    Route::get('/eo/form', [FrontEOController::class, "getForm"])->name("eo.registration.form");
    Route::post('/eo', [FrontEOController::class, "store"])->name("eo.registration.store");
});
Route::get('/gallery', FrontGalleryController::class);


/* --------------------------------------- */
/* Admin Panel                             */
/* --------------------------------------- */
Route::group(['middleware' => ['is_admin'], 'prefix' => 'admin'], function () {

    // Dashboard
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
        // Route::get('/sidebar/edit', [GeneralSettingController::class, 'sidebar_edit'])->name('admin.general_setting.sidebar');
        // Route::post('/sidebar/update', [GeneralSettingController::class, 'sidebar_update']);


        /* --------------------------------------- */
        /* Color - Admin */
        /* --------------------------------------- */
        // Route::get('/color/edit', [GeneralSettingController::class, 'color_edit'])->name('admin.general_setting.color');
        // Route::post('/color/update', [GeneralSettingController::class, 'color_update']);


        /* --------------------------------------- */
        /* Preloader - Admin */
        /* --------------------------------------- */
        // Route::get('/preloader/edit', [GeneralSettingController::class, 'preloader_edit'])->name('admin.general_setting.preloader');
        // Route::post('/preloader/update', [GeneralSettingController::class, 'preloader_update']);


        /* --------------------------------------- */
        /* Sticky Header - Admin */
        /* --------------------------------------- */
        // Route::get('/stickyheader/edit', [GeneralSettingController::class, 'stickyheader_edit'])->name('admin.general_setting.stickyheader');
        // Route::post('/stickyheader/update', [GeneralSettingController::class, 'stickyheader_update']);


        /* --------------------------------------- */
        /* Google Analytic - Admin */
        /* --------------------------------------- */
        // Route::get('/googleanalytic/edit', [GeneralSettingController::class, 'googleanalytic_edit'])->name('admin.general_setting.googleanalytic');
        // Route::post('/googleanalytic/update', [GeneralSettingController::class, 'googleanalytic_update']);


        /* --------------------------------------- */
        /* Google Recaptcha - Admin */
        /* --------------------------------------- */
        // Route::get('/googlerecaptcha/edit', [GeneralSettingController::class, 'googlerecaptcha_edit'])->name('admin.general_setting.googlerecaptcha');
        // Route::post('/googlerecaptcha/update', [GeneralSettingController::class, 'googlerecaptcha_update']);


        /* --------------------------------------- */
        /* Tawk Live Chat - Admin */
        /* --------------------------------------- */
        // Route::get('/tawklivechat/edit', [GeneralSettingController::class, 'tawklivechat_edit'])->name('admin.general_setting.tawklivechat');
        // Route::post('/tawklivechat/update', [GeneralSettingController::class, 'tawklivechat_update']);


        /* --------------------------------------- */
        /* Cookie Consent - Admin */
        /* --------------------------------------- */
        // Route::get('/cookieconsent/edit', [GeneralSettingController::class, 'cookieconsent_edit'])->name('admin.general_setting.cookieconsent');
        // Route::post('/cookieconsent/update', [GeneralSettingController::class, 'cookieconsent_update']);
    });


    /* --------------------------------------- */
    /* Page Content Settings - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'page'], function () {

        Route::group(['prefix' => 'home'], function () {
            Route::get('/edit', [PageHomeController::class, 'edit'])->name('admin.page_home.edit');
            Route::patch('/metadata', [PageHomeController::class, 'metadata']);
            Route::patch('/jumbotron', [PageHomeController::class, 'jumbotron']);
            Route::patch('/news', [PageHomeController::class, 'news']);
            Route::patch('/events', [PageHomeController::class, 'events']);
            Route::patch('/about', [PageHomeController::class, 'about']);
            Route::patch('/gallery', [PageHomeController::class, 'gallery']);
            Route::patch('/committee', [PageHomeController::class, 'committee']);
            Route::patch('/newsletter', [PageHomeController::class, 'newsletter']);
        });

        Route::get('/about/edit', [PageAboutController::class, 'edit'])->name('admin.page_about.edit');
        Route::post('/about/update', [PageAboutController::class, 'update']);

        Route::get('/blog/edit', [PageBlogController::class, 'edit'])->name('admin.page_blog.edit');
        Route::post('/blog/update', [PageBlogController::class, 'update']);

        Route::get('/event/edit', [PageEventController::class, 'edit'])->name('admin.page_event.edit');
        Route::post('/event/update', [PageEventController::class, 'update']);

        Route::get('/team/edit', [PageTeamController::class, 'edit'])->name('admin.page_team.edit');
        Route::post('/team/update', [PageTeamController::class, 'update']);

        Route::get('/gallery/edit', [PageGalleryController::class, 'edit'])->name('admin.page_gallery.edit');
        Route::post('/gallery/update', [PageGalleryController::class, 'update']);
    });

    /* --------------------------------------- */
    /* Blog / News - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'news'], function () {
        Route::get('/', [BlogControllerForAdmin::class, 'index'])->name('admin.news.index');
        Route::get('/create', [BlogControllerForAdmin::class, 'create'])->name('admin.news.create');
        Route::post('/store', [BlogControllerForAdmin::class, 'store'])->name('admin.news.store');
        Route::get('/delete/{id}', [BlogControllerForAdmin::class, 'destroy']);
        Route::get('/edit/{id}', [BlogControllerForAdmin::class, 'edit']);
        Route::post('/update/{id}', [BlogControllerForAdmin::class, 'update']);

        /* --------------------------------------- */
        /* Blog / News Category - Admin */
        /* --------------------------------------- */
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', [CategoryControllerForAdmin::class, 'index'])->name('admin.category.index');
            Route::get('/create', [CategoryControllerForAdmin::class, 'create'])->name('admin.category.create');
            Route::post('/store', [CategoryControllerForAdmin::class, 'store'])->name('admin.category.store');
            Route::get('/delete/{id}', [CategoryControllerForAdmin::class, 'destroy']);
            Route::get('/edit/{id}', [CategoryControllerForAdmin::class, 'edit']);
            Route::post('/update/{id}', [CategoryControllerForAdmin::class, 'update']);
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
    Route::group(['prefix' => 'event'], function () {
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
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', [EventCategoryControllerForAdmin::class, 'index'])->name('admin.event.category.index');
            Route::get('/create', [EventCategoryControllerForAdmin::class, 'create'])->name('admin.event.category.create');
            Route::post('/store', [EventCategoryControllerForAdmin::class, 'store'])->name('admin.event.category.store');
            Route::get('/delete/{id}', [EventCategoryControllerForAdmin::class, 'destroy']);
            Route::get('/edit/{id}', [EventCategoryControllerForAdmin::class, 'edit']);
            Route::post('/update/{id}', [EventCategoryControllerForAdmin::class, 'update']);
        });


        /* --------------------------------------- */
        /* Event Sports - Admin */
        /* --------------------------------------- */
        Route::group(['prefix' => 'sport'], function () {
            Route::get('/', [EventSportControllerForAdmin::class, 'index'])->name('admin.event.sport.index');
            Route::get('/create', [EventSportControllerForAdmin::class, 'create'])->name('admin.event.sport.create');
            Route::post('/store', [EventSportControllerForAdmin::class, 'store'])->name('admin.event.sport.store');
            Route::get('/delete/{id}', [EventSportControllerForAdmin::class, 'destroy']);
            Route::get('/edit/{id}', [EventSportControllerForAdmin::class, 'edit']);
            Route::post('/update/{id}', [EventSportControllerForAdmin::class, 'update']);
        });


        /* --------------------------------------- */
        /* Event Sponsor - Admin */
        /* --------------------------------------- */
        Route::group(['prefix' => 'sponsor'], function () {
            Route::get('/', [EventSponsorControllerForAdmin::class, 'index'])->name('admin.event.sponsor.index');
            Route::get('/create', [EventSponsorControllerForAdmin::class, 'create'])->name('admin.event.sponsor.create');
            Route::post('/store', [EventSponsorControllerForAdmin::class, 'store'])->name('admin.event.sponsor.store');
            Route::get('/delete/{id}', [EventSponsorControllerForAdmin::class, 'destroy']);
            Route::get('/edit/{id}', [EventSponsorControllerForAdmin::class, 'edit']);
            Route::post('/update/{id}', [EventSponsorControllerForAdmin::class, 'update']);
        });
    });


    /* --------------------------------------- */
    /* Gallery - Admin */
    /* --------------------------------------- */
    Route::group(['prefix' => 'gallery'], function () {

        /* --------------------------------------- */
        /* Photo Gallery - Admin */
        /* --------------------------------------- */
        Route::group(['prefix' => 'photo'], function () {
            Route::get('/', [PhotoController::class, 'index'])->name('admin.galleries.photo.index');
            Route::get('/create', [PhotoController::class, 'create'])->name('admin.galleries.photo.create');
            Route::post('/store', [PhotoController::class, 'store'])->name('admin.galleries.photo.store');
            Route::get('/delete/{id}', [PhotoController::class, 'destroy'])->name('admin.galleries.photo.delete');
            Route::get('/edit/{id}', [PhotoController::class, 'edit'])->name('admin.galleries.photo.edit');
            Route::post('/update/{id}', [PhotoController::class, 'update'])->name('admin.galleries.photo.update');
        });

        /* --------------------------------------- */
        /* Video Gallery - Admin */
        /* --------------------------------------- */
        Route::group(['prefix' => 'video'], function () {
            Route::get('/', [VideoController::class, 'index'])->name('admin.galleries.video.index');
            Route::get('/create', [VideoController::class, 'create'])->name('admin.galleries.video.create');
            Route::post('/store', [VideoController::class, 'store'])->name('admin.galleries.video.store');
            Route::get('/delete/{id}', [VideoController::class, 'destroy'])->name('admin.galleries.video.delete');
            Route::get('/edit/{id}', [VideoController::class, 'edit'])->name('admin.galleries.video.edit');
            Route::post('/update/{id}', [VideoController::class, 'update'])->name('admin.galleries.video.update');
        });

        /* --------------------------------------- */
        /* Gallery Category - Admin */
        /* --------------------------------------- */
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', [GalleryCategoryControllerForAdmin::class, 'index'])->name('admin.galleries.category.index');
            Route::get('/create', [GalleryCategoryControllerForAdmin::class, 'create'])->name('admin.galleries.category.create');
            Route::post('/store', [GalleryCategoryControllerForAdmin::class, 'store'])->name('admin.galleries.category.store');
            Route::get('/delete/{id}', [GalleryCategoryControllerForAdmin::class, 'destroy'])->name('admin.galleries.category.delete');
            Route::get('/edit/{id}', [GalleryCategoryControllerForAdmin::class, 'edit'])->name('admin.galleries.category.edit');
            Route::post('/update/{id}', [GalleryCategoryControllerForAdmin::class, 'update'])->name('admin.galleries.category.update');
        });
    });


    /* --------------------------------------- */
    /* Committee Members & Greetings - Admin   */
    /* --------------------------------------- */
    Route::group(['prefix' => 'organizations'], function () {
        Route::resource("committee", CommitteeAdminController::class, ["names" => "admin.organizations.committee"])->except("show");
        Route::resource("greetings",GreetingAdminController::class, ["names" => 'admin.organizations.greeting'])->except("show");
        Route::resource("agenda", AgendaAdminController::class, ["names" => "admin.organizations.agenda"])->except("show");
        Route::resource("info", InfoAdminController::class, ["names" => "admin.organizations.info"])->except("show");
    });


    /* --------------------- */
    /* Communities - Admin   */
    /* --------------------- */
    Route::resource("communities", CommunitiesController::class, ["names" => "admin.communities"])->except("show");


    // /* --------------------------------------- */
    // /* FAQ - Admin */
    // /* --------------------------------------- */
    // Route::group(['prefix' => 'faq'], function () {
    //     Route::get('/', [FaqControllerForAdmin::class, 'index'])->name('admin.faq.index');
    //     Route::get('/create', [FaqControllerForAdmin::class, 'create'])->name('admin.faq.create');
    //     Route::post('/store', [FaqControllerForAdmin::class, 'store'])->name('admin.faq.store');
    //     Route::get('/delete/{id}', [FaqControllerForAdmin::class, 'destroy']);
    //     Route::get('/edit/{id}', [FaqControllerForAdmin::class, 'edit']);
    //     Route::post('/update/{id}', [FaqControllerForAdmin::class, 'update']);
    // });


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
    Route::group(['prefix' => 'social-media'], function () {
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
    Route::group(['prefix' => 'subscriber'], function () {
        Route::get('/', [SubscriberController::class, 'index'])->name('admin.subscriber.index');
        Route::get('/create', [SubscriberController::class, 'create'])->name('admin.subscriber.create');
        Route::post('/store', [SubscriberController::class, 'store'])->name('admin.subscriber.store');
        Route::get('/delete/{id}', [SubscriberController::class, 'destroy']);
        Route::get('/send-email', [SubscriberController::class, 'send_email'])->name('admin.subscriber.send_email');
        Route::post('/send-email-action', [SubscriberController::class, 'send_email_action'])->name('admin.subscriber.send_email_action');
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
        Route::get('/', [RoleController::class, 'index'])->name('admin.role.index');
        Route::get('/create', [RoleController::class, 'create'])->name('admin.role.create');
        Route::post('/store', [RoleController::class, 'store'])->name('admin.role.store');
        Route::get('/delete/{id}', [RoleController::class, 'destroy']);
        Route::get('/edit/{id}', [RoleController::class, 'edit']);
        Route::post('/update/{id}', [RoleController::class, 'update']);
        Route::get('/access-setup/{id}', [RoleController::class, 'access_setup']);
        Route::post('/access-setup-update/{id}', [RoleController::class, 'access_setup_update']);
        Route::get('/user', [RoleController::class, 'user'])->name('admin.role.user');
        Route::get('/user-create', [RoleController::class, 'user_create'])->name('admin.role.user-create');
        Route::post('/user-store', [RoleController::class, 'user_store'])->name('admin.role.user-store');
        Route::get('/user/edit/{id}', [RoleController::class, 'user_edit']);
        Route::post('/user/update/{id}', [RoleController::class, 'user_update']);
        Route::get('/user/edit/password/{id}', [RoleController::class, 'user_edit_password']);
        Route::post('/user/update/password/{id}', [RoleController::class, 'user_update_password']);
        Route::get('/user/delete/{id}', [RoleController::class, 'user_destroy']);
    });

    /**
     * IMI Member Registration - Admin
     */
    Route::group(['prefix' => 'registration'], function () {
        Route::get('kis', [KisController::class, 'index'])->name('admin.register.kis');
        Route::get('kis/registrant/{index}/export', [KisController::class, 'generatePDF']);

        Route::get('club', [ClubController::class, 'index'])->name('admin.register.club');
        Route::get('club/registrant/{index}/export', [ClubController::class, 'generatePDF']);

        Route::get('event', [EventOrganizerRegistrationController::class, 'index'])->name('admin.register.event');
        Route::get('event/registrant/{index}/export', [EventOrganizerRegistrationController::class, 'generatePDF']);
    });

    Route::get('/file-manager', FileManagerController::class)->name('admin.file_manager');

    Route::resource("advertisement", AdvertisementController::class, ['names' => 'admin.advertisement'])->except("show");

});
