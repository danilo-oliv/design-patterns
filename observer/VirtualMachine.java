import java.util.ArrayList;


/**
 * Subject
 */
public class VirtualMachine {
    private ArrayList<IObserver> observers = new ArrayList<>();

    private double memoryUsage;

    public void addObservers(IObserver observer){
        observers.add(observer);
    }

    public void removeObservers(IObserver observer){
        observers.remove(observer);
    }

    public void notifyObservers(){
        for(IObserver observer : observers){
            observer.update(this.memoryUsage);
        }
    }

    public void setMemoryUsage(double memoryUsage){
        this.memoryUsage = memoryUsage;
        this.notifyObservers();
    }


}
