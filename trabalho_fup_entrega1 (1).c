#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <ctype.h>

typedef struct{
  char placa[8];
  char modelo[20];
  char marca[20];
  char cor[20];
  char hora[7];
}veiculo;

veiculo registrar_veiculo(){
  veiculo veiculo;

  printf("Digite a placa: ");
  scanf(" %[^\n]\n", veiculo.placa);
  
  int j = 0;
  for(j = 0; j < 3; j++){
    if(isalpha(veiculo.placa[j]) == 1){
      printf("\nPlaca invalida\nTres primeiros digitos devem ser letras!\n\n");
      break;
    }
  }

  for(j = 3; j < 7; j++){
    if(isalpha(veiculo.placa[j]) == 1){
      printf("\nPlaca invalida\nQuatro ultimos digitos devem ser numeros!\n\n");
      break;
    }
  }

  printf("Digite o Modelo: ");
  scanf(" %[^\n]\n", veiculo.modelo);

  printf("Digite a Marca: ");
  scanf(" %[^\n]\n", veiculo.marca);

  printf("Digite a Cor: ");
  scanf(" %[^\n]\n", veiculo.cor);

  printf("Digite o horario de entrada no formato <horas>:<minutos>\n");
  scanf(" %[^\n]\n", veiculo.hora);

  return veiculo;
} 

veiculo* informar_entrada(veiculo *veiculos, int *n, veiculo veiculo_novo){
  veiculos = (veiculo*) realloc (veiculos, (*n+1) * sizeof(veiculo));

  if(veiculos == 0){
    printf("ERRO ao informar entrada do veiculo!");
    return 0;
  }

  veiculos[*n] = veiculo_novo;
  (*n)++;

  return veiculos;
}

veiculo* informar_saida(veiculo *veiculos, int *n){
  char placa_pesquisa[8];

  printf("Digite a placa do veiculo:");
  scanf(" %[^\n]\n", placa_pesquisa);

  for(int i = 0; i < *n; i++){
    if(strcmp(placa_pesquisa, veiculos[i].placa) == 0){

      printf("\n Placa -----------: %s", veiculos[i].placa);
      printf("\n Modelo ----------: %s", veiculos[i].modelo);
      printf("\n Marca -----------: %s", veiculos[i].marca );
      printf("\n Cor -------------: %s", veiculos[i].cor   );
      printf("\n Hora de Entrada -: %s\n\n", veiculos[i].hora);

      veiculos[i] = veiculos[*n-1];
      veiculos = (veiculo*) realloc (veiculos, (*n-1) * sizeof(veiculo));

      if(veiculos == 0){
        printf("ERRO ao informar saida do veiculo!");
        return 0;
      }

      (*n)--;
      break;
    }
  }

  int total = 0, hora_saida = 0, minuto_saida = 0, hora_entrada = 0, minuto_entrada = 0;
  float preco = 0.0;

  printf("Digite o horario de entrada no formato <hora>:<minuto>: \n");
  scanf("%d : %d\n", &hora_entrada, &minuto_entrada);

  printf("Digite o horario de saida no formato <hora>:<minuto>: \n");
  scanf("%d : %d\n", &hora_saida, &minuto_saida);

  //a hora normal de atuação sem taxa é de 60mn, custando 10 reais, acima disso, uma taxa de 0.5 é cobrada em cima do tempo.

  minuto_saida = minuto_saida + (hora_saida * 60);
  minuto_entrada = minuto_entrada + (hora_entrada * 60);

  total = minuto_saida - minuto_entrada;

  if(total <= 60){
    preco = 10.0;
  }else{
    preco = 10 + (total * 0.5);
  }

  printf("O carro do cliente ficou %d minutos no estacionamento, e o valor total a pagar e de: R$%.2f ", total, preco);
  return veiculos;
}

void listar_veiculos(veiculo *veiculos, int *n){
  for(int i = 0; i < *n; i++){
    printf("\n %d ---------------\n", i);
    printf("\n Placa -----------: %s", veiculos[i].placa);
    printf("\n Modelo ----------: %s", veiculos[i].modelo);
    printf("\n Marca -----------: %s", veiculos[i].marca );
    printf("\n Cor -------------: %s", veiculos[i].cor   );
    printf("\n Hora de Entrada -: %s\n\n", veiculos[i].hora);
  }
}

int main(){

  veiculo *veiculos = 0, veiculo_novo;
  int opc = 0;
  int n = 0;

  do{
    opc = 0;
    printf("\nCONTROLE DE ESTACIONAMENTO\n\n");
    printf("-------------------------------------------\n\n");
    printf("1. Informar entrada\n");
    printf("2. Informar saída\n");
    printf("3. Listar veículos\n");
    printf("4. Sair\n\nOpcao: ");

    fflush(stdin);
    scanf("%d", &opc);

    switch (opc){
      case 1:
        veiculo_novo = registrar_veiculo();
        veiculos = informar_entrada(veiculos, &n, veiculo_novo);
        break;

      case 2: 
        veiculos = informar_saida(veiculos, &n);
        break;
      
      case 3:
        listar_veiculos(veiculos, &n);
        break;

      case 4: 
        break;

      default:
        printf("Opcão inválida!");
        break;
    }
  }while(opc != 4);
  
  return 0;
}