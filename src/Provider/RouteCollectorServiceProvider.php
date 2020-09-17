<?php

namespace Mailery\Template\Webpush\Provider;

use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;
use Yiisoft\Router\RouteCollectorInterface;
use Yiisoft\Router\Group;
use Yiisoft\Router\Route;
use Mailery\Template\Webpush\Controller\DefaultController;

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
                    Route::get('/template/webpush/view', [DefaultController::class, 'view'])
                        ->name('/template/webpush/view'),
                    Route::methods(['GET', 'POST'], '/template/webpush/create', [DefaultController::class, 'create'])
                        ->name('/template/webpush/create'),
                    Route::methods(['GET', 'POST'], '/template/webpush/edit/{id:\d+}', [DefaultController::class, 'edit'])
                        ->name('/template/webpush/edit'),
                ]
            )
        );
    }
}
