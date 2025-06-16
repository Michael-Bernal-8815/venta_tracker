import os
import time
import subprocess
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler

BASE_DIR = os.path.dirname(os.path.abspath(__file__))
VENTAS_DIR = os.path.abspath(os.path.join(BASE_DIR, "../frontend/ventas"))
SCRIPT_PABLO = os.path.join(BASE_DIR, "registro_excel.py")
SCRIPT_ANGEL = os.path.join(BASE_DIR, "graficador.py")


class VentasHandler(FileSystemEventHandler):
    def on_created(self, event):
        if event.src_path.endswith(".json"):
            print(f"\n🟡 Nuevo archivo detectado: {event.src_path}")
            ejecutar_scripts()

def ejecutar_scripts():
    print("▶️ Ejecutando registro_excel.py...")
    subprocess.run(["python", SCRIPT_PABLO])
    print("✅ Excel actualizado.\n")

    print("▶️ Ejecutando graficador.py...")
    subprocess.run(["python", SCRIPT_ANGEL])
    print("✅ Gráficas actualizadas.\n")

if __name__ == "__main__":
    print(f"📡 Monitoreando carpeta de ventas: {VENTAS_DIR}\n")
    event_handler = VentasHandler()
    observer = Observer()
    observer.schedule(event_handler, path=VENTAS_DIR, recursive=False)
    observer.start()

    try:
        while True:
            time.sleep(1)
    except KeyboardInterrupt:
        observer.stop()
    observer.join()
