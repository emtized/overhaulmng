<?php

namespace App\Http\Controllers\Admin;


use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\InfoRequest;
use App\Http\Requests\Admin\CustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.user.index',compact('customers'));
    }

    public function store(CustomerRequest $request)
    {
        $inputs = $request->all();

        $customer  = Customer::create($inputs);
        $customer->createRelations($request->all());

        return back()->with('swal-success','کاربر شما با موفقیت ثبت شد');
    }


    public function edit(Customer $customer)
    {
        return view('',compact('customer'));
    }

    public function update(InfoRequest $request, Customer $customer)
    {
        $customer->update([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'father_name'=> $request->father_name,
            'national_code'=> $request->national_code,
            'birth_code'=>$request->birth_code,
            'birth_place'=> $request->birth_place,
            'birth_day' => $request->birth_day,
            'status' => $request->status,
            'status_detail'=> $request->status_detail,
            'name_identifier'=>$request->name_identifier,
            'mobile_identifier'=>$request->mobile_identifier,
            'mother_lang' => $request->mother_lang,
            'marital' => $request->marital,
            'email' => $request->email
        ]);

        if ($request->hasFile('avatar')) {
            $media = $this->verifyAndUpload($request,'avatar','customer');
            $customer->syncMedia($media,['customer']);
        }

        $customer->contact->update([
            'phone' => $request->phone,
            'mobile1' => $request->mobile1,
            'mobile2' => $request->mobile2
        ]);

        $customer->loc->update([
            'loc_status' => $request->loc_status,
            'body' => $request->body,
            'postal_code' => $request->postal_code
        ]);

        $selectedAccess = implode(',', $request->access);
        $customer->insurance->update([
            'job_status' => $request->job_status,
            'job_type' => $request->job_type,
            'job_place' =>$request->job_place ,
            'status_ins' =>$request->status_ins,
            'number_insurance' =>$request->number_insurance,
            'access' => $selectedAccess,
            'weight' => $request->weight,
            'height' => $request->height,
            'shoe_size' =>$request->shoe_size,
            'dress_size' =>$request->dress_size
        ]);

        $customer->education->update([
            'degree' => $request->degree,
            'field' => $request->field
        ]);


        $customer->employ->update([
            'job_statuss' => $request->job_statuss,
            'job' => $request->job
        ]);
    }


    public function destroy(Customer $customer)
    {
        $result = $customer->delete();
        return back()->with('swal-success','کاربر مورد نظر با موفقیت حذف شد');
    }
}
