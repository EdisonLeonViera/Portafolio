#funciones abstractas es por q no nos importa como funciona en si

#ahora crearemos nuestras propias funciones

#funcion simple
def saludar():
    print("Hola lucas")

saludar()

#funcion con parametro
def saludo(nombre):
    print(f"Bienvendio {nombre}")
    
saludo("edison")

#dos parametros
def saludo(nombre,sexo):
    sexo = sexo.lower()
    if (sexo == "mujer"):
        adjetivo = "reina"
    elif (sexo == "hombre"):
        adjetivo = "titan"
    else:
        adjetivo = "amor"
    
    print(f"Bienvendio {nombre}, mi {adjetivo}")
    
saludo("edison","hombre")
saludo("edison","asda")

#crear una funcion que nos devuelve valores
def crear_contraseña_random(num):
    chars = "abcdefghij"
    num_entero = str(num)
    num = int(num_entero[0])
    c1 = num - 2
    c2 = num
    c3 = num - 5
    contraseña = f"{chars[c1]}{chars[c2]}{chars[c3]}{num*2}"    
    print(contraseña)
    
crear_contraseña_random(20)
crear_contraseña_random(7)

#retornando
def crear_contraseña_random(num):
    chars = "abcdefghij"
    num_entero = str(num)
    num = int(num_entero[0])
    c1 = num - 2
    c2 = num
    c3 = num - 5
    contraseña = f"{chars[c1]}{chars[c2]}{chars[c3]}{num*2}"    
    return(contraseña)
    
password = crear_contraseña_random(20)
print(password)

password = crear_contraseña_random(1)
print(password)

#retornando multpiles valores
def crear_contraseña_random(num):
    chars = "abcdefghij"
    num_entero = str(num)
    num = int(num_entero[0])
    c1 = num - 2
    c2 = num
    c3 = num - 5
    contraseña = f"{chars[c1]}{chars[c2]}{chars[c3]}{num*2}"    
    return(contraseña,num)
    
#desempaquetado de tupla
password,primer_numero = crear_contraseña_random(20)
print(password)
print(primer_numero)



