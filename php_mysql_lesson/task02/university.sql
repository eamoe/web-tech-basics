
CREATE DATABASE university;

USE university;

CREATE TABLE students ( 
  id INTEGER PRIMARY KEY, 
  name TEXT NOT NULL, 
  age INTEGER,
  address VARCHAR(255)
);

INSERT INTO students VALUES (1, "Clark", 25, "Clark's home address"); 
INSERT INTO students VALUES (2, "Dave", 37, "Dave's home address"); 
INSERT INTO students VALUES (3, "Ava", 48, "Ava's home address");
INSERT INTO students VALUES (4, "Ivan", 25, "Ivan's home address");
INSERT INTO students VALUES (5, "Peter", 31, "Peter's home address");
INSERT INTO students VALUES (6, "Максим", 17, "Адрес Максима");
INSERT INTO students VALUES (7, "Алексей", 22, "Адрес Алексея");