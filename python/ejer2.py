#Hacer un programa que pida un numero y diga si es par o impar
print('\n==========')
print('Bienvenido')
print('==========')

opcion='s'
while opcion=='s':
    numero=int(input('\nEscriba un número: '))
    if numero%2==0:
        print('El número ', numero, ' es par')
        opcion=str(input('\n¿Quieres comprobar otro numero?(s/n): '))
        if opcion!='s' and opcion!='n':
            print('Esa no es una de las opciones.')
    elif not numero%2==0:
        print('El número ', numero, 'es impar')
        opcion=str(input('\n¿Quieres comprobar otro numero?(s/n): '))
        if opcion!='s' and opcion!='n':
            print('Esa no es una de las opciones.')
    else:
        print('Eso no es un número')

print('\nFin del programa')
