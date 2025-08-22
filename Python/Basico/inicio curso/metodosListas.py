lista = list(["hola","dalto",34])

#esta nomenclatura se usa mas para declarar valores vacios basta con [] para indicar q es una lista
print(lista)

lista1 = ["hola","dalto",34,6,True]
#cantidad de elementos de la lista
resultado = len(lista1)
print(resultado)
#agregar un elemento a la lista
lista1.append("juanito")
#aqui modificamos la lista
print(lista1)

#agregamos un elemento a la lista pero con indice especifico
lista1.insert(2,"Jack")
print(lista1)

#agregando varios elementos a la lista, a partir de otra lista
lista1.extend([False,2034,"Simur"])
print(lista1)

#eliminado un elemento por su indice
lista1.pop(1)
print(lista1)

#elimina el ultimo, cuenta desde atras pero desde el -1
lista1.pop(-1)
print(lista1)

#removiendo un elemento de la lista por su valor
lista1.remove("hola")
#sino encuentra tira excepcion
print(lista1)

#elimina todos los elementos
lista.clear()
print(lista)

lista3 = [34,6,15,8,30,True,False]
lista3.sort()
print(lista3)

lista3 = [34,6,15,8,30,True]
lista3.sort()
print(lista3)

lista3 = [34,6,15,8,30,True,False,True]
lista3.sort()
print(lista3)

#ordena la lista
lista3 = [34,6,15,8,30]
lista3.sort()
print(lista3)

#ordena la lista a la inversa
lista3 = [34,6,15,8,30]
lista3.sort(reverse=True)
print(lista3)

#invierte los elementos, es decir los indices, el sort reverse solo ordena
lista1.reverse()
print(lista1)

#usar dir para set y duplas