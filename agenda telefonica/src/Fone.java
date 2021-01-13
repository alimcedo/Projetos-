
public class Fone {
	
	private String label;
	private String numero;
	
	public Fone(String label, String numero) {
		this.numero = numero;
		this.label = label;
	}
	
// validação do numero
	public boolean validate() {
		for(int i=0;i<numero.length();i++) {
			if(i == 0 && numero.charAt(i)!='(')return false;
			if(i == 3 && numero.charAt(i)!='(')return false;
			if(i == 4 && numero.charAt(i ) == '0')return false;
			if(i != 0 && i != 3 && i != 4) {
			if(numero.charAt(i) < '0' || numero.charAt(i) > '9')return false;
			}
		}		
		return true;
	}

	public String toString() {
		return label+" : "+numero;
	}
	
	public String getLabel() {
		return label;
	}
	public String getNumero() {
		return numero;
	}
	public void setLabel(String label) {
		this.label = label;
	}
	public void setNumero(String numero) {
		this.numero = numero;
	}

	
	

}
