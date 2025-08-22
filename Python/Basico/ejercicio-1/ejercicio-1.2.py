frase = input("ingresa una frase: ")

#ejercico a
palabras = frase.split(" ")
print(palabras)
tiempo_en_hablar = len(palabras) *10 // 2 / 10
print(f"se demora {tiempo_en_hablar} seg en hablar")
cantidad_de_palabras = len(palabras)
print(f"dijo: {cantidad_de_palabras}")

#ejercicio b
if tiempo_en_hablar > 60:
    print("tampoco queria un textamento")

#ejercicio c
velocidad_dalto = 2 + (2*30/100)
tiempo_en_hablar_dalto = len(palabras) * 10 // velocidad_dalto / 10
print(f"dalto se demora {tiempo_en_hablar_dalto} seg en hablar")
