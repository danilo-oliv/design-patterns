public class Boleto implements IPaymentMethod {

    @Override
    public int pagar(double valor) {
        System.out.println("Pagando com Boleto...");
        return 1;
    }


    
}
