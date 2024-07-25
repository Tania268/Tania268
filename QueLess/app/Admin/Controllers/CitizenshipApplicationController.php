<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\CitizenshipApplication;

class CitizenshipApplicationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CitizenshipApplication';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CitizenshipApplication());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('class', __('Class'));
        $grid->column('application_form', __('Application form'));
        $grid->column('finger_prints', __('Finger prints'));
        $grid->column('covering_letter', __('Covering letter'));
        $grid->column('residence_permit_or_birth_certificate', __('Residence permit or birth certificate'));
        $grid->column('passport_photo_1', __('Passport photo 1'));
        $grid->column('passport_photo_2', __('Passport photo 2'));
        $grid->column('non_swazi_pin', __('Non swazi pin'));
        $grid->column('covering_letter_from_husband', __('Covering letter from husband'));
        $grid->column('husband_birth_certificate', __('Husband birth certificate'));
        $grid->column('marriage_certificate', __('Marriage certificate'));
        $grid->column('husband_pin', __('Husband pin'));
        $grid->column('wife_pin', __('Wife pin'));
        $grid->column('birth_certificate', __('Birth certificate'));
        $grid->column('parents_citizenship_status', __('Parents citizenship status'));
        $grid->column('passport_number', __('Passport number'));
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
        $show = new Show(CitizenshipApplication::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('class', __('Class'));
        $show->field('application_form', __('Application form'));
        $show->field('finger_prints', __('Finger prints'));
        $show->field('covering_letter', __('Covering letter'));
        $show->field('residence_permit_or_birth_certificate', __('Residence permit or birth certificate'));
        $show->field('passport_photo_1', __('Passport photo 1'));
        $show->field('passport_photo_2', __('Passport photo 2'));
        $show->field('non_swazi_pin', __('Non swazi pin'));
        $show->field('covering_letter_from_husband', __('Covering letter from husband'));
        $show->field('husband_birth_certificate', __('Husband birth certificate'));
        $show->field('marriage_certificate', __('Marriage certificate'));
        $show->field('husband_pin', __('Husband pin'));
        $show->field('wife_pin', __('Wife pin'));
        $show->field('birth_certificate', __('Birth certificate'));
        $show->field('parents_citizenship_status', __('Parents citizenship status'));
        $show->field('passport_number', __('Passport number'));
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
        $form = new Form(new CitizenshipApplication());

        $form->number('user_id', __('User id'));
        $form->text('class', __('Class'));
        $form->text('application_form', __('Application form'));
        $form->text('finger_prints', __('Finger prints'));
        $form->text('covering_letter', __('Covering letter'));
        $form->text('residence_permit_or_birth_certificate', __('Residence permit or birth certificate'));
        $form->text('passport_photo_1', __('Passport photo 1'));
        $form->text('passport_photo_2', __('Passport photo 2'));
        $form->text('non_swazi_pin', __('Non swazi pin'));
        $form->text('covering_letter_from_husband', __('Covering letter from husband'));
        $form->text('husband_birth_certificate', __('Husband birth certificate'));
        $form->text('marriage_certificate', __('Marriage certificate'));
        $form->text('husband_pin', __('Husband pin'));
        $form->text('wife_pin', __('Wife pin'));
        $form->text('birth_certificate', __('Birth certificate'));
        $form->text('parents_citizenship_status', __('Parents citizenship status'));
        $form->text('passport_number', __('Passport number'));

        return $form;
    }
}
