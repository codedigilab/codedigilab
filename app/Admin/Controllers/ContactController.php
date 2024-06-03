<?php

namespace App\Admin\Controllers;
use Illuminate\Http\Request;
use Alert;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Contact;

class ContactController extends AdminController
{


    function contact(Request $request){

        $data= new Contact;

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->number = $request->input('number');
        $data->message = $request->input('message');

        $data->save();

        Alert::success('Congrats', 'Our Team Will Contact You Shortly');

        return redirect()->back();

    }



    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('number', __('Number'));
        $grid->column('message', __('Message'));
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
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('number', __('Number'));
        $show->field('message', __('Message'));
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
        $form = new Form(new Contact());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('number', __('Number'));
        $form->text('message', __('Message'));

        return $form;
    }
}
