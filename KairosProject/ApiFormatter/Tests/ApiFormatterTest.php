<?php
declare(strict_types=1);
/**
 * This file is part of the kairos project.
 *
 * As each files provides by the CSCFA, this file is licensed
 * under the MIT license.
 *
 * PHP version 7.2
 *
 * @category Api_Formatter_Test
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace ApiFormatter\Tests;

use KairosProject\Tests\AbstractTestClass;
use KairosProject\ApiFormatter\ApiFormatter;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use KairosProject\ApiController\Event\ResponseEvent;

/**
 * ApiFormatter test
 *
 * This test validate the ApiFormatter class.
 *
 * @category Api_Formatter_Test
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class ApiFormatterTest extends AbstractTestClass
{
    /**
     * Format method test.
     *
     * Validate the KairosProject\ApiFormatter\ApiFormatter::format method
     *
     * @return void
     */
    public function testFormat()
    {
        $event = $this->createMock(ResponseEvent::class);
        $dispatcher = $this->createMock(EventDispatcherInterface::class);

        $this->getInvocationBuilder($dispatcher, $this->exactly(3), 'dispatch')
            ->withConsecutive(
                [$this->equalTo(ApiFormatter::EVENT_RESPONSE_CREATION), $this->identicalTo($event)],
                [$this->equalTo(ApiFormatter::EVENT_FORMAT_BODY), $this->identicalTo($event)],
                [$this->equalTo(ApiFormatter::EVENT_PROCESS_HEADER), $this->identicalTo($event)]
            );

        $instance = $this->getInstance();
        $instance->format($event, '', $dispatcher);
    }

    /**
     * Get tested class
     *
     * Return the tested class name
     *
     * @return string
     */
    protected function getTestedClass() : string
    {
        return ApiFormatter::class;
    }
}
