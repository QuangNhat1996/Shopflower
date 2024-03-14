<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Formfeed;

class FormfeedbackController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Formfeed';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Formfeed());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('feedback', __('Feedback'));
        $grid->column('subject', __('Subject'));
        $grid->column('user_id', __('User id'));
        $grid->column('reply', __('Reply'));
        $grid->column('reply_date', __('Reply date'));
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
        $show = new Show(Formfeed::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('feedback', __('Feedback'));
        $show->field('subject', __('Subject'));
        $show->field('user_id', __('User id'));
        $show->field('reply', __('Reply'));
        $show->field('reply_date', __('Reply date'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Formfeed());

        $form->textarea('reply', __('Reply'));


        return $form;
    }
}
