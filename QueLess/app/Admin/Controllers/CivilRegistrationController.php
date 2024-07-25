<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\CivilRegistration;

class CivilRegistrationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CivilRegistration';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CivilRegistration());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('full_name', __('Full name'));
        $grid->column('age', __('Age'));
        $grid->column('email_address', __('Email address'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('id_or_passport', __('Id or passport'));
        $grid->column('proof_of_residence', __('Proof of residence'));
        $grid->column('picture_or_photo', __('Picture or photo'));
        $grid->column('witness_1', __('Witness 1'));
        $grid->column('witness_2', __('Witness 2'));
        $grid->column('proof_of_birth', __('Proof of birth'));
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
        $show = new Show(CivilRegistration::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('full_name', __('Full name'));
        $show->field('age', __('Age'));
        $show->field('email_address', __('Email address'));
        $show->field('phone_number', __('Phone number'));
        $show->field('id_or_passport', __('Id or passport'));
        $show->field('proof_of_residence', __('Proof of residence'));
        $show->field('picture_or_photo', __('Picture or photo'));
        $show->field('witness_1', __('Witness 1'));
        $show->field('witness_2', __('Witness 2'));
        $show->field('proof_of_birth', __('Proof of birth'));
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
        $form = new Form(new CivilRegistration());

        $form->number('user_id', __('User id'));
        $form->text('full_name', __('Full name'));
        $form->number('age', __('Age'));
        $form->text('email_address', __('Email address'));
        $form->text('phone_number', __('Phone number'));
        $form->text('id_or_passport', __('Id or passport'));
        $form->text('proof_of_residence', __('Proof of residence'));
        $form->text('picture_or_photo', __('Picture or photo'));
        $form->text('witness_1', __('Witness 1'));
        $form->text('witness_2', __('Witness 2'));
        $form->text('proof_of_birth', __('Proof of birth'));

        return $form;
    }
}
