import java.util.ArrayList;

public class Diretorio extends Arquivo {

    private ArrayList<Arquivo> arquivos = new ArrayList<>();

    public Diretorio(String nome){
        super(nome);
    }

    public void add(Arquivo arquivo){
        this.arquivos.add(arquivo);
    }

    public void remove(Arquivo arquivo){
        this.arquivos.remove(arquivo);

    }
    
    public Arquivo getChild(int indice){
        return arquivos.get(indice);
    }

    @Override
    public void mostraEstrutura(String idt){
        System.out.println(idt + "Diretório: " + this.getNome());
        for(Arquivo arquivo : arquivos){
            arquivo.mostraEstrutura(idt + ' ');
        }
    }

    
}