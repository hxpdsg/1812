<?php

namespace App\Admin\Controllers;

use App\Model\CategoryModel;
use App\Model\GoodsModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\GoodsModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GoodsModel);

        $grid->column('id', __('Id'));
        $grid->column('cid', __('Cid'));
        $grid->column('title', __('Title'));
        $grid->column('price0', __('Price0'));
        $grid->column('price', __('Price'));
        $grid->column('img', __('Img'))->image();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(GoodsModel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('cid', __('Cid'));
        $show->field('title', __('Title'));
        $show->field('price0', __('Price0'));
        $show->field('price', __('Price'));
        $show->field('img', __('Img'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new GoodsModel);

        $form->select('cid', __('分类'))->options(CategoryModel::selectOptions());
        $form->text('title', __('Title'));
        $form->number('price0', __('Price0'));
        $form->number('price', __('Price'));
        $form->image('img', __('Img'));

        return $form;
    }
}
