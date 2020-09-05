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

return [
    'maileryio/mailery-message' => [
        'types' => [
            WebpushTemplateType::class => WebpushTemplateType::class,
        ],
    ],
];
