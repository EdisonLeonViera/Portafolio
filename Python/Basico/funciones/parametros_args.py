#no funciona por el tamaño de lista
#def suma(a,b):
#    return a+b

#no optima
#def suma(lista):
#    numeros_sumados = 0
#    for numero in lista:
#        numeros_sumados = numeros_sumados + numero
#    return numeros_sumados
#    
#resultado = suma([5,9,3])
#print(resultado)

#forma optima con args, el parametro *numeros debe quedar al final, que sera lo q funciona como lista
def suma(nombre,*numeros):
    return f"{nombre}, la suma de tus numeros es: {sum(numeros)}"
    
resultado = suma("lucas",5,9,3)
print(resultado)

#lo mismo q arriba pero usando el operador *  como parametro (*args)
def suma_total(numeros):
    print(*numeros)
    #print(type(*numeros))
    return sum([*numeros])

resultado2 = suma_total([5,3,9,10,20,3])
print(resultado2)