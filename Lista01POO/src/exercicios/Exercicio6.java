package exercicios;

public class Exercicio6{ // Resolução do exercício 8 também
	public static void main(String[] args){
		int fib[] = new int[13];
		fib[0] = 0;
		fib[1] = 1;
		
		System.out.printf("%d\n%d", fib[0],fib[2]);
		
		for(int i=2;i<13;i++){
			fib[i] = fib[i-1] + fib[i-2];
			
			System.out.println(fib[i]);
		}
		
	}
}
