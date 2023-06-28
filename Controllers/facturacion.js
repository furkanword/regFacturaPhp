let divDetails = document.querySelector('.body-detail');
let btnBuy = document.querySelector('#buy');
let items = [];

// Evento click del botón "Agregar"
document.querySelector('#addItem').addEventListener('click', (e) => {
    divDetails.insertAdjacentHTML('beforeend', crearItemHTML());
    console.log(divDetails);
})

// Evento click dentro del contenedor divDetails
divDetails.addEventListener("click", (e) => {
    let cja = document.getElementById(`txt${e.target.dataset.id}`);

    // Si se hace click en el botón "Remove"
    if (e.target.name == "btnRemove") {
        if (Number(cja.value) <= 0) {
            eliminarItemLista(e.target.dataset.id);
        } else {
            cja.value = Number(cja.value) - 1;
        }
    }
    // Si se hace click en el botón "Add"
    else if (e.target.name == "btnAdd") {
        cja.value = Number(cja.value) + 1;
        
    }
})

// Función para eliminar un item de la lista
eliminarItemLista = (idIdx) => {
    let productos = document.querySelectorAll(".frmDataDetail");
    productos.forEach((item) => {
        if (item.id == idIdx) {
            let indice = Array.from(divDetails.children).map((val, idx) => {
                return (val.id == item.id) ? idx : undefined;
            }).join("");
            items.splice(indice, 1);
            item.remove();
        }
    })
}

// Evento click del botón "Buy"
btnBuy.addEventListener("click", (e) => {
    e.preventDefault();
    let productos = document.querySelectorAll(".frmDataDetail");
    let modalContent = document.getElementById("modalContent");
    modalContent.innerHTML = ""; // Limpiar el contenido anterior del modal
  
    productos.forEach((item, id) => {
      let data = Object.fromEntries(new FormData(item));
  
      // Crear elementos HTML para mostrar los datos del producto en el modal
      let productHTML = document.createElement("div");
      productHTML.innerHTML = `
        <p><strong>Cod producto:</strong> ${data.cod_producto}</p>
        <p><strong>Nombre producto:</strong> ${data.nombre_producto}</p>
        <p><strong>Cantidad:</strong> ${data.cantidad}</p>
        <p><strong>Valor Unit.:</strong> ${data.valor_unit}</p>
        <hr>
      `;
      modalContent.appendChild(productHTML);
    });
  
    // Mostrar el modal emergente
    let modal = document.getElementById("myModal");
        modal.style.display = "block";
    });
     document.addEventListener("DOMContentLoaded", function() {
        // Obtener la referencia al botón de cierre
        var closeButton = document.querySelector(".close");

        // Obtener la referencia al modal
        var modal = document.getElementById("myModal");

        // Función para cerrar el modal
        function closeModal() {
        modal.style.display = "none";
        }

        // Agregar evento de clic al botón de cierre
        closeButton.addEventListener("click", closeModal);

        // Agregar evento de clic fuera del contenido para cerrar el modal
        window.addEventListener("click", function(event) {
        if (event.target === modal) {
            closeModal();
        }
        });
      
    });
function mostrarFormulario() {
    // Mostrar formulario principal
    document.getElementById("myForm").style.display = "block";
    
    // Mostrar título y botón de detalle de factura
    document.querySelector(".titulo-detail").style.display = "block";
    document.getElementById("addItem").style.display = "block";
    
    // Mostrar cuerpo del detalle de factura
    document.querySelector(".body-detail").style.display = "block";
    
    // Mostrar botón de finalizar compra
    document.getElementById("buy").style.display = "block";
    }
    
    // Obtener el enlace "Registro de factura"
    var registroFacLink = document.getElementById("registro-factura-link");
    
    // Agregar un evento de clic al enlace
    registroFacLink.addEventListener("click", function() {
    mostrarFormulario();
    });
function mostrarHome() {
    // Mostrar el contenido de Home
    document.getElementById("home-content").style.display = "block";
    }
    
    // Obtener el enlace "Registro de factura"
    var registroFacturaLink = document.getElementById("registro-factura-link");
    
    // Agregar un evento de clic al enlace
    registroFacturaLink.addEventListener("click", function() {
    mostrarHome();
    });
      
      
    
  



crearItemHTML = () => {
    let id = Date.now().toString(16);
    let facturaHTML = /* html */ `
        <form id="${id}" class="frmDataDetail " >
            <div class="row g-1  row-cols-xl-6 row-cols-sm-4">
                <div class="col">
                    <div class="mb-3">
                        <label for="cod_producto" class="form-label">Cod producto</label>
                        <input type="text" class="form-control" name="cod_producto">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-2">
                        <label for="nombre_producto" class="form-label">Nombre producto</label>
                        <input type="text" class="form-control" name="nombre_producto">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="text" pattern="[0-9]+" id="txt${id}" readonly="readonly"  class="form-control cantidad" value ="0" name="cantidad">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="valor_unit" class="form-label">Valor Unit.</label>
                        <input type="number" class="form-control valor" value ="0" name="valor_unit">
                    </div>
                </div>
                <div class="col-1 col-sm-6  text-sm-center text-xl-start p-2 ">
                    <button type="button" class="btn w-100 h-100 btn-success" data-id="${id}" name="btnAdd">+</button>
                </div>
                <div class="col-1 col-sm-6  text-sm-center text-xl-start p-2">
                    <button type="button" class="btn w-100 h-100 btn-danger" data-id="${id}" name="btnRemove">-</button>
                </div>
            </div>
        </form>
    `;
    return facturaHTML;
}
