Prueba técnica Pedro Barrio
===========================
## 1. Introducción
Este documento describe la solución propuesta para la prueba técnica de Pedro Barrio. La solución se ha desarrollado en Symfony en la última versión junto con PHP en la última versión 8.x.

## 2. Pruebas
Para las pruebas se han hecho test unitarios sobre los casos de uso detectados en el problema. 

## 3. Separación entre capas
Se ha usado DDD para la separación entre capas. Para ello, se ha optado por la siguiente estructura de carpetas: Dominio, Aplicación, Infraestructura y Presentación.

## 4. Persistencia
Para la persistencia, se ha optado por atacar directamente al repositorio que se proporcionaba en la prueba. Para ello, se ha creado un repositorio que implementa la interfaz del repositorio proporcionado.

## 5. Usos
Se han usado además, funcionalidades nuevas de php, como los enumerados, los constructores de propiedades y los atributos de tipos.

## 6. Tipado
Todas las clases y métodos tienen tipado estricto.




