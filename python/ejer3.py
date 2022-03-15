#Hacer una calculadora que pueda sumar,restar,multiplicar,dividir,exponente y el resto
print('\n============')
print(' Bienvenido')
print('============')

opcion='s'
while opcion=='s':
    print('''\n1) Sumar
2) Restar
3) Multiplicar
4) Dividir
5) Exponente
6) Resto''')
    calcular=int(input('\n¿Qué desea hacer?(1-6): '))
    if calcular==1:
        fin=int(input('Escriba cuántos números quiere sumar: '))
        inicio=0
        suma=0
        while inicio<fin:
            numero=int(input('Número: '))
            suma += numero
            inicio+=1
        print('La suma de los ', fin, ' números es ', suma)
        opcion=str(input('¿Quiere hacer otro cálculo?(s/n): '))
    elif calcular==2:
        print('Escriba los dos números que va a restar')
        n1=int(input('Número 1: '))
        n2=int(input('Número 2: '))
        resta=n1-n2
        print('La resta de ', n1, '-', n2, ' es ', resta)
        opcion=str(input('¿Quiere hacer otro cálculo?(s/n): '))
    elif calcular==3:
        fin=int(input('Escriba cuántos números quiere multiplicar: '))
        inicio=0
        multiplicar=1
        while inicio<fin:
            numero=int(input('Número: '))
            multiplicar *= numero
            inicio+=1
        print('El resultado de los ', fin, ' números es ', multiplicar)
        opcion=str(input('¿Quiere hacer otro cálculo?(s/n): '))
    elif calcular==4:
        print('Escriba los dos números que va a dividir')
        n1=int(input('Número 1: '))
        n2=int(input('Número 2: '))
        division=n1/n2
        divisionEntera=n1//n2
        print('La división de ', n1, ' entre ', n2, ' es ', division)
        print('La parte entera de la división de ', n1, ' entre ', n2, ' es ', divisionEntera)
        opcion=str(input('¿Quiere hacer otro cálculo?(s/n): '))
    elif calcular==5:
        print('Escriba los dos números.')
        n1=int(input('La base: '))
        n2=int(input('El exponente: '))
        exponente=n1**n2
        print('El resultado de ', n1, ' elevado a ', n2, ' es ', exponente)
        opcion=str(input('¿Quiere hacer otro cálculo?(s/n): '))
    elif calcular==6:
        print('Escriba los dos números.')
        n1=int(input('Número 1: '))
        n2=int(input('Número 2: '))
        resto=n1%n2
        print('El resto de ', n1, ' entre ', n2, ' es ', resto)
        opcion=str(input('¿Quiere hacer otro cálculo?(s/n): '))
    else:
        print('Esa opción no está disponible')
print('Fin del programa')
