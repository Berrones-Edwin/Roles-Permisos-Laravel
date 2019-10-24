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

<div class="form-group">
    <input type="submit" name="send" id="send" class="btn btn-primary" value="Guardar" >
</div>