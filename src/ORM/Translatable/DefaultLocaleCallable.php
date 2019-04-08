<?php

namespace Knp\DoctrineBehaviors\ORM\Translatable;

use Symfony\Component\DependencyInjection\Container;

/**
 * @author    Jérôme Fix <jerome.fix@zapoyok.info>
 */
class DefaultLocaleCallable
{
    private $locale = 'en';

    public function __invoke()
    {
        return $this->locale;
    }
}
