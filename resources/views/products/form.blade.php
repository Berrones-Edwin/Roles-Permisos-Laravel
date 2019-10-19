<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ old('name',$product->name ?? '') }}" class="form-control" placeholder="Nombre..." autocomplete="off">
</div>
<div class="form-group">
    <label for="description">Descripción</label>
    <input type="text" name="description" id="description" class="form-control" value="{{ old('description',$product->description ?? '') }}" placeholder="Descripción" autocomplete="off">
</div>
<div class="form-group">
    <input type="submit" name="send" id="send" class="btn btn-primary" value="Guardar" >
</div>