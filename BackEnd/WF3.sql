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

SELECT SUM(salary) AS 'total Salary' FROM employee
