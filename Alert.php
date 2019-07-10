<?php

namespace PhpTheme\CoolAdminTheme;

class Alert extends \PhpTheme\Core\Widget
{

	protected $types = [
		'error' => 'danger'
	];

	protected $type = 'error';

	protected $message;

	public function run()
	{
		$type = strtr($this->type, $this->types);

		return $this->render('alert', [
			'message' => $this->message,
			'type' => $type
		]);
	}

}