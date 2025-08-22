#creando funcion que suma numeros
def sumar_dos():
    #iniciando un bucle
    while True:
        #pidiendo numeros
        a = input("Numero 1: ")
        b = input("Numero 2: ")
        #intentando convertirlos a entero y sumarlos
        try:
            resultado = int(a) + int(b)
            #si lanzo una excepción, pedirle que reingrese los datos
        except Exception as e:
            print("Te pedì un numero salame, no te hagas el gracioso")
            print(f"ERROR: {type(e).__name__}")
        #otras excepciones
        
        #except ZeroDivisionError
        #si todo salio bien terminamos el bucle
        else:
            break
        #se ejecuta siempre
        finally:
            print("Manejo de excepción finalizado")
            #mostrando el resultado
        return resultado
    
sumar_dos()