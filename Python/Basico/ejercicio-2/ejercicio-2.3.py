#creando rangos de fibonacci

def fibonacci(num):
    a,b = 0,1
    fibonacci_lista = [0]
    for i in range(num):
        if b > num: return fibonacci_lista
        else:
            fibonacci_lista.append(b)
            a,b = b,a+b
            
resultado = fibonacci(20)
print(resultado)

#primos hasta
primos_hasta = lambda num: list(filter(lambda x: all (x % i != 0 for i in range(2, int(x ** 0.5) + 1)),range(2,num)))

print(primos_hasta(15))