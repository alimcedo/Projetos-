package exercicios;

public class Exercicio5 {
	public static void main(String[] args){
		int fatorial = 1;
		
		for(int i=1;i<=20;i++) {
			fatorial = fatorial * i;
			System.out.println(fatorial);
		} 
		// Desta forma, o valor de fatorial perde informações a partir de determinado laço, 
	   //  já que se torna um inteiro muito grande para ser armazenado dentro
		
		System.out.println("\\\\");
		
		long fat = 1;
		
		for(int i=1;i<=20;i++) {
			fat = fat * i;
			System.out.println(fat);
		} 
		// Como está armazenado em um long int, o valor de fat não se perde quando se torna maior.
	   //  Uma variável do tipo long int pode armazenar de -2.147.483.648 a 2.147.483.647.
	}
}
