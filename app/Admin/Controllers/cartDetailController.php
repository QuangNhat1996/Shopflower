<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\cartDetail;

class cartDetailController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'cartDetail';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new cartDetail());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('bill_id', __('Bill id'));
        $grid->column('product', __('Product'));
        $grid->column('price', __('Price'));
        $grid->column('user_name', __('User name'));
        $grid->column('user_email', __('User email'));
        $grid->column('user_address', __('User address'));
        $grid->column('user_phone', __('User phone'));
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
        $show = new Show(cartDetail::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('bill_id', __('Bill id'));
        $show->field('product', __('Product'));
        $show->field('price', __('Price'));
        $show->field('user_name', __('User name'));
        $show->field('user_email', __('User email'));
        $show->field('user_address', __('User address'));
        $show->field('user_phone', __('User phone'));
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
        $form = new Form(new cartDetail());

        $form->number('user_id', __('User id'));
        $form->text('bill_id', __('Bill id'));
        $form->text('product', __('Product'));
        $form->text('price', __('Price'));
        $form->text('user_name', __('User name'));
        $form->text('user_email', __('User email'));
        $form->text('user_address', __('User address'));
        $form->text('user_phone', __('User phone'));

        return $form;
    }
}
