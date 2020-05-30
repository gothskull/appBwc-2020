<template>
    <div
        class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mt-5"
        id="kt_content"
    >
    
        <!-- begin:: Content -->
        <div
            class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid"
        >
            <div class="row col-md-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                                <i class="kt-font-brand flaticon2-layers"></i>
                            </span>
                            <h3 class="kt-portlet__head-title">
                                Categorías de Proyectos
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <button
                                        type="button"
                                        class="btn btn-brand btn-elevate btn-icon-sm"
                                        data-toggle="modal"
                                        data-target="#kt_modal_2"
                                        @click="limpiarForm()"
                                    >
                                        <i class="la la-plus"></i>
                                        Nueva Categoría
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <table
                            class="table table-striped- table-bordered table-hover table-checkable"
                            id="kt_table_1"
                        >
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="cat of categorias" :key="cat.id">
                                    <td v-text="cat.id"></td>
                                    <td v-text="cat.nombre"></td>
                                    <td v-text="cat.descripcion"></td>
                                    <td class="text-center">
                                        <span
                                            class="kt-badge  kt-badge--inline kt-badge--pill kt-badge--rounded"
                                            :class="[
                                                cat.estado == 1
                                                    ? 'kt-badge--success'
                                                    : 'kt-badge--danger'
                                            ]"
                                        >
                                            {{
                                                cat.estado == 1
                                                    ? "Activo"
                                                    : "Desactivado"
                                            }}
                                        </span>
                                        <!-- <span class="kt-switch kt-switch--sm kt-switch--icon">
											<label>
											<input type="checkbox" checked="checked" name="">
											<span></span>
											</label>
										</span> -->
                                    </td>
                                    <td class="text-center">
                                        <a
                                            href=""
                                            data-toggle="modal"
                                            title="Editar"
                                            data-target="#editCat"
                                            @click="editarCategoria(cat)"
                                        >
                                            <span class="kt-portlet__head-icon">
                                                <!-- <i class="fas fa-edit text-dark fa-2x"></i> -->
                                                <i
                                                    class="flaticon-edit text-dark fa-2x"
                                                ></i>
                                            </span>
                                        </a>
                                        <a
                                            href=""
                                            title="Eliminar"
                                            @click.prevent="eliminarCategoria(cat.id)"
                                        >
                                            <!-- <i class="fas fa-trash-alt text-dark fa-2x"></i> -->
                                            <i
                                                class="flaticon2-trash text-dark fa-2x"
                                            ></i>
                                        </a>
                                    </td>
                                    <!-- <td nowrap></td> -->
                                </tr>
                            </tbody>
                        </table>

                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Content -->
        <!-- MODAL CREAR -->
        <div
            class="modal fade"
            id="kt_modal_2"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-lg modal-dialog-centered"
                role="document"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                 <span class="kt-portlet__head-icon">
                                    <i class="kt-font-brand flaticon2-layers"></i>
                                 </span>
                                Agregar Categoría
                            </h3>
                        </div>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <form class="kt-form" @submit.prevent="crearCategoria()">
                        <div class="modal-body p-5">
                            <div class="kt-portlet__body">
                                <div class="form-group row">
                                    <label
                                        for="example-text-input"
                                        class="col-3 col-form-label"
                                        >Nombre:</label
                                    >
                                    <div class="col-9">
                                        <input
                                            name="nombre"
                                            type="text"
                                            class="form-control"
                                            placeholder="Ingresa el nombre de la categoría"
                                            v-model="categoria.nombre"
                                            :class="{
                                                'is-invalid': errors.nombre
                                            }"
                                        />
                                        <div
                                            v-if="errors.nombre"
                                            :class="{ 'text-danger': hasError }"
                                        >
                                            <span
                                                class="text-danger"
                                                v-for="(error, index) of errors"
                                                :key="index"
                                                v-text="error[0]"
                                            ></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        for="example-text-input"
                                        class="col-3 col-form-label"
                                        >Descripción:</label
                                    >
                                    <div class="col-9">
                                        <textarea
                                            name="descripcion"
                                            class="form-control"
                                            cols="30"
                                            rows="10"
                                            placeholder="Descripción de la categoría"
                                            v-model="categoria.descripcion"
                                        >
                                        </textarea>

                                        <span
                                            class="form-text text-muted"
                                        ></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        for="example-text-input"
                                        class="col-3 col-form-label"
                                        >Estado:</label
                                    >
                                    <div class="col-9">
                                        <div class="kt-radio-inline">
                                            <label
                                                class="kt-radio kt-radio--tick kt-radio--brand"
                                            >
                                                <input
                                                    type="radio"
                                                    name="estado"
                                                    value="1"
                                                    checked="checked"
                                                    v-model="categoria.estado"
                                                />
                                                Activo
                                                <span></span>
                                            </label>
                                            <label
                                                class="kt-radio kt-radio--tick kt-radio--danger"
                                            >
                                                <input
                                                    type="radio"
                                                    name="estado"
                                                    value="0"
                                                    v-model="categoria.estado"
                                                />
                                                Inactivo
                                                <span></span>
                                            </label>
                                        </div>
                                        <div
                                            v-if="errors.estado"
                                            class="text-danger"
                                        >
                                            <span
                                                v-for="(error, index) of errors"
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
                            <button type="submit" class="btn btn-primary">
                                Crear
                            </button>
                            <button
                                type="reset"
                                class="btn btn-danger"
                                data-dismiss="modal"
                            >
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- MODAL EDITAR -->
        <div
            class="modal fade"
            id="editCat"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-lg modal-dialog-centered"
                role="document"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <span class="kt-portlet__head-icon">
                                    <i
                                        class="kt-font-brand flaticon2-line-chart"
                                    ></i>
                                </span>
                                Editar Categoría
                            </h3>
                        </div>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <form
                        class="kt-form"
                        @submit.prevent="actualizarCategoria(categoria.id)"
                    >
                        <div class="modal-body p-5">
                            <div class="kt-portlet__body">
                                <div class="form-group row">
                                    <label
                                        for="example-text-input"
                                        class="col-3 col-form-label"
                                        >Nombre:</label
                                    >
                                    <div class="col-9">
                                        <input
                                            name="nombre"
                                            type="text"
                                            class="form-control"
                                            placeholder="Ingresa el nombre de la categoría"
                                            v-model="categoria.nombre"
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        for="example-text-input"
                                        class="col-3 col-form-label"
                                        >Descripción:</label
                                    >
                                    <div class="col-9">
                                        <textarea
                                            name="descripcion"
                                            class="form-control"
                                            cols="30"
                                            rows="10"
                                            placeholder="Descripción de la categoría"
                                            v-model="categoria.descripcion"
                                        >
                                        </textarea>
                                        <span
                                            class="form-text text-muted"
                                        ></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        for="example-text-input"
                                        class="col-3 col-form-label"
                                        >Estado:</label
                                    >
                                    <div class="col-9">
                                        <div class="kt-radio-inline">
                                            <label
                                                class="kt-radio kt-radio--tick kt-radio--brand"
                                            >
                                                <input
                                                    type="radio"
                                                    name="estado"
                                                    value="1"
                                                    checked="checked"
                                                    v-model="categoria.estado"
                                                />
                                                Activo
                                                <span></span>
                                            </label>
                                            <label
                                                class="kt-radio kt-radio--tick kt-radio--danger"
                                            >
                                                <input
                                                    type="radio"
                                                    name="estado"
                                                    value="0"
                                                    v-model="categoria.estado"
                                                />
                                                Inactivo
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                                Actualizar
                            </button>
                            <button
                                type="reset"
                                class="btn btn-danger"
                                data-dismiss="modal"
                            >
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categorias: [],
            errors: [],
            hasError: "false",
            nuevaCategoria: "",
            categoria: { id: "", nombre: "", descripcion: "", estado: "" }
        };
    },
    mounted() {
        this.getCategorias();
    },
    methods: {
        getCategorias() {
            let url = "listCategories";
            axios
                .get(url)
                .then(response => {
                    this.categorias = response.data;
                })
                .catch(err => {
                    // this.errors = err.response.data;
                });
        },
        editarCategoria(categoria) {
            this.categoria.id = categoria.id;
            this.categoria.nombre = categoria.nombre;
            this.categoria.descripcion = categoria.descripcion;
            this.categoria.estado = categoria.estado;
        },
        actualizarCategoria(id) {
            const url = "categorias/" + id;
            const cat = {
                nombre: this.categoria.nombre,
                descripcion: this.categoria.descripcion,
                estado: this.categoria.estado
            };
            axios
                .put(url, cat)
                .then(response => {
                    this.limpiarForm();
                    this.errors = [];
                    $("#editCat").modal("hide");
                    $(".modal-backdrop.show").remove();
                    this.getCategorias();

                    swal.fire({
                        position: "top-right",
                        type: "success",
                        title: "Categoría actualizada correctamente",
                        showConfirmButton: false,
                        timer: 2000
                    });
                })
                .catch(err => {
                    this.errors = err.response.data;
                });
        },
        limpiarForm() {
            this.categoria.nombre = "";
            this.categoria.descripcion = "";
			this.categoria.estado = 1;
			this.errors.nombre= '';
        },
        crearCategoria() {
            const cat = {
                nombre: this.categoria.nombre,
                descripcion: this.categoria.descripcion,
                estado: this.categoria.estado
            };
            this.errors.nombre = false;
            axios
                .post("/createCat", cat)
                .then(response => {
                    this.categorias.push(response.data);
                    this.getCategorias();
                    $("#kt_modal_2").modal("hide");
                    $(".modal-backdrop.show").remove();
                    swal.fire({
                        position: "top-right",
                        type: "success",
                        title: "Categoría creada correctamente",
                        showConfirmButton: false,
                        timer: 2000
                    });
                })
                .catch(error => {
                    let err = error.response.data.errors;
                    this.errors = error.response.data.errors;
                });
        },
        eliminarCategoria(id) {
            swal.fire({
                title: "Estas seguro?",
                text: "Esta acción no tiene vuelta atras!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#22b9ff",
                cancelButtonColor: "#fd27eb",
                confirmButtonText: "Si, borrarla!",
                position: "center"
            }).then(result => {
                if (result.value) {
                    const url = "categorias/" + id;
                    axios.delete(url).then(response => {
                        this.getCategorias();
                    });
                    swal.fire({
                        position: "top-right",
                        type: "success",
                        title: "La categorá ha sido borrada",
                        showConfirmButton: false,
                        timer: 1800
                    });
                }
            });
        }
    }
};
</script>
