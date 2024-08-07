# TigerPHP + TailwindCSS Framework

## Prepare su entorno de trabajo

1. Descargue este proyecto en su máquina virtual.
2. Abra el proyecto con VSCode.
3. Abra dos Terminales desde la pestaña Terminal > Nuevo Terminal
4. En una terminal active los **deamons** de MySQL y Apache utilizando el siguiente comando de terminal
```sh
sudo /opt/lampp/lampp start
```

## Configure el backend de este proyecto

1. En la terminal ejecute:
```sh
composer install
```
El comando anterior instalara todas las dependencias que se encuentran en `composer.json`

2. Luego ejecute en la misma terminal:
```sh
composer dumpautoload
```
3. Finalmente ejecute el servidor de PHP en la misma terminal:
```sh
php -S localhost:3000
```

## Configure el frontend de este proyecto

1. Desde la otra terminal, ejecute:
```sh
npm install @tailwindcss/forms
```

2. Luego de instalar el paquete anterior, ejecute:
```sh
npx tailwindcss -i css/tailwind.css -o css/styles.css --watch
```

Ahora puede trabajar en su proyecto :ok: