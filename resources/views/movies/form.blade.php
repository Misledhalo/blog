<div class="form-group {{ $errors->has('Foto') ? 'has-error' : ''}}">
    <label for="Foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="Foto" type="file" id="Foto" value="{{ isset($movie->Foto) ? $movie->Foto : ''}}" >
    {!! $errors->first('Foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($movie->Nombre) ? $movie->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Genero') ? 'has-error' : ''}}">
    <label for="Genero" class="control-label">{{ 'Genero' }}</label>
    <input class="form-control" name="Genero" type="text" id="Genero" value="{{ isset($movie->Genero) ? $movie->Genero : ''}}" >
    {!! $errors->first('Genero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Pais') ? 'has-error' : ''}}">
    <label for="Pais" class="control-label">{{ 'Pais' }}</label>
    <input class="form-control" name="Pais" type="text" id="Pais" value="{{ isset($movie->Pais) ? $movie->Pais : ''}}" >
    {!! $errors->first('Pais', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Lenguage') ? 'has-error' : ''}}">
    <label for="Lenguage" class="control-label">{{ 'Lenguage' }}</label>
    <input class="form-control" name="Lenguage" type="text" id="Lenguage" value="{{ isset($movie->Lenguage) ? $movie->Lenguage : ''}}" >
    {!! $errors->first('Lenguage', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Fecha') ? 'has-error' : ''}}">
    <label for="Fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="Fecha" type="date" id="Fecha" value="{{ isset($movie->Fecha) ? $movie->Fecha : ''}}" >
    {!! $errors->first('Fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Correo') ? 'has-error' : ''}}">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="Correo" type="email" id="Correo" value="{{ isset($movie->Correo) ? $movie->Correo : ''}}" >
    {!! $errors->first('Correo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Agregar' }}">
</div>
