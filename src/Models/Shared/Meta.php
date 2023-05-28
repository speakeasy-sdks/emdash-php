<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


class Meta
{
	#[\JMS\Serializer\Annotation\SerializedName('limit')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $limit;
    
	#[\JMS\Serializer\Annotation\SerializedName('page')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $page;
    
	#[\JMS\Serializer\Annotation\SerializedName('total')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $total;
    
	public function __construct()
	{
		$this->limit = 0;
		$this->page = 0;
		$this->total = 0;
	}
}
