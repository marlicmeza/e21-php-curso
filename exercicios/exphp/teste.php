$frase = raw_input('Informe uma frase').split(" ")  
    aux = ""

for i in range(0, len($frase)):
    aux += frase[i]

$frase = aux.split(".") 
aux = ""

for i in range(0, len($frase)): 
    aux += frase[i]

$frase = aux.split(",") 
aux = ""

for i in range(0, len($frase)): 
    aux += frase[i]

if aux.lower() == aux.lower()[::-1]: 
    print 'É palíndromo'
else:
    print 'Não é palíndromo'