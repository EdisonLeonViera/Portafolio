with open('archivos\\texto_de_negro.txt','a',encoding="UTF-8") as archivo:
    #agrega lineas pero no sobreescribe
    archivo.write("Recordar que el 'a' es el tipo de permiso append pero seguimos usando write\n")
    for i in range(5):
        archivo.write(f"Linea {i+1}\n")
    