<?php

/**
 * This file is part of the guanguans/dcat-login-captcha.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Gregwar\Captcha\PhraseBuilder;
use Guanguans\DcatLoginCaptcha\LoginCaptchaServiceProvider;
use Illuminate\Support\Facades\Session;

if (! function_exists('login_captcha_check')) {
    /**
     * 登录验证码检查.
     */
    function login_captcha_check(string $value): bool
    {
        return PhraseBuilder::comparePhrases(
            Session::get(LoginCaptchaServiceProvider::setting('phrase_session_key')),
            $value
        );
    }
}

if (! function_exists('login_captcha_url')) {
    /**
     * 获取登录验证码 url 地址.
     */
    function login_captcha_url(string $routeName = null): string
    {
        if (is_null($routeName)) {
            return admin_route('captcha.generate');
        }

        return admin_route($routeName);
    }
}

if (! function_exists('login_captcha_get')) {
    /**
     * 获取登录验证码图像内容.
     */
    function login_captcha_get(int $quality = 90): string
    {
        Session::put(LoginCaptchaServiceProvider::setting('phrase_session_key'), CaptchaBuilder::getPhrase());

        return CaptchaBuilder::get($quality);
    }
}
