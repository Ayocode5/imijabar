<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0hb6IuUMhICgoBPr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::adjTVCk2FpP27C2m',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscription' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.subscription',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.news',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/news/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.news.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.event',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.event.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/registration/kis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7c8CIjaxHQz7Syfg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/registration/kta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eMteP936ZvCSXz3g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/registration/club' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wKFMSEeuf6Ll8VV7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::opRzBb0rT8l04uVH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bh0ClyBSMWt1bvDp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login.authenticate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget_password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forget-password/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget_password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reset-password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::InL6xEwPaCWv5kcI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password_change',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password-change/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kFn48lHESLm9NxvM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile_change',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile-change/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a5bMYqaMstuVOzdh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photo-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photo_change',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photo-change/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xS7HPgAln015DHYP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/logo/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.logo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/logo/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YzejOTZwfbRuw28c',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/favicon/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.favicon',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/favicon/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qCUnFnGQUPKCdTEW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/loginbg/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.loginbg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/loginbg/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wdcNegQQ4GmokadS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/topbar/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.topbar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/topbar/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kMjnDC3UKuMgSzyM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/banner/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.banner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/banner/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HYLsMGQIMhCftJX9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/footer/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.footer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/footer/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JCL4mtfkgljzWgNZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/sidebar/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.sidebar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/sidebar/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OmBfCXuwKNr4CZhz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/color/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.color',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/color/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SbSggyAv8gd5D958',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/preloader/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.preloader',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/preloader/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ndYqm39E3z6rmXp7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/stickyheader/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.stickyheader',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/stickyheader/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::14uwXBscPwW3YFKG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/googleanalytic/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.googleanalytic',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/googleanalytic/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UxwLhs2ddoGo2ayc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/googlerecaptcha/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.googlerecaptcha',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/googlerecaptcha/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::14v03dUzeIGikNhL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/tawklivechat/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.tawklivechat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/tawklivechat/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CH93z1vDujOuAM51',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/cookieconsent/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_setting.cookieconsent',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/general/cookieconsent/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6MoYmlF8ff63uHze',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/home/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page_home.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/home/metadata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XU87pR7pjNNloYoP',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/home/jumbotron' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j4ypGehq702111XX',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/home/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e1r0t4YzeL3Rk8Bu',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/home/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MPUtV1SqNZuKDVb5',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/home/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M4tjm72II6nowStg',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/home/gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::URLK4fp4c5UfbLyu',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/home/committee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kDaXZdptCjrmrGKQ',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/home/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iSeekXNMi04hDQJq',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/about/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page_about.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/about/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bHxHwJsZZyOJQdn6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/blog/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page_blog.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/blog/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FDaiVUJs6hd7SOHb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/event/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page_event.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/event/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::THjGhomsn07IfX8o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/team/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page_team.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/team/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k9Wp3IGKj4h1R7p6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/gallery/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page_gallery.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/gallery/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o8AksZDj8BXMt6Cc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.news.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.news.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.news.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news/category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dynamic-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dynamic_page.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dynamic-page/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dynamic_page.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dynamic-page/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dynamic_page.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/gallery-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event.gallery-store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event_category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event_category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event_category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/sport' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event_sport.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/sport/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event_sport.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/sport/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event_sport.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/sponsor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event_sponsor.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/sponsor/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event_sponsor.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/event/sponsor/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.event_sponsor.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/photo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photo.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/photo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photo.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/photo/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photo.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.video.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/video/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.video.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/video/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.video.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gallery_category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gallery_category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gallery_category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/committee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.team_member.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/committee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.team_member.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/committee/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.team_member.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email_template.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social-media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social_media.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social-media/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social_media.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social-media/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social_media.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscriber' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriber.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscriber/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriber.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscriber/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriber.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscriber/send-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriber.send_email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscriber/send-email-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriber.send_email_action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/coupon/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/coupon/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/shipping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/shipping/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/shipping/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/footer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/footer/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/footer/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menu/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fVJShCQ2yFlInzhn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/user-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.user-create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/user-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.user-store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/registration/kis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.register.kis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/registration/club' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.register.club',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/file-manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.file_manager',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/subscriber/verify/([^/]++)/([^/]++)(*:43)|/news/([^/]++)(*:64)|/event/([^/]++)(*:86)|/admin/(?|r(?|eset\\-password/([^/]++)/([^/]++)(*:139)|ole/(?|delete/([^/]++)(*:169)|edit/([^/]++)(*:190)|u(?|pdate/([^/]++)(*:216)|ser/(?|edit/(?|([^/]++)(*:247)|password/([^/]++)(*:272))|update/(?|([^/]++)(*:299)|password/([^/]++)(*:324))|delete/([^/]++)(*:348)))|access\\-setup(?|/([^/]++)(*:383)|\\-update/([^/]++)(*:408))))|news/(?|delete/([^/]++)(*:442)|edit/([^/]++)(*:463)|update/([^/]++)(*:486)|category/(?|delete/([^/]++)(*:521)|edit/([^/]++)(*:542)|update/([^/]++)(*:565)))|s(?|lider/(?|delete/([^/]++)(*:603)|edit/([^/]++)(*:624)|update/([^/]++)(*:647))|ocial\\-media/(?|delete/([^/]++)(*:687)|edit/([^/]++)(*:708)|update/([^/]++)(*:731))|ubscriber/delete/([^/]++)(*:765)|hipping/(?|delete/([^/]++)(*:799)|edit/([^/]++)(*:820)|update/([^/]++)(*:843)))|dynamic\\-page/(?|delete/([^/]++)(*:885)|edit/([^/]++)(*:906)|update/([^/]++)(*:929))|e(?|vent/(?|delete/([^/]++)(*:965)|edit/([^/]++)(*:986)|update/([^/]++)(*:1009)|gallery(?|/([^/]++)(*:1037)|\\-delete/([^/]++)(*:1063))|category/(?|delete/([^/]++)(*:1100)|edit/([^/]++)(*:1122)|update/([^/]++)(*:1146))|spo(?|rt/(?|delete/([^/]++)(*:1183)|edit/([^/]++)(*:1205)|update/([^/]++)(*:1229))|nsor/(?|delete/([^/]++)(*:1262)|edit/([^/]++)(*:1284)|update/([^/]++)(*:1308))))|mail\\-template/(?|edit/([^/]++)(*:1351)|update/([^/]++)(*:1375)))|gallery/(?|photo/(?|delete/([^/]++)(*:1421)|edit/([^/]++)(*:1443)|update/([^/]++)(*:1467))|video/(?|delete/([^/]++)(*:1501)|edit/([^/]++)(*:1523)|update/([^/]++)(*:1547))|category/(?|delete/([^/]++)(*:1584)|edit/([^/]++)(*:1606)|update/([^/]++)(*:1630)))|c(?|o(?|mmittee/(?|delete/([^/]++)(*:1675)|edit/([^/]++)(*:1697)|update/([^/]++)(*:1721))|upon/(?|delete/([^/]++)(*:1754)|edit/([^/]++)(*:1776)|update/([^/]++)(*:1800)))|ustomer/(?|de(?|tail/([^/]++)(*:1840)|lete/([^/]++)(*:1862))|make\\-(?|active/([^/]++)(*:1896)|pending/([^/]++)(*:1921))))|product/(?|delete/([^/]++)(*:1959)|edit/([^/]++)(*:1981)|update/([^/]++)(*:2005))|order/(?|de(?|tail/([^/]++)(*:2042)|lete/([^/]++)(*:2064))|invoice/([^/]++)(*:2090))|footer/(?|delete/([^/]++)(*:2125)|edit/([^/]++)(*:2147)|update/([^/]++)(*:2171))))/?$}sDu',
    ),
    3 => 
    array (
      43 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kmmxqhyNBTLfqNcR',
          ),
          1 => 
          array (
            0 => 'token',
            1 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      64 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TURaPoNk9Unw4Y27',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      86 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TptiVr88Eioo2rcF',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J02T3RL4YIfqLM6u',
          ),
          1 => 
          array (
            0 => 'token',
            1 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WGye55b8v6MOyNQ4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wj9oEQTXrWGk7L71',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Ufy9UoYrkuuuXwH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YxNMLErtA50scxjo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TQAk9xXEaSlDptKw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HLvAeB97ZgjR5H8P',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kDGPOjivkjXTFaha',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pYBTkspiIzVdE9V6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UrGhsRYhMZCmOOIH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HOsEtFMyt6AsG5r4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WK2D0lpsSv1Ua8Ec',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HfSuUgpDi9R0VrEg',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vPXQMaelioOrSnA4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wihFd0r5mmcWEyYI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      542 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v085huZONJe4HLgl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fidkCW9hm54g6Q7Y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pIMbFXzsIESXWqOq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ak7B7u2WBIZQHeuo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      647 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7ohmXPeF1DDe2hSD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FrgGpi5NfyRFq9YU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QXKmF3OPUlHXQFhL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ev9dUe9MYIQyxPg1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::weSHijUmZaxFfKp7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      799 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T06vmYd38zoov0sN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QnbYKcOOPIsWTtNS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      843 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CorodA1tfgjbrXHE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g8AuMxIDT2RLgjk6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ph1cYIYmbzGMZthm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u7dJwg61J2hADvgP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p0N5xOF6PP4oM1K2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      986 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SgKkfigKo0unKhUb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9J7jwa1rEttmFjeV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eQODjIlw94KLuII9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1063 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pYmQEGYlBffM4NFB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::81yXH7MaGRPKhRVZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ejIDjc1w1knFDo1Z',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iTbkVNxLO7jM9fXC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::upMCgRJmcNCfueZ8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FAb5J4YJGxi9pBsN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y9nT3fNQ0GIetApe',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G7QGtTjDrSglJNu1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0FLjhzwszlRnGpoI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iwoOKOBPye844mHl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p6xMkLAM9qwj4atn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w08jSTy6zpCDv6fp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kL5WKnagzmzLshWz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OMZ27FJqKqNkKNtb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GmqVPpL5xqefJDo4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i9YjQPHahrgVnQaY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZY7VwH6YRrRelyhH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nf0HHKCUQmoNzGDR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NjHN47EEs3awOtoC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NfoUN9HHSbth8uXc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w5VikqEsgZ77IQOn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1675 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ECrAClGW8DAipSr4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hJhuXtQodGifxAZj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::92NxHUKscWVe1B0C',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1754 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::owD8KIfT302fl4Qt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qze5O3Wv0dpv1Bkw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mhnjp50m9au9Jw4a',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZQZr7hh4oDcPIso7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XFTBQ7q6d4i2gvi6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RuPU9MxTyXLeLPvy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9CUm3viT1NVaHLEr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BSC4tbzpxnQAAY5f',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1981 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JNPbxHQLVQaHSTgo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PrQUZBUds1Gnr98a',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T7sX8znZFuCC8RYG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KnVR8s4GJ87nFAup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c8llXEiqfQhmP1HR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T7p3i2xAxwA4IULB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SGF4igNuOY5ReGjz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ybb24qmAxFHFyJdE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::0hb6IuUMhICgoBPr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@gmvAOuLYFAZPZvZdhpfYvtRgnBwFuxHis8IDnl6QHHE=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000025138f530000000043c2ccf0";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0hb6IuUMhICgoBPr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::adjTVCk2FpP27C2m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Front\\HomeController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::adjTVCk2FpP27C2m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'front.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\SubscriptionController@subscribe',
        'controller' => 'App\\Http\\Controllers\\Front\\SubscriptionController@subscribe',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'front.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kmmxqhyNBTLfqNcR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscriber/verify/{token}/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\SubscriptionController@verify',
        'controller' => 'App\\Http\\Controllers\\Front\\SubscriptionController@verify',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::kmmxqhyNBTLfqNcR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'front.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\AboutController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\AboutController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'front.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'front.news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\News\\IndexController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\News\\IndexController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'front.news',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'front.news.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'news/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\News\\SearchController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\News\\SearchController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'front.news.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TURaPoNk9Unw4Y27' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'news/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\News\\DetailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\News\\DetailController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::TURaPoNk9Unw4Y27',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'front.event' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Event\\IndexController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\Event\\IndexController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'front.event',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'front.event.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Event\\SearchController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\Event\\SearchController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'front.event.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TptiVr88Eioo2rcF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Event\\DetailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\Event\\DetailController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::TptiVr88Eioo2rcF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7c8CIjaxHQz7Syfg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'registration/kis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\KISController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\KISController',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'generated::7c8CIjaxHQz7Syfg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eMteP936ZvCSXz3g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'registration/kta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\KTAController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\KTAController',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'generated::eMteP936ZvCSXz3g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wKFMSEeuf6Ll8VV7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'registration/club',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\ClubController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\ClubController',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'generated::wKFMSEeuf6Ll8VV7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::opRzBb0rT8l04uVH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\GalleryController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Front\\GalleryController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::opRzBb0rT8l04uVH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Bh0ClyBSMWt1bvDp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":245:{@twyqt7ObeiUnsx2Jws0PWkc4vAKUupVinoKLU4DSTBI=.a:5:{s:3:"use";a:0:{}s:8:"function";s:33:"fn () => \\redirect(\'admin/login\')";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000025138f620000000043c2ccf0";}}',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Bh0ClyBSMWt1bvDp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.login.authenticate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@authenticate',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@authenticate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.login.authenticate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LogoutController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LogoutController@logout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forget_password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgetPasswordController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgetPasswordController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.forget_password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forget_password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forget-password/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgetPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgetPasswordController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.forget_password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::J02T3RL4YIfqLM6u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reset-password/{token}/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::J02T3RL4YIfqLM6u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::InL6xEwPaCWv5kcI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reset-password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::InL6xEwPaCWv5kcI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.password_change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\PasswordChangeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\PasswordChangeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.password_change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kFn48lHESLm9NxvM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password-change/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\PasswordChangeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\PasswordChangeController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kFn48lHESLm9NxvM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.profile_change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ProfileChangeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ProfileChangeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.profile_change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::a5bMYqaMstuVOzdh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/profile-change/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ProfileChangeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ProfileChangeController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::a5bMYqaMstuVOzdh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photo_change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/photo-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\PhotoChangeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\PhotoChangeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.photo_change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xS7HPgAln015DHYP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/photo-change/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\PhotoChangeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\PhotoChangeController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xS7HPgAln015DHYP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.logo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/logo/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logo_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logo_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.logo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YzejOTZwfbRuw28c' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/logo/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logo_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logo_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::YzejOTZwfbRuw28c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.favicon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/favicon/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@favicon_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@favicon_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.favicon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qCUnFnGQUPKCdTEW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/favicon/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@favicon_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@favicon_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::qCUnFnGQUPKCdTEW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.loginbg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/loginbg/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@loginbg_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@loginbg_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.loginbg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wdcNegQQ4GmokadS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/loginbg/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@loginbg_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@loginbg_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::wdcNegQQ4GmokadS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.topbar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/topbar/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@topbar_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@topbar_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.topbar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kMjnDC3UKuMgSzyM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/topbar/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@topbar_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@topbar_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::kMjnDC3UKuMgSzyM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.banner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/banner/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@banner_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@banner_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.banner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HYLsMGQIMhCftJX9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/banner/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@banner_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@banner_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::HYLsMGQIMhCftJX9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.footer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/footer/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@footer_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@footer_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.footer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JCL4mtfkgljzWgNZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/footer/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@footer_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@footer_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::JCL4mtfkgljzWgNZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.sidebar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/sidebar/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@sidebar_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@sidebar_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.sidebar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OmBfCXuwKNr4CZhz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/sidebar/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@sidebar_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@sidebar_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::OmBfCXuwKNr4CZhz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.color' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/color/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@color_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@color_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.color',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SbSggyAv8gd5D958' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/color/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@color_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@color_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::SbSggyAv8gd5D958',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.preloader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/preloader/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@preloader_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@preloader_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.preloader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ndYqm39E3z6rmXp7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/preloader/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@preloader_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@preloader_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::ndYqm39E3z6rmXp7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.stickyheader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/stickyheader/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@stickyheader_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@stickyheader_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.stickyheader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::14uwXBscPwW3YFKG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/stickyheader/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@stickyheader_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@stickyheader_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::14uwXBscPwW3YFKG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.googleanalytic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/googleanalytic/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@googleanalytic_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@googleanalytic_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.googleanalytic',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UxwLhs2ddoGo2ayc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/googleanalytic/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@googleanalytic_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@googleanalytic_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::UxwLhs2ddoGo2ayc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.googlerecaptcha' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/googlerecaptcha/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@googlerecaptcha_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@googlerecaptcha_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.googlerecaptcha',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::14v03dUzeIGikNhL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/googlerecaptcha/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@googlerecaptcha_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@googlerecaptcha_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::14v03dUzeIGikNhL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.tawklivechat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/tawklivechat/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@tawklivechat_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@tawklivechat_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.tawklivechat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CH93z1vDujOuAM51' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/tawklivechat/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@tawklivechat_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@tawklivechat_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::CH93z1vDujOuAM51',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_setting.cookieconsent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/general/cookieconsent/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@cookieconsent_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@cookieconsent_edit',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'admin.general_setting.cookieconsent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6MoYmlF8ff63uHze' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/general/cookieconsent/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@cookieconsent_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@cookieconsent_update',
        'namespace' => NULL,
        'prefix' => 'admin/setting/general',
        'where' => 
        array (
        ),
        'as' => 'generated::6MoYmlF8ff63uHze',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.page_home.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/home/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'admin.page_home.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XU87pR7pjNNloYoP' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/page/home/metadata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@metadata',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@metadata',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::XU87pR7pjNNloYoP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::j4ypGehq702111XX' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/page/home/jumbotron',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@jumbotron',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@jumbotron',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::j4ypGehq702111XX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::e1r0t4YzeL3Rk8Bu' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/page/home/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@news',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@news',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::e1r0t4YzeL3Rk8Bu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MPUtV1SqNZuKDVb5' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/page/home/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@events',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@events',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::MPUtV1SqNZuKDVb5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::M4tjm72II6nowStg' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/page/home/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@about',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@about',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::M4tjm72II6nowStg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::URLK4fp4c5UfbLyu' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/page/home/gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@gallery',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@gallery',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::URLK4fp4c5UfbLyu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kDaXZdptCjrmrGKQ' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/page/home/committee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@committee',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@committee',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::kDaXZdptCjrmrGKQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iSeekXNMi04hDQJq' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/page/home/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@newsletter',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@newsletter',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::iSeekXNMi04hDQJq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.page_about.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/about/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageAboutController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageAboutController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page_about.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bHxHwJsZZyOJQdn6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page/about/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageAboutController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageAboutController@update',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'generated::bHxHwJsZZyOJQdn6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.page_blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/blog/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageBlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageBlogController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page_blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FDaiVUJs6hd7SOHb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page/blog/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageBlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageBlogController@update',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'generated::FDaiVUJs6hd7SOHb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.page_event.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/event/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageEventController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageEventController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page_event.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::THjGhomsn07IfX8o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page/event/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageEventController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageEventController@update',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'generated::THjGhomsn07IfX8o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.page_team.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/team/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageTeamController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageTeamController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page_team.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::k9Wp3IGKj4h1R7p6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page/team/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageTeamController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageTeamController@update',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'generated::k9Wp3IGKj4h1R7p6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.page_gallery.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/gallery/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageGalleryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageGalleryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page_gallery.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::o8AksZDj8BXMt6Cc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page/gallery/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageGalleryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageGalleryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'generated::o8AksZDj8BXMt6Cc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.news.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@index',
        'namespace' => NULL,
        'prefix' => 'admin/news',
        'where' => 
        array (
        ),
        'as' => 'admin.news.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.news.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@create',
        'namespace' => NULL,
        'prefix' => 'admin/news',
        'where' => 
        array (
        ),
        'as' => 'admin.news.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.news.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@store',
        'namespace' => NULL,
        'prefix' => 'admin/news',
        'where' => 
        array (
        ),
        'as' => 'admin.news.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WK2D0lpsSv1Ua8Ec' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/news',
        'where' => 
        array (
        ),
        'as' => 'generated::WK2D0lpsSv1Ua8Ec',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HfSuUgpDi9R0VrEg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/news',
        'where' => 
        array (
        ),
        'as' => 'generated::HfSuUgpDi9R0VrEg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vPXQMaelioOrSnA4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@update',
        'namespace' => NULL,
        'prefix' => 'admin/news',
        'where' => 
        array (
        ),
        'as' => 'generated::vPXQMaelioOrSnA4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/news/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/news/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news/category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/news/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wihFd0r5mmcWEyYI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/news/category',
        'where' => 
        array (
        ),
        'as' => 'generated::wihFd0r5mmcWEyYI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::v085huZONJe4HLgl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/news/category',
        'where' => 
        array (
        ),
        'as' => 'generated::v085huZONJe4HLgl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fidkCW9hm54g6Q7Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news/category/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/news/category',
        'where' => 
        array (
        ),
        'as' => 'generated::fidkCW9hm54g6Q7Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.slider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@index',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'admin.slider.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.slider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@create',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'admin.slider.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.slider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@store',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'admin.slider.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pIMbFXzsIESXWqOq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'generated::pIMbFXzsIESXWqOq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ak7B7u2WBIZQHeuo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'generated::ak7B7u2WBIZQHeuo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7ohmXPeF1DDe2hSD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@update',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'generated::7ohmXPeF1DDe2hSD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dynamic_page.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dynamic-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@index',
        'namespace' => NULL,
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.dynamic_page.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dynamic_page.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dynamic-page/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@create',
        'namespace' => NULL,
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.dynamic_page.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dynamic_page.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dynamic-page/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@store',
        'namespace' => NULL,
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.dynamic_page.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::g8AuMxIDT2RLgjk6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dynamic-page/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'generated::g8AuMxIDT2RLgjk6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ph1cYIYmbzGMZthm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dynamic-page/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'generated::Ph1cYIYmbzGMZthm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u7dJwg61J2hADvgP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dynamic-page/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DynamicPageController@update',
        'namespace' => NULL,
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'generated::u7dJwg61J2hADvgP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@index',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'admin.event.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@create',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'admin.event.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/event/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@store',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'admin.event.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p0N5xOF6PP4oM1K2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'generated::p0N5xOF6PP4oM1K2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SgKkfigKo0unKhUb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'generated::SgKkfigKo0unKhUb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9J7jwa1rEttmFjeV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/event/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@update',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'generated::9J7jwa1rEttmFjeV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eQODjIlw94KLuII9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/gallery/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@gallerysection',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@gallerysection',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'generated::eQODjIlw94KLuII9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pYmQEGYlBffM4NFB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/gallery-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@gallerydelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@gallerydelete',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'generated::pYmQEGYlBffM4NFB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event.gallery-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/event/gallery-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@gallerystore',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@gallerystore',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'admin.event.gallery-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event_category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'admin.event_category.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event_category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'admin.event_category.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event_category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/event/category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'admin.event_category.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::81yXH7MaGRPKhRVZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'generated::81yXH7MaGRPKhRVZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ejIDjc1w1knFDo1Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'generated::ejIDjc1w1knFDo1Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iTbkVNxLO7jM9fXC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/event/category/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'generated::iTbkVNxLO7jM9fXC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event_sport.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/sport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@index',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'admin.event_sport.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event_sport.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/sport/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@create',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'admin.event_sport.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event_sport.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/event/sport/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@store',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'admin.event_sport.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::upMCgRJmcNCfueZ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/sport/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'generated::upMCgRJmcNCfueZ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FAb5J4YJGxi9pBsN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/sport/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'generated::FAb5J4YJGxi9pBsN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Y9nT3fNQ0GIetApe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/event/sport/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@update',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'generated::Y9nT3fNQ0GIetApe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event_sponsor.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/sponsor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@index',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'admin.event_sponsor.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event_sponsor.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/sponsor/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@create',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'admin.event_sponsor.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.event_sponsor.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/event/sponsor/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@store',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'admin.event_sponsor.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::G7QGtTjDrSglJNu1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/sponsor/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'generated::G7QGtTjDrSglJNu1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0FLjhzwszlRnGpoI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/event/sponsor/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'generated::0FLjhzwszlRnGpoI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iwoOKOBPye844mHl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/event/sponsor/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
          3 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@update',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'generated::iwoOKOBPye844mHl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photo.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@index',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'admin.photo.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photo.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/photo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@create',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'admin.photo.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photo.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gallery/photo/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@store',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'admin.photo.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kL5WKnagzmzLshWz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/photo/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'generated::kL5WKnagzmzLshWz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OMZ27FJqKqNkKNtb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/photo/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'generated::OMZ27FJqKqNkKNtb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GmqVPpL5xqefJDo4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gallery/photo/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@update',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'generated::GmqVPpL5xqefJDo4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.video.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@index',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'admin.video.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.video.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/video/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@create',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'admin.video.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.video.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gallery/video/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@store',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'admin.video.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::i9YjQPHahrgVnQaY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/video/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'generated::i9YjQPHahrgVnQaY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZY7VwH6YRrRelyhH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/video/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'generated::ZY7VwH6YRrRelyhH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Nf0HHKCUQmoNzGDR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gallery/video/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@update',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'generated::Nf0HHKCUQmoNzGDR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.gallery_category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'admin.gallery_category.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.gallery_category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'admin.gallery_category.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.gallery_category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gallery/category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'admin.gallery_category.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NjHN47EEs3awOtoC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'generated::NjHN47EEs3awOtoC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NfoUN9HHSbth8uXc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'generated::NfoUN9HHSbth8uXc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::w5VikqEsgZ77IQOn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gallery/category/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'generated::w5VikqEsgZ77IQOn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.team_member.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/committee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@index',
        'namespace' => NULL,
        'prefix' => 'admin/committee',
        'where' => 
        array (
        ),
        'as' => 'admin.team_member.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.team_member.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/committee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@create',
        'namespace' => NULL,
        'prefix' => 'admin/committee',
        'where' => 
        array (
        ),
        'as' => 'admin.team_member.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.team_member.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/committee/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@store',
        'namespace' => NULL,
        'prefix' => 'admin/committee',
        'where' => 
        array (
        ),
        'as' => 'admin.team_member.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ECrAClGW8DAipSr4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/committee/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/committee',
        'where' => 
        array (
        ),
        'as' => 'generated::ECrAClGW8DAipSr4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hJhuXtQodGifxAZj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/committee/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/committee',
        'where' => 
        array (
        ),
        'as' => 'generated::hJhuXtQodGifxAZj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::92NxHUKscWVe1B0C' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/committee/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TeamMemberController@update',
        'namespace' => NULL,
        'prefix' => 'admin/committee',
        'where' => 
        array (
        ),
        'as' => 'generated::92NxHUKscWVe1B0C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email_template.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@index',
        'namespace' => NULL,
        'prefix' => 'admin/email-template',
        'where' => 
        array (
        ),
        'as' => 'admin.email_template.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p6xMkLAM9qwj4atn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-template/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/email-template',
        'where' => 
        array (
        ),
        'as' => 'generated::p6xMkLAM9qwj4atn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::w08jSTy6zpCDv6fp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/email-template/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplateController@update',
        'namespace' => NULL,
        'prefix' => 'admin/email-template',
        'where' => 
        array (
        ),
        'as' => 'generated::w08jSTy6zpCDv6fp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.social_media.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@index',
        'namespace' => NULL,
        'prefix' => 'admin/social-media',
        'where' => 
        array (
        ),
        'as' => 'admin.social_media.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.social_media.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-media/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@create',
        'namespace' => NULL,
        'prefix' => 'admin/social-media',
        'where' => 
        array (
        ),
        'as' => 'admin.social_media.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.social_media.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/social-media/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@store',
        'namespace' => NULL,
        'prefix' => 'admin/social-media',
        'where' => 
        array (
        ),
        'as' => 'admin.social_media.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FrgGpi5NfyRFq9YU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-media/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/social-media',
        'where' => 
        array (
        ),
        'as' => 'generated::FrgGpi5NfyRFq9YU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QXKmF3OPUlHXQFhL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-media/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/social-media',
        'where' => 
        array (
        ),
        'as' => 'generated::QXKmF3OPUlHXQFhL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ev9dUe9MYIQyxPg1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/social-media/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@update',
        'namespace' => NULL,
        'prefix' => 'admin/social-media',
        'where' => 
        array (
        ),
        'as' => 'generated::Ev9dUe9MYIQyxPg1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subscriber.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscriber',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@index',
        'namespace' => NULL,
        'prefix' => 'admin/subscriber',
        'where' => 
        array (
        ),
        'as' => 'admin.subscriber.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subscriber.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscriber/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@create',
        'namespace' => NULL,
        'prefix' => 'admin/subscriber',
        'where' => 
        array (
        ),
        'as' => 'admin.subscriber.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subscriber.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subscriber/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@store',
        'namespace' => NULL,
        'prefix' => 'admin/subscriber',
        'where' => 
        array (
        ),
        'as' => 'admin.subscriber.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::weSHijUmZaxFfKp7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscriber/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/subscriber',
        'where' => 
        array (
        ),
        'as' => 'generated::weSHijUmZaxFfKp7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subscriber.send_email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscriber/send-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@send_email',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@send_email',
        'namespace' => NULL,
        'prefix' => 'admin/subscriber',
        'where' => 
        array (
        ),
        'as' => 'admin.subscriber.send_email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subscriber.send_email_action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subscriber/send-email-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isEditor',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@send_email_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@send_email_action',
        'namespace' => NULL,
        'prefix' => 'admin/subscriber',
        'where' => 
        array (
        ),
        'as' => 'admin.subscriber.send_email_action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@index',
        'namespace' => NULL,
        'prefix' => 'admin/coupon',
        'where' => 
        array (
        ),
        'as' => 'admin.coupon.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@create',
        'namespace' => NULL,
        'prefix' => 'admin/coupon',
        'where' => 
        array (
        ),
        'as' => 'admin.coupon.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/coupon/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@store',
        'namespace' => NULL,
        'prefix' => 'admin/coupon',
        'where' => 
        array (
        ),
        'as' => 'admin.coupon.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::owD8KIfT302fl4Qt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/coupon',
        'where' => 
        array (
        ),
        'as' => 'generated::owD8KIfT302fl4Qt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Qze5O3Wv0dpv1Bkw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/coupon',
        'where' => 
        array (
        ),
        'as' => 'generated::Qze5O3Wv0dpv1Bkw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Mhnjp50m9au9Jw4a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/coupon/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CouponController@update',
        'namespace' => NULL,
        'prefix' => 'admin/coupon',
        'where' => 
        array (
        ),
        'as' => 'generated::Mhnjp50m9au9Jw4a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.shipping.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/shipping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@index',
        'namespace' => NULL,
        'prefix' => 'admin/shipping',
        'where' => 
        array (
        ),
        'as' => 'admin.shipping.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.shipping.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/shipping/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@create',
        'namespace' => NULL,
        'prefix' => 'admin/shipping',
        'where' => 
        array (
        ),
        'as' => 'admin.shipping.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.shipping.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/shipping/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@store',
        'namespace' => NULL,
        'prefix' => 'admin/shipping',
        'where' => 
        array (
        ),
        'as' => 'admin.shipping.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T06vmYd38zoov0sN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/shipping/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/shipping',
        'where' => 
        array (
        ),
        'as' => 'generated::T06vmYd38zoov0sN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QnbYKcOOPIsWTtNS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/shipping/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/shipping',
        'where' => 
        array (
        ),
        'as' => 'generated::QnbYKcOOPIsWTtNS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CorodA1tfgjbrXHE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/shipping/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ShippingController@update',
        'namespace' => NULL,
        'prefix' => 'admin/shipping',
        'where' => 
        array (
        ),
        'as' => 'generated::CorodA1tfgjbrXHE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.product.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
        'as' => 'admin.product.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.product.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@create',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
        'as' => 'admin.product.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.product.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@store',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
        'as' => 'admin.product.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BSC4tbzpxnQAAY5f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
        'as' => 'generated::BSC4tbzpxnQAAY5f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JNPbxHQLVQaHSTgo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
        'as' => 'generated::JNPbxHQLVQaHSTgo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PrQUZBUds1Gnr98a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\ProductController@update',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
        'as' => 'generated::PrQUZBUds1Gnr98a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.order.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
        'as' => 'admin.order.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.order.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@create',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
        'as' => 'admin.order.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.order.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/order/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@store',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
        'as' => 'admin.order.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T7sX8znZFuCC8RYG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@detail',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@detail',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
        'as' => 'generated::T7sX8znZFuCC8RYG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::c8llXEiqfQhmP1HR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@invoice',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@invoice',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
        'as' => 'generated::c8llXEiqfQhmP1HR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KnVR8s4GJ87nFAup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\OrderController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
        'as' => 'generated::KnVR8s4GJ87nFAup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZQZr7hh4oDcPIso7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CustomerController@detail',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CustomerController@detail',
        'namespace' => NULL,
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
        'as' => 'generated::ZQZr7hh4oDcPIso7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RuPU9MxTyXLeLPvy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/make-active/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CustomerController@make_active',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CustomerController@make_active',
        'namespace' => NULL,
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
        'as' => 'generated::RuPU9MxTyXLeLPvy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9CUm3viT1NVaHLEr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/make-pending/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CustomerController@make_pending',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CustomerController@make_pending',
        'namespace' => NULL,
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
        'as' => 'generated::9CUm3viT1NVaHLEr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XFTBQ7q6d4i2gvi6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Shop\\CustomerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Shop\\CustomerController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
        'as' => 'generated::XFTBQ7q6d4i2gvi6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.footer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@index',
        'namespace' => NULL,
        'prefix' => 'admin/footer',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.footer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@create',
        'namespace' => NULL,
        'prefix' => 'admin/footer',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.footer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/footer/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@store',
        'namespace' => NULL,
        'prefix' => 'admin/footer',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T7p3i2xAxwA4IULB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/footer',
        'where' => 
        array (
        ),
        'as' => 'generated::T7p3i2xAxwA4IULB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SGF4igNuOY5ReGjz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/footer',
        'where' => 
        array (
        ),
        'as' => 'generated::SGF4igNuOY5ReGjz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ybb24qmAxFHFyJdE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/footer/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FooterColumnController@update',
        'namespace' => NULL,
        'prefix' => 'admin/footer',
        'where' => 
        array (
        ),
        'as' => 'generated::ybb24qmAxFHFyJdE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.menu.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@index',
        'namespace' => NULL,
        'prefix' => 'admin/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fVJShCQ2yFlInzhn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menu/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@update',
        'namespace' => NULL,
        'prefix' => 'admin/menu',
        'where' => 
        array (
        ),
        'as' => 'generated::fVJShCQ2yFlInzhn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@index',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'admin.role.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@create',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'admin.role.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@store',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'admin.role.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WGye55b8v6MOyNQ4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'generated::WGye55b8v6MOyNQ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Wj9oEQTXrWGk7L71' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'generated::Wj9oEQTXrWGk7L71',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2Ufy9UoYrkuuuXwH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@update',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'generated::2Ufy9UoYrkuuuXwH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UrGhsRYhMZCmOOIH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/access-setup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@access_setup',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@access_setup',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'generated::UrGhsRYhMZCmOOIH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HOsEtFMyt6AsG5r4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role/access-setup-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@access_setup_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@access_setup_update',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'generated::HOsEtFMyt6AsG5r4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'admin.role.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.user-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/user-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_create',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'admin.role.user-create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.user-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role/user-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_store',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'admin.role.user-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YxNMLErtA50scxjo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/user/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_edit',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'generated::YxNMLErtA50scxjo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HLvAeB97ZgjR5H8P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role/user/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_update',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'generated::HLvAeB97ZgjR5H8P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TQAk9xXEaSlDptKw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/user/edit/password/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_edit_password',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_edit_password',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'generated::TQAk9xXEaSlDptKw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kDGPOjivkjXTFaha' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role/user/update/password/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_update_password',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_update_password',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'generated::kDGPOjivkjXTFaha',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pYBTkspiIzVdE9V6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/user/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@user_destroy',
        'namespace' => NULL,
        'prefix' => 'admin/role',
        'where' => 
        array (
        ),
        'as' => 'generated::pYBTkspiIzVdE9V6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.register.kis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration/kis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RegistrationMember\\KisController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RegistrationMember\\KisController@index',
        'namespace' => NULL,
        'prefix' => 'admin/registration',
        'where' => 
        array (
        ),
        'as' => 'admin.register.kis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.register.club' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration/club',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RegistrationMember\\ClubController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RegistrationMember\\ClubController@index',
        'namespace' => NULL,
        'prefix' => 'admin/registration',
        'where' => 
        array (
        ),
        'as' => 'admin.register.club',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.file_manager' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/file-manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
          2 => 'can:isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FileManagerController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Admin\\FileManagerController',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.file_manager',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
