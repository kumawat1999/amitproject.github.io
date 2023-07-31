<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/Program1', 'Program1::index');
$routes->get('/Amitkumawat', 'Mynewcurd::Project');
$routes->get('/MyModal', 'MyModal::index');
$routes->get('/Test', 'TestNew::index');
$routes->get('/Model', 'Modal::index');
$routes->get('/Frist', 'FristCon::index');
$routes->get('/FristCon', 'FristCon::index');

$routes->get('/validation', 'MyTest::index');
$routes->get('/validation1', 'MyTest::form1');

$routes->get('/indexx', 'Contact::index');
$routes->post('/Contact', 'Contact::create');

// my Curd Routes demmo
$routes->get('/my_form', 'Crud::index');
$routes->post('/formsubmit', 'Crud::formsubmit');


// my Curd Routes all 
$routes->get('/CurdOne', 'CurdOne::index');
$routes->post('/CurdOneSubmit', 'CurdOne::validations');



// view file name=> validation/CurdAjax
// model file name=> 

$routes->get('/CurdAjax', 'CurdAjaxCont::index');
$routes->post('/CurdAjaxSubmit', 'CurdAjaxCont::validations');




// view file name => validation/CurdTo
// model file name=> CurdToModel
// Contr file name=> CurdToCont
$routes->get('/CurdTo', 'CurdToCont::index');
$routes->post('/CurdformAction', 'CurdToCont::CurdformAction');



// view file name=> validation/CurdToAjax
// model file name=> CurdToAjaxModal
// Contr file name=> CurdToAjax
$routes->get('/CurdToAjax', 'CurdToAjax::index');
$routes->post('/CurdToAction', 'CurdToAjax::CurdToAction');

$routes->get('/MydataForm', 'CurdToAjax::Mydata');  
$routes->post('/DeleteAction', 'CurdToAjax::DeleteQuery');

$routes->get('/UpdateData', 'CurdToAjax::UpdateFunction');



//view file name => validation/CurdThree
//Model file name=> CurdThree
// contr file name=> CurdThreeCont
$routes->get('/CurdThree', 'CurdthreeCont::index');
$routes->post('/myFormThree', 'CurdthreeCont::curdthreeaction');
$routes->get('/CurdThreeshow', 'CurdthreeCont::CurdThreeshowdata');



//view file name => validation/CurdThreeAjaxxx
//Model file name=> CurdThreeAjax
// contr file name=> CurdThreeAjax
$routes->get('/CurdThreeAjax', 'CurdThreeAjaxCont::index');
$routes->post('/CurdThreeAjaxAction', 'CurdThreeAjaxCont::myFormaction');

$routes->get('/printdata', 'CurdThreeAjaxCont::printdata');  // table print 
$routes->post('/DeleteAction', 'CurdThreeAjaxCont::DeleteData');  // delete 

$routes->get('/EditAction', 'CurdThreeAjaxCont::EditFormThree'); // edit



// view file name => validation/validationV
// model file name=> validation 
// contro file name => ValidationCon
$routes->get('/myvalidaton', 'ValidationCon::index');
$routes->post('/validationaction', 'ValidationCon::MyValidations');
$routes->get('/Vtable', 'ValidationCon::insertdata');



//view file name=> validation/AjaxValidationView 
// model file name=> AjaxValidation
// Contr file name=> AjaxValidationCon
$routes->get('/AjaxVlidatonView', 'AjaxValidationCon::index');    // ok 
$routes->post('/MyvalidationAction', 'AjaxValidationCon::validatioerrr');








/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
