<?php

namespace App\Http\Controllers\User;

use DateTime;
use App\Models\Bank;
use App\Models\Date;
use App\Models\User;
use App\Models\Contacts;
use App\Models\Customer;
use App\Models\Location;
use App\Models\Physical;
use App\Models\Education;
use App\Models\Insurance;
use App\Models\Employment;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegisterRequest;

class AuthController extends Controller
{
    use ImageTrait;

    public function showLogin()
    {
        return view('layouts.auth');
    }

    public function showRegister()
    {
        return view('user.register.first');
    }

    public function showforgetPass()
    {
        return view('auth.forget-pass');

    }


    //register process
    public function register(Request $request)
    {
        //validate
        $inputs = $request->all();
        //create data
        $inputs['password'] = '123456789';
        $realTimestampStart = substr($request->birth_day, 0, 10);
        $inputs['birth_day'] = date("Y-m-d H:i:s", (int) $realTimestampStart);

        $customer = Customer::create($inputs);
        //upload image with media
        $media = $this->verifyAndUpload($request,'avatar','customer');
        $customer->attachMedia($media,['customer']);

        //contact
        Contacts::create([
            'customer_id' => $customer->id,
            'phone' => $request->phone,
            'mobile1' => $request->mobile1,
            'mobile2' => $request->mobile2,
        ]);

        //location
        Location::create([
            'customer_id' => $customer->id,
            'loc_status' => $request->loc_status,
            'body' => $request->body,
            'postal_code' => $request->postal_code
        ]);

        //ins
        Insurance::create([
            'customer_id' => $customer->id,
            'job_status' => $request->job_status,
            'job_type' =>$request->job_type,
            'job_place' =>$request->job_place,
            'status_ins' =>$request->status_ins,
            'number_insurance' =>$request->number_insurance,
            'access' =>$request->access,
            'weight' =>$request->weight,
            'height' =>$request->hight,
            'shoe_size'=>$request->shoe_size,
            'dress_size' =>$request->dress_size
        ]);

        Education::create([
            'customer_id' => $customer->id,
            'degree' => $request->degree,
            'field' => $request->field
        ]);

        Employment::create([
            'customer_id' => $customer->id,
            'job_statuss' => $request->job_statuss,
            'job' => $request->job
        ]);

        //upload image
        $cart = $this->verifyAndUpload($request,'cart','customer/document');
        $customer->attachMedia($cart,['cart']);

        $shena = $this->verifyAndUpload($request,'shena','customer/document');
        $customer->attachMedia($shena,['shena']);

        $shena2 = $this->verifyAndUpload($request,'shena2','customer/document');
        $customer->attachMedia($shena2,['shena2']);

        $soldier = $this->verifyAndUpload($request,'soldier','customer/document');
        $customer->attachMedia($soldier,['soldier']);


        $image = $this->verifyAndUpload($request,'image','customer/document');
        $customer->attachMedia($image,['image']);


        $smook_image = $this->verifyAndUpload($request,'smook_image','customer/document');
        $customer->attachMedia($smook_image,['smook_image']);


        $police = $this->verifyAndUpload($request,'police','customer/document');
        $customer->attachMedia($police,['police']);


        $doctor = $this->verifyAndUpload($request,'doctor','customer/document');
        $customer->attachMedia($doctor,['doctor']);


        $work_image = $this->verifyAndUpload($request,'work_image','customer/document');
        $customer->attachMedia($work_image,['work_image']);


        $edu_image = $this->verifyAndUpload($request,'edu_image','customer/document');
        $customer->attachMedia($edu_image,['edu_image']);


        $ins_image = $this->verifyAndUpload($request,'ins_image','customer/document');
        $customer->attachMedia($ins_image,['ins_image']);


        $ju_image = $this->verifyAndUpload($request,'ju_image','customer/document');
        $customer->attachMedia($ju_image,['ju_image']);


        $other_image = $this->verifyAndUpload($request,'other_image','customer/document');
        $customer->attachMedia($other_image,['other_image']);

        //physical
        Physical::create([
            'customer_id' => $customer->id,
            'disease'=> $request->disease,
            'disease_detail'=> $request->disease_detail,
            'first_disease'=> $request->first_disease,
            'first_disease_detail'=> $request->first_disease_detail,
            'drug'=> $request->drug,
            'drug_detail'=> $request->drug_detail,
            'hospital'=> $request->hospital,
            'hospital_detail'=> $request->hospital_detail,
            'surgery'=> $request->surgery,
            'surgery_detail'=> $request->surgery_detail,
            'specific_drug'=> $request->specific_drug,
            'specific_drug_detail'=> $request->specific_drug_detail,
            'smok'=> $request->smok,
            'smok_detail'=> $request->smok_detail,
            'smok_past'=> $request->smok_past,
            'smok_past_detail'=> $request->smok_past_detail,
            'sport'=> $request->sport,
            'sport_detail'=> $request->sport_detail,
            'work'=> $request->work,
            'work_detail'=> $request->work_detail,
            'Leave'=> $request->Leave,
            'Commission'=> $request->Commission,
            'Commission_detail'=> $request->Commission_detail,
        ]);

        foreach ($request->bank_name as $key => $value) {
            Bank::create([
                'customer_id' => $customer->id,
                'bank_name' => $value,
                'shaba' => $request->shaba[$key],
                'account_number' => $request->account_number[$key]
            ]);
        }

        foreach ($request->start_date as $key => $value) {
            $realTimestampStart1 = substr($value, 0, 10);
            $inputs['start_date'][$key] = date("Y-m-d H:i:s", (int) $realTimestampStart1);
        }

        foreach ($request->end_date as $key => $value) {
            $realTimestampStart2 = substr($value, 0, 10);
            $inputs['end_date'][$key] = date("Y-m-d H:i:s", (int) $realTimestampStart2);
        }

        $dates = array_combine($request->start_date, $request->end_date);
        //dd($dates);
        foreach ($dates as $key => $value){
            $date = Date::create([
                'start_date' => $key,
                'end_date' => $value,
                'customer_id' => $customer->id,
            ]);
        }


        //login
        Auth::guard('customers')->login($customer);

        //redirect
        return redirect()->route('profile')->with('swal-success', 'حساب شما تشکیل شد');
    }


    //login process
    public function login(Request $request)
    {
         $this->validateForm($request);

         if($this->attempLogin($request))
         {
             return $this->sendSuccessResponse();
         }

         return $this->sendLoginFailedResponse();

    }

    protected function validateForm(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:customers,email'],
            'password' => ['required'],
        ]);
    }

    protected function attempLogin(Request $request)
    {
        return Auth::guard('customers')->attempt(
            $request->only('email', 'password'),
            $request->filled('remember-me')
        );
    }

    protected function sendSuccessResponse()
    {
        return redirect()->route('profile');
    }

    protected function sendLoginFailedResponse()
    {
        return back()->with('wrongCredentials','ایمیل یا رمز عبور نادرست می باشد');
    }

    public function logout()
    {
        Auth::guard('customers')->logout();
        return redirect()->route('user.login.get');
    }

}
