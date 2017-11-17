<?php
namespace Ridibooks\Platform\Common\Base;

use Ridibooks\Platform\Common\Constant\PlatformConnectionGroup;

abstract class CommonModuleBaseService
{
	/** @var string */
	protected $connection_group_name;

	public static function getMasterInstance()
	{
		return new static(PlatformConnectionGroup::COMMON_MODULE_WRITE);
	}

	public static function getDefaultInstance()
	{
		return new static(PlatformConnectionGroup::COMMON_MODULE_READ);
	}

	protected function __constuct(string $connection_group_name)
	{
		$this->connection_group_name = $connection_group_name;
	}
}
