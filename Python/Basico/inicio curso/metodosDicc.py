
diccionario = {
    "nombre" : 'lucas',
    "apellido" : 'dalto',
    "subs" : 1000000
}


#nos sirve para iterar y ver los keys del diccionario
#nos devuelve un objeto dict_item, que se puede iterar
claves = diccionario.keys()
print(claves)

#no me lanza excepcion sino encuentra
valor = diccionario.get("nombre")
print(valor)

#eliminado un elemento desde un diccionario
diccionario.pop("nombre")
print(diccionario)

#nos devuelve exactmente el diccionario iterable, osea el otro muestra key:valor este (key,valor) para recorrerlo
diccionario_iterable =diccionario.items()
print(diccionario_iterable)

#elimina todo del diccionario
diccionario.clear()
print(diccionario)

