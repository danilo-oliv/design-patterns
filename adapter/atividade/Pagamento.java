package atividade;

public class Pagamento {

    public void processarPagamento(double valor){
        System.out.println("Processando pagamento...");
    }

    public void pagar(double valor){
        System.out.println("Pagando...");
        this.processarPagamento(valor);
    }
}
