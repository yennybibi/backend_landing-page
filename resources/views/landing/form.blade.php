<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
        {{ Form::label('') }}
            {{ Form::date('fecha', $landing->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
              </div>
        <div class="form-group">
        {{ Form::label('') }}
              {{ Form::time('hora', $landing->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
              </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('nombre', $landing->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('apellido', $landing->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('cedula', $landing->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
     <div class="form-group">
            {{ Form::label('') }}
            <select  id="departamento" class="form-control selectpicker" id="departamento" 
              data-live-search="true">  
                <option value="">--Seleccione el *Departamento--</option>
                 <option value = "Amazonas">Amazonas</option>
                <option value = "Antioquia">Antioquia</option>
                <option value = "Arauca">Arauca</option>
                <option value = "Atl??ntico">Atl??ntico</option>
                <option value = "Bol??var">Bol??var</option>
                <option value = "Boyac??">Boyac??</option>
		            <option value = "Caldas">Caldas</option>
                <option value = "Caquet??">Caquet??</option>
                <option value = "Casanare">Casanare</option>
                <option value = "Cauca">Cauca</option>
                <option value = "Cesar">Cesar</option>
                <option value = "Choc??">Choc??</option>		            
                <option value = "C??rdoba">C??rdoba</option>
                <option value = "Cundinamarca">Cundinamarca</option>
                <option value = "Guain??a">Guain??a</option>
		            <option value = "Guaviare">Guaviare</option>
                <option value = "Huila">Huila</option>
                <option value = "La Guajira">La Guajira</option>
                <option value = "Magdalena">Magdalena</option>
		            <option value = "Meta">Meta</option>
                <option value = "Nari??o">Nari??o</option>
                <option value = "Norte de Santander">Norte de Santander</option>
                <option value = "Putumayo">Putumayo</option>                
                <option value = "Quind??o">Quind??o</option>  
		            <option value = "Risaralda">Risaralda</option>
                <option value = "San Andr??s y Providencia">San Andr??s y Providencia</option>
                <option value = "Santander">Santander</option>
                <option value = "Sucre">Sucre</option>
                <option value = "Tolima">Tolima</option>
                <option value = "Valle del Cauca">Valle del Cauca</option>
                <option value = "Vaup??s">Vaup??s</option>
                <option value = "Vichada">Vichada</option>
              </select>
            </div>
     
        <div class="form-group">
            {{ Form::label('') }}
            <select  id="ciudad" class="form-control selectpicker" id="ciudad" 
              data-live-search="true">  
                <option value="">--Seleccione la ciudad--</option>
                <option value="">-</option>
                                            <option value="Arauca">Arauca</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Barranquilla">Barranquilla</option>
                                            <option value="Bogot??">Bogot??</option>
                                            <option value="Bucaramanga">Bucaramanga</option>
                                            <option value="Cali">Cali</option>
                                            <option value="Cartagena">Cartagena</option>
                                            <option value="C??cuta">C??cuta</option>
                                            <option value="Florencia">Florencia</option>
                                            <option value="Ibagu??">Ibagu??</option>
                                            <option value="Leticia">Leticia</option>
                                            <option value="Manizales">Manizales</option>
                                            <option value="Medell??n">Medell??n</option>
                                            <option value="Mit??">Mit??</option>
                                            <option value="Mocoa">Mocoa</option>
                                            <option value="Monter??a">Monter??a</option>
                                            <option value="Neiva">Neiva</option>
                                            <option value="Pasto">Pasto</option>
                                            <option value="Pereira">Pereira</option>
                                            <option value="Popay??n">Popay??n</option>
                                            <option value="Puerto Carre??o">Puerto Carre??o</option>
                                            <option value="Puerto In??rida">Puerto In??rida</option>
                                            <option value="Quibd??">Quibd??</option>
                                            <option value="Riohacha">Riohacha</option>
                                            <option value="San Andr??s">San Andr??s</option>
                                            <option value="San Jos?? del Guaviare">San Jos?? del Guaviare</option>
                                            <option value="Santa Marta">Santa Marta</option>
                                            <option value="Sincelejo">Sincelejo</option>
                                            <option value="Tunja">Tunja</option>
                                            <option value="Valledupar">Valledupar</option>
                                            <option value="Villavicencio">Villavicencio</option>
                                            <option value="Yopal">Yopal</option>
                                        </select>
        
        </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('celular', $landing->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('email', $landing->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

<div><br>
   
   
   
   
<h4>Autorize los tatamientos de datos</h4>
<input type="checkbox" required="required">

<p>Ley de Protecci??n de Datos Personales: ???La autorizaci??n suministrada en el presente formulario faculta a 
Deloitte para que d?? a sus datos aqu?? recopilados el tratamiento se??alado en la ???Pol??tica de Privacidad para 
el Tratamiento de Datos Personales??? de Deloitte, el cual incluye, entre otras, el env??o de informaci??n promocional, 
as?? como la invitaci??n a eventos. El titular de los datos podr??, en cualquier momento, solicitar que la informaci??n sea
 modificada, actualizada o retirada de las bases de datos de Deloitte.</p>
</div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>