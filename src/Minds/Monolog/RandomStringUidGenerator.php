<?php

namespace Minds\Monolog;

/**
 * @codeCoverageIgnore
 */
class RandomStringUidGenerator implements UidGeneratorInterface
{
    /**
     * @return string
     */
    public function generateUid(): string
    {
        return uniqid();
    }
}