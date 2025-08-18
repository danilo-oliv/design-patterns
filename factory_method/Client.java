public class Client {
    public static void main(String[] args) {
        // Exemplo usando Pix
        PaymentMethodFactory pixFactory = new PixFactory();
        IPaymentMethod pix = pixFactory.criaObjPagamento();
        pix.pagar(100.0);

        // Exemplo usando Boleto
        PaymentMethodFactory boletoFactory = new BoletoFactory();
        IPaymentMethod boleto = boletoFactory.criaObjPagamento();
        boleto.pagar(200.0);

        // Exemplo usando Paypal
        PaymentMethodFactory paypalFactory = new PaypalFactory();
        IPaymentMethod paypal = paypalFactory.criaObjPagamento();
        paypal.pagar(300.0);
    }
}