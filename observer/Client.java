public class Client {
    public static void main(String[] args) {
        VirtualMachine vm = new VirtualMachine();

        Admin admin = new Admin();
        Users users = new Users();

        vm.addObservers(users);
        vm.addObservers(admin);

        vm.setMemoryUsage(65);
        
    }
}
