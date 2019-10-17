<?php

namespace PhpTheme\CoolAdminTheme;

class Theme extends \PhpTheme\Bootstrap4\Theme
{

    const ALERT = Alert::class;

    const POPUP = Popup::class;

    const CARD = Card::class;

    const LAYOUT = Layout::class;

    const LOGIN_LAYOUT = LoginLayout::class;

    const MAIN_LAYOUT = MainLayout::class;    

    const MENU = Menu::class;

    const ACCOUNT_MENU = AccountMenu::class;

    const MAIN_MENU = MainMenu::class;

    const MOBILE_MAIN_MENU = MobileMainMenu::class;

    const OPTIONS_MENU = OptionsMenu::class;

    const ACTIONS_MENU = ActionsMenu::class;

    const BREADCRUMBS = Breadcrumbs::class;

    const ACCOUNT = Account::class;

    const MOBILE_ACCOUNT = MobileAccount::class;

    const NOTIFICATIONS = Notifications::class;

    const TABLE = Table::class;

    const FORM_GROUP = FormGroup::class;

    public $lang = 'en';

    protected $_layout;

    public function beginLayout(array $params = [])
    {
        $this->_layout = $this->beginWidget(static::LAYOUT, $params);

        return $this->_layout;
    }

    public function endLayout()
    {
        $this->endWidget($this->_layout);
    }

    public function layout(array $params = [])
    {
        return $this->widget(static::LAYOUT, $params);
    }

    public function loginLayout(array $params = [])
    {
        return $this->widget(static::LOGIN_LAYOUT, $params);
    }

    public function mainLayout(array $params = [])
    {
        return $this->widget(static::MAIN_LAYOUT, $params);
    }

    public function alert(array $params = [])
    {
        return $this->widget(static::ALERT, $params);
    }
    
    public function popup(array $params = [])
    {
        return $this->widget(static::POPUP, $params);
    }

    public function card(array $params = [])
    {
        return $this->widget(static::CARD, $params);
    }

    public function formGroup(array $params = [])
    {
        return $this->widget(static::FORM_GROUP, $params);
    }

    public function breadcrumbs(array $params = [])
    {
        return $this->widget(static::BREADCRUMBS, $params);
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

    public function mainMenu(array $params = [])
    {
        return $this->widget(static::MAIN_MENU, $params);
    }

    public function mobileMainMenu(array $params = [])
    {
        return $this->widget(static::MOBILE_MAIN_MENU, $params);
    }

    public function accountMenu(array $params = [])
    {
        return $this->widget(static::ACCOUNT_MENU, $params);
    }

    public function optionsMenu(array $params = [])
    {
        return $this->widget(static::OPTIONS_MENU, $params);
    }

    public function actionsMenu(array $params = [])
    {
        return $this->widget(static::ACTIONS_MENU, $params);
    }

}