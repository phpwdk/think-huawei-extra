<?php
declare (strict_types=1);

namespace think\huawei\extra;

use think\Service;

class ObsService extends Service
{
    public function register(): void
    {
        $this->app->bind(ObsInterface::class, function () {
            $config = $this->app->config->get('huawei');
            return new ObsFactory($config);
        });
    }
}
