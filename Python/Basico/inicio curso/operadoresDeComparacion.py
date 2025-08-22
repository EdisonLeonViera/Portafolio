nombre = "pedrito"
nombre2 = 'pedrito'
nombre3 = 'laura'

numero1 = 5
numero2 = 5
numero3 = 8

# == es igual
es_igual1 = nombre == nombre2
es_igual2 = nombre2 == nombre3
es_igual3 = numero1 == numero2
es_igual4 = numero2 == numero3

print(es_igual1)
print(es_igual2)
print(es_igual3)
print(es_igual4)

# != distinto
es_distinto1 = nombre != nombre2
es_distinto2 = nombre2 != nombre3
es_distinto3 = numero1 != numero2
es_distinto4 = numero2 != numero3

print(es_distinto1)
print(es_distinto2)
print(es_distinto3)
print(es_distinto4)

#mayo o menor
es_mayor = numero3 > numero1
es_numero = numero2 > numero1
es_menor = numero1 < numero3

print(es_menor)
print(es_numero)
print(es_mayor)

#mayo o menor o igual
es_mayor_igual = numero3 >= numero1
es_numero_igual = numero2 >= numero1
es_menor_igual = numero1 <= numero3

print(es_menor_igual)
print(es_numero_igual)
print(es_mayor_igual)

#combinados
comparacion = numero1 + numero2 >= numero3
print(comparacion)

#comparacion de usuarios
usuario_base_de_datos = "JackMaestro"
contraseña_escrita = "1313"

print(contraseña_escrita == input())
