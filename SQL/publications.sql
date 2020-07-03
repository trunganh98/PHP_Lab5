CREATE DATABASE pubications;


CREATE TABLE classics (
	author varchar(128),
    title varchar(128),
    category varchar(16),
    year SMALLINT(6),
    isbn char(13) PRIMARY KEY,
    INDEX(author(20)),
    INDEX(title(20)),
    INDEX((category(4)),
    INDEX(year)
);
    ALTER TABLE classics ADD FULLTEXT(author, title);

INSERT INTO classics(author, title, category, year, isbn)
 VALUES('Charles Dickens', 'Little Dorrit', 'Fiction', '1857', '978014456789');
INSERT INTO classics(author, title, category, year, isbn)
 VALUES('Mark Twain', 'The Adventures of Tom Sawyer', 'Fiction', '1876', '9781598184891');
INSERT INTO classics(author, title, category, year, isbn)
 VALUES('Jane Austen', 'Pride and Prejudice', 'Fiction', '1811', '9780582506206');
INSERT INTO classics(author, title, category, year, isbn)
 VALUES('Charles Darwin', 'The Origin od Species', 'Non-Fiction', '1856', '9780517123201');
INSERT INTO classics(author, title, category, year, isbn)
 VALUES('Charles Dickens', 'The Old Curiosity Shop', 'Fiction', '1841', '9780099533474');
INSERT INTO classics(author, title, category, year, isbn)
 VALUES('William Shakesoeare', 'Romeo and Juliet', 'Play', '1594', '9780192814968');

 CREATE TABLE customers (
    name varchar(128),
    isbn varchar(13) PRIMARY KEY
);

INSERT INTO customers(name, isbn)
 VALUES('Joe Bloggs', '9782299533474');
INSERT INTO customers(name, isbn)
 VALUES('Mary Smith', '9780582506206');
INSERT INTO customers(name, isbn)
 VALUES('Jack & Wilson', '9780517123456');

SELECT * FROM customers;