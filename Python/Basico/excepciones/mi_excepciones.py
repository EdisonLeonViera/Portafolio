class MiExcepcion(Exception):
    def __init__(self,err):
        print(f"Impresionante, cometiste el siguiente error: {err}")
       
#lanzando mi propia excepcion
#raise MiExcepcion("Hola")

#manejando la excepcion        
try:
    raise MiExcepcion("ajkjajsakj,persona poco culta")
except:
    print("como vas a cometer ese error?")