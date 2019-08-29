<?php

namespace Minds\Monolog;

/**
 * @codeCoverageIgnore
 */
interface UidGeneratorInterface
{
    /**
     * @return string
     */
    public function generateUid(): string;
}