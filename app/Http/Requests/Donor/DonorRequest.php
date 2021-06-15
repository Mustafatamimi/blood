<?php

namespace App\Http\Requests\Donor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class DonorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [/*
            'donorUserName' => 'required|unique:Login,user_name',
            'donorName' => 'required|max:40',
            'donorPhone' => 'required|max:9|min:9|unique:Donor,phone',
            'donorPass' => 'required',
            'donorPassCh' => 'required',
            'donorGroupType' => 'required',
            'donorAge' => 'required',
            'donorSexd' => 'required|unique:Donor,email',
            'donorCity' => 'required',
            'donorStreet' => 'required',
            'donorEmail' => 'required|unique:Donor,email',
            'donorIsShow' => 'required',
            'donorLastDate' => 'required',
            'donorPhoto' => ''
*/
        ];
    }
        public function messages()
    {
        return $messages = [
            'donorUserName.required' => ' من فضلك أملئ هذا الحقل.  ',
            'donorUserName.unique'   => 'هذاالاسم غير متاح',
            'donorName.required'      => 'الرجاء إدخل الاسم',
            'donorPhone.required'      => ' من فضلك أملئ هذا الحقل.',
            'donorPhone.max'           =>' رقم الهاتف يجب ان يكون 9 ارقام فقط',
            'donorPhone.min'           =>' رقم الهاتف يجب ان لا يقل عن 9 ارقام ',
            'donorPhone.unique'       => 'الرقم هذا مسجل مسبقا في حساب اخر',
            'donorPass.required' => ' من فضلك أملئ هذا الحقل.  ',
            'donorPassCh.required' => ' من فضلك أملئ هذا الحقل.  ',
            'donorGroupType.required'   =>'من فضلك حدد نوع فصيلة دمك',
            'donorAge.required' => ' من فضلك أملئ هذا الحقل.',
            'donorSexd.required' => ' من فضلك أملئ هذا الحقل.',
            'donorCity.required'      => ' من فضلك أملئ هذا الحقل.',
            'donorStreet.required'     => 'من فضلك املئ هذا الحقل',
            'donorEmail.unique'       => 'البريد هذا مسجل مسبقا في حساب اخر',
            'donorIsShow.required'    => ' من فضلك أملئ هذا الحقل.  ',
            'donorLastDate.required' => ' من فضلك أملئ هذا الحقل.  ',


        ];
    }

}
