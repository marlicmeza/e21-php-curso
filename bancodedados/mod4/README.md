Módulo 4

# OPERADORES
1 = 1
1 <> 2 ou 1 != 2
1 < 2
2 > 1
= : igual a

<> != : diferente de ou não igual a
> : menor que
< : maior que
<= : menor ou igual
>= : ou igual

# SELECT WHERE VIDEO 037

select pessoas_nome from pessoas where  pessoas_idade >30;
Irá selecionar somente as pessoas com idade superior a 30 anos.

# VIDEO 038
LIKE : Retorna 1 se o valor testado coincidir com o padrão passado
AND : Retorna 1 se as duas expressoes testadas forem 1
OR : Retorna 1 se uma das duas expressoes testadas forem 1
BETWEEN : Retorna 1 se o valor testado estiver no intervalo passado

ex: SELECT * FROM PESSOAS WHERE PESSOAS_IDADE IN (14,18);
SELECT * FROM PESSOAS WHERE PESSOAS_NOME LIKE %ADRIAN%;
SELECT * FROM PESSOAS WHERE PESSOAS_NOME LIKE %ADRIAN% AND PESSOAS_IDADE = 20;
SELECT * FROM PESSOAS WHERE PESSOAS_IDADE BETWEEN 45 AND 50;

# VIDEO 039
**Order By, 1 coluna, mais colunas, decrescente.**
SELECT PESSOAS_IDADE,PESSOAS_NOME FROM PESSOAS ORDER BY PESSOAS_IDADE,PESSOAS_NOME;
SELECT PESSOAS_IDADE,PESSOAS_NOME FROM PESSOAS ORDER BY PESSOAS_IDADE DESC;  ==> ORDEM DECRESCENTE.

# VIDEO 040
FUNÇÃO : DESCRIÇÃO
AVG : Retorna o valor médio do grupo selecionado
MIN : Retorna o valor mínimo do grupo selecionado
MAX : Retorna o valor máximo do grupo selecionado
SUM : Retorna a soma 
COUNT : Retorna o numero de linhas da tabela

EX: 
SELECT AVG(PESSOAS_IDADE) FROM PESSOAS;
SELECT MIN(PESSOAS_IDADE) FROM PESSOAS;
SELECT MAX(PESSOAS_IDADE) FROM PESSOAS;
SELECT COUNT(*) FROM PESSOAS;

# VIDEO 041 Agrupamento 

GROUP BY 

SELECT PESSOAS_IDADE, COUNT(PESSOAS_NOME)
FROM PESSOAS
GROUP BY PESSOAS_IDADE;

# VIDEO 042 JUNÇÃO
Junção com Where

SELECT.CIDADES_NOME,
PESSOAS.PESSOAS_NOME,
PESSOAS.PESSOAS_IDADE
FROM
PESSOAS,CIDADES
WHERE PESSOAS.PESSOAS_CIDADE_ID = CIDADES.CIDADES_ID;



