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
 * @category Api_Formatter_Header_Test
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace ApiFormatter\Tests\PSR7\Header;

use KairosProject\Tests\AbstractTestClass;
use KairosProject\ApiFormatter\PSR7\Header\JsonHeaderFormatter;
use KairosProject\ApiController\Event\ResponseEventInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * JsonHeaderFormatter test
 *
 * This test validate the JsonHeaderFormatter class.
 *
 * @category Api_Formatter_Header_Test
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class JsonHeaderFormatterTest extends AbstractTestClass
{
    /**
     * Constructor method test.
     *
     * Validate the KairosProject\ApiFormatter\PSR7\Header\JsonHeaderFormatter::createResponse method
     *
     * @return void
     */
    public function testCreateResponse()
    {
        $body = $this->createMock(StreamInterface::class);
        $response = $this->createMock(ResponseInterface::class);
        $event = $this->createMock(ResponseEventInterface::class);

        $this->getInvocationBuilder($event, $this->once(), 'getResponse')
            ->willReturn($response);

        $this->getInvocationBuilder($event, $this->once(), 'setResponse')
            ->with($this->identicalTo($response));

        $this->getInvocationBuilder($body, $this->once(), 'getSize')
            ->willReturn(321);

        $this->getInvocationBuilder($response, $this->once(), 'getBody')
            ->willReturn($body);

        $gmtExpr = '/[A-Z][a-z]{2}, [0-9]{2} [A-Z][a-z]{2} [0-9]{4} ([0-9]{2}:){2}[0-9]{2} \+[0-9]{4}/';
        $this->getInvocationBuilder($response, $this->exactly(3), 'withHeader')
            ->withConsecutive(
                [$this->equalTo('Content-Type'), $this->equalTo('application/json')],
                [$this->equalTo('Content-Length'), $this->equalTo(321)],
                [$this->equalTo('Date'), $this->matchesRegularExpression($gmtExpr)]
            )->willReturn($response);

        $instance = $this->getInstance();
        $instance->createResponse($event, 'name', $this->createMock(EventDispatcherInterface::class));
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
        return JsonHeaderFormatter::class;
    }
}
