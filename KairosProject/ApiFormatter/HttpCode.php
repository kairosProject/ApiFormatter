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

/**
 * Http code
 *
 * This interface is used to list the existing http codes
 *
 * @category Api_Formatter
 * @package  Kairos_Project
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
interface HttpCode
{
    /**
     * Http codes
     *
     * This constant list the existing http codes, indexed by code, message as value.
     *
     * @var array
     */
    public const HTTP_CODE = [
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',
        208 => 'Already Reported',
        226 => 'IM Used',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => 'Switch Proxy',
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',
        419 => 'Authentication Timeout',
        420 => 'Enhance Your Calm',
        420 => 'Method Failure',
        422 => 'Unprocessable Entity',
        423 => 'Locked',
        424 => 'Failed Dependency',
        424 => 'Method Failure',
        425 => 'Unordered Collection',
        426 => 'Upgrade Required',
        428 => 'Precondition Required',
        429 => 'Too Many Requests',
        431 => 'Request Header Fields Too Large',
        444 => 'No Response',
        449 => 'Retry With',
        450 => 'Blocked by Windows Parental Controls',
        451 => 'Redirect',
        451 => 'Unavailable For Legal Reasons',
        494 => 'Request Header Too Large',
        495 => 'Cert Error',
        496 => 'No Cert',
        497 => 'HTTP to HTTPS',
        499 => 'Client Closed Request',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',
        507 => 'Insufficient Storage',
        508 => 'Loop Detected',
        509 => 'Bandwidth Limit Exceeded',
        510 => 'Not Extended',
        511 => 'Network Authentication Required',
        598 => 'Network read timeout error',
        599 => 'Network connect timeout error'
    ];

    /**
     * CONTINUE
     *
     * This constant define the code used for a http CONTINUE status
     *
     * @var int
     **/
    public const CONTINUE = 100;

    /**
     * SWITCHING_PROTOCOLS
     *
     * This constant define the code used for a http SWITCHING_PROTOCOLS status
     *
     * @var int
     **/
    public const SWITCHING_PROTOCOLS = 101;

    /**
     * PROCESSING
     *
     * This constant define the code used for a http PROCESSING status
     *
     * @var int
     **/
    public const PROCESSING = 102;

    /**
     * OK
     *
     * This constant define the code used for a http OK status
     *
     * @var int
     **/
    public const OK = 200;

    /**
     * CREATED
     *
     * This constant define the code used for a http CREATED status
     *
     * @var int
     **/
    public const CREATED = 201;

    /**
     * ACCEPTED
     *
     * This constant define the code used for a http ACCEPTED status
     *
     * @var int
     **/
    public const ACCEPTED = 202;

    /**
     * NON_AUTHORITATIVE_INFORMATION
     *
     * This constant define the code used for a http NON_AUTHORITATIVE_INFORMATION status
     *
     * @var int
     **/
    public const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * NO_CONTENT
     *
     * This constant define the code used for a http NO_CONTENT status
     *
     * @var int
     **/
    public const NO_CONTENT = 204;

    /**
     * RESET_CONTENT
     *
     * This constant define the code used for a http RESET_CONTENT status
     *
     * @var int
     **/
    public const RESET_CONTENT = 205;

    /**
     * PARTIAL_CONTENT
     *
     * This constant define the code used for a http PARTIAL_CONTENT status
     *
     * @var int
     **/
    public const PARTIAL_CONTENT = 206;

    /**
     * MULTI_STATUS
     *
     * This constant define the code used for a http MULTI_STATUS status
     *
     * @var int
     **/
    public const MULTI_STATUS = 207;

    /**
     * ALREADY_REPORTED
     *
     * This constant define the code used for a http ALREADY_REPORTED status
     *
     * @var int
     **/
    public const ALREADY_REPORTED = 208;

    /**
     * IM_USED
     *
     * This constant define the code used for a http IM_USED status
     *
     * @var int
     **/
    public const IM_USED = 226;

    /**
     * MULTIPLE_CHOICES
     *
     * This constant define the code used for a http MULTIPLE_CHOICES status
     *
     * @var int
     **/
    public const MULTIPLE_CHOICES = 300;

    /**
     * MOVED_PERMANENTLY
     *
     * This constant define the code used for a http MOVED_PERMANENTLY status
     *
     * @var int
     **/
    public const MOVED_PERMANENTLY = 301;

    /**
     * FOUND
     *
     * This constant define the code used for a http FOUND status
     *
     * @var int
     **/
    public const FOUND = 302;

    /**
     * SEE_OTHER
     *
     * This constant define the code used for a http SEE_OTHER status
     *
     * @var int
     **/
    public const SEE_OTHER = 303;

    /**
     * NOT_MODIFIED
     *
     * This constant define the code used for a http NOT_MODIFIED status
     *
     * @var int
     **/
    public const NOT_MODIFIED = 304;

    /**
     * USE_PROXY
     *
     * This constant define the code used for a http USE_PROXY status
     *
     * @var int
     **/
    public const USE_PROXY = 305;

    /**
     * SWITCH_PROXY
     *
     * This constant define the code used for a http SWITCH_PROXY status
     *
     * @var int
     **/
    public const SWITCH_PROXY = 306;

    /**
     * TEMPORARY_REDIRECT
     *
     * This constant define the code used for a http TEMPORARY_REDIRECT status
     *
     * @var int
     **/
    public const TEMPORARY_REDIRECT = 307;

    /**
     * PERMANENT_REDIRECT
     *
     * This constant define the code used for a http PERMANENT_REDIRECT status
     *
     * @var int
     **/
    public const PERMANENT_REDIRECT = 308;

    /**
     * BAD_REQUEST
     *
     * This constant define the code used for a http BAD_REQUEST status
     *
     * @var int
     **/
    public const BAD_REQUEST = 400;

    /**
     * UNAUTHORIZED
     *
     * This constant define the code used for a http UNAUTHORIZED status
     *
     * @var int
     **/
    public const UNAUTHORIZED = 401;

    /**
     * PAYMENT_REQUIRED
     *
     * This constant define the code used for a http PAYMENT_REQUIRED status
     *
     * @var int
     **/
    public const PAYMENT_REQUIRED = 402;

    /**
     * FORBIDDEN
     *
     * This constant define the code used for a http FORBIDDEN status
     *
     * @var int
     **/
    public const FORBIDDEN = 403;

    /**
     * NOT_FOUND
     *
     * This constant define the code used for a http NOT_FOUND status
     *
     * @var int
     **/
    public const NOT_FOUND = 404;

    /**
     * METHOD_NOT_ALLOWED
     *
     * This constant define the code used for a http METHOD_NOT_ALLOWED status
     *
     * @var int
     **/
    public const METHOD_NOT_ALLOWED = 405;

    /**
     * NOT_ACCEPTABLE
     *
     * This constant define the code used for a http NOT_ACCEPTABLE status
     *
     * @var int
     **/
    public const NOT_ACCEPTABLE = 406;

    /**
     * PROXY_AUTHENTICATION_REQUIRED
     *
     * This constant define the code used for a http PROXY_AUTHENTICATION_REQUIRED status
     *
     * @var int
     **/
    public const PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * REQUEST_TIMEOUT
     *
     * This constant define the code used for a http REQUEST_TIMEOUT status
     *
     * @var int
     **/
    public const REQUEST_TIMEOUT = 408;

    /**
     * CONFLICT
     *
     * This constant define the code used for a http CONFLICT status
     *
     * @var int
     **/
    public const CONFLICT = 409;

    /**
     * GONE
     *
     * This constant define the code used for a http GONE status
     *
     * @var int
     **/
    public const GONE = 410;

    /**
     * LENGTH_REQUIRED
     *
     * This constant define the code used for a http LENGTH_REQUIRED status
     *
     * @var int
     **/
    public const LENGTH_REQUIRED = 411;

    /**
     * PRECONDITION_FAILED
     *
     * This constant define the code used for a http PRECONDITION_FAILED status
     *
     * @var int
     **/
    public const PRECONDITION_FAILED = 412;

    /**
     * REQUEST_ENTITY_TOO_LARGE
     *
     * This constant define the code used for a http REQUEST_ENTITY_TOO_LARGE status
     *
     * @var int
     **/
    public const REQUEST_ENTITY_TOO_LARGE = 413;

    /**
     * REQUEST_URI_TOO_LONG
     *
     * This constant define the code used for a http REQUEST_URI_TOO_LONG status
     *
     * @var int
     **/
    public const REQUEST_URI_TOO_LONG = 414;

    /**
     * UNSUPPORTED_MEDIA_TYPE
     *
     * This constant define the code used for a http UNSUPPORTED_MEDIA_TYPE status
     *
     * @var int
     **/
    public const UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * REQUESTED_RANGE_NOT_SATISFIABLE
     *
     * This constant define the code used for a http REQUESTED_RANGE_NOT_SATISFIABLE status
     *
     * @var int
     **/
    public const REQUESTED_RANGE_NOT_SATISFIABLE = 416;

    /**
     * EXPECTATION_FAILED
     *
     * This constant define the code used for a http EXPECTATION_FAILED status
     *
     * @var int
     **/
    public const EXPECTATION_FAILED = 417;

    /**
     * I_M_A_TEAPOT
     *
     * This constant define the code used for a http I_M_A_TEAPOT status
     *
     * @var int
     **/
    public const I_M_A_TEAPOT = 418;

    /**
     * AUTHENTICATION_TIMEOUT
     *
     * This constant define the code used for a http AUTHENTICATION_TIMEOUT status
     *
     * @var int
     **/
    public const AUTHENTICATION_TIMEOUT = 419;

    /**
     * ENHANCE_YOUR_CALM
     *
     * This constant define the code used for a http ENHANCE_YOUR_CALM status
     *
     * @var int
     **/
    public const ENHANCE_YOUR_CALM = 420;

    /**
     * METHOD_FAILURE
     *
     * This constant define the code used for a http METHOD_FAILURE status
     *
     * @var int
     **/
    public const METHOD_FAILURE = 420;

    /**
     * UNPROCESSABLE_ENTITY
     *
     * This constant define the code used for a http UNPROCESSABLE_ENTITY status
     *
     * @var int
     **/
    public const UNPROCESSABLE_ENTITY = 422;

    /**
     * LOCKED
     *
     * This constant define the code used for a http LOCKED status
     *
     * @var int
     **/
    public const LOCKED = 423;

    /**
     * FAILED_DEPENDENCY
     *
     * This constant define the code used for a http FAILED_DEPENDENCY status
     *
     * @var int
     **/
    public const FAILED_DEPENDENCY = 424;

    /**
     * UNORDERED_COLLECTION
     *
     * This constant define the code used for a http UNORDERED_COLLECTION status
     *
     * @var int
     **/
    public const UNORDERED_COLLECTION = 425;

    /**
     * UPGRADE_REQUIRED
     *
     * This constant define the code used for a http UPGRADE_REQUIRED status
     *
     * @var int
     **/
    public const UPGRADE_REQUIRED = 426;

    /**
     * PRECONDITION_REQUIRED
     *
     * This constant define the code used for a http PRECONDITION_REQUIRED status
     *
     * @var int
     **/
    public const PRECONDITION_REQUIRED = 428;

    /**
     * TOO_MANY_REQUESTS
     *
     * This constant define the code used for a http TOO_MANY_REQUESTS status
     *
     * @var int
     **/
    public const TOO_MANY_REQUESTS = 429;

    /**
     * REQUEST_HEADER_FIELDS_TOO_LARGE
     *
     * This constant define the code used for a http REQUEST_HEADER_FIELDS_TOO_LARGE status
     *
     * @var int
     **/
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * NO_RESPONSE
     *
     * This constant define the code used for a http NO_RESPONSE status
     *
     * @var int
     **/
    public const NO_RESPONSE = 444;

    /**
     * RETRY_WITH
     *
     * This constant define the code used for a http RETRY_WITH status
     *
     * @var int
     **/
    public const RETRY_WITH = 449;

    /**
     * BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS
     *
     * This constant define the code used for a http BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS status
     *
     * @var int
     **/
    public const BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

    /**
     * REDIRECT
     *
     * This constant define the code used for a http REDIRECT status
     *
     * @var int
     **/
    public const REDIRECT = 451;

    /**
     * UNAVAILABLE_FOR_LEGAL_REASONS
     *
     * This constant define the code used for a http UNAVAILABLE_FOR_LEGAL_REASONS status
     *
     * @var int
     **/
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * REQUEST_HEADER_TOO_LARGE
     *
     * This constant define the code used for a http REQUEST_HEADER_TOO_LARGE status
     *
     * @var int
     **/
    public const REQUEST_HEADER_TOO_LARGE = 494;

    /**
     * CERT_ERROR
     *
     * This constant define the code used for a http CERT_ERROR status
     *
     * @var int
     **/
    public const CERT_ERROR = 495;

    /**
     * NO_CERT
     *
     * This constant define the code used for a http NO_CERT status
     *
     * @var int
     **/
    public const NO_CERT = 496;

    /**
     * HTTP_TO_HTTPS
     *
     * This constant define the code used for a http HTTP_TO_HTTPS status
     *
     * @var int
     **/
    public const HTTP_TO_HTTPS = 497;

    /**
     * CLIENT_CLOSED_REQUEST
     *
     * This constant define the code used for a http CLIENT_CLOSED_REQUEST status
     *
     * @var int
     **/
    public const CLIENT_CLOSED_REQUEST = 499;

    /**
     * INTERNAL_SERVER_ERROR
     *
     * This constant define the code used for a http INTERNAL_SERVER_ERROR status
     *
     * @var int
     **/
    public const INTERNAL_SERVER_ERROR = 500;

    /**
     * NOT_IMPLEMENTED
     *
     * This constant define the code used for a http NOT_IMPLEMENTED status
     *
     * @var int
     **/
    public const NOT_IMPLEMENTED = 501;

    /**
     * BAD_GATEWAY
     *
     * This constant define the code used for a http BAD_GATEWAY status
     *
     * @var int
     **/
    public const BAD_GATEWAY = 502;

    /**
     * SERVICE_UNAVAILABLE
     *
     * This constant define the code used for a http SERVICE_UNAVAILABLE status
     *
     * @var int
     **/
    public const SERVICE_UNAVAILABLE = 503;

    /**
     * GATEWAY_TIMEOUT
     *
     * This constant define the code used for a http GATEWAY_TIMEOUT status
     *
     * @var int
     **/
    public const GATEWAY_TIMEOUT = 504;

    /**
     * HTTP_VERSION_NOT_SUPPORTED
     *
     * This constant define the code used for a http HTTP_VERSION_NOT_SUPPORTED status
     *
     * @var int
     **/
    public const HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * VARIANT_ALSO_NEGOTIATES
     *
     * This constant define the code used for a http VARIANT_ALSO_NEGOTIATES status
     *
     * @var int
     **/
    public const VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * INSUFFICIENT_STORAGE
     *
     * This constant define the code used for a http INSUFFICIENT_STORAGE status
     *
     * @var int
     **/
    public const INSUFFICIENT_STORAGE = 507;

    /**
     * LOOP_DETECTED
     *
     * This constant define the code used for a http LOOP_DETECTED status
     *
     * @var int
     **/
    public const LOOP_DETECTED = 508;

    /**
     * BANDWIDTH_LIMIT_EXCEEDED
     *
     * This constant define the code used for a http BANDWIDTH_LIMIT_EXCEEDED status
     *
     * @var int
     **/
    public const BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * NOT_EXTENDED
     *
     * This constant define the code used for a http NOT_EXTENDED status
     *
     * @var int
     **/
    public const NOT_EXTENDED = 510;

    /**
     * NETWORK_AUTHENTICATION_REQUIRED
     *
     * This constant define the code used for a http NETWORK_AUTHENTICATION_REQUIRED status
     *
     * @var int
     **/
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * NETWORK_READ_TIMEOUT_ERROR
     *
     * This constant define the code used for a http NETWORK_READ_TIMEOUT_ERROR status
     *
     * @var int
     **/
    public const NETWORK_READ_TIMEOUT_ERROR = 598;

    /**
     * NETWORK_CONNECT_TIMEOUT_ERROR
     *
     * This constant define the code used for a http NETWORK_CONNECT_TIMEOUT_ERROR status
     *
     * @var int
     **/
    public const NETWORK_CONNECT_TIMEOUT_ERROR = 599;
}
