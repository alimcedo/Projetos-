package exercicios;

import java.util.Scanner;

public class Exercicio7{ 
	// como foi orienta��o primeira e � o padr�o da atividade, a classe ficou como Exerc�cio7,
	// n�o como TestaSplit.
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		
		String frase = scan.nextLine();
		scan.close();
		
		String[] palavras = frase.split(" ");
		
		for(int i = palavras.length-1;i>=0;i--){
			System.out.print(palavras[i] + " ");
		}
	}
}
