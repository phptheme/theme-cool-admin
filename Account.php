<?php

namespace PhpTheme\CoolAdminTheme;

class Account extends \PhpTheme\Core\Widget
{

    const TEMPLATE = 'account';

    public $userAvatarUrl;

    public $logoutUrl = '#';

    public $logoutLabel = 'Logout';
    
    public $userUrl = '#'; 

    public $userName;

    public $userEmail;

    public $menu = [];

    protected function createMenu(array $params)
    {
        return $this->theme->accountMenu($params);
    }

    public function run()
    {
        $userAvatarUrl = $this->userAvatarUrl;

        if ($userAvatarUrl === null)
        {
            $userAvatarUrl = $this->theme->baseUrl . '/images/icon/avatar-01.jpg';
        }

        $menu = $this->menu;

        if (is_array($menu))
        {
            $menu = $this->createMenu($this->menu);
        }

        return $this->render(static::TEMPLATE, [
            'userAvatarUrl' => $userAvatarUrl,
            'logoutUrl' => $this->logoutUrl,
            'logoutLabel' => $this->logoutLabel,
            'userName' => $this->userName,
            'userEmail' => $this->userEmail,
            'userUrl' => $this->userUrl,
            'menu' => $menu
        ]);
    }

}