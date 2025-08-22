import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns

df = pd.read_csv("archivos_problemas_graficos\\pedos.csv")

print(df)

#creando el grafico
sns.lineplot(x="fecha",y="pedos",data=df)

#le ponemos un punto rojo al grafico
plt.plot("01-09",17,"o")

#muestra el grafico
plt.show()

