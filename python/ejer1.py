'''Hacer un programa y que pida el nombre, la clave del departamento y la antigüedad del trabajo y que muestre el nombre y los
días de vacaciones que se merece.
Departamento de Atencion al cliente -> clave 1
1 año, 6 dias de vacaciones
2-6 años, 14 dias
7 años, 20 dias
Departmento de Logística -> clave 2
1 año, 7 dias de vacaciones
2-6 años, 15 dias
7 años, 22 dias
Gerencia -> clave 3
1 año, 10 dias de vacaciones
2-6 años, 20 dias
7 años, 30 dias'''
#Primero pedimos los datos
print('=====================')
print('Bienvenido Trabajador')
print('=====================')
opcion='s'
while opcion!='n':
    nombre=str(input('\nIntroduzca su nombre: '))
    clave=int(input('Introduzca la clave de su departamento (1-2-3): '))
    año=float(input('Introduzca su antigüedad en el puesto del trabajo: '))
    if clave==1:
        if año>=1 and año<2:
            print(nombre , ' tienes 6 días de vacaciones.')
            opcion=str(input('\n¿Desea comprobar otro trabajador?(s/n)'))
        elif año>=2 and año<7:
            print(nombre , ' tienes 14 días de vacaciones.')
            opcion=str(input('\n¿Desea comprobar otro trabajador?(s/n)'))
        elif año>=7:
            print(nombre , ' tienes 20 días de vacaciones.')
            opcion=str(input('\n¿Desea comprobar otro trabajador?(s/n)'))
    elif clave==2:
        if año>=1 and año<2:
            print(nombre , ' tienes 7 días de vacaciones.')
            opcion=str(input('\n¿Desea comprobar otro trabajador?(s/n)'))
        elif año>=2 and año<7:
            print(nombre , ' tienes 15 días de vacaciones.')
            opcion=str(input('\n¿Desea comprobar otro trabajador?(s/n)'))
        elif año>=7:
            print(nombre , ' tienes 22 días de vacaciones.')
            opcion=str(input('\n¿Desea comprobar otro trabajador?(s/n)'))
    elif clave==3:
        if año>=1 and año<2:
            print(nombre , ' tienes 10 días de vacaciones.')
            opcion=str(input('\n¿Desea comprobar otro trabajador?(s/n)'))
        elif año>=2 and año<7:
            print(nombre , ' tienes 20 días de vacaciones.')
            opcion=str(input('\n¿Desea comprobar otro trabajador?(s/n)'))
        elif año>=7:
            print(nombre , ' tienes 30 días de vacaciones.')
            opcion=str(input('\n¿Desea comprobar otro trabajador?(s/n)'))
    else:
        print('Ese departamento no está registrado')
        opcion=str(input('¿Desea seguir comprobando?(s/n)'))
print('Fin del programa')
