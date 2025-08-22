#por regla general se usa pd
import pandas as pd
#print(pd.__version__)

#dataframe son estructuras de datos bidimensionales como una hoja de calculo conceptualmente
#df = pd.read_csv('csv\\datos.csv',names = ["name","lastname","age"])
df = pd.read_csv('csv\\datos.csv')
df2 = pd.read_csv('csv\\datos.csv')

nombres = df["nombre"]
#si usamos la otra configuracion poir q lo agregamoscomo encabezado
#nombres = df["name"]

#cadena = "0123456789"

print(df)
print("-----------------------------")
df_ordenado = df.sort_values("edad")
print(df_ordenado)
print("-----------------------------")
df_ordenado = df.sort_values("edad",ascending=False)
print(df_ordenado)
print("-----------------------------")
df_ordenado = df.sort_values("nombre",ascending=False)
print(df_ordenado)
print("-----------------------------")

#concatenar los 2 df
df_concatenado = pd.concat([df,df2])

print(df_concatenado)

#slising o algo asi
#print(cadena[2:9])
#obteniendo columna nombre
#print(df["nombre"])

print("-----------------------------")
primer_fila = df.head(3)

print(primer_fila)
print("-----------------------------")
ultima_fila = df.tail(3)

print(ultima_fila)

#accediendo a la cantidad de filas y columnas con shape
print("-----------------------------")
filas_y_columnas_totales = df.shape
filas_totales,columnas_totales = filas_y_columnas_totales
print(filas_totales,columnas_totales)
print("-----------------------------")
df_info = df.describe()
print(df_info)

print("-----------------------------")
#accediendo a un elmento del df con loc
elemetps_especificos_loc = df.loc[2,"edad"]
print(elemetps_especificos_loc)

print("-----------------------------")
#accediendo a un elmento del df con loc
elemetps_especificos_loc2 = df.loc[:,"apellido"]
print(elemetps_especificos_loc2)


print("-----------------------------")
#accediendo a un elmento del df con iloc con indice
elemetps_especificos_iloc = df.iloc[2,2]
print(elemetps_especificos_iloc)

print("-----------------------------")
#accediendo a todas las filas de una columna
apellidos = df.iloc[:,1]
print(apellidos)

print("-----------------------------")
#accediendo a todas las columnas de una fila
apellidos2 = df.iloc[2,:]

print("-----------------------------")
#accediendo a todas las columnas de una fila
apellidos2 = df.loc[2,:]

print(apellidos2)

print("-----------------------------")
#accediendo a filas mayor a 30
mayor_que_30 = df.loc[df["edad"]>30,:]
print(mayor_que_30)