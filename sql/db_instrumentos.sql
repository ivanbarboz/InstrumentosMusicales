Create DATABASE tarea03;
USE tarea03;
CREATE TABLE Instrumentos (
    instrumentos_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(25) UNIQUE NOT NULL,
    descripcion VARCHAR(300) UNIQUE NOT NULL,
    image_url VARCHAR(300) UNIQUE NOT NULL
);

INSERT INTO Instrumentos (nombre, descripcion, image_url) values 
("Saxofón", "Instrumento de viento, pertenece a la familia de los aerófonos de lengüeta simple.", "https://images.pexels.com/photos/164936/pexels-photo-164936.jpeg?auto=compress&cs=tinysrgb&w=1600"),
("Bateria", "Conjunto de instrumentos musicales de percusión.", "https://img.freepik.com/foto-gratis/baterista-toca-habilmente-bateria-metal-escenario-ia-generativa_188544-31865.jpg?w=996&t=st=1696290043~exp=1696290643~hmac=ec1b3ebd9e6595dee1caade87e7ab7629a65b56d8a7cb6746910e6188f1721ee"),
("Guitarra Electrica", "Instrumento de cuerdas, que se toca pulsando o rasgueando las cuerdas.", "https://images.pexels.com/photos/2049414/pexels-photo-2049414.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"),
("Piano", "El piano es un instrumento musical de teclado que produce sonido al golpear sus cuerdas con martillos controlados por el teclado.", "https://images.pexels.com/photos/1021142/pexels-photo-1021142.jpeg?auto=compress&cs=tinysrgb&w=1600"),
("Flauta", "Instrumento de viento que produce sonido al soplar en una boquilla.", "https://img.freepik.com/fotos-premium/ilustracion-flauta-bloque-rojo-aislado-sobre-fondo-blanco-ai-generativo_945369-5373.jpg?w=996"),
("Clarinete", "Instrumento de viento que produce sonido al soplar en una caña simple.", "https://img.freepik.com/fotos-premium/clarinete-cerca-fondo-blanco-iones-4k-realista_839182-6701.jpg?w=740"),
("Violin", "Instrumento de cuerda frotada que produce sonido al frotar un arco con cerdas de caballo.", "https://img.freepik.com/fotos-premium/violin-aislado_525574-14462.jpg?w=996"),
("Pandereta", "Instrumento de percusión que produce sonido al golpear un marco de madera o metal con las manos.", "https://media.istockphoto.com/id/920576328/es/foto/fotos-antiguas.jpg?b=1&s=612x612&w=0&k=20&c=3DqSlET1yu0Mk4RMVexHCE5DZ0WyREIGkp6Y-XmrZJ0=");

--select * from instrumentos;

