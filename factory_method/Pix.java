public class Pix implements IPaymentMethod {

    @Override
    public int pagar(double valor) {
        System.out.println("Pagando com Pix...");
        return 1;
    }


    
}
