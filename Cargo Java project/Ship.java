
public class Ship {
//    Alijon Nazarov
    String Ships;

    int year;
    float speed;
    public Ship(String ship, int year,float speed)

    {
        this.Ships = ship;
        this.year = year;
        this.speed = speed;
    }


    public String getNameShip()

    {
        return Ships;
    }

    public int getYear()

    {
        return year;
    }

    public float getSpeed()

    {
        return speed;
    }
    public String toString()

    {
        return "The Ships Name : " + getNameShip() +
                "\nIt was built in "+ getYear()+" year"+
                "\nThe speed of the ship in knots is:  "+ getSpeed() +" knots";
    }

}


