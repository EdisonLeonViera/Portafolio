#se escribe la sub carpeta.nombre se puede concatenar import modulos.subcarpeta.modulo_saludar as modSalu
import subcarpeta.modulo_saludar as modSalu

nombre = input("Ingresar nombre: ")
saludo = modSalu.Saludar(nombre)
print(saludo)

print(dir(modSalu))