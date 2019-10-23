<?php

namespace PhpTheme\CoolAdminTheme;

class Table extends \PhpTheme\Bootstrap4\Table
{

    const COLUMN = TableColumn::class;

    public $attributes = [
        'class' => 'table table-borderless table-data3'
    ];

    public $template = '<div class="table-responsive m-b-40">{table}</div>';

    public function render()
    {
        $content = parent::render();

        return strtr($this->template, ['{table}' => $content]);
    }

}