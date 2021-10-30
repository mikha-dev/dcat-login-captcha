<?php

/**
 * This file is part of the guanguans/dcat-login-captcha.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Guanguans\DcatLoginCaptcha\Http\Middleware\CleanObContents;
use Guanguans\DcatLoginCaptcha\Http\Middleware\SetResponseContentType;
use Guanguans\DcatLoginCaptcha\LoginCaptchaServiceProvider;
use Illuminate\Support\Facades\Route;

Route::get('captcha/generate', function () {
    return response(login_captcha_get());
})
->name('captcha.generate')
->middleware([
    sprintf('%s:%s', SetResponseContentType::class, LoginCaptchaServiceProvider::setting('type')),
    CleanObContents::class,
]);
