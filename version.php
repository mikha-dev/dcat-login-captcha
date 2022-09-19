<?php

/**
 * This file is part of the guanguans/dcat-login-captcha.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

return [
    '1.0.0' => [
        'Initial release.',
    ],
    '1.0.1' => [
        'Add default config file.',
        'Add annotation for facades.',
        'Optimize `login_captcha_check` function.',
        'Optimize captcha generate.',
        'Optimize get setting config.',
        'Rename `dcat_login_captcha_check`->`login_captcha_check`.',
        'Rename `dcat_login_captcha_url`->`login_captcha_url`.',
    ],
    '1.0.2' => [
        'Add login_captcha_get function.',
        'Update lang files.',
        'Update extension alias and description.',
        'Optimize LoginCaptchaServiceProvider.',
        'Optimize setting form.',
    ],
    '1.0.3' => [
        'Add CleanObContents Middleware.',
    ],
    '1.0.4' => [
        'Add SetResponseContentType Middleware.',
        'Add content type setting config.',
    ],
    '1.0.5' => [
        'Add BootingHandler.',
    ],
    '1.0.6' => [
        'Rename src/BootingAdmin.php -> src/BootingHandler.php.',
        'Remove src/Http/Controllers/CaptchaController.php`.',
    ],
    '1.0.7' => [
        'Optimize `buildCaptchaJsScript`.',
    ],
    '1.0.8' => [
        'Fix cant match routing path(#8).',
    ],
    '1.0.9' => [
        'Add parameters to the `SetResponseContentType` middleware.',
        'Update github config files.',
        'Update phpunit/phpunit requirement from ^7.0 || ^8.0 to ^7.0 || ^8.0 || ^9.0.',
        'Optimize booting `BootingHandler`.',
        'Optimize setting form .',
    ],
    '1.0.10' => [
        'Compatible callback type.',
    ],
    '1.0.11' => [
        'Rename `phrase_session_key` -> `captcha_phrase_session_key`.',
        'Generate captcha random url.',
        'Replace `Closure routing` -> `CaptchaController`.',
        'Bump actions/cache from 2 to 3.',
        'Bump actions/checkout from 2 to 3.',
        'Update overtrue/phplint requirement from ^2.3 || ^3.0 to ^2.3 || ^3.0 || ^4.0.',
    ],
    '1.0.12' => [
        'Bump codecov/codecov-action from 2.1.0 to 3.',
        'Update author info.',
    ],
    '1.0.13' => [
        'Update JS.',
    ],
    '1.0.14' => [
        'Rename login_captcha_get -> login_captcha_content.',
        'Update github config files.',
    ],
    '1.0.15' => [
        'Fix captcha check.',
    ],
    '1.0.16' => [
        'Add migration files.',
    ],
    '1.0.17' => [
        'Fix migration file name.',
    ],
    '1.0.18' => [
        'Update to single action controller.',
        'Fix setting.',
        'Optimize migration file.',
    ],
    '1.0.19' => [
        'Fix loading config.',
        'Remove version update migration.',
        'Cancel service late registration.',
    ],
];
