import pandas as pd
df = pd.read_csv('problemas_resueltos\\datos.csv')
#print(df)

#convertir a string una colunna
df['edad'] = df['edad'].astype(str)


#mostra el tipo de dato del primer elemetnto de la colimna edad
#print(type(df['edad'][0]))

df['apellido'].replace("dalto","maestro",inplace=True)

print(df)

#filas con datos faltantes
#df = df.dropna(axis=1)
df = df.dropna()
print(df)

#filas con datos repetidos
df = df.drop_duplicates()
print(df)

df.to_csv("problemas_resueltos\\datos_limpios.csv")

