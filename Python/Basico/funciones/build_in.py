#encontrando el mayor o menor de una lista de numeros

numeros = [4,7,1,42,15]

print(max(numeros))
print(min(numeros))

#redondeando a 6 decimales
numero = round(12.265847)
print(numero)

numero = round(12.265847,2)
print(numero)

print("------------------------------------------------------------------------")
#retorna false -> 0, vacio, false, ninguno
resultado = bool(0)
print(resultado)
resultado = bool()
print(resultado)
resultado = bool(False)
print(resultado)
resultado = bool(None)
print(resultado)
resultado = bool([])
print(resultado)
print("------------------------------------------------------------------------")
#todo lo demas true
resultado = bool(-1)
print(resultado)
resultado = bool("a")
print(resultado)
resultado = bool(True)
print(resultado)
resultado = bool(1)
print(resultado)
resultado = bool(["GAto"])
print(resultado)
print("------------------------------------------------------------------------")

#retorna True si todos son verdaderos
resultado_all = all([123,"true",[123,321]])
print(resultado_all)
resultado_all = all([123,"",[123,321]])
print(resultado_all)

#suma total
suma_total = sum(numeros)
print(suma_total)

suma_total = (numeros)
print(suma_total)