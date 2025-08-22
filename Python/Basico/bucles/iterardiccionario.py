diccionario = {
    "nombre" : "lucas",
    "apellido" : "dalto",
    "subs" : 1000000
}

for key in diccionario:
    print(key)

#recorriendo diccionario  
#devuelve una tupla clave , valor
for datos in diccionario.items():
    print(type(datos))
    key = datos[0]
    value = datos[1]
    print(f"la clave es {key} y el valor {value}")
    