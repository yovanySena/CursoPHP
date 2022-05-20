# HOSPISOFT V1

El favicon se  puede descargar cualquier icono en formato .ico

# AVANCE MAYO 14 2022
1. Organizar el menú del panel con usuario activo
2. implementar el sistema de mensajes de la app (Vaiables de sesión)
3. Registro y encriptación del paciente (Algoritmos de Hashing)Validación del lado del servidor
4. Login del paciente
5. Protección del directorio de la app
6. historias de usuarios (Territorium)-- SCRUM

# Validación PHP

trim() //llimpia espacios en blamco al principio y al final
filter_var() con sus filtros

# Algoritmos de encriptación  .... bcrypt

password_hass()

# Tipos de error

E_NOTICE = Advertencia de posible error
E_WARNING = Error o tan grave, no rompe la ejecución del script
E_ERROR = Fatales, paran el script (tumban el sistema)

# Variables de SESIÓN
debido a que el preotocolo HTTP (stateless), no guarda las variables
entre diferentes programas, es necesario crear variables de sesión;
estas se crean como un arreglo dentro del navegador para poderlas usar
mientras el uso del navegador esté activo (sesión).
Las defino en PHP con session_start() .... $_SESSION['nombreVariable']
Le puedo asignar valores

# Archivos HTACCESS

Me sirven para configurar el servidor web (APACHE) Ojo: existe otro servidor
y es el NGINX (Este corre en linux) == Dicen que es más rápido =