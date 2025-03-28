<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;

class CartController extends BaseController
{
    // Sepet sayfasını gösterme
    public function viewCart()
    {
        $userId = session()->get('user_id');

        // Kullanıcı giriş yapmışsa sepeti göster
        if (!$userId) {
            // Giriş yapılmamışsa hesap sayfasına yönlendir
            return redirect()->to(base_url('/hesap'));
        }

        $cartModel = new CartModel();
        
        // Kullanıcıya özel sepet bilgilerini alıyoruz
        $data['cartItems'] = $cartModel->getProductsWithCart($userId);
        $data['total'] = $cartModel->getCartTotal($userId)['total'];
        
        return view('cart_view', $data);
    }

    // Sepete ürün ekleme
    public function addProduct()
    {
        $cartModel = new CartModel();
        $productModel = new ProductModel();
    
        // Formdan gelen verileri alıyoruz
        $productId = $this->request->getPost('product_id');
        $product = $productModel->find($productId);
        $quantity = $this->request->getPost('quantity');
    
        // Kullanıcı ID'sini session'dan alıyoruz
        $userId = session()->get('user_id');
    
        // Sepet verisini oluşturuyoruz
        $productData = [
            'product_id'    => $productId,
            'name'          => $product['product_name'],
            'product_price' => $product['product_price'],
            'quantity'      => $quantity,  // Kullanıcının gönderdiği miktarı ekliyoruz
        ];
    
        // Ürünü sepete ekliyoruz
        if ($cartModel->addProductToCart($productData, $userId)) {
            return redirect()->to('/cart')->with('success', 'Ürün sepete eklendi.');
        } else {
            return redirect()->back()->with('error', 'Ürün sepete eklenemedi.');
        }
    }

    // Sepetten ürün silme
    public function deleteProduct($cartId)
    {
        $cartModel = new CartModel();

        // Kullanıcı ID'sini session'dan alıyoruz
        $userId = session()->get('user_id');
        
        if ($cartModel->deleteProductFromCart($cartId, $userId)) {
            return redirect()->to('/cart')->with('success', 'Ürün sepette silindi.');
        } else {
            return redirect()->to('/cart')->with('error', 'Ürün silinemedi.');
        }
    }

    // Alışverişi tamamlama işlemi
    public function completeShopping()
    {
        $cartModel = new CartModel();
        
        // Kullanıcı ID'sini session'dan alıyoruz
        $userId = session()->get('user_id');
        
        // Sepet toplamını alıyoruz
        $totalAmount = $cartModel->getCartTotal($userId)['total'];

        // Alışverişi tamamlama işlemi: Sepet boşsa işlemi sonlandır
        if ($totalAmount > 0) {
            // Ödeme işlemleri vb.
            return redirect()->to(base_url('/odeme'))->with('success', 'Alışverişiniz başarıyla tamamlandı.');
        } else {
            return redirect()->to(base_url('/cart'))->with('error', 'Sepetinizde ürün bulunmamaktadır.');
        }
    }

    // Çıkış işlemi
    public function logout()
    {
        // Oturum verilerini temizle
        session()->destroy();

        // "Beni hatırla" cookie'sini sil
        delete_cookie('remember_me');

        // Tüm cookie'leri temizlemek için aşağıdaki gibi bir yaklaşım ekleyebilirsiniz
        // Kullanıcıyı giriş sayfasına yönlendir
        return redirect()->to(base_url('/hesap'))->with('success', 'Çıkış işlemi başarılı.');
    }

}
