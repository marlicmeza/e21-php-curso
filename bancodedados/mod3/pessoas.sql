-- ESTE CODIGO TEM SITAXE PARA SQLITE PORTANTO NÃO FUNCIONA EM MYSQL
-- ESTE ARQUIVO É O SCHEMA DE UMA TABELA DE PESSOAS 
BEGIN TRANSACTION;
DROP TABLE IF EXISTS PESSOAS; 
CREATE TABLE PESSOAS (
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    CPF         TEXT    NOT NULL, 
    NOME        TEXT    NOT NULL,
    IDADE       INT     NOT NULL, 
    ENDERECO    CHAR(50), 
    CIDADE      TEXT, 
    SALARIO     REAL 
);

INSERT INTO PESSOAS (CPF,NOME,IDADE,ENDERECO,SALARIO)
    VALUES 
    ('123.456.789-22','Karina',45,'Rua Flamboyants,50',900000.00),
    ('123.456.789-33','Adriano',47,'Rua Rosario,478',900000.00);

COMMIT;

SELECT * FROM PESSOAS; 

UPDATE PESSOAS
    SET SALARIO=10.00
    WHERE ID=2;


