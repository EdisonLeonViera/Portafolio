#open con codificacion universal
archivo_sin_leer = open('archivos\\texto_de_negro.txt',encoding="utf-8")
#una vez que se lee no se puede releer
#leer archivo completo
#archivo_leido = archivo_sin_leer.read()
#print(archivo_leido)

#linea por linea, ocupa ram
#linea_1 = archivo_sin_leer.readlines()
#print(linea_1)

#leer una sola linea, sino encuentra la linea lee la cantidad de caracteres de la primera, esta es mas recomendada cuando son archivos muuuuy grande
linea = archivo_sin_leer.readline()

#es importante cerrarlo para no dañar el archivo en casos de errores, si queremos volver a leerlo debemos abrirlo de nuevo
archivo_sin_leer.close()

print(linea)