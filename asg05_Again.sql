

/*DROP DATABASE IF EXISTS asg05_Again;
CREATE DATABASE asg05_Again;
USE asg05_Again;*/




CREATE TABLE customer(
	customer_id				VARCHAR(255)	UNIQUE	NOT NULL		,
	customer_f_name			VARCHAR(255)	NOT NULL		,
	customer_l_name			VARCHAR(255)	NOT NULL		,
	cust_phone				VARCHAR(12)		NOT NULL		,
	cust_email				VARCHAR(255)	 				,
	PRIMARY KEY(customer_id)
);


CREATE TABLE tire(
	tire_id					VARCHAR(255)	NOT NULL		,
	tire_veh				VARCHAR(255)	NOT NULL		,
	tire_position			char(2)			NOT NULL		,
	tire_code				VARCHAR(255)	NOT NULL		,
	tire_name				VARCHAR(255)	NOT NULL		,
	tire_date_installed		DATE			NOT NULL		,
	tire_num_of_repair		INT(50)			NOT NULL		,
	PRIMARY KEY(tire_id)
);



CREATE TABLE vehicle(
	veh_id					VARCHAR(255)	UNIQUE	NOT NULL		,
	veh_vin					VARCHAR(255)	NOT NULL		,
	veh_mileage				INT(200)		NOT NULL		,
	veh_year				CHAR(4)			NOT NULL		,
	veh_model				VARCHAR(255)	NOT NULL		,
	veh_make				VARCHAR(255)	NOT NULL		,
	customer_id				VARCHAR(255)	NOT NULL		,
	PRIMARY KEY(veh_id),
	FOREIGN KEY(customer_id) REFERENCES 	customer(customer_id)
);


-- create insert data

INSERT INTO customer VALUES
(1234,  "Brad",    "Wells",     "616-635-8967",   "bradwells.bw@gmail.com"),
(4321,  "Kim",     "Wells",     "616-970-4760",   "kimwells@gmail.com"),
(5549,  "Kenny",   "Powers",    "989-444-5454",   "kennypowers@gmail.com"),
(5959,  "Stevie",   "Janowski",  "884-545-5869", "stevejan@gmail.com");

INSERT INTO vehicle VALUES
(4321, "45333quig5858XX54", 154000, "2007", "Fusion",   "Ford",   1234),
(8894, "48848gge3th38858e", 1500, "2018",   "Prius",      "Toyota", 1234),
(8858, "585839ghghsscc43b", 199000,"2004",  "Escape",    "Ford",   4321),
(4489, "jfdka;4444jkfddg4", 33000, "1998",  "F-150",    "Ford",   5549),
(8848, "fjkdfjkdgnng34344", 88000, "1999",  "Baretta",  "Chevy",  5959);

INSERT INTO tire VALUES
(9876,4321, "FL", "R160F44", "Ripper", "2008-01-02", 2),
(9875,4321, "FR", "R160F44", "Ripper", "2008-01-02", 2),
(9874,4321, "RL", "R160F44", "Ripper", "2008-01-02", 1),
(9873,4321, "RR", "R160F44", "Ripper", "2008-01-02", 0),

(8881, 8894, "FL", "R1160F99", "Rider", "2011-02-04", 1),
(8882, 8894, "FR", "R1160F99", "Rider", "2011-02-04", 1),
(8883, 8894, "RL", "R1160F99", "Rider", "2011-02-04", 0),
(8884, 8894, "RR", "R1160F99", "Rider", "2011-02-04", 3),

(9991, 4489, "FL", "R160F44", "Falcon", "2012-090-08", 0),
(9992, 4489, "FR", "R160F44", "Falcon", "2012-090-08", 0),
(9993, 4489, "RL", "R160F44", "Falcon", "2012-090-08", 0),
(9994, 4489, "RR", "R160F44", "Falcon", "2012-090-08", 0),

(4441, 8848, "FL", "R140F99", "Eagle", "1999-04-03", 1),
(4442, 8848, "FR", "R140F99", "Eagle", "1999-04-03", 1),
(4443, 8848, "RL", "R140F99", "Eagle", "1999-04-03", 0),
(4444, 8848, "RR", "R140F99", "Eagle", "1999-04-03", 0);











