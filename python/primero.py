#Cómo mostrar un mensaje
print ('Bienvenido a mi programa')
'''#Declarar una variable y sumarlo
print ('Vamos hacer una suma para calentar')
print ('La primera variable es n1 y contiene 8 y la segunda variable es n2 y contiene 7.6')
n1=8
n2=7.6
resultado=n1+n2
#Sumo tres variables que contienen cadenas
print ('La suma de los dos numeros es ', resultado)
saludo = "Hola"
saludo += " "
saludo += "ciudadan@ del mundo"
print (saludo)

n3=2
n4=4
#Esto solo quería comprobar si de verdad se podía concatenar sin tener que pasarlo al str
print ('Las variables definidas en este momento son ', n1, ', ', n2, ', ', n3, ', ', n4)
#Vuelvo a sumar tres variables que contienen candenas pero directamente en el print
bienvenida='Bienvenid@'
espacio= ' '
persona= 'Ernesto'
print(bienvenida + espacio + persona)
#Buscar en qué posición está una palabra dentro de una variable con caracteres
print('ahora vamos a buscar la palabra "hoy" dentro de la variable frase: ')
frase='Buenos dias hoy hace sol'
buscarPalabra=frase.find('hoy')
buscarPalabra=str(buscarPalabra)
print('La posicion en la que se encuentra la palabra hoy es ' + buscarPalabra)'''

#Aquí extraemos una palabra que está dentro de una variable llamada frase usando el find para saber la posición
'''print('Ahora vamos a extraer la palabra sol dentro de la variable frase')
frase2='Buenos dias, hoy se preveé que hará sol todo el dia'
inicioPalabra=frase2.find('sol')
finalPalabra=inicioPalabra+3
extraerPalabra=frase2[inicioPalabra:finalPalabra]
print (extraerPalabra)'''

#Aquí empezamos a usar los operadores y los mostramos directamente en el print usando el str
'''print('Ahora vamos a comparar dos variables y saber si tienen el mismo contenido, en caso de que lo sean será true sino false')
x=5
y=2
print(x==y)
suma=x+y
resta=x-y
multiplicar=x*y
division = x / y
division2 = x // y
resto=x%y
potencia=x**y
print ('La suma de las variables x(5) e y(2) es :' + str(suma))
print ('La resta de las variables x(5) e y(2) es :' + str(resta))
print ('La multiplicacion de las variables x(5) e y(2) es : ' + str(multiplicar))
print ('La division de las variables x(5) e y(2) es : ' + str(division2))
print ('La division de la parte entera de las variables x(5) e y(2) es ' + str(resta))
print ('El resto de las variables x(5) e y(2) es :' + str(resto))
print ('La potencia de las variables x(5) elevado a y(2) es ' + str(potencia))'''

#Tipos de datos
#print (x, ' es un tipo de dato ', type(x), ' y el número ' , n2 , ' es un tipo de dato', type(n2))

#Entroducir un número desde el teclado, juego de adivinar el número comprendido entre el 1-10
'''nombre = input('Escribe tu nombre: ')
print('Bienvenid@ ', nombre , ' vamos a jugar a un juego')
numero=0
print('Intenta adivinar un numero comprendido entre 1-10')
while numero!=5:
    numero= int(input('Escribe un numero(1-10): '))
    if numero==5:
        print('¡Correcto, has ganado!')
    else:
        print('Incorrecto, vuelve a intentarlo')

print('se ha acabó el juego, gracias por jugar')'''

#Calcular le media de la nota de mates, inglés, fisica,historia
'''nombre = input('Nombre del alumno: ')
print('Hola ', nombre, ' vamos a calcular tu nota media de las siguientes asignaturas')
notaMat=float(input('Nota de matemáticas: '))
notaIng=float(input('Nota de inglés: '))
notaFis=float(input('Nota de física: '))
notaHis=float(input('Nota de historia: '))
media= (notaMat+notaIng+notaFis+notaHis)/4
print('La nota media de ', nombre, ' es ', round(media,2))
if media<5:
    print('El alumno está suspenso')
elif media>=5 and media<=6:
    print('El alumno tiene una nota media normal')
else:
    print('El alumno tiene buena nota media')
print('Fin del programa')'''

#Convertir numeros en palabras y viceversa
'''salir='n'
while salir!='s':
    print('\nSi desea convertir un numero en palabra escriba 1.')
    print('Si desea convertir una palabra en numero escriba 2.')
    opcion=str(input('\n Elige una opción: '))

    if opcion=='1':
        numero=str(input('Escriba el numero que quiere pasar a palabra: '))
        if numero=='1':
            print('uno')
            salir=str(input('Desea terminar? (s/n): '))
        elif numero=='2':
            print('dos')
            salir=str(input('Desea terminar? (s/n): '))
        elif numero=='3':
            print('tres')
            salir=str(input('Desea terminar? (s/n): '))
        else:
            print('Ese valor no lo tenemos registrado por el momento')
            salir=str(input('Desea terminar? (s/n): '))
    elif opcion=='2':
        letra=str(input('Escriba la palabra que quiera pasar a número: '))
        letra=letra.lower()
        if letra=='uno':
            print('1')
            salir=str(input('Desea terminar? (s/n): '))
        elif letra=='dos':
            print('2')
            salir=str(input('Desea terminar? (s/n): '))
        elif letra=='tres':
            print('3')
            salir=str(input('Desea terminar? (s/n): '))
        elif letra=='cuatro':
            print('4')
            salir=str(input('Desea terminar? (s/n): '))
        else:
            print('Esa opción no se encuentra disponible')
    else:
        print('No ha elegido ninguna opcion.')
        salir=str(input('Desea terminar? (s/n): '))
print('Se terminó el programa')'''

#Comparar numeros
'''print('Acontinuación escriba dos números para compararlos.')
salir='s'
while salir!='n':
    n1=int(input('Número 1: '))
    n2=int(input('Número 2: '))
    if n1>n2:
        print('El número ' , n1, ' es mayor que ', n2)
        salir=str(input('¿Quieres comparar otros dos números?(s/n): '))
    elif n2>n1:
        print('El número ' , n2, ' es mayor que ', n1)
        salir=str(input('¿Quieres comparar otros dos números?(s/n): '))
    else:
        print('Los dos números son iguales.')
        salir=str(input('¿Quieres comparar otros dos números?(s/n): '))
print('Fin del programa')'''





