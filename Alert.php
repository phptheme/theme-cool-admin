<?php

namespace PhpTheme\CoolAdminTheme;

class Alert extends \PhpTheme\Core\ThemeWidget
{

	protected $types = [
		'error' => 'danger'
	];

	protected $type = 'error';

	protected $message;

	public function toString() : string
	{
		$type = strtr($this->type, $this->types);

		return $this->render('alert', [
			'message' => $this->message,
			'type' => $type
		]);
	}

}