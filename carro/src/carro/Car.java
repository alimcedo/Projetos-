package carro;

public class Car {
private	int gass ;
private	int gassMax = 100 ;
private	int pass ;
private	int passMax = 2;
private	int km ;
static int cont;

public Car () {   //construtor
	this.gass = gass ;
	this.pass = pass ;
	this.km = km ;
  setCont(getCont() + 1);
}

public int getCont() {
	return cont;
}

private void setCont(int n4) {
	this.cont = n4;
}

public int getGass() {
	return gass;
}
private void setGass(int gass) {
	this.gass = gass;
}
public int getGassMax() {
	return gassMax;
}
private void setGassMax(int gassMax) {
	this.gassMax = gassMax;
}
public int getPass() {
	return pass;
}
private void setPass(int pass) {
	this.pass = pass;
}
public int getPassMax() {
	return passMax;
}
private void setPassMax(int passMax) {
	this.passMax = passMax;
}
public int getKm() {
	return km;
}
private void setKm(int km) {
	this.km = km;
}

//FUNÇÕES 
public boolean in () {  //função subir no carro
	if (getPass()<passMax) {
		this.setPass(this.getPass()+1);  // sobre um por vez
		System.out.println("um passageiro entrou no carro");  
		return true;
	}
	System.out.println ("NÃO É POSSIVEL ENTRAR NO CARRO."); // se ja ta lotado n pode subir
	return false;
}
// funçao sair do carro
public boolean out () {
	if (getPass()!=0) { // se tem pelo menos alguem dentro
		this.setPass(this.getPass()-1); // desce um passageiro
		System.out.println("um passageiro saiu do carro");
		return true;
	} else if (this.getPass() == 0) {  // se o carro ja ta vazio n tem ngm pra descer
	System.out.println ("NÃO É POSSIVEL DESCER, POIS NÃO HÁ PASSAGEIROS NO CARRO.");
	}
	return false;
	}

// função para abastecer
public void fuel (int value) {
	// se a gasolina for menor que a quatidade maxima do tanque
	if ((this.getGass()+value)<= this.getGassMax()) {
		// acresente mais gasolina (agua, no caso)
		this.setGass(this.getGass()+value);
		System.out.println("Abastecendo o carro com "+value+" litros");
	} else if
	// se o combustivel ja for mais do que o suficiente, informe que ja esta cheio.
	(this.getGass()+value >= this.getGassMax()) {
		System.out.println("O carro ficou 100% abastecido");
	}
}
public boolean drive(int distancia) { //dirigir
	if ((getPass() > 0) && (getGass() > 0)) {
		if (getGass() < distancia) {   // se gasolina menor q distancia 
			distancia = getGass(); //ando ate onde tiver gasolina
		
			System.out.println("Foi percorrido " + distancia + " km, com a agua disponivel");
			System.out.println ("*****ABASTEÇA O VEICULO PARA CONTINUAR A VIAGEM*****");
			setKm(getKm() + getGass());
			setGass(0);
			return true;
	
		}else {
			setKm(getKm() + distancia);
			setGass(getGass() - distancia);
			System.out.println("Foi percorrido " + distancia + " km");
			return true;
		}
	} else {
		return false;
	}

}



}