

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el nombre de la etiqueta']) !!}

    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    
    {!! Form::label('color', 'Color') !!}
    {!! Form::select('color', $colores, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el color de la etiqueta']) !!}

    @error('color')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>