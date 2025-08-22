frutas = ["banana","granada","ciruela","pera","manzana","durazno"]

#continue sirve para saltar ese paso, para evitar un fruta en este caso pero sin detener
for fruta in frutas:
    if fruta == 'granada':
        continue
    print(f"me voy a comer una {fruta}")
    
#evistar q siga el bucle, detiene el bucle
for fruta in frutas:
    print(f"me voy a comer una {fruta}")
    if fruta == 'pera':
        break
    print(f"me voy a comer una {fruta}")
else:
    print("esto tambien se lo salta")
    
print("bucle terminado")

#iterar cadenas de texto
cadena = "hola edison como estas hoy mi rey"
for letra in cadena:
    print(letra)
    
numeros = [2,5,8,10]
#for en una sola lista linea
numero_duplicados = [x*2 for x in numeros]
print(numero_duplicados)

numero_duplicados = [x**2 for x in numeros]
print(numero_duplicados)

#en dos o mas
numero_duplicados = list()
print(numero_duplicados)
for numero in numeros:
    numero_duplicados.append(numero*2)

print(numero_duplicados)