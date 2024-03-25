<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'gender' => ['required'],
            'tel1' => ['required', 'numeric', 'digits_between:3,5'],
            'tel2' => ['required', 'numeric', 'digits_between:3,5'],
            'tel3' => ['required', 'numeric', 'digits_between:3,5'],
            'email' => ['required', 'string', 'email'],
            'address' => ['required', 'string'],
            'content-type' => ['required'],
            'detail' => ['required', 'string', 'max:120'],
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'first_name.string' => '姓を文字列で入力してください',
            'last_name.required' => '名を入力してください',
            'last_name.string' => '名を文字列で入力してください',
            'gender.required' => '性別を入力してください',
            'tel1.required' => '電話番号を入力してください',
            'tel1.numeric' => '数字で入力してください',
            'tel1.digits_between' => '電話番号は3～5桁までの数字で入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel2.numeric' => '数字で入力してください',
            'tel2.digits_between' => '電話番号は3～5桁までの数字で入力してください',
            'tel3.required' => '電話番号を入力してください',
            'tel3.numeric' => '数字で入力してください',
            'tel3.digits_between' => '電話番号は3～5桁までの数字で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'content-type.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}