<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>

<div class="form-group">
    {!! Form::label('completed', 'Completed:') !!}
    {!! Form::checkbox('completed') !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>


<div class="form-group">
    {!! Form::label('start', 'Start Date: (mm/dd/yyy)') !!}
    {!! Form::input('date', 'start') !!}
</div>

<div class="form-group">
    {!! Form::label('end', 'End Date: (mm/dd/yyy)') !!}
    {!! Form::input('date', 'end') !!}
</div>



<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>