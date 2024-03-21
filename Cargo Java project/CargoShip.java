public class CargoShip extends Ship {
//Alijon Nazarov
    int capacity;

    public CargoShip(String name, int year,float speed, int capacity) {
        super(name, year, speed);

        this.capacity = capacity;

    }

    public int getCapacity() {

        return capacity;
    }

    public String toString() {

        return "\nThe ships name is: " + getNameShip() +
                "\nThe ships capacity is: " + getCapacity();
    }
}
