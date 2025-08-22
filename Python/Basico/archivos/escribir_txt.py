with open('archivos\\texto_de_negro.txt','w',encoding="UTF-8") as archivo:
    #sobre escribe todo lo que esta en el archivo
    archivo.write("jajaja que mamadas\n")
    
    #para escribir una linea se puede usar el line, el argumento acepta un str y una lista. Este no lo sobreescribe
    archivo.writelines(["Hola maestro \n","perro loco\n"])
    archivo.writelines(["Hola maestro \n","perro loco\n"])
    