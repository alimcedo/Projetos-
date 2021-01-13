
public class Agenda {
	
	private Contato contato;
	
	public Agenda() {
		
	}
	
	 public void init(String nome) {
		 contato = new Contato(nome);
	 }
	 public boolean add(String label, String numero) {
		 if (contato != null) {
		 return contato.addfone(new Fone(label, numero));
		 }
		 return false;
	 }
	 public boolean update(String label, String numero) {
		 if (contato != null) {
			 contato.rmfone();
			 return contato.addfone(new Fone(label, numero));
		 }
		 return false;
	 }
	 public void rm() {
		 if(contato != null) {
			 contato.rmfone();
		 }
	 }

}
 