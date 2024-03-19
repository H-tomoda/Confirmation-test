@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/contact/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form-group--text">
                    <input type="text" name="name1" placeholder="コーチ">
                    <input type="text" name="name2" placeholder="哲久">
                </div>
                <div class="form__error">
                    <!--ヴァリデーション-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form-group--text">
                    <input type="radio" name="option" value="男性">男性</input>
                    <input type="radio" name="option" value="女性">女性</input>
                    <input type="radio" name="option" value="その他">その他</input>
                </div>
            </div>
            <div class="form__error">
                <!--ヴァリデーション-->
            </div>
        </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form-group--text">
            <input type="text" name="email" placeholder="test@example.com">
        </div>
        <div class="form__error">
            <!--ヴァリデーション-->
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form-group--text">
            <input type="text" name="tel1" placeholder="080">
            <span>-</span>
            <input type="text" name="tel2" placeholder="1234">
            <span>-</span>
            <input type="text" name="tel3" placeholder="5678">
        </div>
        <div class="form__error">
            <!--ヴァリデーション-->
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form-group--text">
            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
        </div>
        <div class="form__error">
            <!--ヴァリデーション-->
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">建物名</span>
    </div>
    <div class="form__group-content">
        <div class="form-group--text">
            <input type="text" name="building" placeholder="千駄ヶ谷マンション101">
        </div>
        <div class="form__error">
            <!--ヴァリデーション-->
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">お問合せの種類</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form-group--text">
            <select name="content-type">
                <option value="商品のお届けについて">商品のお届けについて</option>
                <option value="商品の交換について">商品の交換について</option>
                <option value="商品トラブル">商品トラブル</option>
                <option value="ショップへのお問合せ">ショップへのお問合せ</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div class="form__error">
            <!--ヴァリデーション-->
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">お問合せ内容</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form-group--text">
            <textarea name="content" cols="80" rows="10" placeholder="お問い合わせ内容をご記載ください"></textarea>
        </div>
        <div class="form__error">
            <!--ヴァリデーション-->
        </div>
    </div>
</div>
<div class="form__button">
    <button class="form__button-submit" type="submit">確認画面</button>
</div>
</form>
</div>

@endsection