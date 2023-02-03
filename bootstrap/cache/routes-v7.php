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
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
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
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
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
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
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
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
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
<<<<<<< HEAD
      '/api/hero' => 
=======
      '/api/users' => 
>>>>>>> dev
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'hero.index',
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
            '_route' => 'hero.store',
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
      '/api/link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'link.index',
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
            '_route' => 'link.store',
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
      '/api/footer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer.index',
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
            '_route' => 'footer.store',
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
      '/api/footers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WsI679hWFAsuRgI1',
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
      '/api/links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WSIHLlujg8bOKxor',
=======
            '_route' => 'users.index',
>>>>>>> dev
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
            '_route' => 'users.store',
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
      '/api/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PttYJNItyBEOmFS5',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::O5RAXJSQxHVQ1HHM',
=======
            '_route' => 'generated::gyQINi6fJzBqENPR',
>>>>>>> dev
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
<<<<<<< HEAD
      0 => '{^(?|/api/(?|hero/([^/]++)(?|(*:31))|link/([^/]++)(?|(*:55))|footer/([^/]++)(?|(*:81))))/?$}sDu',
    ),
    3 => 
    array (
      31 => 
=======
      0 => '{^(?|/api/users/([^/]++)(?|(*:29)))/?$}sDu',
    ),
    3 => 
    array (
      29 => 
>>>>>>> dev
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'hero.show',
          ),
          1 => 
          array (
            0 => 'hero',
=======
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
>>>>>>> dev
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
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'hero.update',
          ),
          1 => 
          array (
            0 => 'hero',
=======
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
>>>>>>> dev
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
        2 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'hero.destroy',
          ),
          1 => 
          array (
            0 => 'hero',
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
      55 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'link.show',
          ),
          1 => 
          array (
            0 => 'link',
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
          0 => 
          array (
            '_route' => 'link.update',
          ),
          1 => 
          array (
            0 => 'link',
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
        2 => 
        array (
          0 => 
          array (
            '_route' => 'link.destroy',
          ),
          1 => 
          array (
            0 => 'link',
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
      81 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer.show',
          ),
          1 => 
          array (
            0 => 'footer',
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
          0 => 
          array (
            '_route' => 'footer.update',
          ),
          1 => 
          array (
            0 => 'footer',
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
        2 => 
        array (
          0 => 
          array (
            '_route' => 'footer.destroy',
          ),
          1 => 
          array (
            0 => 'footer',
=======
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
>>>>>>> dev
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
        3 => 
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
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
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
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
<<<<<<< HEAD
    'hero.index' => 
=======
    'users.index' => 
>>>>>>> dev
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
<<<<<<< HEAD
      'uri' => 'api/hero',
=======
      'uri' => 'api/users',
>>>>>>> dev
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
<<<<<<< HEAD
        'as' => 'hero.index',
        'uses' => 'App\\Http\\Controllers\\API\\Hero\\HeroController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Hero\\HeroController@index',
=======
        'as' => 'users.index',
        'uses' => 'App\\Http\\Controllers\\API\\User\\Users@index',
        'controller' => 'App\\Http\\Controllers\\API\\User\\Users@index',
>>>>>>> dev
        'namespace' => NULL,
        'prefix' => 'api',
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
<<<<<<< HEAD
    'hero.store' => 
=======
    'users.store' => 
>>>>>>> dev
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
<<<<<<< HEAD
      'uri' => 'api/hero',
=======
      'uri' => 'api/users',
>>>>>>> dev
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
<<<<<<< HEAD
        'as' => 'hero.store',
        'uses' => 'App\\Http\\Controllers\\API\\Hero\\HeroController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Hero\\HeroController@store',
=======
        'as' => 'users.store',
        'uses' => 'App\\Http\\Controllers\\API\\User\\Users@store',
        'controller' => 'App\\Http\\Controllers\\API\\User\\Users@store',
>>>>>>> dev
        'namespace' => NULL,
        'prefix' => 'api',
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
<<<<<<< HEAD
    'hero.show' => 
=======
    'users.show' => 
>>>>>>> dev
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
<<<<<<< HEAD
      'uri' => 'api/hero/{hero}',
=======
      'uri' => 'api/users/{user}',
>>>>>>> dev
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
<<<<<<< HEAD
        'as' => 'hero.show',
        'uses' => 'App\\Http\\Controllers\\API\\Hero\\HeroController@show',
        'controller' => 'App\\Http\\Controllers\\API\\Hero\\HeroController@show',
=======
        'as' => 'users.show',
        'uses' => 'App\\Http\\Controllers\\API\\User\\Users@show',
        'controller' => 'App\\Http\\Controllers\\API\\User\\Users@show',
>>>>>>> dev
        'namespace' => NULL,
        'prefix' => 'api',
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
<<<<<<< HEAD
    'hero.update' => 
=======
    'users.update' => 
>>>>>>> dev
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
<<<<<<< HEAD
      'uri' => 'api/hero/{hero}',
=======
      'uri' => 'api/users/{user}',
>>>>>>> dev
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
<<<<<<< HEAD
        'as' => 'hero.update',
        'uses' => 'App\\Http\\Controllers\\API\\Hero\\HeroController@update',
        'controller' => 'App\\Http\\Controllers\\API\\Hero\\HeroController@update',
=======
        'as' => 'users.update',
        'uses' => 'App\\Http\\Controllers\\API\\User\\Users@update',
        'controller' => 'App\\Http\\Controllers\\API\\User\\Users@update',
>>>>>>> dev
        'namespace' => NULL,
        'prefix' => 'api',
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
<<<<<<< HEAD
    'hero.destroy' => 
=======
    'users.destroy' => 
>>>>>>> dev
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
<<<<<<< HEAD
      'uri' => 'api/hero/{hero}',
=======
      'uri' => 'api/users/{user}',
>>>>>>> dev
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
<<<<<<< HEAD
        'as' => 'hero.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\Hero\\HeroController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Hero\\HeroController@destroy',
=======
        'as' => 'users.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\User\\Users@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\User\\Users@destroy',
>>>>>>> dev
        'namespace' => NULL,
        'prefix' => 'api',
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
<<<<<<< HEAD
    'link.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'link.index',
        'uses' => 'App\\Http\\Controllers\\API\\Link\\LinkController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Link\\LinkController@index',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'link.store' => 
=======
    'generated::PttYJNItyBEOmFS5' => 
>>>>>>> dev
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
<<<<<<< HEAD
      'uri' => 'api/link',
=======
      'uri' => 'api/user/login',
>>>>>>> dev
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
<<<<<<< HEAD
        'as' => 'link.store',
        'uses' => 'App\\Http\\Controllers\\API\\Link\\LinkController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Link\\LinkController@store',
=======
        'uses' => 'App\\Http\\Controllers\\API\\User\\Login@__invoke',
        'controller' => 'App\\Http\\Controllers\\API\\User\\Login',
>>>>>>> dev
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
=======
        'as' => 'generated::PttYJNItyBEOmFS5',
>>>>>>> dev
      ),
      'fallback' => false,
      'defaults' => 
      array (
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
<<<<<<< HEAD
    'link.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/link/{link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'link.show',
        'uses' => 'App\\Http\\Controllers\\API\\Link\\LinkController@show',
        'controller' => 'App\\Http\\Controllers\\API\\Link\\LinkController@show',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'link.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/link/{link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'link.update',
        'uses' => 'App\\Http\\Controllers\\API\\Link\\LinkController@update',
        'controller' => 'App\\Http\\Controllers\\API\\Link\\LinkController@update',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'link.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/link/{link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'link.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\Link\\LinkController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Link\\LinkController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'footer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'footer.index',
        'uses' => 'App\\Http\\Controllers\\API\\Footer\\FooterController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Footer\\FooterController@index',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'footer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'footer.store',
        'uses' => 'App\\Http\\Controllers\\API\\Footer\\FooterController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Footer\\FooterController@store',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'footer.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/footer/{footer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'footer.show',
        'uses' => 'App\\Http\\Controllers\\API\\Footer\\FooterController@show',
        'controller' => 'App\\Http\\Controllers\\API\\Footer\\FooterController@show',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'footer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/footer/{footer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'footer.update',
        'uses' => 'App\\Http\\Controllers\\API\\Footer\\FooterController@update',
        'controller' => 'App\\Http\\Controllers\\API\\Footer\\FooterController@update',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'footer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/footer/{footer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'footer.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\Footer\\FooterController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Footer\\FooterController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'generated::WsI679hWFAsuRgI1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/footers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Footer\\FootersController@__invoke',
        'controller' => 'App\\Http\\Controllers\\API\\Footer\\FootersController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WsI679hWFAsuRgI1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
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
    'generated::WSIHLlujg8bOKxor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Link\\LinksController@__invoke',
        'controller' => 'App\\Http\\Controllers\\API\\Link\\LinksController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WSIHLlujg8bOKxor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
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
    'generated::O5RAXJSQxHVQ1HHM' => 
=======
    'generated::gyQINi6fJzBqENPR' => 
>>>>>>> dev
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:262:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
<<<<<<< HEAD
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008b10000000000000000";}";s:4:"hash";s:44:"6wyAc6Kv+w7N033yrAP1GI316ifd46IJnAffieyLbsU=";}}',
=======
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004d70000000000000000";}";s:4:"hash";s:44:"eWnoP5eUZ15kMgXUHpNZRIbaclTpt+sRDn4DjbZOp24=";}}',
>>>>>>> dev
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::O5RAXJSQxHVQ1HHM',
=======
        'as' => 'generated::gyQINi6fJzBqENPR',
>>>>>>> dev
      ),
      'fallback' => false,
      'defaults' => 
      array (
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
