<?php

//static class
class PRODUCT
{
    //Retrieve all product from database
    public static function getAllProduct()
    {
        return DB::connect()->select(
            'SELECT * FROM products ORDER BY id DESC',
            [],
            true
        );
    }

    //Retrieve product data by id
    public static function getProductById( $product_id )
    {
       return DB::connect()->select(
           'SELECT * FROM products WHERE id = :id',
           [
               'id'=> $product_id
           ]
       );
    }

    /**
     * Retrieve all the publish products
     */
    public static function getPublishProducts()
    {
        return DB::connect()->select(
            'SELECT * FROM products WHERE status=:status ORDER BY id DESC',
            [
                'status'=>'publish'
            ],
            true
        );
    }

        /**
     * Retrieve all the Pending products
     */
    public static function getPendingProducts()
    {
        return DB::connect()->select(
            'SELECT * FROM products WHERE status=:status ORDER BY id DESC',
            [
                'status'=>'pending'
            ],
            true
        );
    }

    /**
     * Add new product
    */
    public static function add ($user_id,$product_name,$image_url,$language,$releasedate,$price,$description,$status)
    {   
      return DB::connect()->insert(
          'INSERT INTO products (user_id,product_name,image_url,language,releasedate,price,description,status)
          VALUES (:user_id,:product_name,:image_url,:language,:releasedate,:price,:description,:status)',
          [
            'user_id'=>$user_id,//get data that who doing the new product
            'product_name'=>$product_name,
            'image_url'=>$image_url,
            'language'=>$language,
            'releasedate'=>$releasedate,
            'price'=>$price,
            'description'=>$description,
            'status'=>$status,
          ]
      );
    }

    /**
     * Update product details
    */
    public static function update ( $id,$product_name,$image_url,$language,$releasedate,$price,$description,$status)
    {
      //setup params
      $params=
      [
          'id'=>$id,
          'product_name'=>$product_name,
          'image_url'=>$image_url,
          'language'=>$language,
          'releasedate'=>$releasedate,
          'price'=>$price,
          'description'=>$description,
      ];

        //update user data into the database
        return DB::connect()->update
        (
        'UPDATE products SET id=:id , product_name=:product_name , image_url=:image_url 
        ,language=:language ,releasedate=:releasedate ,price=:price ,description=:description 
        WHERE id=:id',
            $params
        );
        }

    /**
     * Delete product
     */

           public static function delete($product_id )
      {
        return DB::connect()->delete(
            'DELETE FROM products WHERE id=:id',
            [
                'id' => $product_id
            ]
        );
      }


}