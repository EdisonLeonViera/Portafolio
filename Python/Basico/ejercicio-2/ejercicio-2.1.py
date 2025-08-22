#ejercicio a
def obtener_compañeros(cantidad_compañeros):
    compañeros = []
    for i in range(cantidad_compañeros):
        nombre = input("ingresar nombre: ")
        edad = int(input("ingresar edad:"))
        compañero = (nombre,edad)
        compañeros.append(compañero)
        #creamos una tupla iterable, una clave y el valor este caso el segundo q seria el 1
    #ordenamos la lista
    compañeros.sort(key=lambda x:x[1])
    #seleccionamos el nombre del primer elemento
    asistente = compañeros[0][0]
    #tomamos el nombre del ultimo elemento
    profesor = compañeros[-1][0]
    #retornamos la tupla
    return asistente,profesor

#desempaquetamos
asistente,profesor = obtener_compañeros(5)

print(f"El profesor es {profesor} y el asistente {asistente}")

#ejercicio b numeros primos
