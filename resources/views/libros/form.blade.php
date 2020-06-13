<div class="form-group {{ $errors->has('Foto') ? 'has-error' : ''}}">
    <label for="Foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="Foto" type="file" id="Foto" value="{{ isset($libro->Foto) ? $libro->Foto : ''}}" >
    {!! $errors->first('Foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($libro->Nombre) ? $libro->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Genero') ? 'has-error' : ''}}">
    <label for="Genero" class="control-label">{{ 'Genero' }}</label>
    <input class="form-control" name="Genero" type="text" id="Genero" value="{{ isset($libro->Genero) ? $libro->Genero : ''}}" >
    {!! $errors->first('Genero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Pais') ? 'has-error' : ''}}">
    <label for="Pais" class="control-label">{{ 'Pais' }}</label>
    <input class="form-control" name="Pais" type="text" id="Pais" value="{{ isset($libro->Pais) ? $libro->Pais : ''}}" >
    {!! $errors->first('Pais', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Autor') ? 'has-error' : ''}}">
    <label for="Autor" class="control-label">{{ 'Autor' }}</label>
    <input class="form-control" name="Autor" type="text" id="Autor" value="{{ isset($libro->Autor) ? $libro->Autor : ''}}" >
    {!! $errors->first('Autor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Fecha') ? 'has-error' : ''}}">
    <label for="Fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="Fecha" type="date" id="Fecha" value="{{ isset($libro->Fecha) ? $libro->Fecha : ''}}" >
    {!! $errors->first('Fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Libro') ? 'has-error' : ''}}">
    <label for="Libro" class="control-label">{{ 'Libro' }}</label>
    <input class="form-control" name="Libro" type="file" id="Libro" value="{{ isset($libro->Libro) ? $libro->Libro : ''}}" >
    {!! $errors->first('Libro', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Agregar' }}">
</div>
