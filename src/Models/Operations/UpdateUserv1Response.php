<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace vitor_test\Acme\Models\Operations;


class UpdateUserv1Response
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Default error response
     * 
     * @var ?\vitor_test\Acme\Models\Shared\Error $error
     */
	
    public ?\vitor_test\Acme\Models\Shared\Error $error = null;
    
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
     * OK
     * 
     * @var ?\vitor_test\Acme\Models\Shared\User $user
     */
	
    public ?\vitor_test\Acme\Models\Shared\User $user = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->user = null;
	}
}
