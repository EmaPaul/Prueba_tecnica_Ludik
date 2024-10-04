
# Prueba Tecnica Ludick

## Parte 1: Desarrollo de un CRUD Básico en Laravel

Instalacion de las dependencias del proyecto

```composer install```

Ejecutar el comando para el seed

```php artisan db:seed --class=products_seeder```


Para levantar el proyecto

```php artisan serve```

Empece instalando los componentes necesarios para el funcionamiento de Laravel al inicio hubo algunas complicaciones con la base de datos pero logre utilizar sqlite para poder visualizar de forma completa la api y de manera rapida. logrando asi todo el crud completo solicitado en la prueba




## Parte 2:  Implementación del CRUD en un Framework Desconocido
Al inicio de me hiso algo tedioso a pesar de que tengo un poco de experiencia manejando django, pero nunca pude profundizar mas de lo alguna ves vi tuve que mirar videos de como configurar el proyecto recordar como instalar los entornos virtuales com la documentacion de python etc. y bueno el desafio mas grande a mi parecer fue pensar que quisa no lo acabaria a tiempo debido a que se soltaba demasiados errores pero pude aplicar autocontrol para manjearlos y bueno logre terminar.

crear un entorno virtual 

```python -m virtualenv venv```

Activar el entorno virtual

```.\venv\Scripts\activate```

instalar django

```pip install django```

instalar DRF (Django Rest Framework)

```pip install djangorestframework```

Comando para la migracion

```python manage.py makemigrations``` --> si no detecta cambios ingnorar este paso

```python manage.py migrate```

Ejecutar el seed 

```python manage.py seed```

Ejecutar en caso de que se quiera reiniciar el conteo del id

```python manage.py flush```

levantar el proyecto

```python manage.py runserver```

## Parte 3:  Resolución de un Problema Algorítmico

Nota: se debe tener instalado el entorno de Node js

```node index.js```

El funcionmiento del algoritmo empieza realizando una lectura al archivo con las urls
y lo que hace es buscar patrones como el dominio y la extension para asi dividir el archivo en lineas y quitar los espacios en blanco y lineas vacias. al tener lograr tenerlas listadas en un array procede a realizar el filtro y da como resultado la resolucion del problema.

Una de las estrategias de optimizacion que puedo resaltar son el uso de ```Set()``` para evitar las url duplicadas, el uso de expresiones regulares para los filtros lo cual hace que la salida sea mas rapida.

## Ambos endpoints funcionan para las mismas api

# EndPoints
```http://localhost:8000/api/products```  ---> GET, POST

```http://localhost:8000/api/products/:id``` ---> GET BY ID , PATCH, DELETE

# Json para crear un producto
```
{
    "Nombre": "Producto 11",
    "Descripción": "Descripción del producto 11",
    "Precio": 600,
    "Stock": 20
}
```



