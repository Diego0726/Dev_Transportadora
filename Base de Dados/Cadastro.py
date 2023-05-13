nomeCliente=''
Email=''
Contato=0
Tonelada=0
Kmrodado=0
Valorgasolina=5.23
Mcarros=['Truck','Bitruck','Cavalo Mecanico','Toco']


nomeCliente=(input('Qual seu nome: '))
Email=(input('Seu email para contato: '))
Contato=(input('Seu telefone para contato: '))
Tonelada=int(input('Quantas toneladas serão transportadas: '))
Kmrodado=int(str (input('Qual a distância rodada: ')))


#truck= 22km/l; Bittruck= 17km/l; Cavalo Mecanico= 14km/l; Toco=8km/l;

if Tonelada <= 5 :
    calc= (22/Valorgasolina)*Kmrodado
    Mcarros=(Mcarros[0])
else:
    if Tonelada <= 15 :
        calc= (17/Valorgasolina)*Kmrodado
        Mcarros=(Mcarros[1])
    else:
        if Tonelada <= 19 :
            calc= (14/Valorgasolina)*Kmrodado
            Mcarros= (Mcarros[2])
        else:
            if Tonelada <=30  :
                calc= (8/Valorgasolina)*Kmrodado
                Mcarros=(Mcarros[3])
            else:
               print=("Operação inválida")
            
#pra gerar um boleto precisaria do , gasto de gasolina(calc); salario do funcionario(salario); lucro tem que ser pelo menos 50% do valor gasto com a gasolina;

salario=1500+((Kmrodado/100)*10)
boleto=salario+calc+(calc*0.5)
print("Muito obrigado Sr(a)",nomeCliente,"seu pedido foi concluido, o valor total deu",boleto,"a entrega feita em 1 mês e será levado por um caminhão modelo",Mcarros)