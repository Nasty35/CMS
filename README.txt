BasicCMS

Creada por Daniel (Nasty35)

Características:
- Escrita en PHP
- Clases en POO
- Conexión a base de datos MySQL
- Plantillas de diseño
- Sistema de lenguaje (Español e Inglés)

08/12/2020
- Cambio de MySQL a MySQLi
- Optimización de estructura de ficheros
- Inicio migración a MVC
- Se añade diseño con Framework W3.CSS
- Se integra servicio 'Registro jornada'
- Se integra servicio 'Noticias'
- Se elimina sistema de lenguajes (i18n/internationalization)

Por hacer:
Adaptar navbar a moviles
Parchear CSRF. Seguridad de permisos de páginas (a qué páginas puede ir si está o no logado)
Combinar modo de query y prepares (unificar consultas)
Documentar todo el código html y PHP
Modificar permisos de las noticias, que solo el creador pueda borrarlas y editarlas
Quitar campo autor de noticias y comentarios y añadir la sesión del usuario
