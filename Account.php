<?php

namespace PhpTheme\CoolAdminTheme;

class Account extends \PhpTheme\Core\Widget
{

    const TEMPLATE = 'account';

    public $avatarUrl;

    public $logoutUrl = '#';

    public $logoutLabel = 'Logout';
    
    public $profileUrl = '#'; 

    public $name;

    public $description;

    public $menu = [];

    protected function createMenu(array $params)
    {
        return $this->theme->accountMenu($params);
    }

    public function run()
    {
        $avatarUrl = $this->avatarUrl;

        if ($avatarUrl === null)
        {
            $avatarUrl = $this->theme->baseUrl . '/images/icon/avatar-01.jpg';
        }

        $menu = $this->menu;

        if (is_array($menu))
        {
            $menu = $this->createMenu($this->menu);
        }

        return $this->render(static::TEMPLATE, [
            'avatarUrl' => $avatarUrl,
            'logoutUrl' => $this->logoutUrl,
            'logoutLabel' => $this->logoutLabel,
            'name' => $this->name,
            'description' => $this->description,
            'profileUrl' => $this->profileUrl,
            'menu' => $menu
        ]);
    }

}