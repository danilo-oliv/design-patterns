package atividade;

public class NovoPagamento implements INovoPagamento {

    private Pagamento pagamento;

    public NovoPagamento(Pagamento pagamento){
        this.pagamento = pagamento;
    }

    @Override
    public void realizarPagamento(double montante) {
        System.out.println("Pagando com novo método");
        this.pagamento.processarPagamento(montante);        
    }
    
}
