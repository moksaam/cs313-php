CREATE TABLE login (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  username varchar (50) NOT NULL,
  creation_date date
);
CREATE TABLE movies (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  title text,
  director varchar (50),
  genre varchar (50),
  year_published INT,
  creation_date date
);
CREATE TABLE books (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  title text,
  author varchar (50) NOT NULL,
  genre varchar (50) NOT NULL,
  year_published date,
  creation_date date
);
CREATE TABLE music (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  title text,
  artist varchar (50) NOT NULL,
  genre varchar (50) NOT NULL,
  year_published INT,
  creation_date date
);
CREATE TABLE tables_list (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  table_name varchar (50) NOT NULL,
  creation_date date
);