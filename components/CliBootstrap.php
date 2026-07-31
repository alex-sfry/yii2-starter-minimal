<?php

namespace app\components;

use yii\base\BootstrapInterface;

/**
 * App Bootstrap class
 */
class CliBootstrap implements BootstrapInterface
{
    /**
     * Bootstrap function
     *
     * @param \yii\base\Application $app
     * @return void
     */
    public function bootstrap($app): void
    {
        require __DIR__ . '/../helpers/functions.php';
    }
}
