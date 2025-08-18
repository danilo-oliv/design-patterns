public abstract class PaymentMethodFactory {

     public abstract IPaymentMethod criaObjPagamento();

     public int pagar(double valor){
        IPaymentMethod ipm = criaObjPagamento();
        return ipm.pagar(valor);
     }
}