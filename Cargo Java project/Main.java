public class Main {
    public static void main(String[] args) {
//    Alijon Nazarov


                Ship[] num = new Ship[3];


                num[0] = new Ship("Livestock-1992", 1992,13);

                num[1] = new CruiseShip("Go 1251", 1982, 900,12);

                num[2] = new CargoShip("Zamboza 91", 2000, 400,15);


                for (int i = 0; i < num.length; i++)

                    System.out.println(num[i].toString());

                System.out.println("\nDone by 'Alijon Nazarov'_60299 group N4." +
                        "\nThank you for teaching us, sir. Wish you all the best! :)");
            }
        }