<?php

namespace PhpTheme\CoolAdminTheme;

class Theme extends \PhpTheme\Core\Theme
{

    protected $alertClass = Alert::class;

    protected $popupClass = Popup::class;

    protected $cardClass = Card::class;

    protected $layoutClass = Layout::class;

    protected $loginLayoutClass = LoginLayout::class;

    protected $mainLayoutClass = MainLayout::class;    

    protected $menuClass = Menu::class;

    protected $accountMenuClass = AccountMenu::class;

    protected $mainMenuClass = MainMenu::class;

    protected $mobileMainMenuClass = MobileMainMenu::class;

    protected $optionsMenuClass = OptionsMenu::class;

    protected $actionsMenuClass = ActionsMenu::class;

    protected $breadcrumbsClass = Breadcrumbs::class;

    protected $accountClass = Account::class;

    protected $mobileAccountClass = MobileAccount::class;

    protected $notificationsClass = Notifications::class;

    protected $tableClass = Table::class;

    protected $formGroupClass = FormGroup::class;

    public $lang = 'en';

    protected $_layout;

    public function beginLayout(array $params = [])
    {
        $this->_layout = $this->beginWidget($this->layoutClass, $params);

        return $this->_layout;
    }

    public function endLayout()
    {
        echo $this->endWidget($this->_layout);
    }

    public function layout(array $params = [])
    {
        return $this->widget($this->layoutClass, $params);
    }

    public function loginLayout(array $params = [])
    {
        return $this->widget($this->loginLayoutClass, $params);
    }

    public function mainLayout(array $params = [])
    {
        return $this->widget($this->mainLayoutClass, $params);
    }

    public function alert(array $params = [])
    {
        return $this->widget($this->alertClass, $params);
    }
    
    public function popup(array $params = [])
    {
        return $this->widget($this->popupClass, $params);
    }

    public function card(array $params = [])
    {
        return $this->widget($this->cardClass, $params);
    }

    public function formGroup(array $params = [])
    {
        return $this->widget($this->formGroupClass, $params);
    }

    public function breadcrumbs(array $params = [])
    {
        return $this->widget($this->breadcrumbsClass, $params);
    }

    public function mainMenu(array $params = [])
    {
        return $this->widget($this->mainMenuClass, $params);
    }

    public function mobileMainMenu(array $params = [])
    {
        return $this->widget($this->mobileMainMenuClass, $params);
    }

    public function accountMenu(array $params = [])
    {
        return $this->widget($this->accountMenuClass, $params);
    }

    public function optionsMenu(array $params = [])
    {
        return $this->widget($this->optionsMenuClass, $params);
    }

    public function actionsMenu(array $params = [])
    {
        return $this->widget($this->actionsMenuClass, $params);
    }

    public function account(array $params = [])
    {
        return $this->widget($this->accountClass, $params);
    }

    public function mobileAccount(array $params = [])
    {
        return $this->widget($this->mobileAccountClass, $params);
    }

    public function notifications(array $params = [])
    {
        return $this->widget($this->notificationsClass, $params);
    }

    public function menu(array $params = [])
    {
        return $this->widget($this->menuClass, $params);
    }

}