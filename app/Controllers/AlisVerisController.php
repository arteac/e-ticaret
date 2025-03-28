<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;
use App\Models\OrderModel;

class AlisVerisController extends BaseController
{
    // Sepete ürün ekleme
    public function addProductToCart()
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

    // Sepet sayfasını gösterme
    public function viewCart()
    {
        $cartModel = new CartModel();
        
        // Kullanıcı ID'sini session'dan alıyoruz
        $userId = session()->get('user_id');
        
        // Kullanıcıya özel sepet bilgilerini alıyoruz
        $data['cartItems'] = $cartModel->getProductsWithCart($userId);
        $data['total'] = $cartModel->getCartTotal($userId)['total'];
        
        return view('cart_view', $data);
    }

    // Sepetten ürün silme
    public function deleteProductFromCart($cartId)
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

    // Sepet toplamını alma
    public function getCartTotal()
    {
        $cartModel = new CartModel();

        // Kullanıcı ID'sini session'dan alıyoruz
        $userId = session()->get('user_id');
        
        // Sepetin toplam tutarını alıyoruz
        $total = $cartModel->getCartTotal($userId)['total'];
        
        return $total;
    }

    // Alışverişi tamamlama işlemi
    public function completeShopping()
    {
        $cartModel = new CartModel();
    
        // Kullanıcı ID'sini session'dan alıyoruz
        $userId = session()->get('user_id');
        
        // Kullanıcıya ait sepet ürünlerini alıyoruz
        $cartItems = $cartModel->getProductsWithCart($userId);
        $total = $cartModel->getCartTotal($userId)['total'];
    
        // View'e verileri gönderiyoruz
        return view('alisveris', ['cartItems' => $cartItems, 'totalPrice' => $total]);
    }

    // Siparişi Tamamlama
    public function submitOrder()
    {
        $orderModel = new OrderModel();
        $cartModel = new CartModel();

        // Formdan gelen verileri alıyoruz
        $name = $this->request->getPost('name');
        $address = $this->request->getPost('address');
        $phone = $this->request->getPost('phone');

        // Kullanıcı ID'sini session'dan alıyoruz
        $userId = session()->get('user_id');

        // Sepet bilgilerini alıyoruz
        $cartItems = $cartModel->getProductsWithCart($userId);
        $total = $cartModel->getCartTotal($userId)['total'];

        // Sipariş verilerini hazırlıyoruz
        $orderData = [
            'user_id'     => $userId,  // Siparişi hangi kullanıcı veriyor
            'name'        => $name,
            'address'     => $address,
            'phone'       => $phone,
            'total_price' => $total,
            'status'      => 'pending', // Sipariş başlangıç durumu
        ];

        // Siparişi kaydediyoruz
        if ($orderModel->createOrder($orderData)) {
            // Sipariş başarıyla kaydedildiyse, sepeti temizliyoruz
            $cartModel->clearCart($userId);
            return redirect()->to('/order-success')->with('success', 'Siparişiniz başarıyla tamamlandı.');
        } else {
            return redirect()->back()->with('error', 'Siparişinizi tamamlarken bir hata oluştu.');
        }
    }
    
}
