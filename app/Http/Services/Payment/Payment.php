<?php

namespace App\Http\Services\Payment;

use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class Payment
{
    public function create($amounts, $token, $gateway_name)
    {
        try{
            DB::beginTransaction();

            $transaction =  Transaction::create([
                'customer_id' => auth()->guard('customers')->id(),
                'amount' => $amounts,
                'token' => $token,
                'gateway_name' => $gateway_name,
            ]);

            DB::commit();

        } catch(\Exception $ex){
            DB::rollBack();
            return ['error' => $ex->getMessage()];
        }
    }


    public function update($token,$refId)
    {
        try{

            DB::beginTransaction();

            $transaction = Transaction::where('token', $token)->firstOrFail();


            $transaction->update([
                'status' => 1,
                'ref_id' => $refId
            ]);

            DB::commit();

        }catch(\Exception $ex){
            DB::rollBack();
            return ['error' => $ex->getMessage()];
        }

        return ['success' => 'success!'];

    }
}
