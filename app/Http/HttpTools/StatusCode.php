<?php 

namespace App\Http\HttpTools;

/**
 * represent an Enum that contents Http status codes
 */
class StatusCode
{
    const OK_STATUS_CODE = 200;
    const CREATED_STATUS_CODE = 201;
    const NO_CONTENT_STATUS_CODE = 204;

    const BAD_REQUEST_STATUS_CODE = 400;
    const UNAUTHORIZED_STATUS_CODE = 401;
    const FORBIDDEN_STATUS_CODE = 403;
    const NOT_FOUND_STATUS_CODE = 404;
}
