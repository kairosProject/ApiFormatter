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
 * @category Api_Formatter_Response
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace KairosProject\ApiFormatter\PSR7\Response;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Zend\Diactoros\Response;
use KairosProject\ApiController\Event\ResponseEventInterface;

/**
 * Formatter response factory
 *
 * This class is used to create and assign a new response instance
 *
 * @category Api_Formatter_Response
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class FormatterResponseFactory
{
    /**
     * Response content
     *
     * This constant define the default parameter key where the original response content will be injected
     *
     * @var string
     */
    public const RESPONSE_CONTENT = 'response_content';

    /**
     * Response content
     *
     * This property store the parameter key where the original response content will be injected
     *
     * @var string
     */
    private $responseContent = self::RESPONSE_CONTENT;

    /**
     * Construct
     *
     * The default FormatterResponseFactory constructor. Accept an optional parameter name where inject the original
     * response content.
     *
     * @param string $responseContent The parameter name where store the original response content
     *
     * @return void
     */
    public function __construct(string $responseContent = self::RESPONSE_CONTENT)
    {
        $this->responseContent = $responseContent;
    }

    /**
     * Create response
     *
     * Create a new response instance to replace the original content, and store this original content in an event
     * parameter.
     *
     * @param ResponseEventInterface   $event      The original event
     * @param string                   $eventName  The original event name
     * @param EventDispatcherInterface $dispatcher The original event dispatcher
     *
     * @return                                        void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function createResponse(
        ResponseEventInterface $event,
        string $eventName,
        EventDispatcherInterface $dispatcher
    ) {
        $response = $event->getResponse();
        $event->setParameter($this->responseContent, $response);

        $event->setResponse(new Response());
    }
}
