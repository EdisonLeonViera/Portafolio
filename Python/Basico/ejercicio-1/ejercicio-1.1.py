#ejercicio a
#promedio de duracion
otros_cursos_min = 2.5
otros_cursos_max = 7
otros_cursos_prom = 4
dalto_curso = 1.5

#diferencia de duracion
diferencia_con_min = 100 - dalto_curso / otros_cursos_min * 100
diferencia_con_max = 100 - dalto_curso / otros_cursos_max * 100
diferencia_con_prom = 100 - dalto_curso / otros_cursos_prom * 100

print("--------------------------")
print(f'El curso de dato dura un {diferencia_con_min}% menos q el mas rapido')
print(f'El curso de dato dura un {diferencia_con_max}% menos q el mas lento')
print(f'El curso de dato dura un {diferencia_con_prom}% menos q el promedio')

print("--------------------------")
diferencia_con_max = 100 - dalto_curso // otros_cursos_max * 100
print(f'El curso de dato dura un {diferencia_con_max}% menos q el mas lento')

print("--------------------------")
diferencia_con_max = 100 - dalto_curso * 1000 // otros_cursos_max / 10
print(f'El curso de dato dura un {diferencia_con_max}% menos q el mas lento')
print("--------------------------")
#ejercicio b

#promedio de crudos
crudo_promedio = 5
crudo_dalto = 3.5

#calculado el porcentaje de tiempo vacio removido
tiempo_vacio_promedio = 100 - otros_cursos_prom * 1000 // crudo_promedio / 10
tiempo_vacio_dalto = 100 - dalto_curso * 1000 // crudo_dalto / 10

print("--------------------------")
print(f'un curso promedio elimina un {tiempo_vacio_promedio}% de tiempo vacio')
print(f'este curso elimina un {tiempo_vacio_dalto}% de tiempo vacio')
print("--------------------------")

#ejercicio c
#mostrando diferencia si los curso duraron 10 horas
print("--------------------------")
print(f"Ver 10 horas de este curso equivale a ver {otros_cursos_prom * 100 // dalto_curso / 10} horas de otro cursos")
print(f"Ver 10 horas de otros curso equivale a ver {dalto_curso * 100 // otros_cursos_prom / 10} horas de otro cursos")
print("--------------------------")