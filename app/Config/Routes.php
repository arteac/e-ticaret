<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Ana sayfa yönlendirmesi
$routes->get('/', 'Home::index');  // Ana sayfayı HomeController'ın index metoduna yönlendirir

// Ürünler sayfası yönlendirmesi
$routes->get('/iletisim', 'İletisimController::index');  // İletişim sayfası için İletişimController'ın index metoduna yönlendirir
$routes->get('hesap', 'HesapController::index');  // Hesap sayfasını HesapController'ın index metoduna yönlendirir
$routes->get('/', 'Home::index');  // Ana sayfayı HomeController'ın index metoduna yönlendirir
$routes->get('/iletisim', 'Home::iletisim');  // İletişim sayfasını HomeController'ın iletisim metoduna yönlendirir
$routes->get('urunler', 'UrunlerController::index');  // Ürünler sayfası için UrunlerController'ın index metoduna yönlendirir
$routes->get('hakkimizda', 'Home::hakkimizda'); // Hakkımızda sayfasını HomeController'ın hakkimizda metoduna yönlendirir

// Sepet sayfası yönlendirmesi
$routes->get('sepet', 'SepetController::index');  // Sepet sayfasını SepetController'ın index metoduna yönlendirir

// Sepetle ilgili işlemler
$routes->post('cart/updateCart', 'CartController::updateCart');  // Sepet güncelleme işlemi için CartController'ın updateCart metoduna yönlendirir
$routes->post('cart/addProduct', 'CartController::addProduct');  // Sepete ürün ekleme işlemi için CartController'ın addProduct metoduna yönlendirir

// Sepetten ürün silme işlemi için POST isteği
$routes->post('cart/deleteProduct/(:num)', 'CartController::deleteProduct/$1');  // Sepetten ürün silme işlemi için CartController'ın deleteProduct metoduna yönlendirir

// Sepet görüntüleme işlemi
$routes->get('cart', 'CartController::viewCart');  // Sepet görüntüleme işlemi için CartController'ın viewCart metoduna yönlendirir
$routes->post('user/register', 'UserController::register');
$routes->post('user/login', 'UserController::login');
$routes->post('iletisim', 'ContactController::send_message');
$routes->get('alisveris', 'AlisVerisController::completeShopping');
$routes->post('submit-order', 'AlisVerisController::submitOrder');
$routes->get('order-success', 'OrderController::orderSuccess');
$routes->get('mysqladmin/admin', 'MysqlAdminController::index');
// app/Config/Routes.php

$routes->get('/auth/login', 'AuthController::login');    // Login sayfası
$routes->get('/auth/register', 'AuthController::register');  // Kayıt sayfası
$routes->post('/auth/login', 'AuthController::login');   // Login işlemi için POST isteği
$routes->post('/auth/register', 'AuthController::register'); // Kayıt işlemi için POST isteği
$routes->get('auth/logout', 'AuthController::logout');
$routes->get('/login_register', 'AuthController::login_register');
// routes.php dosyasına ekleme yapın
$routes->get('/hesap', 'HesapController::index'); // Hesap sayfası için rota
// app/Config/Routes.php

// app/Config/Routes.php

$routes->get('admin-panel', 'AdminPanel::mongoAdminPanel'); // Admin paneline yönlendirme
$routes->post('admin-panel/add-product', 'AdminPanel::addProduct'); // Ürün ekleme yönlendirmesi
$routes->post('admin-panel/delete-product', 'AdminPanel::deleteProduct'); // Ürün silme yönlendirmesi

// app/Config/Routes.php

// Ana sayfa (kartların olduğu sayfa)
$routes->get('admin-selection', 'AdminSelectionController::index');

// MySQL Admin Paneli sayfası
$routes->get('mysqladmin_dashboard', 'MysqlAdminController::index');

// MongoDB Admin Paneli sayfası
$routes->get('mongo_adminpanel', 'AdminPanel::mongoAdminPanel');

// Ürün düzenleme işlemi (POST)
$routes->post('admin-panel/edit-product', 'AdminPanel::EditProduct');

// MySQL ürün güncelleme işlemi (ID parametresi ile)
$routes->post('admin/products/update/(:num)', 'MysqlAdminController::updateProduct/$1');

// Ürün silme işlemi (ID parametresi ile)
$routes->get('admin/delete_product/(:num)', 'MysqlAdminController::deleteProduct/$1');

// MySQL'e ürün ekleme işlemi (POST)
$routes->post('admin/add_product', 'MysqlAdminController::addProduct');


?>