<?php

namespace Mailery\Template\Webpush\Entity;

use Mailery\Template\Entity\Template as BaseTemplate;
use Mailery\Activity\Log\Entity\LoggableEntityInterface;
use Mailery\Activity\Log\Entity\LoggableEntityTrait;
use Mailery\Common\Entity\RoutableEntityInterface;

/**
 * @Cycle\Annotated\Annotation\Entity
 */
class WebpushTemplate extends BaseTemplate implements RoutableEntityInterface, LoggableEntityInterface
{
    use LoggableEntityTrait;

    /**
     * {@inheritdoc}
     */
    public function getEditRouteName(): ?string
    {
        return '/template/webpush/edit';
    }

    /**
     * {@inheritdoc}
     */
    public function getEditRouteParams(): array
    {
        return ['id' => $this->getId()];
    }

    /**
     * {@inheritdoc}
     */
    public function getViewRouteName(): ?string
    {
        return '/template/webpush/view';
    }

    /**
     * {@inheritdoc}
     */
    public function getViewRouteParams(): array
    {
        return ['id' => $this->getId()];
    }

    /**
     * {@inheritdoc}
     */
    public function getPreviewRouteName(): ?string
    {
        return '/template/webpush/view';
    }

    /**
     * {@inheritdoc}
     */
    public function getPreviewRouteParams(): array
    {
        return ['id' => $this->getId()];
    }
}
