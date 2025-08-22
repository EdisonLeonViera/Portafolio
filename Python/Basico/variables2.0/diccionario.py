#creando diccionarios con dict()
#dict se usa mas para cuando son vacio
diccionario = dict(nombre="lucas",apellidos="dalto")
print(diccionario)

#creando diccionarios con dict()
diccionario = {
    'mombre' : "lucas",
    'apellidos' : "dalto"
    }
print(diccionario)

#las listas no pueden ser claves y usamos frozenset para meter los conjuntos
diccionario = {frozenset(["perro","gato"]):"jajas"}
print(diccionario)

#creando un diccionario con fromkeys() y dos paremetros
diccionario = dict.fromkeys("nombre","apellido")
print(diccionario)

diccionario = dict.fromkeys(["nombre","apellido"])
print(diccionario)
print(diccionario["apellido"])

#creando un diccionario con fromkeys()
diccionario = dict.fromkeys("ABCDE")
print(diccionario)

#creando un diccionario con fromkeys()
diccionario = dict.fromkeys(["nombre","apellido"],"nose")
print(diccionario)