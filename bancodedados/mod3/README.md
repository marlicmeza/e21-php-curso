Banco de Dados Relacional
Modulo 03
SQL
Definição :## Video 019 -
SQL Linguagem de comunicação com o Banco de Dados SQL = Structerd Query Language

Criar e modificar:

Bancos de Dados;
Tabelas;
Permissões de Acesso;
Registros de dados; Gerenciar Transações: Confirmar ou Desfazer;
Organização: ## Video 020
DDL - Criação/Manutenção ## Video 021
DDL Data Definition Language ou Linguagem de Definição de Dados.

Criamos uma estrutura pela ide adp https://app.quickdatabasediagrams.com/#/d/vRiRrt

''' PESSOAS
ID INT PK CPF TEXT NOME TEXT IDADE INT '''

Instruções geradas automaticamente para MYSQL
CREATE TABLE PESSOAS ( ID INT NOT NULL , CPF TEXT NOT NULL , NOME TEXT NOT NULL , IDADE INT NOT NULL , PRIMARY KEY ( ID ) );

Video 022 - Mais opções para os atributos de nossa Tabela ou Entidade Pessoas.
Versão SQL
CREATE TABLE PESSOAS ( ID INTEGER PRIMARY KEY AUTOINCREMENT, CPF TEXT, NOME TEXT NOT NULL, IDADE INTEGER )

1 CRIANDO UMA TABELA CHAMADA PESSOAS E UTILIZANDO A DECLARAÇÃO CREATE.
CREATE TABLE PESSOAS ( )

2 Cria o Atributo ID do tipo INTEGER, (PK), Auto Incremento.
ID INTEGER PRIMARY KEY AUTOINCREMENT, 
3 Criando um atributo CPF do tipo TEXT
CPF TEXT, 
4. Cria atributo nome do tipo TEXT não aceita nulo. (null vai permitir nulos)
NOME TEXT NOT NULL
5. Cria atributo IDADE tipo Integer, INT ou inteiro.
Video 023 - INSERT inserir dados em uma entidade
SQL INSERT INTO

CPF, NOME, IDADE

INSERT INTO PESSOAS(CPF, NOME, IDADE) VALUES ('123.456.789-00', 'ADRIANO MACHADO', 47), ('233.567.789-01', 'KARINA MACHADO', 45);

Video 024 - Criar uma tabela, inserir um registro ao vivo
ORACLE, MS-SQL-SERVER, SQLITE, MYSQL/MARIADB

SQL

SQLITE3 ARQUIVO PESSOAS.SQL

VIDEO 025 -
Aqui criamos uma tabela a partir do arquivo pessoas.sql Falamos aqui o seguinte:

Cada vez que for executado o pessoas.sql, ele vai apagar o conteudo da tabela e inicializar a tabela novamente. (DROP)
Tomem cuidado com o DROP
Video 026
Instalar o sqlite3 (sqlite.org) ''' sqlite3 Modulo3.db sqlite> .read pessoas.sql # este comando, iniciado com . (ponto) é um comando do SQlite. sqlite> .schema PESSOAS '''

video 027
Inserir registros dentro da tabela.

INSERT INTO PESSOAS (CPF,NOME,IDADE,ENDERECO,SALARIO) VALUES ('123.456.789-22','Karina',45,'Rua Flamboyants,50',900000.00), ('123.456.789-22','Adriano',47,'Rua Rosario,478',900000.00);

video 028 ## select query (DQL) (palhinha)
SELECT * FROM PESSOAS;

video 029 ## updates ..
CUIDADO COM OS COMANDOS UPDATE E DELETE....
UPDATE PESSOAS SET SALARIO=10.00 WHERE ID=2 ;

video 030 - CUIDADO COM ESQUECIMENTOS WHERE!
UPDATE PESSOAS SET SALARIO=10.00 ;

Nesta condição acima alteramos todos os registros da base, pois esquemos de colocar o WHERE

video 031 - Vamos fazer um delete.
SELECT * FROM PESSOAS WHERE ID = 2; DELETE FROM PESSOAS WHERE ID = 2;


# UPDATE
    PS C:\Users\marli\OneDrive\Documentos\GitHub\e21php-curso> cd bancodedados   
    PS C:\Users\marli\OneDrive\Documentos\GitHub\e21php-curso\bancodedados> sqlite3 Modulo3.db
    SQLite version 3.39.0 2022-06-25 14:57:57
    Enter ".help" for usage hints.
    sqlite> .read pessoas.sql
    1|123.456.789-22|Karina|45|Rua Flamboyants,50||900000.0
    2|123.456.789-33|Adriano|47|Rua Rosario,478||900000.0
    sqlite> update pessoas set salario=10  where id=2;
    sqlite> .read pessoas.sql
    1|123.456.789-22|Karina|45|Rua Flamboyants,50||900000.0
    2|123.456.789-33|Adriano|47|Rua Rosario,478||900000.0
    sqlite> select * from pessoas;
    1|123.456.789-22|Karina|45|Rua Flamboyants,50||900000.0
    2|123.456.789-33|Adriano|47|Rua Rosario,478||10.0
    sqlite> update pessoas set salario=9  where id=1;  
    sqlite> select * from pessoas;
    1|123.456.789-22|Karina|45|Rua Flamboyants,50||9.0
    2|123.456.789-33|Adriano|47|Rua Rosario,478||10.0
    sqlite>


# pedidos pedidos.app.quickdatabaase
    id int pk data date vendedor_id int FK >- vend.id cliente_id int FK >- cli.id

    vend
    id int pk nome character

    cli
    id int pk nome character

    ites_pedido
    id int pk pedidos_id int FK >- pedidos.id carros_id int FK >- carros.id

    carros
    id int pk nome character estoque_id int FK - estoque.id

    estoque
    id int pk localizacao character saldo_em_estoque int