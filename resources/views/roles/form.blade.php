<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ old('name',$role->name ?? '') }}" class="form-control" placeholder="Nombre..." autocomplete="off">
</div>
<div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug',$role->slug ?? '') }}" placeholder="Slug" autocomplete="off">
</div>
<div class="form-group">
    <label for="description">Descripcion</label>
    <input type="text" name="description" id="description" class="form-control" value="{{ old('description',$role->description ?? '') }}" placeholder="Descripcion" autocomplete="off">
</div>
<hr>
<h2>Role Especial</h2>
<div class="form-group">
    <label for="all-access">
        <input type="radio" value="all-access" name="special" id="all-access">
        Acceso Total
    </label>
    <label for="no-access">
        <input type="radio" value="no-access" name="special" id="no-access">
        Acceso Denegado
    </label>
</div>

<hr>
<h3>Listado de Permisos</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($permissions as  $permission)
            <li>
                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                        id="check_{{ $permission->id }}"
                        @isset($role) {{($role->permissions->contains($permission->id)) ? 'checked' : ''}} @endisset >
                <label for="check_{{ $permission->id }}">
                    {{ $permission->name }} {{ $permission->id }} 
                    <em> {{ $permission->description ?: '(N/A)'  }}</em>
                </label>
                
            </li>
        @endforeach
    </ul>
</div>


<div class="form-group">
    <input type="submit" name="send" id="send" class="btn btn-primary" value="Guardar" >
</div>