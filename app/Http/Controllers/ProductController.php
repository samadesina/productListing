<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
        public function index(){

            try {
                $products =Product::all();
            return response()->json($products);
            } catch (\Throwable $th) {
                return response()->json("Bad request");
            }
            
        }

        public function show($id){
            $product= Product::find($id);
            return response()->json($product);
        }

        public function create(Request $request){

            try {
                $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->category =$request->category;

            $product->save();
            return response()->json("Product created succesfully" );
            } catch (\Throwable $th) {
                return response()->json('invalid entry');
            }

            

           

        }

        public function update(Request $request, $id){
            $product =Product::find($id);

            $product->name = $request->name;
            $product->price = $request->price;
            $product->category = $request->category;

            $product->save();

            return response()->json("Product updated succesfully");

        }

        public function delete($id){
            $product = Product::find($id);
            $product->delete();
            return response()->json("Product succesfully deleted");
        }

        public function addNumbers($a, $b){
            try {
                $sum = $a + $b;

                return response()->json("the sum of the two number is ".$sum );           
             } catch (\Throwable $th) {
                //throw $th;
            }


        }

        public function getProductName($id){
            try {
               $productName= Product::where('id', $id)->value('name');
               return response()->json($productName);
            } catch (\Throwable $th) {
                return response()-json('invalid entry');
            }
        }

        public function countProduct(){
            $products =  product::all();
            $productCount = count($products);
            return response()->json($productCount);

        }

    

    
}
