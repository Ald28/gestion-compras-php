# Proyecto PHP dockerizado

## Requisitos

- Docker Desktop o Docker Engine con Docker Compose.

## Ejecutar

```bash
docker compose up --build
```

Abre <http://localhost:8080> en el navegador.

Los cambios en `index.php` se reflejan automáticamente gracias al volumen configurado.

## Detener

```bash
docker compose down
```
