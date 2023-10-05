<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace vitor_test\Acme\Models\Shared;


/**
 * Success - The `Status` type defines a successful response.
 * 
 * @package vitor_test\Acme\Models\Shared
 * @access public
 */
class Success
{
	#[\JMS\Serializer\Annotation\SerializedName('success')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $success = null;
    
	public function __construct()
	{
		$this->success = null;
	}
}
