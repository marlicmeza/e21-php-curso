BEGIN TRANSACTION;
DROP TABLE IF EXISTS PRODUTOS;
CREATE TABLE PRODUTOS (
    PRODUTOS_CODIGO INTEGER  PRIMARY KEY AUTOINCREMENT ,
    PRODUTOS_NOME TEXT  NOT NULL ,
    PRODUTOS_VALOR FLOAT  NOT NULL DEFAULT '0' 
);
DROP TABLE IF EXISTS PRATELEIRAS;
CREATE TABLE PRATELEIRAS (
    PRATELEIRAS_CODIGO INTEGER  PRIMARY KEY AUTOINCREMENT ,
    PRATELEIRAS_NOME TEXT  NOT NULL ,
    PRATELEIRAS_LOCALIZACAO CHAR  NOT NULL 
);
DROP TABLE IF EXISTS CUPOM_FISCAL;
CREATE TABLE CUPOM_FISCAL (
    CUPOM_FISCAL_CODIGO INTEGER  PRIMARY KEY AUTOINCREMENT ,
    CUPOM_FISCAL_SEQUENCIA INTEGER NOT NULL ,
    CUPOM_FISCAL_PRODUTO TEXT  NOT NULL ,
    CUPOM_FISCAL_QUANTIDADE FLOAT  NOT NULL ,
    CUPOM_FISCAL_VALOR_UN FLOAT  NOT NULL DEFAULT '0',
    CUPOM_FISCAL_VALOR_TOT FLOAT  NOT NULL DEFAULT '0' 
);
DROP TABLE IF EXISTS ITENS_CUPOM_FISCAL;
CREATE TABLE ITENS_CUPOM_FISCAL(
ITENS_CUPOM_FISCAL INTEGER NOT NULL,
ITENS_CUPOM_FISCAL_CODIGO INTEGER NOT NULL,
ITENS_CUPOM_FISCAL_SEQUENCIA INTEGER NOT NULL,
ITENS_CUPOM_FISCAL_PRODUTO TEXT NOT NULL,
ITENS_CUPOM_FISCAL_QUANTIDADE INTEGER NOT NULL,
ITENS_CUPOM_FISCAL_VALOR_UN INTEGER NOT NULL,
ITENS_CUPOM_FISCAL_VALOR_TOT INTEGER NOT NULL
);


DROP TABLE IF EXISTS ATENDENTES;
CREATE TABLE ATENDENTES (
    ATENDENTES_CODIGO INTEGER  PRIMARY KEY AUTOINCREMENT ,
    ATENDENTES_NOME TEXT NOT NULL  
);
DROP TABLE IF EXISTS CLIENTES;
CREATE TABLE CLIENTES (
    CLIENTES_CODIGO INTEGER  PRIMARY KEY AUTOINCREMENT ,
    CLIENTES_NOME TEXT NOT NULL ,
    CLIENTES_TELEFONE INTEGER NOT NULL ,
    CLIENTES_CPF INTEGER NOT NULL ,
    CLIENTES_TOTAL_COMPRAS INTEGER NOT NULL
);

INSERT INTO PRODUTOS (PRODUTOS_NOME) 
VALUES 
('Banana'),
('Melancia'),
('Alface'),
('Laranja'),
('Cebola'),
('Batata'),
('Batata Doce'),
('Brócolis'),
('Repolho'),
('Couve Flor'),
('Manga'),
('Tomate'),
('Cenoura'),
('Rabanete'),
('Batata Salsa'),
('Cebolinha'),
('Salsinha'),
('Agrião'),
('Rúcula'),
('Alface Americana'),
('Beterraba'),
('Beringela'),
('Abacaxi'),
('Cará'),
('Taiá'),
('Aipim'),
('Tangerina'),
('Caqui'),
('Perâ'),
('Abacate'),
('Morango'),
('Água'),
('Cerveja'),
('Refrigerante'),
('Suco'),
('Leite'),
('Achocolatado'),
('Vinho Branco'),
('Vinho tinto'),
('Vodka'),
('Gim'),
('Rum'),
('Wisky'),
('Licor'),
('Curaçau'),
('Chá'),
('Soju'),
('Saquê'),
('Cachaça'),
('Tequila'),
('Conhaque'),
('Champanhe'),
('Absinto'),
('Amarula'),
('Limoncello'),
('Pisco'),
('Energético'),
('Água de Coco'),
('Água Tônica'),
('Isotônico'),
('Vinho Bordô'),
('Água Com gás'),
('Biscoito'),
('Bolacha'),
('Chocolate Preto'),
('Chocolate Branco'),
('Bala de Iogurte'),
('Caixa De Bombom'),
('Doce de Leite'),
('Paçoca'),
('Cocada'),
('Goiabada '),
('Trufas'),
('Maria mole'),
('Chiclete'),
('Leite Condensado'),
('Pirulito'),
('Kit Kat'),
('Nescau'),
('Bala Fini'),
('Nutella'),
('Tic Tac'),
('Mentos'),
('Azedinho'),
('Trento'),
('Barrinha'),
('Bolinho'),
('Amendoim'),
('Halls'),
('Pipoca Doce'),
('Kinder Ovo'),
('Gelatina'),
('Marshmallow'),
('Banana'),
('Lenço umidecido'),
('Creme dental'),
('Escova dental'),
('Fio dental'),
('Shampoo'),
('Sabonete'),
('Condicionador'),
('Desodorante'),
('Fraldas'),
('Cortador de unhas'),
('Lixa de unhas'),
('Creme de pentear'),
('Cotonete'),
('Creme hidratante'),
('Pente'),
('Escova Cabelos'),
('Máscara'),
('Enxaguante Bucal'),
('Protetor Solar'),
('Lamina de Barbear'),
('Espuma de Barbear'),
('Creme de Barbear'),
('Talco'),
('Algodão'),
('Água Sanitária'),
('Desinfetante'),
('Sabão em Pedra'),
('Sabão em Pó'),
('Álcool em Gel'),
('Limpa Vidros'),
('Luvas de Borracha'),
('Escova'),
('Bombril'),
('Detergente'),
('Balde'),
('Esponja'),
('Desengordurante'),
('Pano Multiuso'),
('Lustra Móveis'),
('Esfregão'),
('Vassoura'),
('Rodo'),
('Palha de Aço'),
('Sacos de Lixo'),
('Tira-Manchas'),
('Cera'),
('Botas de Borracha'),
('Amaciante'),
('Desentupidor'),
('Escovão'),
('Inseticida'),
('Mop'),
('Limpa Forno'),
('Odorizador de Ambientes'),
('Pá para Lixo'),
('Feijão'),
('Trigo'),
('Arroz'),
('Farinha de milho'),
('Farinha de trigo'),
('Fermento'),
('Macarrão espaguete'),
('Farinha de mandioca'),
('Óleo'),
('Azeite'),
('Sal'),
('Açucar'),
('Molho de tomate'),
('Pão de forma'),
('Manteiga'),
('Farinha de tapioca'),
('Aveia'),
('Caixa de ovos'),
('Temperos'),
('Leite em pó'),
('Macarrão parafuso'),
('Fubá'),
('Mistura para bolo'),
('Cupim '),
('Picanha '),
('Fraldinha'),
('Tatu'),
('Bananinha'),
('Figado'),
('Filé Sete'),
('Filé Simples'),
('Filé Duplo'),
('Filé Americano'),
('Alcatra'),
('Linguiça mista'),
('Costela '),
('Filé Mignon'),
('Minga'),
('Acém'),
('Fraldinha'),
('Mortadela'),
('Presunto '),
('Salame'),
('Peito de peru'),
('Lombo'),
('Rosbife'),
('Parma'),
('Linguiça'),
('Kafta'),
('Mussarela'),
('Parmesão'),
('Gorgonzola'),
('Brie'),
('Cheddar'),
('Gouda'),
('Provolone'),
('Prato'),
('Pernil de porco'),
('Costelinha de porco'),
('Picanha suína'),
('Lombo Suíno'),
('Linguiça'),
('Linguiça de Frango'),
('Peito de Frango'),
('Filé de Frango'),
('Coxinha da Asa'),
('Sobrecoxa de frango'),
('Moela de frango'),
('Frango Inteiro'),
('Coxa de frango'),
('Coração de galinha');

INSERT INTO PRATELEIRAS (PRATELEIRAS_NOME,PRATELEIRAS_LOCALIZACAO) 
VALUES  
('Prateleira Higiene','Corredor Higiene'), 
('Prateleira Bebidas','Corredor Bebidas'), 
('Prateleira Doces','Corredor Doces'), 
('Prateleira Frutas','Corredor Frutas'), 
('Prateleira Bovinos','Corredor Bovinos'), 
('Prateleira Frios','Corredor Frios'), 
('Prateleira Limpeza','Corredor Limpeza'), 
('Caixa 1','Corredor Caixa 1'), 
('Caixa 2','Corredor Caixa 2'), 
('Caixa 3','Corredor Caixa 3');


INSERT INTO ATENDENTES (ATENDENTES_NOME) 
VALUES
('Claudio'),
('Willian'),
('Matheus'),
('Débora'),
('Marli'),
('Bruno'),
('Thiago'),
('Adriano'),
('João'),
('Maria'),
('Larissa';)


INSERT INTO CLIENTES (CLIENTES_NOME,CLIENTES_TELEFONE,CLIENTES_CPF,CLIENTES_TOTAL_COMPRAS) 
VALUES 
('MARIA DA SILVA',4798765432,'123.456.789-11',0), 
('MARIA DOS SANTOS',4612345678,'123.456.789-12',0), 
('MARIA APARECIDA',4425925924,'123.456.789-13',0), 
('MARIA DE LOURDES',4239506170,'123.456.789-14',0), 
('MARIA DE FATIMA',4053086416,'123.456.789-15',0), 
('JOAO DA SILVA',3866666662,'123.456.789-16',0), 
('JOAO DOS SANTOS',3680246908,'123.456.789-17',0), 
('JOAO DE LIMA',3493827154,'123.456.789-18',0), 
('ALFREDO DA SILVA',3307407400,'123.456.789-19',0), 
('TOMAZ AQUINO',3120987646,'123.456.789-20',0), 
('ARMANDO NADA',2934567892,'123.456.789-21',0), 
('JOSE COSTA',2748148138,'123.456.789-22',0), 
('ANTONIO QUADROS',2561728384,'123.456.789-23',0), 
('JOSE CARLOS',2375308630,'123.456.789-24',0), 
('APARECIDA LENDO',2188888876,'123.456.789-25',0), 
('MARCOS JOSE',2002469122,'123.456.789-26',0), 
('FERNANDA SILVEIRA',1816049368,'123.456.789-27',0), 
('VITORIA SOUZA',1629629614,'123.456.789-28',0), 
('ELBA ROCHA',1443209860,'123.456.789-29',0), 
('NADIA RODRIGUES',1256790106,'123.456.789-30',0), 
('ANTONIO ROCHA',1070370352,'123.456.789-31',0), 
('ANA SOUZA',1325467985,'123.456.789-32',0), 
('DANIELA FARIA',1580565618,'123.456.789-33',0), 
('LIZA REIS',1835663251,'123.456.789-34',0), 
('CLEBER NUNES',2090760884,'123.456.789-35',0), 
('MARIANA PEREIRA',2345858517,'123.456.789-36',0), 
('NATALIA LOBO',2600956150,'123.456.789-37',0), 
('BARBARA SOUZA',2856053783,'123.456.789-38',0), 
('VERONICA ARAUJO',3111151416,'123.456.789-39',0), 
('CAMILA RISO',3366249049,'123.456.789-40',0), 
('LAURA ROSA',3621346682,'123.456.789-41',0), 
('JOSI TRINDADE',3876444315,'123.456.789-42',0), 
('KARINE COSTA',4131541948,'123.456.789-43',0), 
('MELISSA ALMEIDA',4386639581,'123.456.789-44',0), 
('FELIPE NERO',4641737214,'123.456.789-45',0), 
('KAUA PEREIRA',4896834847,'123.456.789-46',0), 
('CAMILA CAMPOS',5151932480,'123.456.789-47',0), 
('LUCAS ARAUJO',5407030113,'123.456.789-48',0), 
('BEATRIZ RAMOS',5662127746,'123.456.789-49',0), 
('NEYMAR JUSTO',5917225379,'123.456.789-50',0), 
('BRUNO ARAUJO',6172323012,'123.456.789-51',0), 
('SARA BATISTA',6427420645,'123.456.789-52',0), 
('HELEN CARVALHO',6682518278,'123.456.789-53',0), 
('RENATO SOBRAL',6937615911,'123.456.789-54',0), 
('OLIMPO MACHADO',7192713544,'123.456.789-55',0), 
('MICHELE BRAGA',7447811177,'123.456.789-56',0), 
('MARILDA CAVALCANTI',7702908810,'123.456.789-57',0), 
('CARLOS LIMA',7958006443,'123.456.789-58',0), 
('BABI PIRES',8213104076,'123.456.789-59',0), 
('SABRINE SOUZA',8468201709,'123.456.789-60',0), 
('EDUARDO SANTOS',8723299342,'123.456.789-61',0), 
('LUIZ CARVALHO',8978396975,'123.456.789-62',0), 
('HENRY CAVALCANTI',9233494608,'123.456.789-63',0), 
('JANAINA OLIVEIRA',9488592241,'123.456.789-64',0), 
('VITORIA LUIZA',9743689874,'123.456.789-65',0), 
('ANDRESSA CORREA',9998787507,'123.456.789-66',0), 
('SAMANTA GUZZI',1234567744,'123.456.789-67',0), 
('GIOVANI COELHO',1234567743,'123.456.789-68',0), 
('HELOISA COUTINHO',1234567742,'123.456.789-69',0), 
('BIANCO MENDES',1234567741,'123.456.789-70',0), 
('RENATA LOPES',1234567740,'123.456.789-71',0), 
('LARA AGUIAR',1234567739,'123.456.789-72',0), 
('DANI ZEN',1234567738,'123.456.789-73',0), 
('TAYSA MENDES',1234567737,'123.456.789-74',0), 
('HARIANE CARVALHO',1234567736,'123.456.789-75',0), 
('ALVARO GUIMARAES',1234567735,'123.456.789-76',0), 
('CAROL FONSECA',1234567734,'123.456.789-77',0), 
('ANA MILLER',1234567733,'123.456.789-78',0), 
('LUIZA FRATES',1234567732,'123.456.789-79',0), 
('RENAN MACEDO',1234567731,'123.456.789-80',0), 
('RAFAEL SANTOS',1234567730,'123.456.789-81',0), 
('MILENA PEREIRA',1234567729,'123.456.789-82',0), 
('MAYARA IMPALA',1234567728,'123.456.789-83',0), 
('JOANA ROSA',1234567727,'123.456.789-84',0), 
('JESSICA ALMEIDA',1234567726,'123.456.789-85',0), 
('ANA JULIA',1234567725,'123.456.789-86',0), 
('LIZA MATA',1234567724,'123.456.789-87',0), 
('GABI SANTANA',1234567723,'123.456.789-88',0), 
('CARLA ZANIN',1234567722,'123.456.789-89',0), 
('PAMELA NUNES',1234567721,'123.456.789-90',0), 
('JOSEANE MENDONÇA',1234567720,'123.456.789-91',0), 
('DANIEL MONTES',1234567719,'123.456.789-92',0), 
('ANDREA RIBEIRO',1234567718,'123.456.789-93',0), 
('MARIA JULIA',1234567717,'123.456.789-94',0), 
('JOAO BRUCE',1234567716,'123.456.789-95',0), 
('GABRIELA SANTINI',1234567715,'123.456.789-96',0), 
('GREICE KELLY',1234567714,'123.456.789-97',0), 
('AMANDA NASCIMENTO',1234567713,'123.456.789-98',0), 
('LIDIANE SILVA',1234567712,'123.456.789-99',0), 
('LUAN GRACHA',1234567711,'123.456.789-10',0), 
('BRUNA KOBAL',1234567710,'123.456.789-09',0), 
('ISABELA SANTOS',1234567709,'123.456.789-08',0), 
('KELLY MELO',1234567708,'123.456.789-07',0), 
('LUIZA CARVALHO',1234567707,'123.456.789-06',0), 
('NANCY WOLF',1234567706,'123.456.789-05',0), 
('EDNALDO DIAS',1234567705,'123.456.789-04',0), 
('NICOLE SOUZA',1234567704,'123.456.789-03',0), 
('YAGO MELO',1234567703,'123.456.789-02',0), 
('MARGARETE PRESTES',1234567702,'123.456.789-01',0), 
('GUSTAVO SANTANA',1234567701,'123.456.789-00',0), 
('ALÍCIA CUNHA',1234567700,'123.456.788-00',0);


-- SELECT * FROM PRATELEIRAS
-- SELECT * FROM PRODUTOS
-- SELECT * FROM CLIENTES