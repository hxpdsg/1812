<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Encore\Admin\Layout\Content;

class ClassifyController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->title("分类管理")
            ->description($this->description['index'] ?? trans('admin.list'))
            ->body($this->grid());
    }
}
