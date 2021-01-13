import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class Contato {
	
	private String nome;
	private Fone fone;
	
	public Contato(String nome) {
	this.nome = nome;
	this.fone = fone;
	}
	
	List<Map<Fone,List<Fone>>> list = new ArrayList<Map<Fone,List<Fone>>>();// Esta é a lista final de que você precisa
	Map<String, List<String>> map1 = new HashMap<String, List<String>>();// Esta é uma instância do mapa que você deseja armazenar na lista acima.
	List<String> arraylist1 = new ArrayList<String>();
	
	public String getNome() {
		return nome;
	}
	public Fone getFone() {
		return fone;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public void setFone(Fone fone) {
		this.fone = fone;
	}
	//adiciona fone
	public boolean addfone(Fone fone) {
		if(getFone() == null && fone.validate()) {
			arraylist1 = (List<String>) fone;
			return true;
		}
	
		return false;
	}
	public boolean rmfone() {
		if(this.fone == null)return false;
			this.fone = null;
			return true;
	}
	
}
