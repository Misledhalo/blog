<div class="form-group {{ $errors->has('Foto') ? 'has-error' : ''}}">
    <label for="Foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="Foto" type="file" id="Foto" value="{{ isset($serie->Foto) ? $serie->Foto : ''}}" >
    {!! $errors->first('Foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($serie->Nombre) ? $serie->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Genero') ? 'has-error' : ''}}">
    <label for="Genero" class="control-label">{{ 'Genero' }}</label>
    <input class="form-control" name="Genero" type="text" id="Genero" value="{{ isset($serie->Genero) ? $serie->Genero : ''}}" >
    {!! $errors->first('Genero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Pais') ? 'has-error' : ''}}">
    <label for="Pais" class="control-label">{{ 'Pais' }}</label>
    <input class="form-control" name="Pais" type="text" id="Pais" value="{{ isset($serie->Pais) ? $serie->Pais : ''}}" >
    {!! $errors->first('Pais', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Lenguaje') ? 'has-error' : ''}}">
    <label for="Lenguaje" class="control-label">{{ 'Lenguaje' }}</label>
    <input class="form-control" name="Lenguaje" type="text" id="Lenguaje" value="{{ isset($serie->Lenguaje) ? $serie->Lenguaje : ''}}" >
    {!! $errors->first('Lenguaje', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Fecha') ? 'has-error' : ''}}">
    <label for="Fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="Fecha" type="date" id="Fecha" value="{{ isset($serie->Fecha) ? $serie->Fecha : ''}}" >
    {!! $errors->first('Fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Temporadas') ? 'has-error' : ''}}">
    <label for="Temporadas" class="control-label">{{ 'Temporadas' }}</label>
    <input class="form-control" name="Temporadas" type="text" id="Temporadas" value="{{ isset($serie->Temporadas) ? $serie->Temporadas : ''}}" >
    {!! $errors->first('Temporadas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Capitulos') ? 'has-error' : ''}}">
    <label for="Capitulos" class="control-label">{{ 'Capitulos' }}</label>
    <input class="form-control" name="Capitulos" type="text" id="Capitulos" value="{{ isset($serie->Capitulos) ? $serie->Capitulos : ''}}" >
    {!! $errors->first('Capitulos', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Agregar' }}">
</div>
