#parametros posicionales
def frase(nombre,apellido,adjetivo):
    return f"Hola {nombre} {apellido}, sos muy {adjetivo}"

frase_resultante = frase("edison","leon","genio")
print(frase_resultante)
#parametros en forma de clave y valor, keyword arguments
frase_resultante = frase(adjetivo = "figura", apellido = "sueño", nombre = "morfeo")
print(frase_resultante)


def frase(nombre,apellido,adjetivo = "Tonto"):
    return f"Hola {nombre} {apellido}, sos muy {adjetivo}"

frase_resultante = frase("edison","leon")
print(frase_resultante)

#creando la misma funcion con parametro opcional u valor por defecto
def frase(nombre,apellido,adjetivo = "Tonto"):
    return f"Hola {nombre} {apellido}, sos muy {adjetivo}"

frase_resultante = frase("edison","leon", adjetivo = "inteligente")
print(frase_resultante)