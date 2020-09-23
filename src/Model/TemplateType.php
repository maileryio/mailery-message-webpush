<?php

namespace Mailery\Template\Webpush\Model;

use Mailery\Template\Model\TemplateTypeInterface;

class TemplateType implements TemplateTypeInterface
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
        return '/template/webpush/create';
    }

    /**
     * @inheritdoc
     */
    public function getCreateRouteParams(): array
    {
        return [];
    }
}
