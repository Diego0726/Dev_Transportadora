
let nomeCliente = '';
let email = '';
let contato = 0;
let tonelada = 0;
let kmRodado = 0;
const valorDiesel = 6.69;
let modelosCarros = ['VUC', 'Toco', 'LS Tremidão', 'Volvo FH'];

// Input de informações de cadastro pelo usuário
nomeCliente = prompt('Qual é o seu nome?');
email = prompt('Qual é o seu email para contato?');

while (true) {
  try {
    contato = parseInt(prompt('Telefone para contato: '));
    if (contato >= 10000000000 && contato <= 99999999999) {
      break;
    }
    console.log('Número incorreto');
  } catch (error) {
    console.log('Não foi digitado um número');
  }
}

// Pedido de Entrega
tonelada = parseInt(prompt('Quantas toneladas serão transportadas?'));
kmRodado = parseInt(prompt('Qual é a distância rodada?'));

// VUC= 6.2 km/l; Toco=6.2 km/l; LS Tremidão= 4.01 km/l; Volvo FH=1.41 km/l;
let calc = 0;
let carroEscolhido = '';

if (tonelada <= 6) {
  calc = (valorDiesel / 6.2) * kmRodado;
  carroEscolhido = modelosCarros[0];
} else if (tonelada <= 16) {
  calc = (valorDiesel / 6.2) * kmRodado;
  carroEscolhido = modelosCarros[1];
} else if (tonelada <= 49) {
  calc = (valorDiesel / 4.01) * kmRodado;
  carroEscolhido = modelosCarros[2];
} else if (tonelada <= 74) {
  calc = (valorDiesel / 1.41) * kmRodado;
  carroEscolhido = modelosCarros[3];
} else {
  console.log('Operação inválida');
}

// Para gerar um boleto, é necessário o gasto de gasolina (calc), salário do funcionário (salario) e valor do frete por tonelada
// O método toFixed é utilizado para limitar o número de casas decimais a 2
const toneladaVal = (121.90 * tonelada) * 0.153;
const bonusFuncionario = kmRodado / 10;
const boleto = (toneladaVal + bonusFuncionario + calc).toFixed(2);

function processarFormulario() {
  let nomeCliente = document.getElementById('nomeCliente').value;
  let email = document.getElementById('email').value;

  // Restante do código...

  console.log(`Muito obrigado, Sr(a) ${nomeCliente}! Seu pedido foi concluído.`);
}

