/*
//Tarea 2 

// Funcionalidad dinámica de la página de profesores

// Array de profesores con sus datos
let profesores = [
    {
        nombre: "Carlos Méndez",
        especialidad: "Desarrollo Web",
        descripcion: "Ingeniero en sistemas con 10 años de experiencia en desarrollo fullstack. Especialista en React, Node.js y arquitecturas modernas.",
        foto: "./images/profesor1.jpg",
        correo: "cmendez@novatechacademy.cr",
        cursosQueImparte: ["Páginas Web", "Contenedores"]
    },
    {
        nombre: "Laura Solís",
        especialidad: "Bases de Datos",
        descripcion: "Experta en diseño y administración de bases de datos relacionales y no relacionales. Certificada en MySQL, PostgreSQL y MongoDB.",
        foto: "./images/profesor2.jpg",
        correo: "lsolis@novatechacademy.cr",
        cursosQueImparte: ["Bases de Datos"]
    },
    {
        nombre: "Diego Ramírez",
        especialidad: "Ciberseguridad",
        descripcion: "Especialista en seguridad informática y ethical hacking. Ha trabajado con empresas del sector financiero protegiendo infraestructuras críticas.",
        foto: "./images/profesor3.jpg",
        correo: "dramirez@novatechacademy.cr",
        cursosQueImparte: ["Ciberseguridad"]
    },
    {
        nombre: "Ana Torres",
        especialidad: "Inteligencia Artificial",
        descripcion: "Investigadora y docente en machine learning y redes neuronales. Doctora en Ciencias de la Computación por la Universidad de Costa Rica.",
        foto: "./images/profesor4.jpg",
        correo: "atorres@novatechacademy.cr",
        cursosQueImparte: ["Inteligencia Artificial", "Bases de Datos"]
    }
];
*/

document.addEventListener("DOMContentLoaded", function () {

    // Menú hamburguesa
    let btnToggle = document.getElementById("nav-toggle");
    let navLinks = document.getElementById("nav-links");

    btnToggle.addEventListener("click", function () {
        if (navLinks.style.display === "flex") {
            navLinks.style.display = "none";
        } else {
            navLinks.style.display = "flex";
        }
    });
    /*
    // Renderizar las tarjetas de profesores
    renderizarProfesores();

    // Cerrar modal al hacer clic en el fondo
    let modal = document.getElementById("modal-profesor");
    modal.addEventListener("click", function (event) {
        if (event.target === modal) {
            cerrarModal();
        }
    */
    });

    /*
    // Cerrar modal al hacer clic en el botón de cerrar
    let btnCerrar = document.getElementById("modal-cerrar");
    btnCerrar.addEventListener("click", function () {
        cerrarModal();
    });

});

// Función que crea y muestra las tarjetas de profesores en el HTML
function renderizarProfesores() {
    let contenedor = document.getElementById("contenedor-profesores");

    profesores.forEach(function (profesor, index) {

        let col = document.createElement("div");
        col.className = "col-12 col-md-6 col-lg-3";

        // Crear la tarjeta
        let card = document.createElement("div");
        card.className = "card-profesor";
        card.dataset.index = index;

        // Crear la foto
        let img = document.createElement("img");
        img.src = profesor.foto;
        img.alt = "Foto de " + profesor.nombre;

        // Crear el nombre
        let nombre = document.createElement("h3");
        nombre.innerText = profesor.nombre;

        // Crear la especialidad
        let especialidad = document.createElement("p");
        especialidad.className = "especialidad";
        especialidad.innerText = profesor.especialidad;

        // Crear la descripción
        let descripcion = document.createElement("p");
        descripcion.className = "descripcion";
        descripcion.innerText = profesor.descripcion;

        // Agregar todos los elementos a la tarjeta
        card.appendChild(img);
        card.appendChild(nombre);
        card.appendChild(especialidad);
        card.appendChild(descripcion);

        // clic para abri el modal con el profesor seleccionado
        card.addEventListener("click", function () {
            let i = card.dataset.index;
            abrirModal(profesores[i]);
        });

        // Agregar la tarjeta a la columna y la columna al contenedor
        col.appendChild(card);
        contenedor.appendChild(col);
    });
}

// Función que abre el modal con la información completa del profesor
function abrirModal(profesor) {
    document.getElementById("modal-foto").src = profesor.foto;
    document.getElementById("modal-foto").alt = "Foto de " + profesor.nombre;
    document.getElementById("modal-nombre").innerText = profesor.nombre;
    document.getElementById("modal-especialidad").innerText = profesor.especialidad;
    document.getElementById("modal-descripcion").innerText = profesor.descripcion;
    document.getElementById("modal-correo").innerText = profesor.correo;

    // Mostrar los cursos que imparte
    let listaCursos = document.getElementById("modal-cursos");
    listaCursos.innerHTML = "";
    profesor.cursosQueImparte.forEach(function (curso) {
        let li = document.createElement("li");
        li.innerText = curso;
        listaCursos.appendChild(li);
    });

    // Mostrar el modal
    let modal = document.getElementById("modal-profesor");
    modal.style.display = "flex";
}

// Función que cierra el modal
function cerrarModal() {
    let modal = document.getElementById("modal-profesor");
    modal.style.display = "none";
}
*/