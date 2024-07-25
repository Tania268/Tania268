<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\CompanyRegistration;

class CompanyRegistrationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CompanyRegistration';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */

    protected function grid()
    {
        $grid = new Grid(new CompanyRegistration());

        $grid->column('id', __('Id'));
        $grid->column('fullname', __('Fullname'));
        $grid->column('email', __('Email'));
        $grid->column('physical_address', __('Physical address'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('company_name', __('Company name'));
        $grid->column('application_letter', __('Application letter'));
        $grid->column('reservation_status', __('Reservation status'));
        $grid->column('payment_status', __('Payment status'));
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
        $show = new Show(CompanyRegistration::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('fullname', __('Fullname'));
        $show->field('email', __('Email'));
        $show->field('physical_address', __('Physical address'));
        $show->field('phone_number', __('Phone number'));
        $show->field('company_name', __('Company name'));
        $show->field('application_letter', __('Application letter'));
        $show->field('reservation_status', __('Reservation status'));
        $show->field('payment_status', __('Payment status'));
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
        $form = new Form(new CompanyRegistration());

        $form->text('fullname', __('Fullname'));
        $form->email('email', __('Email'));
        $form->text('physical_address', __('Physical address'));
        $form->text('phone_number', __('Phone number'));
        $form->text('company_name', __('Company name'));
        $form->text('application_letter', __('Application letter'));
        $form->text('reservation_status', __('Reservation status'))->default('pending');
        $form->switch('payment_status', __('Payment status'));
        $form->text('documents', __('Documents'));

        return $form;
    }
}
