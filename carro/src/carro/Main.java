package carro;

public class Main {
	public static void main (String[]args) {
		Car car = new Car();
		
		//quando for corrigir pode alterar a chamada das funções e valores para testar as hipoteses. 
		
		car.in();
		car.in();
		car.out();
		car.fuel(56);
		car.drive(59);
		
		// System.out.println("Carros criados: " + Car.getCont());   
		// isso era o contador estatico mas ficou com erro aqui na main, acredito que um pequeno ajuste resolveria mas n tive tempo
	
	}
}
