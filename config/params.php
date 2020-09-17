<?php

declare(strict_types=1);

/**
 * Web push template module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-template-webpush
 * @package   Mailery\Template
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

use Mailery\Template\Webpush\TemplateType;

return [
    'maileryio/mailery-template' => [
        'types' => [
            TemplateType::class => TemplateType::class,
        ],
    ],

    'yiisoft/yii-cycle' => [
        'annotated-entity-paths' => [
            '@vendor/maileryio/mailery-template-webpush/src/Entity',
        ],
    ],
];
