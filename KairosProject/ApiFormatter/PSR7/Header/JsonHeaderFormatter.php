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
 * @category Api_Formatter_Header
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace KairosProject\ApiFormatter\PSR7\Header;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use KairosProject\ApiController\Event\ResponseEventInterface;

/**
 * Json header formatter
 *
 * This class is used as listener to set the default response listeners.
 *
 * @category Api_Formatter_Header
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class JsonHeaderFormatter
{

    /**
     * Create response
     *
     * Create a new response, encapsulating the default headers with values.
     *
     * @param ResponseEventInterface   $event      The original event, containing the response
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
        $event->setResponse(
            $response->withHeader('Content-Type', 'application/json')
                ->withHeader(
                    'Content-Length',
                    $response->getBody()
                        ->getSize()
                )
                ->withHeader('Date', gmdate(\DateTime::RFC1123))
        );
    }
}
