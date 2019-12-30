<br>
<div class="row"></div>
<div class="container">
	<!-- <h1>UNIDOS POR EL EMPLEO</h1>
	<h3>Gran Jornada de Oportunidades Para Bogotá</h3> -->
	<div style="text-align:center; margin-top: -20px;">
		<img src="img/banner_evento.png" style="width: 80%;"></img>
	</div>

	<div class="row" style="margin-top: 40px;">
		<div class="col-md-6">
			<div id="div_centro" class="form-group">
				<label for="centro">Prestadores</label>
				<select id="centro" class="form-control" onchange="refreshCounts()">
					<option value="">Seleccione uno...</option>
			  		<option value="1">Alcaldía</option>
			  		<option value="2">Cafam</option>
			  		<option value="3">Colsubsidio</option>
			  		<option value="4">Sena</option>
			  		<option value="5">Adecco</option>
			  		<option value="6">Manpower</option>
			  		<option value="8">Volver a la gente</option>
			  		<option value="9">Trabajando</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div id="div_pin" class="form-group">
			    <label class="control-label" for="pin">Pin <span id="span_pin" sytle="display: none;">Incorrecto</span></label>
			    <input type="text" class="form-control" id="pin" placeholder="Ingrese Pin" onblur="refreshCounts()">
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-6">
		    <div class="row">
		    	<div class="col-md-11">
		    		<div id="div_inscritos" class="form-group">
				    	<label for="inscritos">Inscritos / Registrados</label>
				    	<input type="text" id="inscritos" class="form-control" disabled>
				    </div>
			    </div>
			    <div class="col-md-1">
			    	<button id="btn_inscritos" type="button" class="btn btn-success" style="margin-top:24px; margin-left: -28px;" onclick="saveCounts('inscritos')">+</button>
			    </div>
		    </div>
		    <div class="row">
		    	<div class="col-md-11">
		    		<div id="div_remitidos_taller" class="form-group">
				    	<label for="remitidos_taller">Remitidos a Talleres</label>
				    	<input type="text" id="remitidos_taller" class="form-control" disabled>
			    	</div>
			    </div>
			    <div class="col-md-1">
			    	<button id="btn_remitidos_taller" type="button" class="btn btn-success" style="margin-top:24px; margin-left: -28px;" onclick="saveCounts('remitidos_taller')">+</button>
			    </div>
		    </div>
		</div>
		<div class="col-md-6">
		    <div class="row">
		    	<div class="col-md-11">
		    		<div id="div_orientados" class="form-group">
				    	<label for="orientados">Orientados</label>
				    	<input type="text" id="orientados" class="form-control" disabled>
			    	</div>
			    </div>
			    <div class="col-md-1">
			    	<button id="btn_orientados" type="button" class="btn btn-success" style="margin-top:24px; margin-left: -28px;" onclick="saveCounts('orientados')">+</button>
			    </div>
		    </div>
		    <div class="row">
		    	<div class="col-md-11">
		    		<div id="div_remitidos_empresas" class="form-group">
				    	<label for="remitidos_empresas">Remitidos a Empresas</label>
				    	<input type="text" id="remitidos_empresas" class="form-control" disabled>
			    	</div>
			    </div>
			    <div class="col-md-1">
			    	<button id="btn_remitidos_empresa" type="button" class="btn btn-success" style="margin-top:24px; margin-left: -28px;" onclick="saveCounts('remitidos_empresa')">+</button>
			    </div>
		    </div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#div_pin").removeClass("has-error");
	$("#span_pin").hide();
	$(".informative-headers1").hide()
</script>