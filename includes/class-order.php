<?php

class ORDERS
{
    public static function createNewOrder( 
        $user_id, //find who make the order
        $total_amount = 0, //find out what's the total amount
        $products_in_cart =[]//get the products in the order
        )
    {
        $order_id = DB::connect()->insert(
            'INSERT INTO orders (user_id, total_amount, transaction_id)
            VALUES (:user_id, :total_amount, :transaction_id)',
            [
            'user_id' => $user_id,
            'total_amount' => $total_amount,
            'transaction_id' => ''
            ]
        );
        

        //step 3:create orders_products bridge
        foreach( $products_in_cart as $product_id => $quantity ) 
        {
            // insert each product in cart as new row in the orders_products table
            DB::connect()->insert(
                'INSERT INTO orders_products (order_id, product_id, quantity)
                VALUES (:order_id, :product_id, :quantity)',
            [
                'order_id' => $order_id,
                'product_id' => $product_id,
                'quantity' => $quantity
            ]);
        }

        //step 4: create bill url
        $bill_url = '';

        // create a bill in billplz using API
            // whenever we call API, there will be some response
            $response = callAPI(
                BILLPLZ_API_URL . 'v3/bills', // https://www.billplz-sandbox.com/api/v3/bills
                'POST',
                [
                    'collection_id' => BILLPLZ_COLLECTION_ID,
                    'email' => $_SESSION['user']['email'],
                    'name' => $_SESSION['user']['email'],
                    'amount' => $total_amount * 100,
                    'callback_url' => 'http://final-project.local/payment-callback',
                    'description' => 'Order #' . $order_id, // Order #3,
                    'redirect_url' => 'http://final-project.local/payment-verification'
                ],
                [
                    'Content-Type: application/json',
                    'Authorization: Basic ' . base64_encode( BILLPLZ_API_KEY . ':' )
                ]
                    
            );

            // Step 5: if the response if successful, update the order with bill id ($response->id)
            if ( isset( $response->id ) ) 
            {
                DB::connect()->update(
                    'UPDATE orders SET transaction_id = :transaction_id
                    WHERE id = :order_id',
                [
                    'transaction_id' => $response->id,
                    'order_id' => $order_id
                ]);
            }         

            //step 6:set bill_url
            if ( isset( $response->url ) ) {
                $bill_url = $response->url;
            }
    
        return $bill_url;
    }
    

    /**
     * Update order
     */
    public function updateOrder( $transaction_id, $status )
    {
        DB::connect()->update(
            // update the order status using billplz id that stored as transaction_id in our database
            'UPDATE orders SET status = :status WHERE transaction_id = :transaction_id',
            [
                'status' => $status,
                'transaction_id' => $transaction_id
            ]);
    }

    /**
     * get all orders
     */
    public static function getAllOrders()
    {
        return DB::connect()->select(
            'SELECT * FROM orders ORDER BY id DESC',
            [],
            true
        );
    }

    /**
     * List all the orders by the logged_in user
     */
     public function listOrders( $user_id )
     {
        //load the orders data based on the egiven user_id
        return DB::connect()->select(
            'SELECT * FROM orders 
            WHERE user_id = :user_id 
            ORDER BY id DESC',
        [
            'user_id' => $user_id
        ],true);
     }

     /**
      * List out all the prodcuts inside a single order
      */

      public function listProductsinOrder( $order_id )
      {
        //retirve products data using JOIN
        return DB::connect()->select(
            'SELECT
            products.id,
            products.product_name,
            orders_products.order_id,
            orders_products.quantity
            FROM orders_products
            JOIN products
            ON orders_products.product_id = products.id
            WHERE order_id = :order_id',
        [
            'order_id' => $order_id
        ],true);
      }
}