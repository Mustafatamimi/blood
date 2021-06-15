<?php

namespace App\Http\Requests\Seeker;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class SeekerRequest extends FormRequest
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
            'seekerUserName' => 'required|unique:Login,user_name',
            'seekerName' => 'required|max:40',
            'seekerPhone' => 'required|max:9|min:9|unique:Donor,phone',
            'seekerPass' => 'required',
            'seekerPassCh' => 'required',
            'seekerGroupType' => 'required',
            'seekerAge' => 'required',
            'seekerSexd' => 'required|unique:Donor,email',
            'seekerCity' => 'required',
            'seekerStreet' => 'required',
            'seekerEmail' => 'required|unique:Donor,email',
            'seekerDateNeed' => 'required',
            'seekerNote' => ''
*/
        ];
    }
        public function messages()
    {
        return $messages = [
            'seekerUserName.required' => ' من فضلك أملئ هذا الحقل.  ',
            'seekerUserName.unique'   => 'هذاالاسم غير متاح',
            'seekerName.required'      => 'الرجاء إدخل الاسم',
            'seekerPhone.required'      => ' من فضلك أملئ هذا الحقل.',
            'seekerPhone.max'           =>' رقم الهاتف يجب ان يكون 9 ارقام فقط',
            'seekerPhone.min'           =>' رقم الهاتف يجب ان لا يقل عن 9 ارقام ',
            'seekerPhone.unique'       => 'الرقم هذا مسجل مسبقا في حساب اخر',
            'seekerPass.required' => ' من فضلك أملئ هذا الحقل.  ',
            'seekerPassCh.required' => ' من فضلك أملئ هذا الحقل.  ',
            'seekerGroupType.required'   =>'من فضلك حدد نوع فصيلة دمك',
            'seekerAge.required' => ' من فضلك أملئ هذا الحقل.',
            'seekerSexd.required' => ' من فضلك أملئ هذا الحقل.',
            'seekerCity.required'      => ' من فضلك أملئ هذا الحقل.',
            'seekerStreet.required'     => 'من فضلك املئ هذا الحقل',
            'seekerEmail.unique'       => 'البريد هذا مسجل مسبقا في حساب اخر',
            'seekerDateNeed.required'    => ' من فضلك أملئ هذا الحقل.  ',
            'seekerNote.required' => ' من فضلك أملئ هذا الحقل.  ',


        ];
    }

}
