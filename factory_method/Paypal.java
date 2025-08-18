public class Paypal implements IPaymentMethod {

    @Override
    public int pagar(double valor) {
        System.out.println("Pagando com Paypal...");
        return 1;
    }


    
}
