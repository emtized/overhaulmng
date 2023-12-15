<?php

namespace App\Http\Controllers\User;

use App\Models\Customer;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    use ImageTrait;

    public function setCart(Request $request,Customer $customer)
    {
        $request->validate([
            'cart' => 'required'
        ]);

        if ($request->hasFile('cart')) {
            $cart = $this->verifyAndUpload($request,'cart','customer/document');
            $customer->syncMedia($cart,['cart']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }

    public function setShena(Request $request,Customer $customer)
    {
        $request->validate([
            'shena' => 'required'
        ]);

        if ($request->hasFile('shena')) {
            $shena = $this->verifyAndUpload($request,'shena','customer/document');
            $customer->syncMedia($shena,['shena']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }

    public function setShena2(Request $request,Customer $customer)
    {
        $request->validate([
            'shena2' => 'required'
        ]);

        if ($request->hasFile('shena2')) {
            $shena2 = $this->verifyAndUpload($request,'shena2','customer/document');
            $customer->syncMedia($shena2,['shena2']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }

    public function setSoldier(Request $request,Customer $customer)
    {
        $request->validate([
            'soldier' => 'required'
        ]);

        if ($request->hasFile('soldier')) {
            $soldier = $this->verifyAndUpload($request,'soldier','customer/document');
            $customer->syncMedia($soldier,['soldier']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }

    public function setImage(Request $request,Customer $customer)
    {
        $request->validate([
            'image' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image = $this->verifyAndUpload($request,'image','customer/document');
            $customer->syncMedia($image,['image']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }

    public function setSmook(Request $request,Customer $customer)
    {
        $request->validate([
            'smook_image' => 'required'
        ]);

        if ($request->hasFile('smook_image')) {
            $smook_image = $this->verifyAndUpload($request,'smook_image','customer/document');
            $customer->syncMedia($smook_image,['smook_image']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }


    public function setPolice(Request $request,Customer $customer)
    {
        $request->validate([
            'police' => 'required'
        ]);

        if ($request->hasFile('police')) {
            $police = $this->verifyAndUpload($request,'police','customer/document');
            $customer->syncMedia($police,['police']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }


    public function setDoctor(Request $request,Customer $customer)
    {
        $request->validate([
            'doctor' => 'required'
        ]);

        if ($request->hasFile('doctor')) {
            $doctor = $this->verifyAndUpload($request,'doctor','customer/document');
            $customer->syncMedia($doctor,['doctor']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }


    public function setWork(Request $request,Customer $customer)
    {
        $request->validate([
            'work_image' => 'required'
        ]);

        if ($request->hasFile('work_image')) {
            $work_image = $this->verifyAndUpload($request,'work_image','customer/document');
            $customer->syncMedia($work_image,['work_image']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }


    public function setIns(Request $request,Customer $customer)
    {
        $request->validate([
            'ins_image' => 'required'
        ]);

        if ($request->hasFile('ins_image')) {
            $ins_image = $this->verifyAndUpload($request,'ins_image','customer/document');
            $customer->syncMedia($ins_image,['ins_image']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }


    public function setJu(Request $request,Customer $customer)
    {
        $request->validate([
            'ju_image' => 'required'
        ]);

        if ($request->hasFile('ju_image')) {
            $ju_image = $this->verifyAndUpload($request,'ju_image','customer/document');
            $customer->syncMedia($ju_image,['ju_image']);
        }
        return back()->with('swal-success', 'با موفقیت ذخیره شد');
    }

}
