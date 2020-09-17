<?php

namespace Mailery\Template\Webpush\Service;

use Cycle\ORM\ORMInterface;
use Cycle\ORM\Transaction;
use Mailery\Template\Webpush\Entity\WebpushTemplate;
use Mailery\Template\Webpush\ValueObject\TemplateValueObject;

class TemplateCrudService
{
    /**
     * @var ORMInterface
     */
    private ORMInterface $orm;

    /**
     * @param ORMInterface $orm
     */
    public function __construct(ORMInterface $orm)
    {
        $this->orm = $orm;
    }

    /**
     * @param TemplateValueObject $valueObject
     * @return WebpushTemplate
     */
    public function create(TemplateValueObject $valueObject): WebpushTemplate
    {
        $template = (new WebpushTemplate())
            ->setName($valueObject->getName())
            ->setBrand($valueObject->getBrand())
        ;

        $tr = new Transaction($this->orm);
        $tr->persist($template);
        $tr->run();

        return $template;
    }

    /**
     * @param WebpushTemplate $template
     * @param TemplateValueObject $valueObject
     * @return Template
     */
    public function update(WebpushTemplate $template, TemplateValueObject $valueObject): WebpushTemplate
    {
        $template = $template
            ->setName($valueObject->getName())
            ->setBrand($valueObject->getBrand())
        ;

        $tr = new Transaction($this->orm);
        $tr->persist($template);
        $tr->run();

        return $template;
    }

    /**
     * @param WebpushTemplate $template
     * @return bool
     */
    public function delete(WebpushTemplate $template): bool
    {
        $tr = new Transaction($this->orm);
        $tr->delete($template);
        $tr->run();

        return true;
    }
}
