const cursos = [
  {
    nombre: "Data Science con Python",
    descripcion:
      "Aprende a analizar datos, crear visualizaciones y construir modelos predictivos usando pandas, matplotlib y scikit-learn.",
    imagen: "images/cursos/data-science.jpg",
    categoria: "Data Science",
  },
  {
    nombre: "Inteligencia Artificial Aplicada",
    descripcion:
      "Domina redes neuronales, procesamiento de lenguaje natural y visión por computadora con TensorFlow y PyTorch.",
    imagen: "images/cursos/inteligencia-artificial.jpg",
    categoria: "Inteligencia Artificial",
  },
  {
    nombre: "Desarrollo Full Stack",
    descripcion:
      "Construye aplicaciones web completas con HTML, CSS, JavaScript, Node.js y bases de datos relacionales y NoSQL.",
    imagen: "images/cursos/full-stack.jpg",
    categoria: "Desarrollo Web",
  },
  {
    nombre: "Ciberseguridad Ofensiva y Defensiva",
    descripcion:
      "Comprende las principales amenazas digitales y aprende a proteger sistemas, redes y aplicaciones ante ataques reales.",
    imagen: "images/cursos/ciberseguridad.jpg",
    categoria: "Ciberseguridad",
  },
];

function crearTarjetaCurso(curso) {
  // Contenedor principal de la tarjeta
  const tarjeta = document.createElement("div");
  tarjeta.classList.add("curso-tarjeta");
 
  // Imagen
  const imagen = document.createElement("img");
  imagen.src = curso.imagen;
  imagen.alt = curso.nombre;
  imagen.classList.add("curso-imagen");
 
  // Cuerpo de texto
  const cuerpo = document.createElement("div");
  cuerpo.classList.add("curso-cuerpo");
 
  // Etiqueta de categoría
  const categoria = document.createElement("span");
  categoria.classList.add("curso-categoria");
  categoria.textContent = curso.categoria;
 
  // Nombre del curso
  const nombre = document.createElement("h3");
  nombre.classList.add("curso-nombre");
  nombre.textContent = curso.nombre;
 
  // Descripción
  const descripcion = document.createElement("p");
  descripcion.classList.add("curso-descripcion");
  descripcion.textContent = curso.descripcion;
 
  // Botón CTA
  const boton = document.createElement("a");
  boton.href = "cursos.html";
  boton.classList.add("btn-acento", "curso-boton");
  boton.textContent = "Ver programa";
 
  // Ensamblar: cuerpo
  cuerpo.appendChild(categoria);
  cuerpo.appendChild(nombre);
  cuerpo.appendChild(descripcion);
  cuerpo.appendChild(boton);
 
  // Ensamblar: tarjeta completa
  tarjeta.appendChild(imagen);
  tarjeta.appendChild(cuerpo);
 
  return tarjeta;
}
 
// --- 3. FUNCIÓN: renderizar todos los cursos en el contenedor del DOM ---
 
function renderizarCursos() {
  const contenedor = document.getElementById("cursos-grid");
 
  if (!contenedor) {
    console.error('No se encontró el elemento con id "cursos-grid".');
    return;
  }
 
  cursos.forEach((curso) => {
    const tarjeta = crearTarjetaCurso(curso);
    contenedor.appendChild(tarjeta);
  });
}
 
// --- 4. EJECUTAR cuando el DOM esté listo ---
 
document.addEventListener("DOMContentLoaded", renderizarCursos);