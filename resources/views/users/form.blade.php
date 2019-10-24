<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ old('name',$user->name ?? '') }}" class="form-control" placeholder="Nombre..." autocomplete="off">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control" value="{{ old('email',$user->email ?? '') }}" placeholder="Email" autocomplete="off">
</div>
<hr>

<h3>Listado de Roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($roles as $role)
            <li>
            
                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                        id="check_{{ $role->id }}"
                        
                        @isset($user->roles) {{($user->roles->contains($role->id)) ? 'checked' : ''}} @endisset
                         >
                <label for="check_{{ $role->id }}">
                    {{ $role->name }}
                    <em> {{ $role->description ?: '(N/A)'  }}</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>
<div class="form-group">
    <input type="submit" name="send" id="send" class="btn btn-primary" value="Guardar" >
</div>