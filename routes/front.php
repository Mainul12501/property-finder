<?php

use Illuminate\Support\Facades\Route;

//static page views
Route::get('/', 'FrontPageController@home')->name('home-page');
Route::get('/buy/property-for-sale', 'FrontPageController@buyPage')->name('buy-page');
Route::get('/rent/property-for-rent', 'FrontPageController@rent')->name('rent-page');
Route::get('/commercial-rent/property-for-rent', 'FrontPageController@commercialRent')->name('commercial-rent-page');
Route::get('/new-projects', 'FrontPageController@newProjects')->name('new-projects-page');
Route::get('/find-company-and-agents', 'FrontPageController@findCompanyAgents')->name('find-company-and-agents-page');
Route::get('/house-prices', 'FrontPageController@housesPrice')->name('house-prices-page');
Route::get('/rent-vs-buy-calculator', 'FrontPageController@rentBuyCalculator')->name('rent-vs-buy-calculator');
Route::get('/blog', 'FrontPageController@blog')->name('blog-page');
Route::get('/community-guide', 'FrontPageController@communityGuide')->name('community-guide-page');
Route::get('/renter-blogs', 'FrontPageController@renterBlog')->name('renter-blog-page');
Route::get('/buyer-blogs', 'FrontPageController@buyerBlog')->name('buyer-blog-page');
Route::get('/building-reviews', 'FrontPageController@buildingReviews')->name('building-reviews-page');
Route::get('/property/{id}/{slug?}', 'FrontPageController@propertyDetails')->name('property-details'); // property-details page
Route::get('/blog/{id}/{slug?}', 'BlogPageController@blogDetails')->name('blog-details'); // blog-details page
Route::get('/community-blog/{id}/{slug?}', 'BlogPageController@communityBlogDetails')->name('community-blog-details'); // community-blog-details page
Route::get('/renter-blog/{id}/{slug?}', 'BlogPageController@renterBlogDetails')->name('renter-blog-details'); // renter-blog-details page
Route::get('/buyer-blog/{id}/{slug?}', 'BlogPageController@buyerBlogDetails')->name('buyer-blog-details'); // renter-blog-details page
Route::get('/company/{id}/{name?}', 'AgentCompanyController@companyDetails')->name('company-details'); // company-details page
Route::get('/agent/{id}/{name?}', 'AgentCompanyController@agentDetails')->name('agent-details'); // agent-details page
Route::post('/blog-search', 'BlogPageController@searchBlog')->name('search-blog'); // blog-search page
Route::post('/community-blog-search', 'BlogPageController@communitysearchBlog')->name('search-community-blog'); // community-blog-search page
Route::post('/renter-blog-search', 'BlogPageController@rentersearchBlog')->name('search-renter-blog'); // renter-blog-search page
Route::post('/buyer-blog-search', 'BlogPageController@buyersearchBlog')->name('search-buyer-blog'); // buyer-blog-search page
Route::post('/short-properties', 'BlogPageController@shortProperties')->name('short-properties'); // short properties
Route::get('/search-results', 'SearchController@homeSearch')->name('home-page-search'); // search home
Route::get('/search-agent-company', 'SearchController@agentSearch')->name('agent-company-search'); // search agent
Route::get('/search-project', 'SearchController@projectSearch')->name('project-search'); // search project

Route::get('/language-change/{name}', 'FrontPageController@changeLanguage')->name('language-change'); // Language Change

Route::get('/pass', function (){
//    $client = new \GuzzleHttp\Client();
//    $endpoint   = 'http://api.positionstack.com/v1/forward';
//    $access_key = 'ba578946c9f29b8c64ae391f903d5dc1';
//    $query = 'dhaka';
//    $limit = 1;
//    $response = $client->request('GET', $endpoint, ['query' => [
//        'access_key' => $access_key,
//        'query' => $query,
//        'limit' => $limit,
//    ]]);
//     $statusCode = $response->getStatusCode();
//     $content = json_decode($response->getBody(), true);


//    return json_decode(json_encode($content));
//    return $content->data->latitude;
//    return $content['data'][0];
//    return $content['data'][0]['longitude'];
//    return print_r($content);
    return request('buyer-blogs');
    return bcrypt('12345678');
});

