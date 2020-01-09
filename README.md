# WEB-APP

_Aplicacion pedida como paso previo a una entrevista de trabajo_

## Consigna del proyecto 🚀

_Desarrollar una web-app basada en Laravel que responda a los siguientes servicios._

```
1- addUser (POST): Username, Nombre, Apellido, Email, Nacionalidad. Almacenarlo en MySQL. --listo
```

```
2- delUser (DELETE)    -- listo
```

```
3- getUsers (GET) -- listo
```

```
4- updateUser (PUT) -- listo
```

```
5- a cada usuario se le asocia una nacionalidad, la cual permitirá saber cuántos usuarios hay de cada país (generar entre 20 y 40 usuarios y un máximo de 6 nacionalidades). -- parte api listo,
```

_Adicional al ítem anterior, levantar una vista que consuma dichos servicios y presente lo siguiente._
```
Panel de navegación.
Listado de usuarios ingresados.
Formulario para la búsqueda, alta, baja y modificación de usuarios.
 ```


### Pre-requisitos 📋

_Se requiere lo siguiente para que el software funcione adecuadamente_

```
Base de Datos Mysql
```
```
Version de PHP > 7.2
```

### Instalación 🔧

_Primero tienen que descargar el repositorio una vez con el repositorio:_

_Configurar archivo .ENV_

```
Se tendra que configurar el acceso a la base de datos 
ej :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webapp
DB_USERNAME=root
DB_PASSWORD=
```
_Cargar los datos a la BD_
```
Ejecutar el comando "php artisan migrate --seed"
o copiar la query que esta en el repositorio con el nombre de "Base_de_Datos.sql"
```
## Construido con 🛠️
* [laravel](https://laravel.com) - El framework web usado
* [Creative-Tim](https://www.creative-tim.com) - Template 

## Autor ✒️
* **Nehuen Fortes**  [SoldierIced](https://github.com/SoldierIced/)


