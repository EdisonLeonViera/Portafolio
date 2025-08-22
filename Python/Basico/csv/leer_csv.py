import csv

with open("csv\\datos.csv") as archivo:
    print(csv.reader(archivo))
    #libreria estandar muy limitada y poco usada
    reader = csv.reader(archivo)
    for row in reader:
        print(row)
        
    