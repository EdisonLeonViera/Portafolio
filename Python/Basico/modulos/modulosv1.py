#from modulo_saludar import saludar
from modulos.subcarpeta.modulo_saludar import Saludar as slds
#Esto de abajo es una mala practica
#from modulo_saludar import *

nombre = input("Ingresar nombre: ")
saludo = slds(nombre)
print(saludo)