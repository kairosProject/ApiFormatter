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
 * @category Api_Formatter
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace KairosProject\ApiFormatter;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use KairosProject\ApiController\Event\ResponseEventInterface;

/**
 * Api formatter
 *
 * This class is used to dispatch the formatting events
 *
 * @category Api_Formatter
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class ApiFormatter
{
    /**
     * Event response creation
     *
     * This constant define the response creation event
     *
     * @var string
     */
    public const EVENT_RESPONSE_CREATION = 'create_response';

    /**
     * Event format body
     *
     * This constant define the response body formatting
     *
     * @var string
     */
    public const EVENT_FORMAT_BODY = 'format_body';

    /**
     * Event process header
     *
     * This constant define the header processing event
     *
     * @var string
     */
    public const EVENT_PROCESS_HEADER = 'process_header';

    /**
     * Format
     *
     * Dispatch the different formatting events. Will first dispatch the response creation, then the body formatting
     * and finally the header processing.
     *
     * @param ResponseEventInterface   $event      The original event
     * @param string                   $eventName  The original event name
     * @param EventDispatcherInterface $dispatcher The original event dispatcher
     *
     * @return                                        void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function format(
        ResponseEventInterface $event,
        string $eventName,
        EventDispatcherInterface $dispatcher
    ) {
        $dispatcher->dispatch(self::EVENT_RESPONSE_CREATION, $event);
        $dispatcher->dispatch(self::EVENT_FORMAT_BODY, $event);
        $dispatcher->dispatch(self::EVENT_PROCESS_HEADER, $event);
    }
}
