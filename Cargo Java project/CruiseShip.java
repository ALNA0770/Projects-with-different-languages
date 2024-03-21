
public class CruiseShip extends Ship {
//    Alijon Nazarov
    int passengers;

    public CruiseShip(String ship, int year,float speed, int passengers) {

        super(ship, year,speed);
        this.passengers = passengers;
    }

    public int getPassengers() {

        return passengers;

    }

    public String toString() {

        return "\nThe ships name is : " + getNameShip() +
                "\nThe capacity is : " +
                getPassengers();

    }
}
