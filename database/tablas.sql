-- primera tabla
USE finesi_virtual;

CREATE TABLE docente(
  dni int PRIMARY KEY NOT NULL,
  codigoD varchar(10),
  nombred varchar(40),
  direciond text,
  cursos int
)


-- segunda tabla tabla
USE finesi_virtual;
CREATE TABLE estudiante(
  dnie int PRIMARY KEY NOT NULL,
  codigoe varchar(10),
  nombree varchar(40),
  direcione text,
  notas int,
  semestre int
)