<?php

namespace App\Http\Controllers\User;

use App\Models\Physical;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\PhysicalRequest;

class PhysicalController extends Controller
{
    public function update(PhysicalRequest $request, Physical $physical)
    {
        $inputs = $request->all();

        $physical->update($inputs);
        return back()->with('swal-success', 'سلامت جسمانی شما با موفقیت ویرایش شد');
    }
}
