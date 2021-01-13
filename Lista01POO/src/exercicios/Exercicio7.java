package exercicios;

import java.util.Scanner;

public class Exercicio7{ 
	// como foi orientação primeira e é o padrão da atividade, a classe ficou como Exercício7,
	// não como TestaSplit.
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
