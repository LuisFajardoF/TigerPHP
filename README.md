# TigerPHP + TailwindCSS Framework

## Prepare su entorno de trabajo

1. Descargue este proyecto en su máquina virtual.
2. Abra el proyecto con VSCode.
3. Abra dos Terminales desde la pestaña Terminal > Nuevo Terminal
4. En una terminal active los **deamons** de MySQL y Apache utilizando el siguiente comando de terminal
```sh
sudo /opt/lampp/lampp start
```
5. En la misma terminal ejecute el siguiente comando para habilitar un puerto del sistema operativo _(SO)_ en donde se ejecutara el **backend** de su proyecto:
```sh
php -S localhost:3000
``` 
6. En la otra terminal ejecute el siguiente comando para habilitar un puerto local en donde se ejecutara el **frontend** de su proyecto. 
```sh
npx tailwindcss -i css/tailwind.css -o css/styles.css --watch
```

Analizando el comando anterior; todo lo que está antes de `--watch` es el proceso de **transpilación** de TailwindCSS. `--watch` es un flag que abre un puerto del sistema operativo. Dicho puerto se encarga de transpilar automaticamente y en tiempo real los estilos CSS; cada cambio que el usuario haga en la aplicación se verá reflejado automaticamente luego de hacer un "Refresh" :arrows_counterclockwise: de página en el navegador.

### Configuraciones adicionales

1. Para inicializar composer se escribe el siguiente comando desde Terminal:

```
composer init
```
Luego de hacer la configuracion inicial y agregar el classmap en `composer.json` escribir el siguiente comando:

```
composer install
```

> Cada vez que se añada algo al archivo `composer.json` o se añada una nueva clase al proyecto se deberá ejecutar el siguiente comando desde Terminal:

```
composer dumpautoload
```

### Paquetes instalados

Para generar los paquetes necesarios en la carpeta `vendor` de la aplicacion instale los siguientes paquetes:

```
composer require pecee/simple-router
composer require illuminate/database
```