@component('administrator::components.table.row')
    @slot('label', Form::label($field->id(), $field->title()))
    @slot('input', Form::email($field->name(), $field->value(), ['class' => 'form-control']))
@endcomponent