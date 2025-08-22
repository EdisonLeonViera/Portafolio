import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns

df = pd.read_csv("archivos_problemas_graficos\\cofla_ingresos.csv")

print(df)

#creando el grafico
sns.barplot(x="fuentes",y="ingresos",data=df)

total_ingresos = df["ingresos"].sum()

print(f"El total de ingresos es de: ${total_ingresos}, bien ahi")

#muestra el grafico
plt.show()

