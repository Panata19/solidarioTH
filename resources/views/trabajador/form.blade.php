<!-- Form Group (username)-->
<div class="mb-3">
    <label class="small mb-1" for="inputUsername">Nombre Completo</label>
    <input class="form-control" id="nombre_completo" name="nombre_completo" type="text" value="{{ isset($trabajador->nombre_completo)?$trabajador->nombre_completo:'' }}" />
</div>
<!-- Form Row-->
<div class="row gx-3 mb-3">
    <!-- Form Group (first name)-->
    <div class="col-md-6">
        <label class="small mb-1" for="inputFirstName">Cédula </label>
        <input class="form-control" id="cedula" name="cedula" type="text"  value="{{ isset($trabajador->cedula)?$trabajador->cedula:'' }}"/>
    </div>
    <!-- Form Group (last name)-->
    <div class="col-md-6">
        <label class="small mb-1" for="inputLastName">Fecha Nacimietno</label>
        <input class="form-control" id="fecha_nac" name="fecha_nac" type="date" value="{{ isset($trabajador->fecha_nac)?$trabajador->fecha_nac:'' }}" />
    </div>
</div>
<!-- Form Row        -->
<div class="row gx-3 mb-3">
    <!-- Form Group (organization name)-->
    <div class="col-md-6">
        <label class="small mb-1" for="inputOrgName">Tipo de Sangre</label>
        <select name="tipo_sangre" id="tipo_sangre" class="form-control" value="{{ isset($trabajador->tipo_sangre)?$trabajador->tipo_sangre:'' }}">
            <option value="O negativo">O negativo</option>
            <option value="O positivo">O positivo</option>
            <option value="A negativo">A negativo</option>
            <option value="A positivo">A positivo</option>
            <option value="B negativo">B negativo</option>
            <option value="B positivo">B positivo</option>
            <option value="AB negativo">AB negativo</option>
            <option value="AB positivo">AB positivo</option>
        </select>
    
    
    </div>
    <!-- Form Group (location)-->
    <div class="col-md-6">
        <label class="small mb-1" for="inputLocation">Email</label>
        <input class="form-control" id="correo" name="correo" type="email" value="{{ isset($trabajador->correo)?$trabajador->correo:'' }}" />
    </div>
</div>
<!-- Form Group (email address)-->
<div class="mb-3">
    <label class="small mb-1" for="inputEmailAddress">Direccion</label>
    <input class="form-control" id="direccion" name="direccion" type="text" value="{{ isset($trabajador->direccion)?$trabajador->direccion:'' }}"/>
</div>
<!-- Form Row-->
<div class="row gx-3 mb-3">
    <!-- Form Group (phone number)-->
    <div class="col-md-6">
        <label class="small mb-1" for="inputPhone">Estado Civil</label>
        <select name="estado_civil" id="estado_civil" class="form-control" value="{{ isset($trabajador->estado_civil)?$trabajador->estado_civil:'' }}">
            <option value="Soltero/a">Soltero/a</option>
            <option value="Casado/a">Casado/a</option>
            <option value="Divorciado/a">Divorciado/a</option>
            <option value="Viudo/a">Viudo/a</option>
           
        </select>
    </div>
    <!-- Form Group (birthday)-->
    <div class="col-md-6">
        <label class="small mb-1" for="inputBirthday">Nacionalidad</label>
        <input class="form-control" id="nacionalidad" name="nacionalidad" type="text"  value="{{ isset($trabajador->nacionalidad)?$trabajador->nacionalidad:'' }}"/>
    </div>
</div>

<!-- Form Row-->
<div class="row gx-3 mb-3">
    <!-- Form Group (phone number)-->
    <div class="col-md-6">
        <label class="small mb-1" for="inputPhone">Num. Hijos</label>
        <input class="form-control" id="num_hijos" name="num_hijos" type="number" min="0" value="{{ isset($trabajador->num_hijos)?$trabajador->num_hijos:'' }}"/>
    </div>
    <!-- Form Group (birthday)-->
    <div class="col-md-6">
        <label class="small mb-1" for="inputBirthday">Telefono</label>
        <input class="form-control" id="telefono" name="telefono" type="text" value="{{ isset($trabajador->telefono)?$trabajador->telefono:'' }}" />
    </div>
</div>

<input id="activo" name="activo" type="hidden" value="1">

<div class="row gx-3 mb-3">
    <!-- Form Group (phone number)-->
    <div class="col-md-6">
        <label class="small mb-1" for="inputPhone">Foto (Solo imagen)</label>
        <input type="file" class="btn btn-primary" accept="image/*" id="foto" name="foto">
    </div>
    <!-- Form Group (birthday)-->
    <div class="col-md-6">
        <label class="small mb-1" for="inputBirthday">Curridulo (Solo PDF)</label>
        <input type="file" class="btn btn-primary" accept="application/pdf"id="cv" name="cv">
    </div>
</div>

<!-- Save changes button-->
<button class="btn btn-success" type="submit">Guardar</button>