package atividade;

public class Client {
    public static void main(String[] args) {
        
        Pagamento pagamento = new Pagamento();
        //pagamento.pagar(100);

        // Pagando com novo pagamento
        NovoPagamento novoPagamento = new NovoPagamento(pagamento);
        novoPagamento.realizarPagamento(100);
    }
}
