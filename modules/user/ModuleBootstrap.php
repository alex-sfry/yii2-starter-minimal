<?php

namespace app\modules\user;

use yii\base\BootstrapInterface;

/**
 * User module Bootstrap class
 */
class ModuleBootstrap implements BootstrapInterface
{
    /**
     * Bootstrap function
     *
     * @param \yii\base\Application $app
     * @return void
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            'user/verify-email' => 'user/user/verify-email',
            'user/resend-verification-email' => 'user/user/resend-verification-email',
            'user/reset-password' => 'user/user/reset-password',
            'user/request-password-reset' => 'user/user/request-password-reset',
            'user/signup' => 'user/user/signup',
            'user/login' => 'user/user/login',
            'user/logout' => 'user/user/logout'
        ]);
    }
}
