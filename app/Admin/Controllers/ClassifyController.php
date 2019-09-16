<?php

namespace App\Admin\Controllers;

use App\Model\ClassifyModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ClassifyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\ClassifyModel';

    /**
     * Make a grid builder.
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ClassifyModel);

        $grid->column('s_id', __('S id'));
        $grid->column('s_type', __('S type'));
        $grid->column('s_desc', __('S desc'));

        return $grid;
    }

    /**4300979123067
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ClassifyModel::findOrFail($id));

        $show->field('s_id', __('S id'));
        $show->field('s_name', __('S name'));
        $show->field('s_type', __('S type'));
        $show->field('s_desc', __('S desc'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ClassifyModel);

        $form->text('s_name', __('S name'));
        $form->text('s_type', __('S type'));
        $form->textarea('s_desc', __('S desc'));

        return $form;
    }
}
