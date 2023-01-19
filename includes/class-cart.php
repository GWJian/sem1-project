<?php

class CART
{
    public static function getAllproductinCart()
    {
        $list = [];
        //check if cart is empty or not
        if ( isset ( $_SESSION['cart'] ))
        {
            foreach ( $_SESSION['cart'] as $product_id => $quantity){

                //retrieve the product based on the given id
                $product = PRODUCT::getProductById( $product_id );
                // var_dump($product);
                //push product_id and quantity
                $list[] = 
                [
                    'id' => $product_id,
                    'product_name' => $product['product_name'],
                    'price' => $product['price'],
                    'total' => $product['price'] * $quantity,
                    'quantity' => $quantity,
                ];
            }
        }//end - isset ( $_SESSION['cart'] 
        return $list;
    }

    public static function total()
    {
        $cart_total = 0;

        //cauculate the cart total
        foreach ( self::getAllproductinCart() as $product ){
            $cart_total += $product['total'];
        }

        return $cart_total;
    }

    public static function add ( $product_id )
    {
        //check if there is existing data in $_SESSION['cart']
        if ( isset( $_SESSION['cart'] ) ) {
            // assign $_SESSION['cart'] to $cart
            $cart = $_SESSION['cart'];
        }else {
            // if no existing data, create empty array for $cart
            $cart = [];
        }

        // add product to $cart
        if ( isset ( $cart[$product_id] ) ){
            // add one quantity into the existing value 
             $cart[ $product_id ] += 1; // plus one quantity
            } else {
                $cart[ $product_id ] = 1; //quantity
            }

        //assign $cart to $_SESSION['cart']
        $_SESSION['cart'] = $cart;
    }

    //increase and decrease item in cart
    public static function update ( $action,$product_id )
    {
        if ( isset ( $_SESSION['cart'][$product_id]) )
        {
            switch($action){
                case 'increase' :
                    ++$_SESSION['cart'][$product_id];
                    break;
                case 'decrease' :
                    if(($_SESSION['cart'][$product_id])==1)
                    { 
                        unset($_SESSION['cart'][$product_id]);
                    }else{
                        --$_SESSION['cart'][$product_id];
                    }
                    break;
            }
        }
    }

    /**
     * remove product from cart
     */
    public static function removeProductFromCart( $product_id )
    {
        // make sure the product_id is already in the cart session data
        if ( isset( $_SESSION['cart'][$product_id] ) ) {
            // unset it (means delete the selected product data)
            unset( $_SESSION['cart'][$product_id] );
        }
    }

    /**
     * Empty the cart
     */

     public static function emptyCart()
     {
        unset( $_SESSION['cart'] );
     }
}