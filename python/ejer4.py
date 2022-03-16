#Vamos hacer la sucesión Fibonacci
print('\n====================')
print(' Sucesión Fibonacci')
print('====================\n')

n1, n2 = 0, 1
while n2<=1597:
    print(n1, n2, end=' ')
    n1+=n2
    n2+=n1
