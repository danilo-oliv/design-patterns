public class PixFactory extends PaymentMethodFactory {

    @Override
    public IPaymentMethod criaObjPagamento() {
        return new Pix();
    }
    
}
