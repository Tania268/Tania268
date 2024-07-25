<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Passport;

class PassportController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Passport';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Passport());

        $grid->column('id', __('Id'));
        $grid->column('fullname', __('Fullname'));
        $grid->column('email', __('Email'));
        $grid->column('physical_address', __('Physical address'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('department', __('Department'));
        $grid->column('documents', __('Documents'));
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
        $show = new Show(Passport::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('fullname', __('Fullname'));
        $show->field('email', __('Email'));
        $show->field('physical_address', __('Physical address'));
        $show->field('phone_number', __('Phone number'));
        $show->field('department', __('Department'));
        $show->field('documents', __('Documents'));
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
        $form = new Form(new Passport());

        $form->text('fullname', __('Fullname'));
        $form->email('email', __('Email'));
        $form->text('physical_address', __('Physical address'));
        $form->text('phone_number', __('Phone number'));
        $form->text('department', __('Department'));
        $form->text('documents', __('Documents'));

        return $form;
    }
}
