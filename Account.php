<?php

namespace PhpTheme\CoolAdminTheme;

class Account extends \PhpTheme\Core\Widget
{

    const TEMPLATE = 'account';

    public $avatarUrl;

    public function run()
    {
        $avatarUrl = $this->avatarUrl;

        if ($avatarUrl === null)
        {
            $avatarUrl = $this->theme->baseUrl . '/images/icon/avatar-01.jpg';
        }

        return $this->render(static::TEMPLATE, [
            'avatarUrl' => $avatarUrl
        ]);
    }

}