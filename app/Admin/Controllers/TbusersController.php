<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Tbusers;

class TbusersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Tbusers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tbusers());

        $grid->column('id', __('Id'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('email', __('Email'));
        $grid->column('password', __('Password'));
        $grid->column('reconfirm_password', __('Reconfirm password'));
        $grid->column('address', __('Address'));
        $grid->column('security_question', __('Security question'));
        $grid->column('security_answer', __('Security answer'));
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
        $show = new Show(Tbusers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('phone_number', __('Phone number'));
        $show->field('email', __('Email'));
        $show->field('password', __('Password'));
        $show->field('reconfirm_password', __('Reconfirm password'));
        $show->field('address', __('Address'));
        $show->field('security_question', __('Security question'));
        $show->field('security_answer', __('Security answer'));
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
        $form = new Form(new Tbusers());

        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->text('phone_number', __('Phone number'));
        $form->email('email', __('Email'));
        $form->password('password', __('Password'));
        $form->text('reconfirm_password', __('Reconfirm password'));
        $form->text('address', __('Address'));
        $form->text('security_question', __('Security question'));
        $form->text('security_answer', __('Security answer'));

        return $form;
    }
}
