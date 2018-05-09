# Consulta con INNER JOIN sql
```sql
SELECT 
    p.id_pedido,
    lp.fid_pedido,
    lp.fid_producto,
    lp.fid_fabricante
FROM
    pedido p
        INNER JOIN
    linea_pedido lp ON (p.id_pedido = lp.fid_pedido);
```
Resultado<br> 
![Ejemplo resultado](images/result_1.png)
# Consulta con LEFT OUTER JOIN sql
```sql
SELECT 
    p.id_pedido,
    lp.fid_pedido,
    lp.fid_producto,
    lp.fid_fabricante
FROM
    pedido p
        LEFT OUTER JOIN
    linea_pedido lp ON (p.id_pedido = lp.fid_pedido);
```
Resultado<br> 
![Ejemplo resultado](images/result_2.png)
# Consulta con RIGHT OUTER JOIN sql
```sql
SELECT 
    p.id_pedido,
    lp.fid_pedido,
    lp.fid_producto,
    lp.fid_fabricante
FROM
    pedido p
        RIGHT OUTER JOIN
    linea_pedido lp ON (p.id_pedido = lp.fid_pedido);
```
Resultado<br> 
![Ejemplo resultado](images/result_3.png)
# Consulta con AND JOINS DE MAS DE DOS TABLAS
```sql
SELECT 
    p.id_pedido,
    lp.fid_pedido,
    lp.fid_producto,
    lp.fid_fabricante,
    e.nombre
FROM
    pedido p,
    linea_pedido lp,
    empleados e
WHERE
    p.id_pedido = lp.fid_pedido
        AND e.id_empleado = p.fid_vendedor;
```
Resultado<br> 
![Ejemplo resultado](images/result_4.png)
# SUBCONSULTAS (SUBQUERIES)
Si S devuelve un único resultado:
```sql
SELECT 
    id_oficina, ciudad
FROM
    oficinas
WHERE
    objetivo > (SELECT 
            SUM(empleados.ventas)
        FROM
            empleados);
```
Resultado<br> 
![Ejemplo resultado](images/result_5.png)
#  SUBCONSULTAS (SUBQUERIES)
Si S devuelve más de un resultado pero con un solo
campo podemos hacer a su vez varias acciones
```sql
SELECT 
    id_empleado, nombre, fid_oficina
FROM
    empleados
WHERE
    fid_oficina IN (SELECT 
            id_oficina
        FROM
            oficinas
        WHERE
            region = 'este');
```
Resultado<br> 
![Ejemplo resultado](images/result_6.png)
```sql
SELECT 
    id_oficina, ciudad
FROM
    oficinas
WHERE
    id_oficina > ANY (SELECT 
            SUM(objetivo)
        FROM
            empleados
        GROUP BY id_oficina);
```
Resultado<br> 
![Ejemplo resultado](images/result_7.png)
```sql
SELECT 
    id_oficina, ciudad
FROM
    oficinas
WHERE
    objetivo > ALL (SELECT 
            SUM(ventas)
        FROM
            empleados
        GROUP BY fid_oficina);
```
Resultado<br> 
![Ejemplo resultado](images/result_8.png)
```sql
SELECT 
    id_empleado, nombre, fid_oficina
FROM
    empleados e
WHERE
    EXISTS( SELECT 
            e.id_empleado
        FROM
            oficinas o
        WHERE
            region = 'este'
                AND e.fid_oficina = o.id_oficina);
```
Resultado<br> 
![Ejemplo resultado](images/result_9.png)
```sql
SELECT 
    id_empleado, nombre, fid_oficina
FROM
    empleados e
WHERE
    NOT EXISTS( SELECT 
            e.id_empleado
        FROM
            oficinas o
        WHERE
            region = 'este'
                AND e.fid_oficina = o.id_oficina);
```
Resultado<br> 
![Ejemplo resultado](images/result_10.png)
## UPDATE con subconsultas:
```sql
UPDATE empleados AS e,
    (SELECT 
        *
    FROM
        empleados
    WHERE
        id_empleado = 101) AS ee 
SET 
    e.cargo = ee.cargo,
    e.nombre = ee.nombre
WHERE
    e.id_empleado = 109;
```
