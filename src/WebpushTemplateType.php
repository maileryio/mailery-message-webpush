<?php

namespace Mailery\Template\Webpush;

use Mailery\Template\TemplateTypeInterface;

class WebpushTemplateType implements TemplateTypeInterface
{
    /**
     * @inheritdoc
     */
    public function getLabel(): string
    {
        return 'Web push notification';
    }

    /**
     * @inheritdoc
     */
    public function getShortLabel(): string
    {
        return 'Web push';
    }

    /**
     * @inheritdoc
     */
    public function getCreateRouteName(): ?string
    {
        return '/message/webpush/create';
    }

    /**
     * @inheritdoc
     */
    public function getCreateRouteParams(): array
    {
        return [];
    }
}
