<?php
// Örnek akış: /products/show/123
class ProductsController {
    public function show(int $id): void {
        // Not: Gerçekte ProductModel çağırırsın. Basit örnek:
        $product = (object)['id'=>$id,'name'=>'Kulaklık','price'=>999.90,'description'=>'ANC özellikli'];
        require __DIR__.'/../views/product_details.php';
    }
}
// Örnek akış: /products/list
class ProductsController {
    public function list(): void {
        // Not: Gerçekte ProductModel çağırırsın. Basit örnek:
        $products = [
            (object)['id'=>1,'name'=>'Kulaklık','price'=>999.90],
            (object)['id'=>2,'name'=>'Mouse','price'=>199.90],
            (object)['id'=>3,'name'=>'Klavye','price'=>299.90],
        ];
        require __DIR__.'/../views/product_list.php';
    }
}