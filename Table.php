<?php

namespace PhpTheme\Themes\CoolAdmin;

class Table extends \PhpTheme\Bootstrap4\Table
{

    const COLUMN = TableColumn::class;

    public $attributes = [
        'class' => 'table table-borderless table-data3'
    ];

    public $template = '<div class="table-responsive m-b-40">{table}</div>';

    public function toString() : string
    {
        $content = parent::toString();

        return strtr($this->template, ['{table}' => $content]);
    }

}