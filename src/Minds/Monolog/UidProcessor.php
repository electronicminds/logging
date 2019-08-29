<?php

namespace Minds\Monolog;

class UidProcessor
{
    /**
     * @var string
     */
    private $uid = '';

    /**
     * @var UidGeneratorInterface
     */
    private $uidGenerator;

    /**
     * UidProcessor constructor.
     *
     * @param UidGeneratorInterface $uidGenerator
     */
    public function __construct(UidGeneratorInterface $uidGenerator)
    {
        $this->uidGenerator = $uidGenerator;
    }

    /**
     * @param array $record
     * @return array
     */
    public function __invoke(array $record): array
    {
        if ($this->uid === '') {
            $this->uid = $this->generateUid();
        }

        $record['extra']['uid'] = $this->uid;

        return $record;
    }

    /**
     * @return string
     */
    private function generateUid(): string
    {
        return $this->uidGenerator->generateUid();
    }
}