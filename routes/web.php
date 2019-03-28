<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/categories/test', ['uses'=>'CategoryController@index']);
$router->get('/categories', ['uses'=>'CategoryController@testing']);
$router->get('/subcategories', ['uses'=>'SubCategoryController@index']);
$router->get('/subcategories/{catid}', ['uses'=>'SubCategoryController@getSubCategoriesByCatId']);
$router->post('/categories', ['uses'=>'CategoryController@store']);
$router->get('/question/{categoryid}', ['uses'=>'QuestionController@getByCategory']);
$router->get('/questions/{subcatid}/{level}', ['uses'=>'QuestionController@getBySubCategory']);