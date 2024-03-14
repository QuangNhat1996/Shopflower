<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Blogs;

class BlogsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Blogs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Blogs());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('name', __('Name'));
        $grid->column('time', __('Time'));
        $grid->column('date', __('Date'));
        $grid->column('image', __('Image'));
        $grid->column('content', __('Content'));
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
        $show = new Show(Blogs::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('name', __('Name'));
        $show->field('time', __('Time'));
        $show->field('date', __('Date'));
        $show->field('image', __('Image'));
        $show->field('content', __('Content'));
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
        $form = new Form(new Blogs());

        $form->text('title', __('Title'));
        $form->text('name', __('Name'));
        $form->time('time', __('Time'))->default(date('H:i:s'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->image('image', __('Image'));
        $form->text('content', __('Content'));

        return $form;
    }
}
