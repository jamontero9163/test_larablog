@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name',$user->name) }}">
</div>
<div class="form-group">
    <label for="surname">Apellido</label>
    <input type="text" class="form-control" name="surname" id="surname" value="{{ old('surname',$user->surname) }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ old('email',$user->email) }}">
</div>
@if ($pasw)
<div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" class="form-control" name="password" id="emaipasswordl" value="{{ old('password',$user->password) }}">
</div> 
@endif


<input type="submit" class="btn btn-primary" value="Enviar">
