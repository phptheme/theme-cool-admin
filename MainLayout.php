<?php

namespace PhpTheme\Themes\CoolAdmin;

class MainLayout extends \PhpTheme\Core\Widget
{

    public $title = '';

    public $logoUrl;

    public $homeUrl = '#';

    public $copyright = 'Copyright © 2018 - {year} My Company. All rights reserved.';

    public $breadcrumbs = [];

    public $breadcrumbsOptions = [];

    public $mainMenu = [];

    public $mainMenuOptions = [];

    public $mobileMainMenuOptions = [];

    public $content;

    //public $notificationMenu;

    //public $notificactioMenuOptions = [];

    public $account = [];

    public $optionsMenu = [];

    public $optionsMenuOptions = [];

    public $actionMenu = [];

    public $actionMenuOptions = [];

    public $errorMessages = [];

    public $successMessages = [];

    public $infoMessages = [];

    public function toString() : string
    {
        $logoUrl = $this->logoUrl;

        if ($logoUrl === null)
        {
            $logoUrl = $this->theme->baseUrl . '/images/icon/logo-white.png';
        }

        return $this->render('main-layout', [
            'title' => $this->title,
            'copyright' => strtr($this->copyright, ['{year}' => date('Y')]),
            'breadcrumbs' => $this->createBreadcrumbs(),
            'actionMenu' => $this->createActionMenu(),
            'mainMenu' => $this->createMainMenu(),
            'mobileMainMenu' => $this->createMobileMainMenu(),
            'content' => $this->content,
            //'notifications' => $this->notifications,
            'optionsMenu' => $this->createOptionsMenu(),
            'account' => $this->account,
            'homeUrl' => $this->homeUrl,
            'logoUrl' => $logoUrl,
            'errorMessages' => $this->errorMessages,
            'infoMessages' => $this->infoMessages,
            'successMessages' => $this->successMessages
        ]);
    }

    protected function createMainMenu()
    {
        $options = $this->mainMenuOptions;

        $options['items'] = $this->mainMenu;

        return $this->theme->mainMenu($options);
    }

    protected function createMobileMainMenu()
    {
        $options = $this->mobileMainMenuOptions;

        $options['items'] = $this->mainMenu;

        return $this->theme->mainMenu($options);
    }

    protected function createActionMenu()
    {
        $options = $this->actionMenuOptions;

        $options['items'] = $this->actionMenu;

        return $this->theme->actionMenu($options);
    }    

    protected function createBreadcrumbs()
    {
        $options = $this->breadcrumbsOptions;

        $options['actionMenu'] = $this->actionMenu;

        $options['actionMenuOptions'] = $this->actionMenuOptions;

        $options['items'] = $this->breadcrumbs;

        return $this->theme->breadcrumbs($options);
    }

    protected function createOptionsMenu()
    {
        $options = $this->optionsMenuOptions;

        $options['items'] = $this->optionsMenu;

        return $this->theme->optionsMenu($options);
    }

}