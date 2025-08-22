#creando un conjunto con set, solo deben ir datos que no se pueden modificar
conjunto = set (["dato1","Dato2"])

print(conjunto)

#metiendo un conjunto dentro de otro
conjunto1 = {"dato1","dato2"}
#conjunto2 = {conjunto1,"dato3"}
print(conjunto1)

conjunto1 = frozenset(["dato1","dato2"])
conjunto2 = {conjunto1,"dato3"}
print(conjunto2)

#teorias de conjunto, subconjuto o superconjunto depende del conjunto de referencia 
conjunto1 = {1,3,5,7}
conjunto2 = {1,3,7}
resultado = conjunto2.issubset(conjunto1)
print(resultado)
resultado = conjunto2 <= (conjunto1)
print(resultado)
resultado = conjunto1.issuperset(conjunto2)
print(resultado)
#sin el igual, recordar q conjunto 2 no es superconjunto de 1 pero si al reves
resultado = conjunto2 > (conjunto1)
print(resultado)

#verificar que no hay numero en comun
resultado = conjunto1.isdisjoint(conjunto2)
print(resultado)
conjunto3 = {6,8,9}
resultado = conjunto1.isdisjoint(conjunto3)
print(resultado)