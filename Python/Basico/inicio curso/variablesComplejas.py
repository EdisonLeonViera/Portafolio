#listas
lista = ["Snake Case","Soy Snake",True,1.85]
print(lista)
print(lista[0])
# se pueden modificar
lista[3] = "Maquinola"
print(lista)

#tupla, no se pueden modificar
#sus bsuquedas son exactas
tupla = ("Snake Case","Soy Snake",True,1.85)
print(tupla)

#creando un conjunto (set), no tienen un orden fijo, casi igual que las listas, no se puede modificar pero si refinir
#tampoco se puede imprimir por indice[i]
#tampoco me deja repetir valores
#se puede recorrer con un bucle
#sus bsuquedas son exactas
conjunto = {"Snake Case","Soy Snake",True,1.85}
print(conjunto)
conjunto = {"Snake Case"}
print(conjunto)

#creando un diccionario

#diferencia con la lista es que esta se mueve en indice
#diccionario = {
#    0 :  'Jack',
#    1 : 'boxer',
#    2 : 36.5,
#    3 : True
#}

#esta se mueve por como llamamos el elemento
diccionario = {
    'nombre': 'Jack',
    'raza' : 'boxer',
    'peso' : 36.5,
    'vacunado': True
}

print(diccionario["nombre"])
print(diccionario['peso'] + 2)