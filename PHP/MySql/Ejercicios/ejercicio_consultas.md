# Ejercicios MySQL 2
## 1. En la base de datos “empresa”:
a. Contad cuantos clientes hay en total
```sql
select count(id_cliente) from empresa.clientes
```
b. Recuperad el NOMBRE de todos los empleados en orden de fecha de
contrato descendente.
```sql
SELECT 
    nombre
FROM
    empresa.empleados
ORDER BY fecha_contrato DESC
```
c. Seleccionad SOLO el último pedido insertado.
```sql
SELECT * FROM pedido ORDER BY id_pedido DESC LIMIT 1
```
d. Agrupad los pedidos por fecha para saber si existe alguna fecha con más
de un pedido
```sql
SELECT 
    fecha, COUNT(fecha)
FROM
    pedido
GROUP BY fecha
HAVING COUNT(fecha) > 1
ORDER BY fecha
```
e. Modificad la fecha de todos los contratos por la fecha actual
```sql
UPDATE empleados SET fecha_contrato = NOW()
```
## 2. En la base de datos “empresa”:

a. Contad cuantos productos hay en total
```sql
SELECT COUNT(*) FROM productos;
```
b. Calculad el sumatorio del precio de todos los productos
```sql
SELECT SUM(precio) FROM productos;
```
c. Calculad la media del precio de todos los productos
```sql
SELECT AVG(precio) FROM productos;
```
d. Calculad el sumatorio de las ventas
```sql
SELECT SUM(ventas) FROM oficinas;
```
e. Calculad la media de precio de todas las ventas
```sql
SELECT AVG(ventas) FROM oficinas;
```
## 4. Realizad sobre la base de datos “empresa” las siguientes consultas compuestas
a. Cliente que más compras ha realizado (con unión natural).
```sql
SELECT 
    COUNT(p.id_pedido) AS pedido, c.*
FROM
    clientes c,
    pedido p
WHERE
    id_cliente = fid_cliente
GROUP BY c.id_cliente
HAVING MAX(p.id_pedido)
ORDER BY pedido DESC
LIMIT 1;
```
b. Dinero total que ha gastado el cliente de la consulta anterior (con unión natural).
```sql
SELECT 
    sum(p.importe_total) AS importe, c.*
FROM
    clientes c,
    pedido p
WHERE
    id_cliente = fid_cliente
GROUP BY c.id_cliente
ORDER BY importe DESC
LIMIT 2;
```
c. Listado de clientes que hayan realizado pedidos en 1989 (con unión natural).
```sql
SELECT 
    c.nombre, p.fecha
FROM
    clientes c,
    pedido p
WHERE
    c.id_cliente = p.fid_cliente
        AND p.fecha LIKE '1989-%';
```
d. Listado de centros situados en el este y de sus vendedores ordenados
alfabéticamente (con unión natural).
```sql
SELECT 
    e.nombre, o.region
FROM
    oficinas o,
    empleados e
WHERE
    o.id_oficina = e.fid_oficina
        AND o.region = 'este'
ORDER BY e.nombre ASC
```
e. Listado de vendedores cuyo nombre comience por A y de sus pedidos
ordenados cronológicamente, pero solo de los pedidos realizados por
clientes cuyo nombre empiece por J (con unión natural).
```sql
SELECT 
    e.*, c.*
FROM
    empleados e,
    pedido p,
    clientes c
WHERE
    e.id_empleado = p.fid_vendedor
        AND c.id_cliente = p.fid_cliente
        AND e.nombre LIKE 'A%'
        AND c.nombre LIKE 'J%'
ORDER BY p.fecha;
```
f. Listado de los directores de los centros de la región este con un objetivo
de ventas inferior a 500.000 €, cuyo salario sea superior a 300.000 € (con unión natural).
```sql
SELECT 
    *
FROM
    empleados e,
    oficinas o
WHERE
    e.id_empleado = o.fid_director
        AND o.region = 'este'
        AND o.ventas < 500000
        AND e.salario > 300000;
```
## 4. Realizad sobre la base de datos “empresa” las siguientes consultas compuestas
a. Cliente que más compras ha realizado (con unión INNER JOIN).
```sql
SELECT 
    COUNT(p.id_pedido) AS pedido, c.*
FROM
    clientes c
        INNER JOIN
    pedido p ON id_cliente = fid_cliente;
```
b. Dinero total que ha gastado el cliente de la consulta anterior (con unión INNER JOIN).
```sql
SELECT 
    SUM(p.importe_total) AS importe, c.*
FROM
    clientes c
        INNER JOIN
    pedido p ON (id_cliente = fid_cliente);   
```
c. Listado de clientes que hayan realizado pedidos en 1989 (con unión INNER JOIN).
```sql
SELECT 
    c.nombre, p.fecha
FROM
    clientes c
        INNER JOIN
    pedido p ON (c.id_cliente = p.fid_cliente)
        AND p.fecha LIKE '1989-%';
```
d. Listado de centros situados en el este y de sus vendedores ordenados
alfabéticamente (con unión INNER JOIN).
```sql
SELECT 
    e.nombre, o.region
FROM
    oficinas o
        INNER JOIN
    empleados e ON (o.id_oficina = e.fid_oficina)
        AND o.region = 'este'
ORDER BY e.nombre ASC;
```
e. Listado de vendedores cuyo nombre comience por A y de sus pedidos
ordenados cronológicamente, pero solo de los pedidos realizados por
clientes cuyo nombre empiece por J (con unión INNER JOIN).
```sql
SELECT 
    e.*, c.*
FROM
    empleados e
        INNER JOIN
    pedido p
        INNER JOIN
    clientes c ON (e.id_empleado = p.fid_vendedor
        AND c.id_cliente = p.fid_cliente)
        AND e.nombre LIKE 'A%'
        AND c.nombre LIKE 'J%'
ORDER BY p.fecha;
```
f. Listado de los directores de los centros de la región este con un objetivo
de ventas inferior a 500.000 €, cuyo salario sea superior a 300.000 € (con unión INNER JOIN).
```sql
SELECT 
    *
FROM
    empleados e
        INNER JOIN
    oficinas o ON (e.id_empleado = o.fid_director)
        AND o.region = 'este'
        AND o.ventas < 500000
        AND e.salario > 300000;
```
g. Listado de pedidos de entre 5 y 50 unidades, vendidos por empleados
de la oficina de Castellón a clientes cuyo nombre NO empiece por J (con unión INNER JOIN).
```sql
SELECT 
    *
FROM
    clientes c
        INNER JOIN
    pedido p ON (c.id_cliente = p.fid_cliente)
        INNER JOIN
    linea_pedido lp ON (p.id_pedido = lp.fid_pedido)
        INNER JOIN
    empleados e ON (p.fid_vendedor = e.id_empleado)
        INNER JOIN
    oficinas o ON (o.id_oficina = e.fid_oficina)
        AND lp.cantidad BETWEEN 5 AND 50
        AND o.ciudad = 'Castellón'
        AND c.nombre NOT LIKE 'J%'
```
h. Listado de pedidos realizados en febrero de 1997 realizados por clientes
cuyo nombre empiece por J, atendidos por vendedores mayores de 35
años y que trabajen en centros de la región oeste, ordenados por
nombre de cliente y fecha de pedido descendente (con unión INNER JOIN).
```sql
SELECT 
    *
FROM
    pedido p
        INNER JOIN
    clientes c ON (p.fid_cliente = c.id_cliente)
        INNER JOIN
    empleados e ON (p.fid_vendedor = e.id_empleado)
        INNER JOIN
    oficinas o ON (e.fid_oficina = o.id_oficina)
WHERE
    YEAR(p.fecha) = '1997'
        AND MONTH(p.fecha) = '02'
        AND c.nombre LIKE 'J%'
        AND e.edad > 35
        AND o.region = 'oeste'
ORDER BY c.nombre , p.fecha DESC
```