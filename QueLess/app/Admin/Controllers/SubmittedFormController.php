<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\SubmittedForm;

class SubmittedFormController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SubmittedForm';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SubmittedForm());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('full_name', __('Full name'));
        $grid->column('age', __('Age'));
        $grid->column('physical_address', __('Physical address'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('email_address', __('Email address'));
        $grid->column('file_name', __('File name'));
        $grid->column('file_path', __('File path'));
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
        $show = new Show(SubmittedForm::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('full_name', __('Full name'));
        $show->field('age', __('Age'));
        $show->field('physical_address', __('Physical address'));
        $show->field('phone_number', __('Phone number'));
        $show->field('email_address', __('Email address'));
        $show->field('file_name', __('File name'));
        $show->field('file_path', __('File path'));
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
        $form = new Form(new SubmittedForm());

        $form->number('user_id', __('User id'));
        $form->text('full_name', __('Full name'));
        $form->number('age', __('Age'));
        $form->text('physical_address', __('Physical address'));
        $form->text('phone_number', __('Phone number'));
        $form->text('email_address', __('Email address'));
        $form->text('file_name', __('File name'));
        $form->text('file_path', __('File path'));

        return $form;
    }
}
