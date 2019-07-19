<?php

namespace PhpTheme\CoolAdminTheme;

class Table extends \PhpTheme\Bootstrap4\Table
{

    protected $tableColumnClass = TableColumn::class;

    public $defaultOptions = [
        'class' => 'table table-borderless table-data3'
    ];

    public function run()
    {
        $content = parent::run();

        return $this->render('table', [
            'content' => $content
        ]);
    }

}