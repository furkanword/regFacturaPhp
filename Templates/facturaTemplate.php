
<div id="home-content">
         <!-- Contenido de Home -->
</div>
<div class="container" id="frmData">
        <form id="myForm" style="display: none;" >
            <div class="container encabezado-factura">
                <h2>Encabezado de facturas</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="nro_factura" class="form-label">Nro de factura</label>
                                    <input type="text" class="form-control" id="nro_factura" name="nro_factura">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="fecha_factura" class="form-label">Fecha de factura</label>
                                    <input type="date" class="form-control" id="fecha_factura" name="fecha_factura">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="mb-3">
                                    <label for="vendedor" class="form-label">Vendedor</label>
                                    <input type="text" class="form-control" id="vendedor" name="vendedor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="nro_factura" class="form-label">Nro Identificacion cliente</label>
                                    <input type="text" class="form-control" id="nro_factura" name="nro_factura">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="nombre_cliente" class="form-label">Nombres y apellidos</label>
                                    <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo Electronico</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="direccion" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="tel_contacto" class="form-label">Telefono de contacto</label>
                                    <input type="text" class="form-control" id="tel_contacto" name="tel_contacto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            <div class="row">
                <div class="col-12">
                    <div class="container titulo-detail" style="display:none;">
                        <h3>Detalle de factura</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <button type="button" class="btn  w-100 btn-danger" id="addItem" style="display:none;">Add Invoice(+)</button>
                </div>
            </div>
            <div class="container body-detail p-3" style="display:none;" >

            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <button type="button" class="btn  w-100 btn-success" id="buy" style="display:none;" >Finalizar compra</button>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span> 
                            <h3>Lista de items</h3>
                            <div id="modalContent"></div>
                        </div>
                    </div>
                </div>
            </div>
           

    </div>