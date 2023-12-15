<?php

namespace App\Http\Controllers\User;

use App\Models\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BankInfoController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'account_number' => 'required',
            'shaba' => 'required',
            'bank_name' => 'required'
        ]);

        try{
            $bank = Bank::create([
                'account_number' => $request->account_number,
                'shaba' => $request->shaba,
                'bank_name' => $request->bank_name,
                'customer_id' => $request->customer_id
            ]);

            return response()->json($bank);
        } catch(\Exception $e){
            return response(['errors' => $e->getMessage()], 422);
        }

    }

    public function update(Request $request, Bank $bank)
    {
        
    }

    public function destroy(Bank $bank)
    {
        $result = $bank->delete();
        return back()->with('swal-success', 'کارت شما با موفقیت حذف شد');
    }
}
