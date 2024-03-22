@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form-group--text">
                    <input type="text" name="first_name" placeholder="高知" value="{{ old('first_name') }}" />
                    <input type="text" name="last_name" placeholder="哲久" value="{{ old('last_name') }}" />
                </div>
                <div class="form__error">
                    @error('first_name')
                    {{$message}}
                    @enderror
                    @error('last_name')
                    {{$message}}
                    @enderror
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
                    <input type="radio" name="gender" value="男性">男性</input>
                    <input type="radio" name="gender" value="女性">女性</input>
                    <input type="radio" name="gender" value="その他">その他</input>
                </div>
            </div>
            <div class="form__error">
                @error('gender')
                {{$message}}
                @enderror
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
            <input type="text" name="email" placeholder="test@example.com" value="{{ old('email') }}">
        </div>
        <div class="form__error">
            @error('email')
            {{$message}}
            @enderror
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
            <input type="text" name="tel1" placeholder="080" value="{{ old('tel1') }}">
            <span>-</span>
            <input type="text" name="tel2" placeholder="1234" value="{{ old('tel2') }}">
            <span>-</span>
            <input type="text" name="tel3" placeholder="5678" value="{{ old('tel3') }}">
        </div>
        <div class="form__error">
            @error('tel1')
            {{$message}}
            @enderror
            @error('tel2')
            {{$message}}
            @enderror
            @error('tel3')
            {{$message}}
            @enderror
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
            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
        </div>
        <div class="form__error">
            @error('address')
            {{$message}}
            @enderror
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">建物名</span>
    </div>
    <div class="form__group-content">
        <div class="form-group--text">
            <input type="text" name="building" placeholder="千駄ヶ谷マンション101" value="{{ old('building') }}">
        </div>
        <div class="form__error">
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
                <option value="" selected disabled>選択してください</option>
                <option value="商品のお届けについて">商品のお届けについて</option>
                <option value="商品の交換について">商品の交換について</option>
                <option value="商品トラブル">商品トラブル</option>
                <option value="ショップへのお問合せ">ショップへのお問合せ</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div class="form__error">
            @error('content-type')
            {{$message}}
            @enderror
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
            <textarea name="detail" cols="80" rows="10" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
        </div>
        <div class="form__error">
            @error('detail')
            {{$message}}
            @enderror
        </div>
    </div>
</div>
<div class="form__button">
    <button class="form__button-submit" type="submit">確認画面</button>
</div>
</form>
</div>

@endsection