
#para ingresar datos vale con input
print("Ingresa tu edad: ")
#lo recoge como str
#edad = input()
edad = 20

#condicionales, recordar la identacion
if edad >= 18:
    print("Mayor de edad")
else:
    print("Menor de edad")
    
    
contraseña_almacenada = "DaltoMaestro"
contraseña_escrita = '''DaltoMaestro'''
if contraseña_almacenada == contraseña_escrita:
    print("Inicia sesion")
else:
    print("No")


ingreso_mensual = 10000

if ingreso_mensual > 1000:
    print("Estas bien en latinoamerica")

if ingreso_mensual > 5000:
    print("En cualquier parte del mundo")
    
else:
    print("Pobresa uwu")
    
#else if
ingreso_mensual = 10000

if ingreso_mensual == 1000:
    print("Estas bien en latinoamerica")

elif ingreso_mensual > 5000:
    print("En cualquier parte del mundo")
    
else:
    print("Pobresa uwu")