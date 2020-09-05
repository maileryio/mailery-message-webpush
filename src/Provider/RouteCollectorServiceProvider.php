<?php

namespace Mailery\Template\Webpush\Provider;

use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;
use Yiisoft\Router\RouteCollectorInterface;
use Yiisoft\Router\Group;
use Yiisoft\Router\Route;
use Mailery\Template\Webpush\Controller\TemplateController;

final class RouteCollectorServiceProvider extends ServiceProvider
{
    public function register(Container $container): void
    {
        /** @var RouteCollectorInterface $collector */
        $collector = $container->get(RouteCollectorInterface::class);

        $collector->addGroup(
            Group::create(
                '/brand/{brandId:\d+}',
                [
                    Route::methods(['GET', 'POST'], '/message/webpush/create', [TemplateController::class, 'create'])
                        ->name('/message/webpush/create'),
                ]
            )
        );
    }
}
