public class PaypalFactory extends PaymentMethodFactory {

    @Override
    public IPaymentMethod criaObjPagamento() {
        return new Paypal();
    }
    
}
