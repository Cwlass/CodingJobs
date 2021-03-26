-- Create a new database
-- CREATE DATABASE wf3_entreprise;

-- Show database list
SHOW DATABASES;

-- Chose a database

USE wf3_entreprise;
/*
 Create a table
 CREATE TABLE employee (
 	id INT(11) NOT NULL auto_increment,
    firstname VARCHAR(20) NOT NULL,
    name VARCHAR(20) NOT NULL,
    departement VARCHAR(30) NOT NULL,
    date_embauche DATE NOT NULL,
    salary INT(5) NOT NULL,
    gender ENUM('m','f','o') NOT NULL,
    -- Set id to primary key
    PRIMARY KEY (id)
) ENGINE=InnoDB;
*/

/*INSERT INTO employee (
	first_name,
	name,
	departement,
	hire_date,
	salary,
	gender
) VALUES
('David','Ferns','Lead Developper','2019-04-21',99999,'m'),
('Timmy', 'Defron','Developper','2021-03-22','1','m');
*/


-- ALTER TABLE employee CHANGE firstname first_name VARCHAR(20);
-- ALTER TABLE employee CHANGE departement department VARCHAR(30);
-- ALTER TABLE employee CHANGE date_embauche hire_date DATE;
-- SELECT * FROM employee where salary>=80000;

-- SELECT first_name, salary, name FROM employee WHERE Salary >= 99000 ORDER BY first_name ASC ;

-- SELECT * from employee order by salary DESC;

-- SELECT * FROM employee WHERE gender = 'f'

-- UPDATE employee SET hire_date= '2021-03-22'; 


-- SELECT first_name, salary, hire_date FROM employee WHERE gender = 'm' ORDER BY hire_date
-- SELECT * FROM employee WHERE salary >2000 AND salary < 3000

-- SELECT * FROM employee WHERE department = 'Marketing' OR department = 'sales'

-- SELECT * FROM employee WHERE first_name LIKE 'Al%';

-- SELECT * FROM employee  order by salary desc limit 10

-- SELECT * FROM employee WHERE department	IN ('Sales', 'Marketing')

-- SELECT * FROM employee WHERE department IN('Support') ORDER BY salary DESC LIMIT 1;

-- SELECT * FROM employee
-- WHERE salary =  (Select salary FROM employee WHERE department in('Support') ORDER BY salary DESC LIMIT 1)

/*SELECT * ,
	CASE
		WHEN hire_date <= "2011-03-23" THEN "Senior"
        ELSE "Junior"
	END AS "senjority"
FROM employee;*/

-- SELECT * FROM employee WHERE salary BETWEEN 1500 AND 2500;

/*SELECT *,
	CASE
		WHEN salary  <= 20000 THEN "low"
        WHEN salary BETWEEN 20000 AND 30000 THEN "medium"
        WHEN salary >= 30000 THEN "high"
	END AS "salary_level"
FROM employee;*/

-- UPDATE employee SET salary = 18000 WHERE id = 27;
-- SELECT * FROM employee WHERE id = 27;

-- UPDATE employee SET salary = salary -100 WHERE gender = 'm';
-- select * from employee where gender = 'm';

-- UPDATE employee SET hire_date = "2017-05-20" WHERE id IN ( 5, 21, 32, 64, 128);

-- select * from employee WHERE id IN ( 5, 21, 32, 64, 128);
/*DELETE from employee WHERE id=120;
select * from employee WHERE id BETWEEN 100 AND 130;*/

-- SELECT COUNT(*) AS 'Number of employees' FROM employee;

-- SELECT SUM(salary) AS 'total Salary' FROM employee;
-- SELECT SUM(salary)AS 'Marketing Salary' FROM employee WHERE department = 'Marketing';
-- SELECT AVG(salary)AS 'Marketing Salary' FROM employee WHERE department = 'Marketing';
-- Select salary from employee WHERE department = 'Marketing';

-- SELECT * FROM employee WHERE salary > ( SELECT AVG(salary) FROM employee WHERE department = 'marketing');

-- SELECT department, count(*) AS 'department_count' FROM Employee GROUP BY department

-- SELECT gender , count(*) as count from Employee group by gender;
/*DELIMITER $
CREATE FUNCTION net_salary(sal INT) RETURNS INT

BEGIN
	RETURN (sal*0.80);
END$
DELIMITER ;
SELECT first_name,salary, net_salary(salary) as 'salary after tax' FROM employee;*/


/*DELIMITER $
CREATE FUNCTION fullname(firstName TEXT , name TEXT) returns TEXT
BEGIN
	RETURN (CONCAT(firstName,' ', name));
END$
DELIMITER ;*/
-- SELECT fullname(first_name, name) as 'full name' from employee;

/*CREATE TABLE building (
	id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    adresse TEXT NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY(id)
) ENGINE=innoDB;*/

-- SELECT * FROM building;

-- ALTER TABLE employee 
-- 	ADD building_id int(11),
    
--     ADD CONSTRAINT fk_employee_building
-- 	FOREIGN KEY (building_id) REFERENCES building(id);

-- UPDATE employee SET building_id = ROUND(RAND()*4)+1;
-- select * from employee, building WHERE building_id = building.id ORDER BY building.id
-- SELECT * FROM employee JOIN building on building_id = building.id

-- SELECT e.first_name, b.name FROM employee AS e INNER JOIN building AS b ON e.building_id = b.id WHERE b.id=1

-- UPDATE employee SET building_id = NULL WHERE ID IN(22,35,120,250,320);

/*SELECT * FROM employee
INNER JOIN building
ON building_id = building.id
ORDER BY employee.id*/
-- SELECT * FROM employee
-- LEFT JOIN building
-- ON building_id = building.id
-- ORDER BY employee.id

-- INSERT INTO building (name, adresse, description)VALUES
-- ('batman', 'Gotham City', 'Not the hero this city needs, but the hero it deserves');

/*SELECT * FROM employee
RIGHT JOIN building
ON building_id = building.id
ORDER BY employee.id*/

/*PREPARE select_men FROM "SELECT * FROM employee WHERE gender = 'm'";

EXECUTE select_men;

PREPARE select_department FROM "SELECT * FROM employee WJERE department = ?";

SET @department = "Marketing";

EXECUTE select_department USING @department;*/


/*CREATE VIEW women_employee AS SELECT * FROM employee WHERE gender = 'f';
SELECT * FROM women_employee;*/

/*CREATE VIEW poor_employee AS
	SELECT * FROM employee
    WHERE salary <(
		SELECT ROUND(AVG(salary),2) FROM employee
	);*/
    
/*SELECT * FROM poor_employee
UNION
SELECT * FROM women_employee*/
CREATE TABLE subscriber (
	id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    PRIMARY KEY(id)
) ENGINE=innoDB;

CREATE TABLE book(
	id int(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(20),
    author TEXT,
    PRIMARY KEY(id)
    )ENGINE = INNODB;