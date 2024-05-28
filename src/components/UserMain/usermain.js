let salarioPor = document.getElementById('ingresos').value;
let gastosPor = document.getElementById('gasto').value;

document.querySelector('.porcentaje-50').style = `transform: rotate(${90}deg)`;
document.querySelector('.porcentaje-30').style = `transform: rotate(${54}deg)`;
document.querySelector('.porcentaje-20').style = `transform: rotate(${36}deg)`;

function sacarPorcentaje(gastosPor,salarioPor) {
    let porcentaje = (gastosPor/salarioPor)*100;
    return porcentaje
}
function sacarGrados(gastosPor,salarioPor) {
    let porDecim = sacarPorcentaje(gastosPor,salarioPor)/100
    let grados = porDecim * 180
    return grados
}
function rotacionGastos(gastosPor,salarioPor) {
    document.querySelector('#porcentaje-gastos').style = `transform: rotate(${sacarGrados(gastosPor,salarioPor)}deg)`;
}

let valor = document.querySelector(".valor")
let valor2 = sacarPorcentaje(gastosPor,salarioPor)
valor2 = Number.parseInt(valor2)

if (isNaN(valor2) === true) {
    valor2.textContent = "0%"
 }else{
    valor.textContent = `${sacarPorcentaje(gastosPor,salarioPor).toFixed()}%`
 }


if (valor2 > 80) {
    let a = document.getElementById("porcentaje-gastos")
    a.setAttribute("id","change")
    document.querySelector('#change').style = `transform: rotate(${sacarGrados(gastosPor,salarioPor)}deg)`;
}else{
    rotacionGastos(gastosPor,salarioPor)
}
console.log(valor2);

/*Gastos*/

let customOptionsGasto = [];

function addNewGastoOption() {
    const newOptionText = document.getElementById("new-option-gasto").value;
    if (newOptionText.trim() !== "") {
        const checkboxGroup = document.getElementById("gastos-checkbox-group");
        const newLabel = document.createElement("label");
        const newCheckbox = document.createElement("input");
        newCheckbox.type = "checkbox";
        newCheckbox.value = newOptionText.toLowerCase().replace(/\s+/g, '-');
        newLabel.appendChild(newCheckbox);
        newLabel.appendChild(document.createTextNode(" " + newOptionText));
        checkboxGroup.appendChild(newLabel);
        customOptionsGasto.push(newLabel);
        document.getElementById("new-option-gasto").value = "";
    }
}

appearNewOptionGasto = document.getElementById("new-option-gasto")

function NewoptionGastoAppear(appearNewOptionGasto) {
    appearNewOptionGasto.classList.remove("hidden");
}

function removeGastoOption() {
    const checkboxGroup = document.getElementById("gastos-checkbox-group");
    const lastLabel = customOptionsGasto.pop();  
    if (lastLabel) {
        checkboxGroup.removeChild(lastLabel);
    }
}

document.getElementById("BTNlimpiarG").addEventListener("click", function() {
    document.getElementById("gasto").value = "";
    document.getElementById("new-option-gasto").value = "";
    const checkboxes = document.querySelectorAll('#gastos-checkbox-group input[type="checkbox"]');
    checkboxes.forEach(checkbox => checkbox.checked = false);

    appearNewOptionGasto.classList.add("hidden");
    
    customOptionsGasto.forEach(option => option.remove());
    customOptionsGasto = [];   
});

document.getElementById("BTNlimpiarG").addEventListener("click", function() {
    document.getElementById("gasto").value = "";
    document.getElementById("new-option-gasto").value = "";
    const checkboxes = document.querySelectorAll('#gastos-checkbox-group input[type="checkbox"]');
    checkboxes.forEach(checkbox => checkbox.checked = false);
});


/*Metas*/

customOptionsMeta = []

function addNewMetaOption() {
    const newMetaOption = document.getElementById('new-option-meta').value;
    if (newMetaOption.trim() !== "") {
        const checkboxGroup = document.getElementById("metas-checkbox-group");
        const newLabel = document.createElement("label");
        const newCheckbox = document.createElement("input");
        newCheckbox.type = "checkbox";
        newCheckbox.value = newMetaOption.toLowerCase().replace(/\s+/g, '-');
        newLabel.appendChild(newCheckbox);
        newLabel.appendChild(document.createTextNode(" " + newMetaOption));
        checkboxGroup.appendChild(newLabel);
        customOptionsMeta.push(newLabel);
        document.getElementById("new-option-meta").value = "";
    }
}

appearNewOptionMeta = document.getElementById("new-option-meta")

function NewoptionGastoAppear(appearNewOptionMeta) {
    appearNewOptionMeta.classList.remove("hidden");
}

function removeMetaOption() {
    const checkboxGroup = document.getElementById("metas-checkbox-group");
    const lastLabel = customOptionsMeta.pop();  
    if (lastLabel) {
        checkboxGroup.removeChild(lastLabel);
    }
}

document.getElementById("BTNlimpiarM").addEventListener("click", function() {
    document.getElementById("new-option-meta").value = "";
    const checkboxes = document.querySelectorAll('#gastos-checkbox-group input[type="checkbox"]');
    checkboxes.forEach(checkbox => checkbox.checked = false);

    appearNewOptionMeta.classList.add("hidden");
    
    customOptionsMeta.forEach(option => option.remove());
    customOptionsMeta = [];   
});

document.getElementById("BTNlimpiarM").addEventListener("click", function() {
    document.getElementById("new-option-meta").value = "";
    const checkboxes = document.querySelectorAll('#metas-checkbox-group input[type="checkbox"]');
    checkboxes.forEach(checkbox => checkbox.checked = false);
});


/*Ingreso*/

customOptionsIngreso = []

function addNewIngresoOption() {
    const newOptionText = document.getElementById("new-option-ingreso").value;
    if (newOptionText.trim() !== "") {
        const checkboxGroup = document.getElementById("ingresos-checkbox-group");
        const newLabel = document.createElement("label");
        const newCheckbox = document.createElement("input");
        newCheckbox.type = "checkbox";
        newCheckbox.value = newOptionText.toLowerCase().replace(/\s+/g, '-');
        newLabel.appendChild(newCheckbox);
        newLabel.appendChild(document.createTextNode(" " + newOptionText));
        checkboxGroup.appendChild(newLabel);
        customOptionsIngreso.push(newLabel);
        document.getElementById("new-option-ingreso").value = "";
    }
}

appearNewOptionIngreso = document.getElementById("new-option-ingreso")

function NewoptionIngresoAppear(appearNewOptionIngreso) {
    appearNewOptionIngreso.classList.remove("hidden");
}

function removeIngresoOption() {
    const checkboxGroup = document.getElementById("ingresos-checkbox-group");
    const lastLabel = customOptionsIngreso.pop();  
    if (lastLabel) {
        checkboxGroup.removeChild(lastLabel);
    }
}

document.getElementById("BTNlimpiarI").addEventListener("click", function() {
    document.getElementById("ingresos").value = "";
    document.getElementById("new-option-ingreso").value = "";
    const checkboxes = document.querySelectorAll('#ingresos-checkbox-group input[type="checkbox"]');
    checkboxes.forEach(checkbox => checkbox.checked = false);

    appearNewOptionIngreso.classList.add("hidden");
    
    customOptionsIngreso.forEach(option => option.remove());
    customOptionsIngreso = [];   
});

document.getElementById("BTNlimpiarM").addEventListener("click", function() {
    document.getElementById("new-option-ingreso").value = "";
    const checkboxes = document.querySelectorAll('#ingresos-checkbox-group input[type="checkbox"]');
    checkboxes.forEach(checkbox => checkbox.checked = false);
});


/*funciones botones*/
function saveSelectedGastos() {
    const gasto = document.getElementById('gasto').value;
    const gastoTipo = Array.from(document.querySelectorAll("#gastos-checkbox-group input:checked")).map(checkbox => checkbox.value);
    const selectedGastos = { monto: gasto, tipo: gastoTipo };
    localStorage.setItem("gastos", JSON.stringify(selectedGastos));
}

function saveSelectedMetas() {
    const selectedMetas = Array.from(document.querySelectorAll("#metas-checkbox-group input:checked")).map(checkbox => checkbox.value);
    localStorage.setItem("metas", JSON.stringify(selectedMetas));
}

function saveSelectedIngresos() {
    const ingreso = document.getElementById('ingresos').value;
    const ingresoTipo = Array.from(document.querySelectorAll("#ingresos-checkbox-group input:checked")).map(checkbox => checkbox.value);
    const selectedIngresos = { monto: ingreso, tipo: ingresoTipo };
    localStorage.setItem("ingresos", JSON.stringify(selectedIngresos));
}

document.getElementById("BTNmetas-ahorro").addEventListener("click", function() {
    const gastos = JSON.parse(localStorage.getItem("gastos")) || { monto: 0, tipo: [] };
    const metas = JSON.parse(localStorage.getItem("metas")) || [];
    const ingresos = JSON.parse(localStorage.getItem("ingresos")) || { monto: 0, tipo: [] };

    const data = {
        gasto: {
            monto: gastos.monto,
            tipo: gastos.tipo
        },
        ingreso: {
            monto: ingresos.monto,
            tipo: ingresos.tipo
        },
        meta: metas
    };

    mostrarRecomendaciones(data);
});

function mostrarRecomendaciones(data) {
    const recomendaciones = document.getElementById("recomendaciones");
    const resumenGastos = document.getElementById("resumen-gastos");
    const resumenIngresos = document.getElementById("resumen-ingresos");
    const resumenMetas = document.getElementById("resumen-metas");
    const planAcciones = document.getElementById("plan-acciones");

    const gastoHtml = `<p>Monto: ${data.gasto.monto} | Tipo: ${data.gasto.tipo.join(", ")}</p>`;
    const ingresoHtml = `<p>Monto: ${data.ingreso.monto} | Tipo: ${data.ingreso.tipo.join(", ")}</p>`;
    const metaHtml = `<p>Metas: ${data.meta.join(", ")}</p>`;

    resumenGastos.innerHTML = gastoHtml;
    resumenIngresos.innerHTML = ingresoHtml;
    resumenMetas.innerHTML = metaHtml;

    const ahorroSugerido = calcularAhorro(data.ingreso.monto, data.gasto.monto);

    const planHtml = `
        <p>Para alcanzar tus metas de ${data.meta.join(", ")}, te recomendamos seguir estos pasos:</p>
        <ol>
            <li>Destina al menos el 20% de tus ingresos a ahorros.</li>
            <li>Reduce tus gastos en ${data.gasto.tipo.join(", ")} en un 10%.</li>
            <li>Establece un fondo de emergencia con un mínimo de 3 meses de tus ingresos (${data.ingreso.monto * 3}).</li>
            <li>Revisa tus gastos e ingresos mensualmente para ajustar tu plan de ahorro.</li>
        </ol>
        <p>Ahorro mensual sugerido: ${ahorroSugerido}</p>
    `;

    planAcciones.innerHTML = planHtml;

    recomendaciones.classList.remove("hidden");
}

function calcularAhorro(ingreso, gasto) {
    const porcentajeAhorro = 0.20;
    return (ingreso - gasto) * porcentajeAhorro;
}

document.getElementById("BTNlimpiar-respuesta").addEventListener("click", function() {
    document.getElementById("resumen-gastos").innerHTML = "";
    document.getElementById("resumen-metas").innerHTML = "";
    document.getElementById("resumen-ingresos").innerHTML = "";
    document.getElementById("plan-acciones").innerHTML = "";
    document.getElementById("recomendaciones").classList.add("hidden");
});
