#en python se usa el for in para iterar listas, conjuntos y tuplas
animales = ["perro","gato","lobo","pez"]

for animal in animales:
    print(f"Ahora la variables animal es igual a {animal}")
    
#en python se usa el for in
numeros = [1,2,3,4,5,6,7,8,9]

for numero in numeros:
    resultado = numero * 10
    print(f"Ahora la variables animal es igual a {resultado}")
    
#como recorrer dos listas, eso si deben ser del mismo tamaño
autos = ["mazda","suziki","chevrolet","toyota"]
cantidades = [5,6,7,8]
for auto,cantidad in zip(autos,cantidades):
    print(f"recorriendo lista 1: {auto}")
    print(f"recorriendo lista 2: {cantidad}")
    
#itenrando con range, arranca entre un rango sin incluir el ultimo, si le pasamos un solo parametro lo tomara desde el 0
for num in range(5,10):
    print(num)
    
print("------------------------------------------------------------------------")
#forma no optima de recorrer una lista, en conjuntos no me lo permite
for num in range(len(numeros)):
    print(numeros[num])
    
print("------------------------------------------------------------------------")
#forma correcta de recorrer una lista
for num in enumerate(numeros):
    print(type(num))
    indice = num[0]
    valor = num[1]
    print(f"el indice es: {indice} y el valor es: {valor}")
    
print("------------------------------------------------------------------------")
numeros = (1,5,6,9,8)
for num,i in enumerate(numeros):
    print(type(num))
    print(f"el num es: {num} y el i es: {i}")
    
print("------------------------------------------------------------------------")
#usando el else en el for
for numero in numeros:
    print(f"ejecutando el ultimo bucle, valor: {numero}")
else:
    print("el bucle termino")