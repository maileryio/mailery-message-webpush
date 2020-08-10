<?php

declare(strict_types=1);

/**
 * Web push message module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-template-webpush
 * @package   Mailery\Template
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

use Mailery\Template\Webpush\WebpushTemplateType;
use Mailery\Template\Webpush\Controller\WebpushTemplateController;
use Yiisoft\Router\Route;

return [
    'maileryio/mailery-message' => [
        'types' => [
            WebpushTemplateType::class => WebpushTemplateType::class,
        ],
    ],

    'router' => [
        'routes' => [
            '/message/webpush/create' => Route::methods(['GET', 'POST'], '/brand/{brandId:\d+}/message/webpush/create', [WebpushTemplateController::class, 'create'])
                ->name('/message/webpush/create'),
        ],
    ],
];
