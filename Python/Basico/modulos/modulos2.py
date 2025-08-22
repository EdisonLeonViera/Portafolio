#si el modulo esta fuera de la carpeta
import sys

print(sys)
print(sys.builtin_module_names)
print(sys.path)
sys.path.append("C:\\Users\\ed_de\\OneDrive\\Desktop\\Cursos\\Python\\funcionesexternas")
print(sys.path)

import modulo_saludar2 as saludar

nombre = input("Ingresar nombre: ")
saludo = saludar.Saludar(nombre)
print(saludo)

