<?php

namespace App\Http\Controllers;

use App\Models\Balance;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    
        

        public function addNumbers(Request $request){
            try {
                $bal = new Balance();

                $bal->balance = $request->balance;
                $newBal = $savings;


                return response()->json("the balance as at " .now() ."is" .$newBal );  
                
                
             } catch (\Throwable $th) {
                //throw $th;
            }

        }

    

    
}
