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
 * @category Api_Formatter_Response_Test
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace ApiFormatter\Tests\PSR7\Response;

use KairosProject\Tests\AbstractTestClass;
use KairosProject\ApiFormatter\PSR7\Response\FormatterResponseFactory;
use KairosProject\ApiController\Event\ResponseEventInterface;
use Zend\Diactoros\Response;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * FormatterResponseFactory test
 *
 * This test validate the FormatterResponseFactory class.
 *
 * @category Api_Formatter_Response_Test
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class FormatterResponseFactoryTest extends AbstractTestClass
{
    /**
     * Constructor method test.
     *
     * Validate the KairosProject\ApiFormatter\PSR7\Response\FormatterResponseFactory::__construct method
     *
     * @return void
     */
    public function testConstructor()
    {
        $this->assertConstructor(['responseContent' => 'paramName']);
        $this->assertConstructor([], ['responseContent' => FormatterResponseFactory::RESPONSE_CONTENT]);
    }

    /**
     * CreateResponse method test.
     *
     * Validate the KairosProject\ApiFormatter\PSR7\Response\FormatterResponseFactory::createResponse method
     *
     * @return void
     */
    public function testCreateResponse()
    {
        $response = $this->createMock(\stdClass::class);
        $event = $this->createMock(ResponseEventInterface::class);

        $this->getInvocationBuilder($event, $this->once(), 'getResponse')
            ->willReturn($response);

        $this->getInvocationBuilder($event, $this->once(), 'setParameter')
            ->with(
                $this->equalTo(FormatterResponseFactory::RESPONSE_CONTENT),
                $this->identicalTo($response)
            );

        $this->getInvocationBuilder($event, $this->once(), 'setResponse')
            ->with($this->isInstanceOf(Response::class));

        $instance = $this->getInstance();
        $instance->createResponse($event, '', $this->createMock(EventDispatcherInterface::class));
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
        return FormatterResponseFactory::class;
    }
}
