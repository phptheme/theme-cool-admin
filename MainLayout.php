<?php

namespace PhpTheme\CoolAdminTheme;

class MainLayout extends \PhpTheme\Core\Widget
{

    public $title = '';

    public $logoUrl;

    public $homeUrl = '#';

    public $copyright = 'Copyright © 2018 - {year} My Company. All rights reserved.';

    public $breadcrumbs = [];

    public $mainMenu = [];

    public $content;

    public $notifications;

    public $account = [];

    public $optionsMenu = [];

    public $actionsMenu = [];

    protected function createBreadcrumbs()
    {
        $breadcrumbs = $this->breadcrumbs;

        if (is_array($breadcrumbs))
        {
            $breadcrumbs['actionsMenu'] = $this->actionsMenu;

            $breadcrumbs = $this->theme->breadcrumbs($breadcrumbs);
        }

        return $breadcrumbs;
    }

    public function run()
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
            'actionsMenu' => $this->actionsMenu,
            'mainMenu' => $this->mainMenu,
            'content' => $this->content,
            'notifications' => $this->notifications,
            'optionsMenu' => $this->optionsMenu,
            'account' => $this->account,
            'homeUrl' => $this->homeUrl,
            'logoUrl' => $logoUrl
        ]);
    }

}
