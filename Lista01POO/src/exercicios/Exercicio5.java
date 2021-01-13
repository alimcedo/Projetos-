package exercicios;

public class Exercicio5 {
	public static void main(String[] args){
		int fatorial = 1;
		
		for(int i=1;i<=20;i++) {
			fatorial = fatorial * i;
			System.out.println(fatorial);
		} 
		// Desta forma, o valor de fatorial perde informa��es a partir de determinado la�o, 
	   //  j� que se torna um inteiro muito grande para ser armazenado dentro
		
		System.out.println("\\\\");
		
		long fat = 1;
		
		for(int i=1;i<=20;i++) {
			fat = fat * i;
			System.out.println(fat);
		} 
		// Como est� armazenado em um long int, o valor de fat n�o se perde quando se torna maior.
	   //  Uma vari�vel do tipo long int pode armazenar de -2.147.483.648 a 2.147.483.647.
	}
}
