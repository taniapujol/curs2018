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
![Ejemplo resultado](images/result_1.a)

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
![Ejemplo resultado](images/result_1.b.PNG)

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
![Ejemplo resultado](images/result_1.c)

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
![Ejemplo resultado](images/result_1.d.PNG)

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
![Ejemplo resultado](images/result_1.e.PNG)

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
![Ejemplo resultado](images/result_2.a.antes.png)
![Ejemplo resultado](images/result_2.a.despues.png)

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
![Ejemplo resultado](images/result_2.a.antes.png)
![Ejemplo resultado](images/result_2.b.despues.png)

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
![Ejemplo resultado](images/result_2.c.antes.png)
![Ejemplo resultado](images/result_2.c.despues.png)

+ d. Borrar las líneas de pedido de los pedidos del cliente Jaime Llorens.
```sql

```
Resultado<br> 
![Ejemplo resultado](images/result_2.c.antes.png)
![Ejemplo resultado](images/result_2.c.despues.png)

+ e. Aumentar un 5% el precio de todos los productos del fabricante ACI.
```sql

```
Resultado<br> 
![Ejemplo resultado](images/result_2.c.antes.png)
![Ejemplo resultado](images/result_2.c.despues.png)

+ f. Añadir una nueva oficina para la ciudad de Madrid, con numero de oficina 30, un objetivo de 600 y región centro.
```sql

```
Resultado<br> 
![Ejemplo resultado](images/result_2.c.antes.png)
![Ejemplo resultado](images/result_2.c.despues.png)

+ g. Cambiar los empleados de la oficina 21 a la oficina 30.
```sql

```
Resultado<br> 
![Ejemplo resultado](images/result_2.c.antes.png)
![Ejemplo resultado](images/result_2.c.despues.png)

+ h. Eliminar los pedidos del empleado 105.
```sql

```
Resultado<br> 
![Ejemplo resultado](images/result_2.c.antes.png)
![Ejemplo resultado](images/result_2.c.despues.png)

+ i. Subir un 10% el salario de los empleados cuya oficina haya superado sus objetivos de venta.
```sql

```
Resultado<br> 
![Ejemplo resultado](images/result_2.c.antes.png)
![Ejemplo resultado](images/result_2.c.despues.png)

+ j. Eliminar las oficinas que no tengan empleados.
```sql

```
Resultado<br> 
![Ejemplo resultado](images/result_2.c.antes.png)
![Ejemplo resultado](images/result_2.c.despues.png)