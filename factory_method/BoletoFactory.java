public class BoletoFactory extends PaymentMethodFactory {

    @Override
    public IPaymentMethod criaObjPagamento() {
        return new Boleto();
    }
    
}
