<!-- Idcust Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IDCUST', 'Idcust:') !!}
    {!! Form::number('IDCUST', null, ['class' => 'form-control']) !!}
</div>

<!-- Idbooking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IDBOOKING', 'Idbooking:') !!}
    {!! Form::number('IDBOOKING', null, ['class' => 'form-control']) !!}
</div>

<!-- Bookstart Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BOOKSTART', 'Bookstart:') !!}
    {!! Form::text('BOOKSTART', null, ['class' => 'form-control','id'=>'BOOKSTART']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#BOOKSTART').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Bookend Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BOOKEND', 'Bookend:') !!}
    {!! Form::text('BOOKEND', null, ['class' => 'form-control','id'=>'BOOKEND']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#BOOKEND').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Bookdest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BOOKDEST', 'Bookdest:') !!}
    {!! Form::text('BOOKDEST', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Bookpick Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BOOKPICK', 'Bookpick:') !!}
    {!! Form::text('BOOKPICK', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Booktotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BOOKTOTAL', 'Booktotal:') !!}
    {!! Form::number('BOOKTOTAL', null, ['class' => 'form-control']) !!}
</div>

<!-- Bookstatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BOOKSTATUS', 'Bookstatus:') !!}
    {!! Form::text('BOOKSTATUS', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bookings.index') }}" class="btn btn-light">Cancel</a>
</div>
