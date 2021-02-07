<?php

namespace App\Http\HttpTools;

abstract class HttpResponse
{
    protected function response(int $status_code, $body = "", $header = [])
    {
        return response($body, $status_code, $header);
    }

    /**
     * represents a response with 200 status code 
     */
    public function ok($response = "", $header = [])
    {
        return $this->response(StatusCode::OK_STATUS_CODE, $response, $header);
    }

    /**
     * represents a response with 204 status code 
     */
    public function noContent($response = "", $header = [])
    {
        return $this->response(StatusCode::NO_CONTENT_STATUS_CODE, $response, $header);
    }

    /**
     * represents a response with 201 status code 
     */
    public function created($response = "", $header = [])
    {
        return $this->response(StatusCode::CREATED_STATUS_CODE, $response, $header);
    }

    /**
     * represents a response with 400 status code 
     */
    public function badRequest($response = "", $header = [])
    {
        return $this->response(StatusCode::BAD_REQUEST_STATUS_CODE, $response, $header);
    }

    /**
     * represents a response with 401 status code 
     */
    public function unauthorized($response = "", $header = [])
    {
        return $this->response(StatusCode::UNAUTHORIZED_STATUS_CODE, $response, $header);
    }

    /**
     * represents a response with 404 status code 
     */
    public function notFound($reponse = "", $header = [])
    {
        return $this->response(StatusCode::NOT_FOUND_STATUS_CODE, $reponse, $header);
    }

    /**
     * represents a response with 403 status code 
     */
    public function forbidden($response = "", $header = [])
    {
        return $this->response(StatusCode::FORBIDDEN_STATUS_CODE, $response, $header);
    }
}
