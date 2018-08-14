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
 * @category Api_Formatter_Body
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace KairosProject\ApiFormatter\PSR7\Body;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use KairosProject\ApiController\Event\ResponseEventInterface;

/**
 * Json body formatter
 *
 * This class is used as listener to convert a response to it's json representation.
 *
 * @category Api_Formatter_Body
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class JsonBodyFormatter
{
    /**
     * Response content
     *
     * This constant define the parameter key whence get the response to convert.
     *
     * @var string
     */
    public const RESPONSE_CONTENT = 'response_content';

    /**
     * Response content
     *
     * This property store the parameter name whence get the response content.
     *
     * @var string
     */
    private $responseContent = self::RESPONSE_CONTENT;

    /**
     * Construct
     *
     * The default JsonBodyFormatter constructor. Store an optionnal parameter name, defining the parameter whence get
     * the response content.
     *
     * @param string $responseContent The parameter whence get the response content
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
     * Hydrate the response content with the json representation of the event response. To change the parameter to get
     * in the event bage, provide a parameter name as constructor argument.
     *
     * @param ResponseEventInterface   $event      The original event, containing the response and the body content
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
        $response->getBody()
            ->write(
                json_encode(
                    $event->getParameter($this->responseContent)
                )
            );
    }
}
