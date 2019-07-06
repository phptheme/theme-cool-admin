<?php

namespace PhpTheme\CoolAdminTheme;

class Theme extends \PhpTheme\Core\Theme
{

    const LAYOUT = Layout::class;

    const MENU = Menu::class;

    const MAIN_MENU = MainMenu::class;

    const OPTIONS_MENU = OptionsMenu::class;

    const ACTIONS_MENU = ActionsMenu::class;

    const BREADCRUMBS = Breadcrumbs::class;

    const ACCOUNT = Account::class;

    const MOBILE_ACCOUNT = MobileAccount::class;

    const NOTIFICATIONS = Notifications::class;

    protected $_layout;

    public function beginLayout(array $params = [])
    {
        $this->_layout = $this->beginWidget(static::LAYOUT, $params);

        return $this->_layout;
    }

    public function endLayout()
    {
        echo $this->endWidget($this->_layout);
    }

    public function breadcrumbs(array $params = [])
    {
        return $this->widget(static::BREADCRUMBS, $params);
    }

    public function mainMenu(array $params = [])
    {
        return $this->widget(static::MAIN_MENU, $params);
    }

    public function optionsMenu(array $params = [])
    {
        return $this->widget(static::OPTIONS_MENU, $params);
    }

    public function actionsMenu(array $params = [])
    {
        return $this->widget(static::ACTIONS_MENU, $params);
    }

    public function account(array $params = [])
    {
        return $this->widget(static::ACCOUNT, $params);
    }

    public function mobileAccount(array $params = [])
    {
        return $this->widget(static::MOBILE_ACCOUNT, $params);
    }

    public function notifications(array $params = [])
    {
        return $this->widget(static::NOTIFICATIONS, $params);
    }

    public function menu(array $params = [])
    {
        return $this->widget(static::MENU, $params);
    }

}