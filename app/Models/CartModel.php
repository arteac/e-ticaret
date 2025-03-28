<?php
namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table      = 'cart';
    protected $primaryKey = 'id';
    protected $allowedFields = ['product_id', 'quantity', 'name', 'price', 'user_id']; // user_id'yi ekledik

    // Sepetteki ürünleri ve ürün bilgilerini kullanıcıya özel alıyoruz
    public function getProductsWithCart($userId)
    {
        return $this->select('cart.id, cart.quantity, product.id as product_id, product.product_name, product.product_price, product.product_image')
                    ->join('product', 'cart.product_id = product.id')
                    ->where('cart.user_id', $userId) // Kullanıcıya özel filtreleme
                    ->findAll();
    }

    // Sepete ürün ekleme (kullanıcıya özel)
    public function addProductToCart($data, $userId)
    {
        // Kullanıcı ID'si ile veriyi ekliyoruz
        $data['user_id'] = $userId;

        // Öncelikle ürün var mı kontrol ediyoruz
        $existingProduct = $this->where('product_id', $data['product_id'])
                                ->where('user_id', $userId)
                                ->first();

        // Ürün sepette zaten varsa, miktarını ve fiyatını arttırıyoruz
        if ($existingProduct) {
            $newQuantity = $existingProduct['quantity'] + $data['quantity'];
            $newTotalPrice = $data['product_price'] * $newQuantity; // Yeni toplam fiyat

            // Ürün miktarını ve fiyatını güncelliyoruz
            return $this->update($existingProduct['id'], [
                'quantity' => $newQuantity,
                'price' => $newTotalPrice
            ]);
        }

        // Ürün sepette yoksa, yeni ürün ekliyoruz
        $totalPrice = $data['product_price'] * $data['quantity']; // Yeni ürün için fiyat hesaplama
        $data['price'] = $totalPrice; // Fiyatı ekliyoruz

        return $this->insert($data);
    }

    // Sepetteki toplam tutarı almak (kullanıcıya özel)
    public function getCartTotal($userId)
    {
        return $this->select('SUM(cart.quantity * product.product_price) as total')
                    ->join('product', 'cart.product_id = product.id')
                    ->where('cart.user_id', $userId) // Kullanıcıya özel filtreleme
                    ->first();
    }

    // Sepetten ürün silme (kullanıcıya özel)
    public function deleteProductFromCart($cartId, $userId)
    {
        // Sepetten yalnızca kullanıcının ürününü silmemiz gerektiği için kullanıcı ID'si ile kontrol ediyoruz
        return $this->where('id', $cartId)->where('user_id', $userId)->delete();
    }

    // Sepet bilgilerini getiren fonksiyon
    public function getCartItems($userId)
    {
        // Sepetteki ürünleri al
        return $this->select('cart.id, cart.quantity, product.product_name, product.product_price, product.product_image')
                    ->join('product', 'cart.product_id = product.id')
                    ->where('cart.user_id', $userId) // Kullanıcıya özel filtreleme
                    ->findAll();
    }

    // Toplam tutarı hesaplayan fonksiyon
    public function getTotal($userId)
    {
        // Kullanıcının sepetindeki ürünlerin toplam tutarını al
        return $this->selectSum('cart.quantity * product.product_price', 'total')
                    ->join('product', 'cart.product_id = product.id')
                    ->where('cart.user_id', $userId) // Kullanıcıya özel filtreleme
                    ->first();
    }
    public function clearCart($userId)
    {
        return $this->where('user_id', $userId)->delete();
    }
}
?>
