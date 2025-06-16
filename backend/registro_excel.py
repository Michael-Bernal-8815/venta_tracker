import os
import json
import pandas as pd
from datetime import datetime

# Ruta donde se encuentran los JSON generados por el frontend
RUTA_JSON = r"D:\xampp\htdocs\ids\venta_tracker\frontend\ventas"
# Ruta donde se guardará el Excel mensual
RUTA_EXCEL = r"backend\data"

# Asegura que exista el directorio destino
os.makedirs(RUTA_EXCEL, exist_ok=True)

def procesar_ventas_dia(nombre_archivo):
    ruta_archivo = os.path.join(RUTA_JSON, nombre_archivo)
    with open(ruta_archivo, "r", encoding="utf-8") as file:
        ventas = json.load(file)

    df = pd.DataFrame(ventas)
    df["total"] = df["precio"] * df["unidades"]

    # Nombre del archivo Excel (por mes)
    fecha = df["fecha"].iloc[0]
    fecha_dt = datetime.strptime(fecha, "%Y-%m-%d")
    nombre_excel = f"ventas_{fecha_dt.year}_{fecha_dt.month:02d}.xlsx"
    ruta_excel = os.path.join(RUTA_EXCEL, nombre_excel)

    # Si el archivo ya existe, lo cargamos y añadimos
    if os.path.exists(ruta_excel):
        df_existente = pd.read_excel(ruta_excel)
        df = pd.concat([df_existente, df], ignore_index=True)

    # Guardamos al Excel
    df.to_excel(ruta_excel, index=False)
    print(f"✔️ Ventas agregadas a: {nombre_excel}")

# Ejemplo: procesa un archivo específico
if __name__ == "__main__":
    archivo = "2025-06-16.json"  # Puedes automatizar esto después
    procesar_ventas_dia(archivo)
