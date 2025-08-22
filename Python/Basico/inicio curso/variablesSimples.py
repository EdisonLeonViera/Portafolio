#python se encarga de definir las variables

#los datos booleanos van con mayuscula
nombre = True
#Concatenar conf string asi concatenamos, toma un dato y lo convierte a texto
bienvenida = f"Hola {nombre} ¿Como estas?"
print(bienvenida) 

#del para borrar, esto se borra cuando le toca osea si esta definido antes fue
del nombre
#concatenar con +
#bienvenida = "Hola " + nombre + " ¿Como estas?" #fallara por que borramos el dato

#volvemos a definir
nombre = 'Mario'
print(bienvenida) 

#Operadores de pertenencia (in y out)

#va a buscar un texto en la cadena
print("ola" in bienvenida)
#contrario
print("Hola" not in bienvenida)
#y es sensible a el tipo de caracter
print("hola" not in bienvenida)

#Para definir paraviables largas

#camelCase
nombreCompleto = "Camel Case"

#Recomnendado en python es snake case
nombre_completo = "Snake Case"

