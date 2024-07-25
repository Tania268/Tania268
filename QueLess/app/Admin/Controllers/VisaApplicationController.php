<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\VisaApplication;

class VisaApplicationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'VisaApplication';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VisaApplication());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('full_name', __('Full name'));
        $grid->column('age', __('Age'));
        $grid->column('email_address', __('Email address'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('completed_form', __('Completed form'));
        $grid->column('police_certificate', __('Police certificate'));
        $grid->column('passport_photo_1', __('Passport photo 1'));
        $grid->column('passport_photo_2', __('Passport photo 2'));
        $grid->column('medical_references', __('Medical references'));
        $grid->column('employer_motivation_letter', __('Employer motivation letter'));
        $grid->column('qualification_copies', __('Qualification copies'));
        $grid->column('position_proof', __('Position proof'));
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
        $show = new Show(VisaApplication::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('full_name', __('Full name'));
        $show->field('age', __('Age'));
        $show->field('email_address', __('Email address'));
        $show->field('phone_number', __('Phone number'));
        $show->field('completed_form', __('Completed form'));
        $show->field('police_certificate', __('Police certificate'));
        $show->field('passport_photo_1', __('Passport photo 1'));
        $show->field('passport_photo_2', __('Passport photo 2'));
        $show->field('medical_references', __('Medical references'));
        $show->field('employer_motivation_letter', __('Employer motivation letter'));
        $show->field('qualification_copies', __('Qualification copies'));
        $show->field('position_proof', __('Position proof'));
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
        $form = new Form(new VisaApplication());

        $form->number('user_id', __('User id'));
        $form->text('full_name', __('Full name'));
        $form->number('age', __('Age'));
        $form->text('email_address', __('Email address'));
        $form->text('phone_number', __('Phone number'));
        $form->text('completed_form', __('Completed form'));
        $form->text('police_certificate', __('Police certificate'));
        $form->text('passport_photo_1', __('Passport photo 1'));
        $form->text('passport_photo_2', __('Passport photo 2'));
        $form->text('medical_references', __('Medical references'));
        $form->text('employer_motivation_letter', __('Employer motivation letter'));
        $form->text('qualification_copies', __('Qualification copies'));
        $form->text('position_proof', __('Position proof'));

        return $form;
    }
}
