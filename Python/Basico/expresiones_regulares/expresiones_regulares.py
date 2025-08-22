import re

texto = ''''Hola maestro, esta es la cadena 1. con comillas,
Esta se usa para escribir 698 en multi linea de python.
Esta para usarse se debe 45687 poner triple comilla.'''

resultado = re.findall("Esta",texto)

#digitos
#\d -> para buscar mnumeros 0-9
# la r es para indicar para el uso de expresiones regulares
resultado = re.findall(r"\d",texto)

#\D -> para NO buscar mnumeros 0-9
# la r es para indicar para el uso de expresiones regulares
resultado = re.findall(r"\D",texto)


#\w -> caracteres alfanumericos [a-z A-Z 0-9_]
#el _ se considera caracter alfanumerico
resultado = re.findall(r"\w",texto)

#\W -> NO caracteres alfanumericos [a-z A-Z 0-9_]
resultado = re.findall(r"\W",texto)

#\s -> busca espacion en blanco espacios,tabs,saltos de linea
resultado = re.findall(r"\s",texto)

#\S ->NO busca espacion en blanco espacios,tabs,saltos de linea
resultado = re.findall(r"\S",texto)

#. ->NO busca satos de linea
resultado = re.findall(r".",texto)

#\n -> busca satos de linea
resultado = re.findall(r"\n",texto)

#\ -> Cancela los caracteres especiales
resultado = re.findall(r"\.",texto)

#armando una cadena que bsuque un numero, seguido de un punto y un espacio
resultado = re.findall(f'\d\.\s',texto)

#^ -> busca el comienzo de una linea (buscando hola al principio de la linea)
#flags=re.M activa la multilinea
resultado = re.findall(r'^Esta', texto, flags=re.M)

#$ -> busca el final de una linea
resultado = re.findall(r'capitan$', texto, flags=re.M)

#{n} -> busca n cantidad de veces el valor de la izquierda (3 numeros juntos esta vez)
resultado = re.findall(r'\d{3}' , texto)

#{n,m} -> al menos n, como máximo m
resultado = re.findall(r'\d{2,4}', texto)

# | -> busca una cosa o la otra
resultado = re.findall(r'\d{2,4}|Hola', texto)

print(resultado)