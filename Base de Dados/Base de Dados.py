nomeCliente=''
Email=''
Contato=0
Tonelada=0
Kmrodado=0
Valorgasolina=5.23
Mcarros=['Truck','Bitruck','Cavalo Mecanico','Toco']
Truck=22
Bitruck=17
Cavalo_Mecanico:14
Toco=8
calc=0



nomeCliente=(input('Qual seu nome: '))
Email=(input('Seu email para contato: '))
Contato=(input('Seu telefone para contato: '))
Tonelada=int(input('Quantas toneladas serão transportadas: '))
Kmrodado=int(str (input('Qual a distância rodada: ')))

#truck= 22km/l; Bittruck= 17km/l; Cavalo Mecanico= 14km/l; Toco=8km/l;
if Tonelada <= 5 :
    calc= (Truck/Valorgasolina)*Kmrodado
    print("Você vai usar o Truck e vai gastar: ",{calc})
else:
    if Tonelada <= 15 :
        calc= (Bitruck/Valorgasolina)*Kmrodado
        print("Você vai usar o Bitruck e vai gastar: ",{calc})
    else:
        if Tonelada <= 19 :
            calc= (Cavalo_Mecanico/Valorgasolina)*Kmrodado
            print ("Você vai usar o Cavalo Mecanico e vai gastar: ",{calc})
        else:
            if Tonelada <=30  :
                calc= (Toco/Valorgasolina)*Kmrodado
                print("Você vai usar o Toco e vai gastar: ",{calc})
            
