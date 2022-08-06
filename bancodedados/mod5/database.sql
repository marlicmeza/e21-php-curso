DROP TABLE IF EXISTS PRODUTOS;
CREATE TABLE PRODUTOS(
    PRODUTO_CODIGO INTEGER,
    PRODUTO_NOME TEXT  NOT NULL ,
    PRODUTO_QUANTIDADE INTEGER, 
    PRODUTO_VALOR FLOAT  NOT NULL DEFAULT '0' 
);

DROP TABLE IF EXISTS PRATELEIRAS;
CREATE TABLE PRATELEIRAS(
    PRATELEIRA_CODIGO INTEGER  PRIMARY KEY AUTOINCREMENT ,
    PRATELEIRA_NOME TEXT  NOT NULL ,
    PRATELEIRA_LOCALIZACAO CHAR  NOT NULL 
);

DROP TABLE IF EXISTS ITENS_CUPOM_FISCAL;
CREATE TABLE ITENS_CUPOM_FISCAL(
    ITEN_CUPOM_FISCAL_CODIGO INTEGER  PRIMARY KEY AUTOINCREMENT ,
    ITEN_CUPOM_FISCAL_NUMERO INTEGER,
    ITEN_CUPOM_FISCAL_SEQUENCIA INTEGER NOT NULL ,
    ITEN_CUPOM_FISCAL_PRODUTO INTEGER  NOT NULL ,
    ITEN_CUPOM_FISCAL_QUANTIDADE FLOAT  NOT NULL ,
    ITEN_CUPOM_FISCAL_VALOR_UN FLOAT  NOT NULL DEFAULT '0',
    ITEN_CUPOM_FISCAL_VALOR_TOT FLOAT  NOT NULL DEFAULT '0'
);

DROP TABLE IF EXISTS ATENDENTES;
CREATE TABLE ATENDENTES (
    ATENDENTE_CODIGO INTEGER  PRIMARY KEY AUTOINCREMENT ,
    ATENDENTE_NOME TEXT NOT NULL  
);

DROP TABLE IF EXISTS CLIENTES;
CREATE TABLE CLIENTES (
    CLIENTE_CODIGO INTEGER  PRIMARY KEY AUTOINCREMENT ,
    CLIENTE_NOME TEXT NOT NULL ,
    CLIENTE_TELEFONE INTEGER NOT NULL ,
    CLIENTE_CPF INTEGER NOT NULL ,
    CLIENTE_TOTAL_COMPRAS INTEGER NOT NULL
);

DROP TABLE IF EXISTS NOTAS;
CREATE TABLE NOTAS (
    NOTA_ID INTEGER NOT NULL , 
    NOTA_DATA_DE_EMISSAO TEXT NOT NULL ,
    NOTA_CLIENTE TEXT  NOT NULL,
    NOTA_ATENDENTE TEXT NOT NULL    
);