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
 * @category Api_Formatter_Body_Test
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace KairosProject\ApiFormatter\Tests\PSR7\Body;

use KairosProject\Tests\AbstractTestClass;
use KairosProject\ApiFormatter\PSR7\Body\JsonBodyFormatter;
use KairosProject\ApiController\Event\ResponseEventInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * JsonBodyFormatter test
 *
 * This test validate the JsonBodyFormatter class.
 *
 * @category Api_Formatter_Body
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class JsonBodyFormatterTest extends AbstractTestClass
{
    /**
     * Constructor method test.
     *
     * Validate the KairosProject\ApiFormatter\PSR7\Body\JsonBodyFormatter::__construct method
     *
     * @return void
     */
    public function testConstruct()
    {
        $this->assertConstructor(['responseContent' => 'param']);
        $this->assertConstructor([], ['responseContent' => JsonBodyFormatter::RESPONSE_CONTENT]);
    }

    /**
     * CreateResponse method test.
     *
     * Validate the KairosProject\ApiFormatter\PSR7\Body\JsonBodyFormatter::createResponse method
     *
     * @return void
     */
    public function testCreateResponse()
    {
        $content = $this->createMock(\stdClass::class);
        $event = $this->createMock(ResponseEventInterface::class);

        $response = $this->createMock(ResponseInterface::class);
        $body = $this->createMock(StreamInterface::class);

        $this->getInvocationBuilder($event, $this->once(), 'getResponse')
            ->willReturn($response);
        $this->getInvocationBuilder($event, $this->once(), 'getParameter')
            ->with(JsonBodyFormatter::RESPONSE_CONTENT)
            ->willReturn($content);
        $this->getInvocationBuilder($response, $this->once(), 'getBody')
            ->willReturn($body);
        $this->getInvocationBuilder($body, $this->once(), 'write')
            ->with($this->equalTo(json_encode($content)));

        $instance = $this->getInstance();
        $instance->createResponse(
            $event,
            '',
            $this->createMock(EventDispatcherInterface::class)
        );
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
        return JsonBodyFormatter::class;
    }
}
