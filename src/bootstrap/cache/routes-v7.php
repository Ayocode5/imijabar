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
      '/file-manager/initialize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.initialize',
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
      '/file-manager/content' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.content',
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
      '/file-manager/tree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.tree',
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
      '/file-manager/select-disk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.select-disk',
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
      '/file-manager/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.upload',
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
      '/file-manager/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.delete',
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
      '/file-manager/paste' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.paste',
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
      '/file-manager/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.rename',
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
      '/file-manager/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.download',
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
      '/file-manager/thumbnails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.thumbnails',
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
      '/file-manager/preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.preview',
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
      '/file-manager/url' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.url',
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
      '/file-manager/create-directory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.create-directory',
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
      '/file-manager/create-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.create-file',
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
      '/file-manager/update-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.update-file',
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
      '/file-manager/stream-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.stream-file',
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
      '/file-manager/zip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.zip',
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
      '/file-manager/unzip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.unzip',
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
      '/file-manager/ckeditor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.ckeditor',
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
      '/file-manager/tinymce' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.tinymce',
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
      '/file-manager/tinymce5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.tinymce5',
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
      '/file-manager/summernote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.summernote',
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
      '/file-manager/fm-button' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.fm-button',
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
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::myEFUlyhqVIwegQB',
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
            '_route' => 'generated::aI3xVc4kEsRQzNcJ',
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
      '/organizations/committee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1KFB1W7TtD74kg64',
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
      '/organizations/committee-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XOUgpkYFkOrLx9rb',
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
            '_route' => 'generated::5RhgljuR7hKdZqbM',
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
      '/registration/kis/form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kis.registration.form',
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
            '_route' => 'kis.registration.store',
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
      '/registration/kta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PxdTfrrVMtyoCMEK',
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
            '_route' => 'club.registration.index',
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
      '/registration/club/form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'club.registration.form',
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
            '_route' => 'club.registration.store',
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
      '/registration/eo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'eo.registration.index',
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
            '_route' => 'eo.registration.store',
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
      '/registration/eo/form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'eo.registration.form',
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
            '_route' => 'generated::dOi6QptMgPnfGjXR',
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
            '_route' => 'generated::q5pvf0ldQ3cSWwjb',
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
            '_route' => 'generated::Plv4yGezUbQeDb7z',
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
            '_route' => 'generated::JdbXYFCxpxN9JBCE',
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
            '_route' => 'generated::SQvlCRzVgowuJwSk',
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
            '_route' => 'generated::KA94xmOYANBgbL3q',
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
            '_route' => 'generated::UeagfBjDcTNQDJzh',
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
            '_route' => 'generated::jdFSsWxyC7hS2By2',
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
            '_route' => 'generated::6EQW6DSCyjs3Ohn5',
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
            '_route' => 'generated::ROaITfJlSycorazE',
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
            '_route' => 'generated::E7piZ5IL18ulujv9',
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
            '_route' => 'generated::cUTvvJBnkykwkPpa',
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
            '_route' => 'generated::iVNGYs9ALB7B57vj',
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
            '_route' => 'generated::pCud6XvVMlpEypdZ',
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
            '_route' => 'generated::VCrBn0jQv2CW9W9K',
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
            '_route' => 'generated::UateWhypKhCXbYEa',
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
            '_route' => 'generated::VO8T3t8TDag2U8vc',
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
            '_route' => 'generated::ctIBsglUeRFp52OD',
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
            '_route' => 'generated::EUmCxoB4CdLnTI2R',
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
            '_route' => 'generated::hROWzGv6dvTJWgqM',
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
            '_route' => 'generated::uiHxJEepBJp34BqT',
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
            '_route' => 'generated::QjtbiD8LAXKodvAf',
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
            '_route' => 'generated::w142qaKkwsrmPkxW',
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
            '_route' => 'generated::B67glECKJsyY6QeY',
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
            '_route' => 'generated::K3jTz6mp6IpbbcJM',
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
            '_route' => 'admin.event.category.index',
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
            '_route' => 'admin.event.category.create',
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
            '_route' => 'admin.event.category.store',
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
            '_route' => 'admin.event.sport.index',
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
            '_route' => 'admin.event.sport.create',
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
            '_route' => 'admin.event.sport.store',
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
            '_route' => 'admin.event.sponsor.index',
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
            '_route' => 'admin.event.sponsor.create',
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
            '_route' => 'admin.event.sponsor.store',
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
            '_route' => 'admin.galleries.photo.index',
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
            '_route' => 'admin.galleries.photo.create',
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
            '_route' => 'admin.galleries.photo.store',
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
            '_route' => 'admin.galleries.video.index',
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
            '_route' => 'admin.galleries.video.create',
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
            '_route' => 'admin.galleries.video.store',
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
            '_route' => 'admin.galleries.category.index',
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
            '_route' => 'admin.galleries.category.create',
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
            '_route' => 'admin.galleries.category.store',
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
      '/admin/organizations/committee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.committee.index',
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
            '_route' => 'admin.organizations.committee.store',
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
      '/admin/organizations/committee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.committee.create',
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
      '/admin/organizations/greetings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.greeting.index',
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
            '_route' => 'admin.organizations.greeting.store',
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
      '/admin/organizations/greetings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.greeting.create',
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
      '/admin/organizations/agenda' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.agenda.index',
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
            '_route' => 'admin.organizations.agenda.store',
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
      '/admin/organizations/agenda/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.agenda.create',
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
      '/admin/organizations/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.info.index',
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
            '_route' => 'admin.organizations.info.store',
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
      '/admin/organizations/info/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.info.create',
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
      '/admin/communities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.communities.index',
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
            '_route' => 'admin.communities.store',
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
      '/admin/communities/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.communities.create',
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
            '_route' => 'generated::xBnPvB0eWlU5xCbY',
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
      '/admin/registration/event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.register.event',
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
      '/admin/advertisement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.index',
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
            '_route' => 'admin.advertisement.store',
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
      '/admin/advertisement/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.create',
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
      0 => '{^(?|/subscriber/verify/([^/]++)/([^/]++)(*:43)|/a(?|bout/club(?|/([^/]++)(*:76)|\\-data/([^/]++)(*:98))|dmin/(?|r(?|e(?|set\\-password/([^/]++)/([^/]++)(*:153)|gistration/(?|kis/registrant/([^/]++)/export(*:205)|club/registrant/([^/]++)/export(*:244)|event/registrant/([^/]++)/export(*:284)))|ole/(?|delete/([^/]++)(*:316)|edit/([^/]++)(*:337)|u(?|pdate/([^/]++)(*:363)|ser/(?|edit/(?|([^/]++)(*:394)|password/([^/]++)(*:419))|update/(?|([^/]++)(*:446)|password/([^/]++)(*:471))|delete/([^/]++)(*:495)))|access\\-setup(?|/([^/]++)(*:530)|\\-update/([^/]++)(*:555))))|news/(?|delete/([^/]++)(*:589)|edit/([^/]++)(*:610)|update/([^/]++)(*:633)|category/(?|delete/([^/]++)(*:668)|edit/([^/]++)(*:689)|update/([^/]++)(*:712)))|dynamic\\-page/(?|delete/([^/]++)(*:754)|edit/([^/]++)(*:775)|update/([^/]++)(*:798))|e(?|vent/(?|delete/([^/]++)(*:834)|edit/([^/]++)(*:855)|update/([^/]++)(*:878)|gallery(?|/([^/]++)(*:905)|\\-delete/([^/]++)(*:930))|category/(?|delete/([^/]++)(*:966)|edit/([^/]++)(*:987)|update/([^/]++)(*:1010))|spo(?|rt/(?|delete/([^/]++)(*:1047)|edit/([^/]++)(*:1069)|update/([^/]++)(*:1093))|nsor/(?|delete/([^/]++)(*:1126)|edit/([^/]++)(*:1148)|update/([^/]++)(*:1172))))|mail\\-template/(?|edit/([^/]++)(*:1215)|update/([^/]++)(*:1239)))|gallery/(?|photo/(?|delete/([^/]++)(*:1285)|edit/([^/]++)(*:1307)|update/([^/]++)(*:1331))|video/(?|delete/([^/]++)(*:1365)|edit/([^/]++)(*:1387)|update/([^/]++)(*:1411))|category/(?|delete/([^/]++)(*:1448)|edit/([^/]++)(*:1470)|update/([^/]++)(*:1494)))|organizations/(?|committee/([^/]++)(?|/edit(*:1548)|(*:1557))|greetings/([^/]++)(?|/edit(*:1593)|(*:1602))|agenda/([^/]++)(?|/edit(*:1635)|(*:1644))|info/([^/]++)(?|/edit(*:1675)|(*:1684)))|communities/([^/]++)(?|/edit(*:1723)|(*:1732))|s(?|ocial\\-media/(?|delete/([^/]++)(*:1777)|edit/([^/]++)(*:1799)|update/([^/]++)(*:1823))|ubscriber/delete/([^/]++)(*:1858))|advertisement/([^/]++)(?|/edit(*:1898)|(*:1907))))|/organizations/agenda\\-data(?:/([^/]++))?(*:1960)|/news/([^/]++)(*:1983)|/event/([^/]++)(*:2007))/?$}sDu',
    ),
    3 => 
    array (
      43 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gBEcZ0RCESdQlnur',
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
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.about.club',
          ),
          1 => 
          array (
            0 => 'category',
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
      98 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u0ZSRMztGkJT5P6H',
          ),
          1 => 
          array (
            0 => 'category',
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
      153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Y1rKCzf8lmlcZHK',
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
      205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gjnX4I6Bhb9bvTim',
          ),
          1 => 
          array (
            0 => 'index',
          ),
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
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MpvyZSD2s1zbCjeV',
          ),
          1 => 
          array (
            0 => 'index',
          ),
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
      284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HDyWUBwJcTcX2kR0',
          ),
          1 => 
          array (
            0 => 'index',
          ),
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
      316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qCSzr5aZ1KUDg9oB',
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
      337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JfIKSim0v16vOopp',
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
      363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x2E3Bk0YpMtVF9Oi',
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
      394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CQrGncoTpBXuNKPn',
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
      419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2YZaGHirw4Tds8LW',
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
      446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Usw1jXsxZPixDoGd',
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
      471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::guqTNgjwyoSyYOOn',
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
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2osMtQ9qDwcqsMIN',
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
      530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aw6xMQVo9kZgQQGA',
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
      555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dVrkTlpzS93HLtpu',
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
      589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6G83k3ANkOszahsu',
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
      610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CPAc31J5yLJQeuFu',
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
      633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4NBbrFcaBM3ZrkFw',
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
      668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ANZHRq2WkCr9G78P',
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
      689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9ABrWif19NTAx7yn',
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
      712 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RtIpw65dhTk3WVpv',
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
      754 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cqHBvv06yKDQ1P3T',
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
      775 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bmTfhEhZYaQqTRPr',
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
      798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::envVBfnVgNIsZb41',
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
      834 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d46pDf4IUkiZBa9W',
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
      855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f3dm81QoWzZeolJt',
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
      878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZXmm6PSI1rq0iArs',
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
      905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fZeNy27mvShcvmGN',
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
      930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FZlz2aiDQlrOnu2C',
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
      966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kXP0KYDxGfcEvkdv',
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
      987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tx55haZK11r0KwWl',
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
      1010 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::65YF8Nibe7HFIrYU',
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
      1047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WvSH7wX4eNKCWXY3',
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
      1069 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vj68W2VhAFxtqk5T',
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
      1093 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uX8GBX0uCBcFrgBZ',
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
      1126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c3PiFExHIpmQJJPN',
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
      1148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FmgiSD4NvrTWvXeH',
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
      1172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::58LDWgcYcTvwemoz',
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
      1215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZKUxTy7ClnmVP3pJ',
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
      1239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YD1iXoc7e8VuwSdl',
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
      1285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.photo.delete',
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
      1307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.photo.edit',
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
      1331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.photo.update',
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
      1365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.video.delete',
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
      1387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.video.edit',
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
      1411 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.video.update',
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
      1448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.category.delete',
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
      1470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.category.edit',
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
      1494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.category.update',
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
      1548 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.committee.edit',
          ),
          1 => 
          array (
            0 => 'committee',
          ),
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
      1557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.committee.update',
          ),
          1 => 
          array (
            0 => 'committee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.committee.destroy',
          ),
          1 => 
          array (
            0 => 'committee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.greeting.edit',
          ),
          1 => 
          array (
            0 => 'greeting',
          ),
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
      1602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.greeting.update',
          ),
          1 => 
          array (
            0 => 'greeting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.greeting.destroy',
          ),
          1 => 
          array (
            0 => 'greeting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.agenda.edit',
          ),
          1 => 
          array (
            0 => 'agenda',
          ),
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
      1644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.agenda.update',
          ),
          1 => 
          array (
            0 => 'agenda',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.agenda.destroy',
          ),
          1 => 
          array (
            0 => 'agenda',
          ),
          2 => 
          array (
            'DELETE' => 0,
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
            '_route' => 'admin.organizations.info.edit',
          ),
          1 => 
          array (
            0 => 'info',
          ),
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
      1684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.info.update',
          ),
          1 => 
          array (
            0 => 'info',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.organizations.info.destroy',
          ),
          1 => 
          array (
            0 => 'info',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.communities.edit',
          ),
          1 => 
          array (
            0 => 'community',
          ),
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
      1732 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.communities.update',
          ),
          1 => 
          array (
            0 => 'community',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.communities.destroy',
          ),
          1 => 
          array (
            0 => 'community',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HCMfZ4tylS4lm3Ni',
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
      1799 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BBShyJpUhAkglfDj',
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
      1823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8TdfIBJ3mIl2JFpp',
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
      1858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dUf4eTFOUjRkFR2L',
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
      1898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.edit',
          ),
          1 => 
          array (
            0 => 'advertisement',
          ),
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
      1907 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.update',
          ),
          1 => 
          array (
            0 => 'advertisement',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.destroy',
          ),
          1 => 
          array (
            0 => 'advertisement',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fiDFWD3bOIUrgFVj',
            'category' => NULL,
          ),
          1 => 
          array (
            0 => 'category',
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
      1983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mK69eJGcU9lrvvnI',
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
      2007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::meCyGjYYKcccmbHL',
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
    'fm.initialize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/initialize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@initialize',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@initialize',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.initialize',
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
      'withTrashed' => false,
    ),
    'fm.content' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@content',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@content',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.content',
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
      'withTrashed' => false,
    ),
    'fm.tree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tree',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tree',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.tree',
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
      'withTrashed' => false,
    ),
    'fm.select-disk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/select-disk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@selectDisk',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@selectDisk',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.select-disk',
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
      'withTrashed' => false,
    ),
    'fm.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@upload',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@upload',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.upload',
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
      'withTrashed' => false,
    ),
    'fm.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@delete',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@delete',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.delete',
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
      'withTrashed' => false,
    ),
    'fm.paste' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/paste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@paste',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@paste',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.paste',
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
      'withTrashed' => false,
    ),
    'fm.rename' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@rename',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@rename',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.rename',
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
      'withTrashed' => false,
    ),
    'fm.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@download',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@download',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.download',
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
      'withTrashed' => false,
    ),
    'fm.thumbnails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/thumbnails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@thumbnails',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@thumbnails',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.thumbnails',
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
      'withTrashed' => false,
    ),
    'fm.preview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@preview',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@preview',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.preview',
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
      'withTrashed' => false,
    ),
    'fm.url' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/url',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@url',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@url',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.url',
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
      'withTrashed' => false,
    ),
    'fm.create-directory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/create-directory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createDirectory',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createDirectory',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.create-directory',
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
      'withTrashed' => false,
    ),
    'fm.create-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/create-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createFile',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createFile',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.create-file',
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
      'withTrashed' => false,
    ),
    'fm.update-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/update-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@updateFile',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@updateFile',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.update-file',
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
      'withTrashed' => false,
    ),
    'fm.stream-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/stream-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@streamFile',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@streamFile',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.stream-file',
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
      'withTrashed' => false,
    ),
    'fm.zip' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/zip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@zip',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@zip',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.zip',
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
      'withTrashed' => false,
    ),
    'fm.unzip' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/unzip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@unzip',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@unzip',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.unzip',
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
      'withTrashed' => false,
    ),
    'fm.ckeditor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/ckeditor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@ckeditor',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@ckeditor',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.ckeditor',
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
      'withTrashed' => false,
    ),
    'fm.tinymce' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/tinymce',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.tinymce',
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
      'withTrashed' => false,
    ),
    'fm.tinymce5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/tinymce5',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce5',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce5',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.tinymce5',
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
      'withTrashed' => false,
    ),
    'fm.summernote' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/summernote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@summernote',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@summernote',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.summernote',
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
      'withTrashed' => false,
    ),
    'fm.fm-button' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/fm-button',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'fm-acl',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@fmButton',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@fmButton',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.fm-button',
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
      'withTrashed' => false,
    ),
    'generated::myEFUlyhqVIwegQB' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000404a962700000000703d6246";}";s:4:"hash";s:44:"AtaTDPTt2x750pk7mOE9kUUNHCpAejwWD56CcdJ6ROM=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::myEFUlyhqVIwegQB',
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
      'withTrashed' => false,
    ),
    'generated::aI3xVc4kEsRQzNcJ' => 
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
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aI3xVc4kEsRQzNcJ',
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
      'withTrashed' => false,
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
        'prefix' => '',
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
      'withTrashed' => false,
    ),
    'generated::gBEcZ0RCESdQlnur' => 
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
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gBEcZ0RCESdQlnur',
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
      'withTrashed' => false,
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
        'uses' => 'App\\Http\\Controllers\\Front\\AboutController@index',
        'controller' => 'App\\Http\\Controllers\\Front\\AboutController@index',
        'namespace' => NULL,
        'prefix' => '/about',
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
      'withTrashed' => false,
    ),
    'front.about.club' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about/club/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\AboutController@club_list',
        'controller' => 'App\\Http\\Controllers\\Front\\AboutController@club_list',
        'namespace' => NULL,
        'prefix' => '/about',
        'where' => 
        array (
        ),
        'as' => 'front.about.club',
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
      'withTrashed' => false,
    ),
    'generated::u0ZSRMztGkJT5P6H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about/club-data/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\AboutController@club_data',
        'controller' => 'App\\Http\\Controllers\\Front\\AboutController@club_data',
        'namespace' => NULL,
        'prefix' => '/about',
        'where' => 
        array (
        ),
        'as' => 'generated::u0ZSRMztGkJT5P6H',
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
      'withTrashed' => false,
    ),
    'generated::1KFB1W7TtD74kg64' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'organizations/committee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Organizations\\CommitteeController@index',
        'controller' => 'App\\Http\\Controllers\\Front\\Organizations\\CommitteeController@index',
        'namespace' => NULL,
        'prefix' => '/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::1KFB1W7TtD74kg64',
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
      'withTrashed' => false,
    ),
    'generated::XOUgpkYFkOrLx9rb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'organizations/committee-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Organizations\\CommitteeController@committee_data',
        'controller' => 'App\\Http\\Controllers\\Front\\Organizations\\CommitteeController@committee_data',
        'namespace' => NULL,
        'prefix' => '/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::XOUgpkYFkOrLx9rb',
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
      'withTrashed' => false,
    ),
    'generated::fiDFWD3bOIUrgFVj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'organizations/agenda-data/{category?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Organizations\\AgendaController@agenda_data',
        'controller' => 'App\\Http\\Controllers\\Front\\Organizations\\AgendaController@agenda_data',
        'namespace' => NULL,
        'prefix' => '/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::fiDFWD3bOIUrgFVj',
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
      'withTrashed' => false,
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
        'prefix' => '',
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
      'withTrashed' => false,
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
        'prefix' => '',
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
      'withTrashed' => false,
    ),
    'generated::mK69eJGcU9lrvvnI' => 
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
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mK69eJGcU9lrvvnI',
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
      'withTrashed' => false,
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
        'prefix' => '',
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
      'withTrashed' => false,
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
        'prefix' => '',
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
      'withTrashed' => false,
    ),
    'generated::meCyGjYYKcccmbHL' => 
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
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::meCyGjYYKcccmbHL',
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
      'withTrashed' => false,
    ),
    'generated::5RhgljuR7hKdZqbM' => 
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
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\KISController@index',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\KISController@index',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'generated::5RhgljuR7hKdZqbM',
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
      'withTrashed' => false,
    ),
    'kis.registration.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'registration/kis/form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\KISController@getForm',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\KISController@getForm',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'kis.registration.form',
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
      'withTrashed' => false,
    ),
    'kis.registration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'registration/kis/form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\KISController@store',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\KISController@store',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'kis.registration.store',
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
      'withTrashed' => false,
    ),
    'generated::PxdTfrrVMtyoCMEK' => 
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
        'as' => 'generated::PxdTfrrVMtyoCMEK',
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
      'withTrashed' => false,
    ),
    'club.registration.index' => 
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
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\ClubController@index',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\ClubController@index',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'club.registration.index',
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
      'withTrashed' => false,
    ),
    'club.registration.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'registration/club/form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\ClubController@getForm',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\ClubController@getForm',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'club.registration.form',
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
      'withTrashed' => false,
    ),
    'club.registration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'registration/club/form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\ClubController@store',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\ClubController@store',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'club.registration.store',
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
      'withTrashed' => false,
    ),
    'eo.registration.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'registration/eo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\EOController@index',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\EOController@index',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'eo.registration.index',
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
      'withTrashed' => false,
    ),
    'eo.registration.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'registration/eo/form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\EOController@getForm',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\EOController@getForm',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'eo.registration.form',
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
      'withTrashed' => false,
    ),
    'eo.registration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'registration/eo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\Registrations\\EOController@store',
        'controller' => 'App\\Http\\Controllers\\Front\\Registrations\\EOController@store',
        'namespace' => NULL,
        'prefix' => '/registration',
        'where' => 
        array (
        ),
        'as' => 'eo.registration.store',
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
      'withTrashed' => false,
    ),
    'generated::dOi6QptMgPnfGjXR' => 
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
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dOi6QptMgPnfGjXR',
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
      'withTrashed' => false,
    ),
    'generated::q5pvf0ldQ3cSWwjb' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:251:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:33:"fn () => \\redirect(\'admin/login\')";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000404a964a00000000703d6246";}";s:4:"hash";s:44:"BcbnKGSLxSJy/BhhiU+h4QyrG0eMcuLozPdQkS3iONM=";}}',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::q5pvf0ldQ3cSWwjb',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::5Y1rKCzf8lmlcZHK' => 
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
        'as' => 'generated::5Y1rKCzf8lmlcZHK',
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
      'withTrashed' => false,
    ),
    'generated::Plv4yGezUbQeDb7z' => 
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
        'as' => 'generated::Plv4yGezUbQeDb7z',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::JdbXYFCxpxN9JBCE' => 
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
        'as' => 'generated::JdbXYFCxpxN9JBCE',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::SQvlCRzVgowuJwSk' => 
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
        'as' => 'generated::SQvlCRzVgowuJwSk',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::KA94xmOYANBgbL3q' => 
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
        'as' => 'generated::KA94xmOYANBgbL3q',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::UeagfBjDcTNQDJzh' => 
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
        'as' => 'generated::UeagfBjDcTNQDJzh',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::jdFSsWxyC7hS2By2' => 
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
        'as' => 'generated::jdFSsWxyC7hS2By2',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::6EQW6DSCyjs3Ohn5' => 
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
        'as' => 'generated::6EQW6DSCyjs3Ohn5',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::ROaITfJlSycorazE' => 
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
        'as' => 'generated::ROaITfJlSycorazE',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::E7piZ5IL18ulujv9' => 
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
        'as' => 'generated::E7piZ5IL18ulujv9',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::cUTvvJBnkykwkPpa' => 
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
        'as' => 'generated::cUTvvJBnkykwkPpa',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::iVNGYs9ALB7B57vj' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@metadata',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@metadata',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::iVNGYs9ALB7B57vj',
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
      'withTrashed' => false,
    ),
    'generated::pCud6XvVMlpEypdZ' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@jumbotron',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@jumbotron',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::pCud6XvVMlpEypdZ',
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
      'withTrashed' => false,
    ),
    'generated::VCrBn0jQv2CW9W9K' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@news',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@news',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::VCrBn0jQv2CW9W9K',
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
      'withTrashed' => false,
    ),
    'generated::UateWhypKhCXbYEa' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@events',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@events',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::UateWhypKhCXbYEa',
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
      'withTrashed' => false,
    ),
    'generated::VO8T3t8TDag2U8vc' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@about',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@about',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::VO8T3t8TDag2U8vc',
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
      'withTrashed' => false,
    ),
    'generated::ctIBsglUeRFp52OD' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@gallery',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@gallery',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::ctIBsglUeRFp52OD',
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
      'withTrashed' => false,
    ),
    'generated::EUmCxoB4CdLnTI2R' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@committee',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@committee',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::EUmCxoB4CdLnTI2R',
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
      'withTrashed' => false,
    ),
    'generated::hROWzGv6dvTJWgqM' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@newsletter',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageHomeController@newsletter',
        'namespace' => NULL,
        'prefix' => 'admin/page/home',
        'where' => 
        array (
        ),
        'as' => 'generated::hROWzGv6dvTJWgqM',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::uiHxJEepBJp34BqT' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageAboutController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageAboutController@update',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'generated::uiHxJEepBJp34BqT',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::QjtbiD8LAXKodvAf' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageBlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageBlogController@update',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'generated::QjtbiD8LAXKodvAf',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::w142qaKkwsrmPkxW' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageEventController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageEventController@update',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'generated::w142qaKkwsrmPkxW',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::B67glECKJsyY6QeY' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageTeamController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageTeamController@update',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'generated::B67glECKJsyY6QeY',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::K3jTz6mp6IpbbcJM' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageGalleryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageGalleryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/page',
        'where' => 
        array (
        ),
        'as' => 'generated::K3jTz6mp6IpbbcJM',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::6G83k3ANkOszahsu' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/news',
        'where' => 
        array (
        ),
        'as' => 'generated::6G83k3ANkOszahsu',
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
      'withTrashed' => false,
    ),
    'generated::CPAc31J5yLJQeuFu' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/news',
        'where' => 
        array (
        ),
        'as' => 'generated::CPAc31J5yLJQeuFu',
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
      'withTrashed' => false,
    ),
    'generated::4NBbrFcaBM3ZrkFw' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@update',
        'namespace' => NULL,
        'prefix' => 'admin/news',
        'where' => 
        array (
        ),
        'as' => 'generated::4NBbrFcaBM3ZrkFw',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::ANZHRq2WkCr9G78P' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/news/category',
        'where' => 
        array (
        ),
        'as' => 'generated::ANZHRq2WkCr9G78P',
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
      'withTrashed' => false,
    ),
    'generated::9ABrWif19NTAx7yn' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/news/category',
        'where' => 
        array (
        ),
        'as' => 'generated::9ABrWif19NTAx7yn',
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
      'withTrashed' => false,
    ),
    'generated::RtIpw65dhTk3WVpv' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/news/category',
        'where' => 
        array (
        ),
        'as' => 'generated::RtIpw65dhTk3WVpv',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::cqHBvv06yKDQ1P3T' => 
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
        'as' => 'generated::cqHBvv06yKDQ1P3T',
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
      'withTrashed' => false,
    ),
    'generated::bmTfhEhZYaQqTRPr' => 
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
        'as' => 'generated::bmTfhEhZYaQqTRPr',
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
      'withTrashed' => false,
    ),
    'generated::envVBfnVgNIsZb41' => 
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
        'as' => 'generated::envVBfnVgNIsZb41',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::d46pDf4IUkiZBa9W' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'generated::d46pDf4IUkiZBa9W',
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
      'withTrashed' => false,
    ),
    'generated::f3dm81QoWzZeolJt' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'generated::f3dm81QoWzZeolJt',
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
      'withTrashed' => false,
    ),
    'generated::ZXmm6PSI1rq0iArs' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@update',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'generated::ZXmm6PSI1rq0iArs',
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
      'withTrashed' => false,
    ),
    'generated::fZeNy27mvShcvmGN' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@gallerysection',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@gallerysection',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'generated::fZeNy27mvShcvmGN',
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
      'withTrashed' => false,
    ),
    'generated::FZlz2aiDQlrOnu2C' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@gallerydelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventController@gallerydelete',
        'namespace' => NULL,
        'prefix' => 'admin/event',
        'where' => 
        array (
        ),
        'as' => 'generated::FZlz2aiDQlrOnu2C',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'admin.event.category.index' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'admin.event.category.index',
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
      'withTrashed' => false,
    ),
    'admin.event.category.create' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'admin.event.category.create',
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
      'withTrashed' => false,
    ),
    'admin.event.category.store' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'admin.event.category.store',
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
      'withTrashed' => false,
    ),
    'generated::kXP0KYDxGfcEvkdv' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'generated::kXP0KYDxGfcEvkdv',
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
      'withTrashed' => false,
    ),
    'generated::tx55haZK11r0KwWl' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'generated::tx55haZK11r0KwWl',
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
      'withTrashed' => false,
    ),
    'generated::65YF8Nibe7HFIrYU' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/event/category',
        'where' => 
        array (
        ),
        'as' => 'generated::65YF8Nibe7HFIrYU',
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
      'withTrashed' => false,
    ),
    'admin.event.sport.index' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@index',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'admin.event.sport.index',
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
      'withTrashed' => false,
    ),
    'admin.event.sport.create' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@create',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'admin.event.sport.create',
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
      'withTrashed' => false,
    ),
    'admin.event.sport.store' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@store',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'admin.event.sport.store',
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
      'withTrashed' => false,
    ),
    'generated::WvSH7wX4eNKCWXY3' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'generated::WvSH7wX4eNKCWXY3',
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
      'withTrashed' => false,
    ),
    'generated::Vj68W2VhAFxtqk5T' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'generated::Vj68W2VhAFxtqk5T',
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
      'withTrashed' => false,
    ),
    'generated::uX8GBX0uCBcFrgBZ' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSportController@update',
        'namespace' => NULL,
        'prefix' => 'admin/event/sport',
        'where' => 
        array (
        ),
        'as' => 'generated::uX8GBX0uCBcFrgBZ',
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
      'withTrashed' => false,
    ),
    'admin.event.sponsor.index' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@index',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'admin.event.sponsor.index',
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
      'withTrashed' => false,
    ),
    'admin.event.sponsor.create' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@create',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'admin.event.sponsor.create',
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
      'withTrashed' => false,
    ),
    'admin.event.sponsor.store' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@store',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'admin.event.sponsor.store',
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
      'withTrashed' => false,
    ),
    'generated::c3PiFExHIpmQJJPN' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'generated::c3PiFExHIpmQJJPN',
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
      'withTrashed' => false,
    ),
    'generated::FmgiSD4NvrTWvXeH' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'generated::FmgiSD4NvrTWvXeH',
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
      'withTrashed' => false,
    ),
    'generated::58LDWgcYcTvwemoz' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Event\\EventSponsorController@update',
        'namespace' => NULL,
        'prefix' => 'admin/event/sponsor',
        'where' => 
        array (
        ),
        'as' => 'generated::58LDWgcYcTvwemoz',
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
      'withTrashed' => false,
    ),
    'admin.galleries.photo.index' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@index',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.photo.index',
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
      'withTrashed' => false,
    ),
    'admin.galleries.photo.create' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@create',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.photo.create',
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
      'withTrashed' => false,
    ),
    'admin.galleries.photo.store' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@store',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.photo.store',
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
      'withTrashed' => false,
    ),
    'admin.galleries.photo.delete' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.photo.delete',
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
      'withTrashed' => false,
    ),
    'admin.galleries.photo.edit' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.photo.edit',
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
      'withTrashed' => false,
    ),
    'admin.galleries.photo.update' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\PhotoController@update',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/photo',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.photo.update',
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
      'withTrashed' => false,
    ),
    'admin.galleries.video.index' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@index',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.video.index',
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
      'withTrashed' => false,
    ),
    'admin.galleries.video.create' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@create',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.video.create',
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
      'withTrashed' => false,
    ),
    'admin.galleries.video.store' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@store',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.video.store',
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
      'withTrashed' => false,
    ),
    'admin.galleries.video.delete' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.video.delete',
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
      'withTrashed' => false,
    ),
    'admin.galleries.video.edit' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.video.edit',
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
      'withTrashed' => false,
    ),
    'admin.galleries.video.update' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\VideoController@update',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/video',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.video.update',
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
      'withTrashed' => false,
    ),
    'admin.galleries.category.index' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.category.index',
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
      'withTrashed' => false,
    ),
    'admin.galleries.category.create' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.category.create',
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
      'withTrashed' => false,
    ),
    'admin.galleries.category.store' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.category.store',
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
      'withTrashed' => false,
    ),
    'admin.galleries.category.delete' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.category.delete',
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
      'withTrashed' => false,
    ),
    'admin.galleries.category.edit' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.category.edit',
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
      'withTrashed' => false,
    ),
    'admin.galleries.category.update' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Gallery\\GalleryCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/gallery/category',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.category.update',
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
      'withTrashed' => false,
    ),
    'admin.organizations.committee.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/committee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.committee.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@index',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.committee.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/committee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.committee.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@create',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.committee.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/organizations/committee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.committee.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@store',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.committee.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/committee/{committee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.committee.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.committee.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/organizations/committee/{committee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.committee.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@update',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.committee.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/organizations/committee/{committee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.committee.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\CommitteeController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.greeting.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/greetings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.greeting.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@index',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.greeting.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/greetings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.greeting.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@create',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.greeting.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/organizations/greetings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.greeting.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@store',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.greeting.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/greetings/{greeting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.greeting.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.greeting.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/organizations/greetings/{greeting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.greeting.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@update',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.greeting.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/organizations/greetings/{greeting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.greeting.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\GreetingController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.agenda.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/agenda',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.agenda.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@index',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.agenda.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/agenda/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.agenda.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@create',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.agenda.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/organizations/agenda',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.agenda.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@store',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.agenda.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/agenda/{agenda}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.agenda.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.agenda.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/organizations/agenda/{agenda}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.agenda.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@update',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.agenda.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/organizations/agenda/{agenda}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.agenda.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\AgendaController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.info.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.info.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@index',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.info.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/info/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.info.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@create',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.info.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/organizations/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.info.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@store',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.info.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/organizations/info/{info}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.info.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.info.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/organizations/info/{info}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.info.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@update',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.organizations.info.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/organizations/info/{info}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.organizations.info.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Organizations\\InfoController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/organizations',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.communities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/communities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.communities.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.communities.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/communities/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.communities.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.communities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/communities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.communities.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.communities.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/communities/{community}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.communities.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.communities.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/communities/{community}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.communities.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.communities.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/communities/{community}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.communities.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunitiesController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::ZKUxTy7ClnmVP3pJ' => 
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
        'as' => 'generated::ZKUxTy7ClnmVP3pJ',
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
      'withTrashed' => false,
    ),
    'generated::YD1iXoc7e8VuwSdl' => 
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
        'as' => 'generated::YD1iXoc7e8VuwSdl',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::HCMfZ4tylS4lm3Ni' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/social-media',
        'where' => 
        array (
        ),
        'as' => 'generated::HCMfZ4tylS4lm3Ni',
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
      'withTrashed' => false,
    ),
    'generated::BBShyJpUhAkglfDj' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/social-media',
        'where' => 
        array (
        ),
        'as' => 'generated::BBShyJpUhAkglfDj',
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
      'withTrashed' => false,
    ),
    'generated::8TdfIBJ3mIl2JFpp' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaItemController@update',
        'namespace' => NULL,
        'prefix' => 'admin/social-media',
        'where' => 
        array (
        ),
        'as' => 'generated::8TdfIBJ3mIl2JFpp',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::dUf4eTFOUjRkFR2L' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/subscriber',
        'where' => 
        array (
        ),
        'as' => 'generated::dUf4eTFOUjRkFR2L',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::xBnPvB0eWlU5xCbY' => 
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
        'as' => 'generated::xBnPvB0eWlU5xCbY',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::qCSzr5aZ1KUDg9oB' => 
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
        'as' => 'generated::qCSzr5aZ1KUDg9oB',
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
      'withTrashed' => false,
    ),
    'generated::JfIKSim0v16vOopp' => 
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
        'as' => 'generated::JfIKSim0v16vOopp',
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
      'withTrashed' => false,
    ),
    'generated::x2E3Bk0YpMtVF9Oi' => 
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
        'as' => 'generated::x2E3Bk0YpMtVF9Oi',
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
      'withTrashed' => false,
    ),
    'generated::aw6xMQVo9kZgQQGA' => 
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
        'as' => 'generated::aw6xMQVo9kZgQQGA',
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
      'withTrashed' => false,
    ),
    'generated::dVrkTlpzS93HLtpu' => 
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
        'as' => 'generated::dVrkTlpzS93HLtpu',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'generated::CQrGncoTpBXuNKPn' => 
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
        'as' => 'generated::CQrGncoTpBXuNKPn',
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
      'withTrashed' => false,
    ),
    'generated::Usw1jXsxZPixDoGd' => 
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
        'as' => 'generated::Usw1jXsxZPixDoGd',
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
      'withTrashed' => false,
    ),
    'generated::2YZaGHirw4Tds8LW' => 
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
        'as' => 'generated::2YZaGHirw4Tds8LW',
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
      'withTrashed' => false,
    ),
    'generated::guqTNgjwyoSyYOOn' => 
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
        'as' => 'generated::guqTNgjwyoSyYOOn',
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
      'withTrashed' => false,
    ),
    'generated::2osMtQ9qDwcqsMIN' => 
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
        'as' => 'generated::2osMtQ9qDwcqsMIN',
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
      'withTrashed' => false,
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Registrations\\KisController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Registrations\\KisController@index',
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
      'withTrashed' => false,
    ),
    'generated::gjnX4I6Bhb9bvTim' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration/kis/registrant/{index}/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Registrations\\KisController@generatePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\Registrations\\KisController@generatePDF',
        'namespace' => NULL,
        'prefix' => 'admin/registration',
        'where' => 
        array (
        ),
        'as' => 'generated::gjnX4I6Bhb9bvTim',
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
      'withTrashed' => false,
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Registrations\\ClubController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Registrations\\ClubController@index',
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
      'withTrashed' => false,
    ),
    'generated::MpvyZSD2s1zbCjeV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration/club/registrant/{index}/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Registrations\\ClubController@generatePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\Registrations\\ClubController@generatePDF',
        'namespace' => NULL,
        'prefix' => 'admin/registration',
        'where' => 
        array (
        ),
        'as' => 'generated::MpvyZSD2s1zbCjeV',
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
      'withTrashed' => false,
    ),
    'admin.register.event' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration/event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Registrations\\EventOrganizerRegistrationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Registrations\\EventOrganizerRegistrationController@index',
        'namespace' => NULL,
        'prefix' => 'admin/registration',
        'where' => 
        array (
        ),
        'as' => 'admin.register.event',
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
      'withTrashed' => false,
    ),
    'generated::HDyWUBwJcTcX2kR0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration/event/registrant/{index}/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Registrations\\EventOrganizerRegistrationController@generatePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\Registrations\\EventOrganizerRegistrationController@generatePDF',
        'namespace' => NULL,
        'prefix' => 'admin/registration',
        'where' => 
        array (
        ),
        'as' => 'generated::HDyWUBwJcTcX2kR0',
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
      'withTrashed' => false,
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
      'withTrashed' => false,
    ),
    'admin.advertisement.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.advertisement.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.advertisement.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.advertisement.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.advertisement.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.advertisement.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.advertisement.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement/{advertisement}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.advertisement.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.advertisement.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/advertisement/{advertisement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.advertisement.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
    'admin.advertisement.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/advertisement/{advertisement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'as' => 'admin.advertisement.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
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
      'withTrashed' => false,
    ),
  ),
)
);
