<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace OpenAPI\OpenAPI\Models\Operations;


class AuthenticateResponse
{
    /**
     * An error occurred interacting with the API.
     * 
     * @var ?\OpenAPI\OpenAPI\Models\Components\APIError $apiError
     */
	
    public ?\OpenAPI\OpenAPI\Models\Components\APIError $apiError = null;
    
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * An unknown error occurred interacting with the API.
     * 
     * @var ?\OpenAPI\OpenAPI\Models\Components\Error $error
     */
	
    public ?\OpenAPI\OpenAPI\Models\Components\Error $error = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * The api key to use for authenticated endpoints.
     * 
     * @var ?\OpenAPI\OpenAPI\Models\Operations\AuthenticateResponseBody $object
     */
	
    public ?AuthenticateResponseBody $object = null;
    
	public function __construct()
	{
		$this->apiError = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->object = null;
	}
}
