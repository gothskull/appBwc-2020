<template>
    <div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<div class="kt-portlet__head-label">
							<h3 
								class="kt-portlet__head-title" 
								>
								<span class="kt-portlet__head-icon">
									<i class="kt-font-brand flaticon2-line-chart"></i>
								</span>
								Agregar Categoría
							</h3>
						</div>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						</button>
					</div>
					<form 
						class="kt-form"
						@submit.prevent="crearCategoria()">

						<div class="modal-body p-5">
								<div class="kt-portlet__body">
									<div class="form-group row">
										<label for="example-text-input" class="col-3 col-form-label">Nombre:</label>
										<div class="col-9">
											<input 
												name="nombre" 
												type="text" 
												class="form-control" 
												placeholder="Ingresa el nombre de la categoría"
												v-model="categoria.nombre"
												:class="{'is-invalid':errors.nombre}"
											>
											<div 
												v-if="errors.nombre" 
												:class="{'text-danger':hasError}"												
											>
												<span
													class="text-danger"
													v-for="(error, index) of errors"
													:key="index"
													v-text="error[0]"></span>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-text-input" class="col-3 col-form-label">Descripción:</label>
										<div class="col-9">
											<textarea 
												name="descripcion" 
												class="form-control" cols="30" rows="10" 
												placeholder="Descripción de la categoría"
												v-model="categoria.descripcion"
											>
													
											</textarea>

											<span class="form-text text-muted"></span>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-text-input" class="col-3 col-form-label">Estado:</label>
										<div class="col-9">
											<div class="kt-radio-inline">
												<label class="kt-radio kt-radio--tick kt-radio--brand">
													<input 
														type="radio" name="estado" value="1" checked="checked"
														v-model="categoria.estado">
														Activo
													<span></span>
												</label>
												<label class="kt-radio kt-radio--tick kt-radio--danger">
													<input 
														type="radio" name="estado" value="0"
														v-model="categoria.estado"> 
														Inactivo
													<span></span>
												</label>
											</div>
											<div
												v-if="errors.estado"
												class="text-danger"
											>
												<span 
													v-for="(error,index) of errors" 
													:key="index"
													v-text="error[0]"
												>													
												</span>
											</div>
										</div>
									</div>
								</div>
						</div>

						<div class="modal-footer">
							<button 
								type="submit" class="btn btn-primary">
								Crear
							</button>
							<button type="reset" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
</template>

<script>
    export default {
        name:'Modal_crear_cat'
    }
</script>