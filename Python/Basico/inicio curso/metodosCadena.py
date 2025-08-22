cadena1 = "Hola soy Dalto"
cadena2 = "Bienvenido maquinola"
cadena3 = "Hola"

dir(cadena1)
#nos muestra todas la cosas que podemos hacer
print(dir(cadena1))
print(dir(4))

#funcion .funcion()
resultado = dir(cadena1)
print(resultado)

#metodos, son seguidos de
resultado = cadena2.upper()
print(resultado)

resultado = "Hola mostro como estas".upper()
print(resultado)

resultado = resultado.lower()
print(resultado)

#capitalize
resultado = "HOLA MOSTRO como estas".upper()
print(resultado.capitalize())

#estas funciones nos devuelven algo

#metodo(algo)
#buscar un valor
#cadena en cadena:
#nos devuelve la posicion en la que encuentra lo que le pedimos
busqueda_fin = cadena1.find("a")
print(busqueda_fin)

busqueda_fin = cadena1.find("Hola")
print(busqueda_fin)

busqueda_fin = cadena1.find("hola")
print(busqueda_fin)
#-1 cuando no encuentra el valor, recordar que es key sensitive

#buscamos cadenas en cadenas
busqueda_index = cadena1.index("D")
#sino existe tira excepcion
#busqueda_index = cadena1.index("9")

print(busqueda_index)

numero = "5"
alpha = "ASD15"
beta = "153"
delta = "juana 12354 maria"
orion = "ASDF"

#es un texto pero verifica si son numeros
es_numero = beta.isnumeric()
print(es_numero)

es_alfa_numerioc = beta.isalpha()
print(es_alfa_numerioc)

es_alfa_numerioc = delta.isalpha()
print(es_alfa_numerioc)

es_alfa_numerioc = alpha.isalpha()
print(es_alfa_numerioc)
#isalpha solo aguanta de la A a la Z sin caracteres ni espacios
es_alfa_numerioc = orion.isalpha()
print(es_alfa_numerioc)

#contar cuantas veces

resultado2 = cadena1.count("a")
print(resultado2)

resultado2 = cadena1.count("D")
print(resultado2)
#sino encuentra da 0
resultado2 = cadena1.count("Hola")
print(resultado2)

resultado2 = cadena1.count("la so")
print(resultado2)

#contamos cuantos caracteres tiene, funcion
resultado3 = len(cadena1)
print(resultado3)

#verificamos si una cadena empieza  con otra cadena dada, si es asi devuelve true
empieza_con = cadena3.startswith("Ho")
print(empieza_con)

#verificamos si una cadena termina  con otra cadena dada, si es asi devuelve true
empieza_con = cadena3.endswith("la")
print(empieza_con)

#reemplazar un pedazo de la cadena dada, por la otra dada
cadena_nueva = cadena3.replace("la","lu")
print(cadena_nueva)

cadena_nueva = cadena3.replace("la","Holu")
print(cadena_nueva)

cadena_nueva = cadena3.replace("la","Hola maquina")
print(cadena_nueva)

#nos devuelve una matriz, separa cadena
cadena4 = "Gato,Perro,Topo"
cadeba_separada = cadena4.split(",")
print(cadeba_separada[0])
print(cadeba_separada[1])
print(cadeba_separada[2])