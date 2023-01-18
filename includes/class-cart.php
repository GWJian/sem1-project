<?php

class CART
{
    public function listAllproductinCart()
    {
        $list = [];
        //check if cart is empty or not
        if ( isset ( $_SESSION['cart'] )){
            foreach ( $_SESSION['cart'] as $product_id => $quantity){

                //init products class
                $product_obj = new PRODUCT();
                //retrieve the product based on the given id
                $product = $product_obj->getAllProduct( $product_id );


                //push product_id and quantity
                $list[] = [
                    'id' => $product_id,
                    'name' => $product['product_name'],
                    'price' => $product['price'],
                    'total' => $product['price'] * $quantity,
                    'quantity' => $quantity,
                ];
            }
        }//end - isset ( $_SESSION['cart'] 
        return $list;
    }

    public function total()
    {
        $cart_total = 0;
        //get all product in cart
        $list = $this->listAllproductinCart();
        //cauculate the cart total
        foreach ( $list as $product ){
            $cart_total += $product['total'];
        }

        return $cart_total;
    }

    public function add ( $product_id )
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
            //long method
            // $cart[ $product_id ] = $cart [ $product_id ] + 1;
            //shot method
             $cart[ $product_id ] += 1; // plus one quantity
            } else {
                $cart[ $product_id ] = 1; //quantity
            }

        //assign $cart to $_SESSION['cart']
        $_SESSION['cart'] = $cart;
    }

    //update box
    public function update ( $product_update ){
        if ( isset ( $_SESSION['cart'][$product_update]) )
        {
            $_SESSION['cart'][$product_update] = $_POST['quantity'];
        }
    }



    /**
     * remove product from cart
     */
    public function removeProductFromCart( $product_id )
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

     public function emptyCart()
     {
        unset( $_SESSION['cart'] );
     }
}