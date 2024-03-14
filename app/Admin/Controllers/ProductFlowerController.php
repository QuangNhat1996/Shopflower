<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Product;

class ProductFlowerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductFlower';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('product_id', __('Product id'));
        $grid->column('image', __('Image'));
        $grid->column('product_name', __('Product name'));
        $grid->column('product_price', __('Product price'));
        $grid->column('product_quantity', __('Product quantity'));
        $grid->column('product_description', __('Product description'));
        $grid->column('category_id', __('Category id'));
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
        $show = new Show(Product::findOrFail($id));

        $show->field('product_id', __('Product id'));
        $show->field('image', __('Image'));
        $show->field('product_name', __('Product name'));
        $show->field('product_price', __('Product price'));
        $show->field('product_quantity', __('Product quantity'));
        $show->field('product_description', __('Product description'));
        $show->field('category_id', __('Category id'));
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
        $form = new Form(new Product());
        $form->text('product_id', __('Product id'));
        $form->image('image', __('Image'));
        $form->text('product_name', __('Product name'));
        $form->number('product_price', __('Product price'));
        $form->number('product_quantity', __('Product quantity'));
        $form->textarea('product_description', __('Product description'));
        $form->text('category_id', __('Category id'));

        return $form;
    }
}
