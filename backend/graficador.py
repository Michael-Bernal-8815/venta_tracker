import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns
import os

# Cargar el archivo Excel más reciente desde backend/data/
RUTA_EXCEL = "backend/data"
archivos = sorted([f for f in os.listdir(RUTA_EXCEL) if f.endswith(".xlsx")], reverse=True)
archivo_actual = os.path.join(RUTA_EXCEL, archivos[0])  # El más reciente

# Leer datos
df = pd.read_excel(archivo_actual)
df["fecha"] = pd.to_datetime(df["fecha"])
df["total"] = df["precio"] * df["unidades"]

# Gráfica 1: Ventas totales por día (últimos 7 días)
ultima_semana = df[df["fecha"] >= (df["fecha"].max() - pd.Timedelta(days=6))]
ventas_por_dia = ultima_semana.groupby("fecha")["total"].sum().reset_index()

plt.figure(figsize=(8, 5))
sns.barplot(data=ventas_por_dia, x="fecha", y="total", palette="viridis")
plt.title("Ventas Totales - Últimos 7 Días")
plt.xlabel("Fecha")
plt.ylabel("Total ($)")
plt.xticks(rotation=45)
plt.tight_layout()
plt.savefig("backend/output/ventas_ultima_semana.png")
plt.close()

# Gráfica 2: Productos más vendidos (por unidades)
productos_mas_vendidos = df.groupby("producto")["unidades"].sum().sort_values(ascending=False).head(5)

plt.figure(figsize=(8, 5))
sns.barplot(x=productos_mas_vendidos.values, y=productos_mas_vendidos.index, palette="magma")
plt.title("Top 5 Productos Más Vendidos")
plt.xlabel("Unidades vendidas")
plt.ylabel("Producto")
plt.tight_layout()
plt.savefig("backend/output/top_productos.png")
plt.close()

print("✔️ Gráficas generadas en backend/output/")
