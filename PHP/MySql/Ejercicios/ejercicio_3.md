# Ejercicios MySQL 3
1. Realizad sobre la base de datos “empresa” las siguientes consultas:
+ a. Listado de empleados con su respectivo superior
```sql
SELECT 
    e.nombre, s.nombre, s.cargo
FROM
    empleados AS e
        INNER JOIN
    empleados AS s ON (s.id_empleado = e.fid_superior)
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio2/result_1.a)

+ b. Listado anterior INCLUYENDO aquellos empleados que no tengan
superior.
```sql
SELECT 
    e.nombre, s.nombre, s.cargo
FROM
    empleados AS e
        LEFT OUTER JOIN
    empleados AS s ON (s.id_empleado = e.fid_superior)
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio2/result_1.b.PNG)

+ c. Listado de empleados con información sobre su oficina, tengan o no.
```sql
SELECT 
    e.nombre, o.id_oficina
FROM
    empleados AS e
        LEFT OUTER JOIN
    oficinas o ON (e.fid_oficina = o.id_oficina)
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio2/result_1.c)

+ d. Listado de empleados con información sobre su venta de importe más
alto
```sql
select
e.id_empleado,e.nombre, max(p.importe_total)
from 
empleados e
inner join
pedido p on(p.fid_vendedor=e.id_empleado)
group by e.nombre 
order by p.importe_total desc
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio2/result_1.d.PNG)

+ e. Listado de clientes cuyo número de pedidos sea superior a 2.
```sql
SELECT 
    c.nombre, COUNT(p.fid_cliente)
FROM
    clientes AS c
        RIGHT OUTER JOIN
    pedido AS p ON c.id_cliente = p.fid_cliente
GROUP BY p.fid_cliente
HAVING COUNT(p.fid_cliente) > 2;
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio2/result_1.e.PNG)

2. Realizar las siguientes actualizaciones sobre la base de datos “empresa”:
+ a. Actualizar los salarios de nuestros empleados de tal forma que el salario
de un empleado sea el 50% del objetivo de su oficina.
```sql
UPDATE empleados AS e,
    oficinas AS o 
SET 
    e.salario = o.objetivo * 50 / 100
WHERE
    e.fid_oficina = o.id_oficina;
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte2/result_2.a.antes.png)
![Ejemplo resultado](images/ejercicio3/parte2/result_2.a.despues.png)

+ b. Poner a cero las ventas de los empleados de la oficina 12
```sql
UPDATE empleados AS e,
    oficinas AS o 
SET 
    e.ventas = 0
WHERE
    e.fid_oficina = o.id_oficina
        AND o.id_oficina = 12;
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte2/result_2.a.antes.png)
![Ejemplo resultado](images/ejercicio3/parte2/result_2.b.despues.png)

+ c. Poner a cero el límite de crédito de los clientes asignados a empleados de la oficina 12.
```sql
UPDATE clientes AS c,
    empleados AS e,
    pedido AS p 
SET 
    c.limitecredito = 0
WHERE
    p.fid_vendedor = e.id_empleado
        AND p.fid_cliente = c.id_cliente
        AND e.fid_oficina = 12;
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte2/result_2.c.antes.png)
![Ejemplo resultado](images/ejercicio3/parte2/result_2.c.despues.png)

+ d. Borrar las líneas de pedido de los pedidos del cliente Jaime Llorens.
```sql
DELETE FROM linea_pedido 
WHERE
    fid_pedido IN (SELECT 
        p.id_pedido
    FROM
        clientes c
            INNER JOIN
        pedido p ON p.fid_cliente = c.id_cliente
    
    WHERE
        c.nombre = 'Jaime Llorens'); 
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte2/result_2.d.antes.png)
![Ejemplo resultado](images/ejercicio3/parte2/result_2.d.despues.png)

+ e. Aumentar un 5% el precio de todos los productos del fabricante ACI.
```sql
UPDATE productos 
SET 
    precio = precio + (precio * 0.05)
WHERE
    id_fabricante = 'aci';
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte2/result_2.e.antes.png)
![Ejemplo resultado](images/ejercicio3/parte2/result_2.e.despues.png)

+ f. Añadir una nueva oficina para la ciudad de Madrid, con numero de oficina 30, un objetivo de 600 y región centro.
```sql
INSERT INTO oficinas VALUES(30,'Madrid','centro',NULL,600,NULL);
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte2/result_2.f.antes.png)
![Ejemplo resultado](images/ejercicio3/parte2/result_2.f.despues.png)

+ g. Cambiar los empleados de la oficina 21 a la oficina 30.
```sql
UPDATE empleados 
SET 
    fid_oficina = 30
WHERE
    fid_oficina = 21;
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte2/result_2.g.antes.png)
![Ejemplo resultado](images/ejercicio3/parte2/result_2.g.despues.png)

+ h. Eliminar los pedidos del empleado 105.
```sql
#pasamos la clave foranea a cascade
ALTER TABLE `empresa_copy`.`linea_pedido` 
DROP FOREIGN KEY `FK_pedido_linea_pedido`;
ALTER TABLE `empresa_copy`.`linea_pedido` 
ADD CONSTRAINT `FK_pedido_linea_pedido`
  FOREIGN KEY (`fid_pedido`)
  REFERENCES `empresa_copy`.`pedido` (`id_pedido`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
#eliminamos los pedidos del empleado 105 y a su vez se eliminan la linea de pedido asignados a esos pedidos
DELETE p FROM pedido as p
WHERE
    p.fid_vendedor = 105;
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte2/result_2.h.antes.png)
![Ejemplo resultado](images/ejercicio3/parte2/result_2.h.despues.png)

+ i. Subir un 10% el salario de los empleados cuya oficina haya superado sus objetivos de venta.
```sql
UPDATE empleados AS e,
    oficinas AS o 
SET 
    e.salario = e.salario + (e.salario * 0.1)
WHERE
    e.fid_oficina = o.id_oficina
        AND o.objetivo < o.ventas;
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte2/result_2.i.antes.png)
![Ejemplo resultado](images/ejercicio3/parte2/result_2.i.despues.png)

+ j. Eliminar las oficinas que no tengan empleados.
```sql
DELETE FROM oficinas 
WHERE
    id_oficina NOT IN (SELECT 
        fid_oficina
    FROM
        empleados);
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte2/result_2.j.antes.png)
![Ejemplo resultado](images/ejercicio3/parte2/result_2.j.despues.png)

3. Realizar las siguientes consultas con subconsultas sobre la base de datos “empresa”:

+a. Listar las oficinas donde el objetivo de vendas de la oficina exceda la suma de salarios de sus vendedores.
```sql
SELECT 
    SUM(e.salario)AS salarioTotal, e.fid_oficina, o.id_oficina
FROM
    empleados e
    inner join
    oficinas o on e.fid_oficina= o.id_oficina
    where o.objetivo> salario
GROUP BY e.fid_oficina; 
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte3/imagen3.a.png)

+ b. Empeados con un salario igual o superior al objetivo de su oficina (con subconsultas o sin ellas)
```sql
SELECT 
    e.id_empleado, e.nombre, e.salario, o.objetivo
FROM
    empleados e
        INNER JOIN
    oficinas o ON e.fid_oficina = o.id_oficina
WHERE
    e.salario >= o.objetivo;
```
Resultado<br> 
![Ejemplo resultado](images/ejercicio3/parte3/imagen3.b.png)

+ c. Lista de los productos del fabricante ACI para los cuales las existencias superen las existencias del producto 41004 del mismo fabricante.

```sql
SELECT DISTINCT
    *
FROM
    productos AS p
        INNER JOIN
    (SELECT DISTINCT
        *
    FROM
        productos
    WHERE
        id_producto = 41004) AS pp ON p.id_fabricante = pp.id_fabricante
WHERE
    p.existencias > pp.existencias; 
```
Resultado<br>
![Ejemplo resultado](images/ejercicio3/parte3/imagen3.c.png)

+ d. Empleados que NO trabajen en oficinas dirigidas por Ana Bustamante.
```sql
SELECT 
    e.nombre, e.fid_oficina, (SELECT 
            o.id_oficina
        FROM
            oficinas o,
            empleados e
        WHERE
            e.fid_oficina = o.id_oficina
                AND e.nombre = 'Ana Bustamante') as diricida_por_ana
FROM
    empleados e
        INNER JOIN
    oficinas o ON e.fid_oficina = o.id_oficina
WHERE
    e.fid_oficina NOT IN (SELECT 
            o.id_oficina
        FROM
            oficinas o,
            empleados e
        WHERE
            e.fid_oficina = o.id_oficina
                AND e.nombre = 'Ana Bustamante');
```
Resultado <br>
![Ejemplo resultado](images/ejercicio3/parte3/imagen3.d.png)

+ e. Lista de productos (con su descripción) para los cuales se ha recibido un pedido de importe 25.000 o más (considerando productos de cualquier fabricante).
```sql
SELECT 
    p.id_producto, p.descripcion, lp.importe
FROM
    productos p
        INNER JOIN
    linea_pedido lp ON p.id_producto = lp.fid_producto
WHERE
    lp.importe >= 25000;

```
Resultado <br>
![Ejemplo resultado](images/ejercicio3/parte3/imagen3.e.png)

+ f. Listar los nombres de los clientes que tienen asignado el representante Alvaro Jaumes (suponiendo que no pueden haber dos representantes con el mismo nombre).
```sql
SELECT 
    c.nombre AS cliente, e.nombre AS representante
FROM
    empleados e
        INNER JOIN
    pedido p ON e.id_empleado = p.fid_vendedor
        INNER JOIN
    clientes c ON p.fid_cliente = c.id_cliente
WHERE
    e.nombre LIKE 'Alvaro Jaumes';
```
Resultado <br>
![Ejemplo resultado](images/ejercicio3/parte3/imagen3.f.png)

+ g. Listar los empleados (id_empleado, nombre i fid_oficina) que trabajan en oficinas “buenas” (las que tienen ventas superiores a su objetivo).

```sql
SELECT 
    e.id_empleado, e.nombre, e.fid_oficina
FROM
    empleados e
        INNER JOIN
    oficinas o ON e.fid_oficina = o.id_oficina
WHERE
    o.ventas > o.objetivo
GROUP BY o.ventas;
``` 
Resultado <br>
![Ejemplo resultado](images/ejercicio3/parte3/imagen3.g.png)

+ h. Listar los vendedores que no trabajen en oficinas dirigidas por el empleado 108.

```sql
SELECT 
    e.nombre, e.fid_oficina, (SELECT 
            o.id_oficina
        FROM
            oficinas o,
            empleados e
        WHERE
            e.fid_oficina = o.id_oficina
                AND e.nombre = 'Ana Bustamante') as diricida_por_ana
FROM
    empleados e
        INNER JOIN
    oficinas o ON e.fid_oficina = o.id_oficina
WHERE
    e.fid_oficina NOT IN (SELECT 
            o.id_oficina
        FROM
            oficinas o,
            empleados e
        WHERE
            e.fid_oficina = o.id_oficina
                AND e.id_empleado = 108);
```
Resultado <br>
![Ejemplo resultado](images/ejercicio3/parte3/imagen3.h.png)

+ i. Listar los clientes asignados a Ana Bustamante que no tienen ningun pedido superior a 50000.