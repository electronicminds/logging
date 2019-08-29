<?php

use Minds\Monolog\UidGeneratorInterface;
use Minds\Monolog\UidProcessor;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class UidProcessorTest extends TestCase
{
    /**
     * @var MockObject
     */
    private $uidGenerator;

    /**
     * @var UidProcessor
     */
    private $uidProcessor;

    protected function setUp(): void
    {
        $this->uidGenerator = $this->getMockBuilder(UidGeneratorInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->uidProcessor = new UidProcessor($this->uidGenerator);
    }

    public function testGenerateUid()
    {
        $this->uidGenerator->expects($this->once())
            ->method('generateUid')
            ->willReturn('ABC');

        $expectedArray = ['extra' => ['uid' => 'ABC']];

        $this->assertEquals(
            $expectedArray,
            $this->uidProcessor->__invoke([])
        );
    }
}