package Petvirtual;

public class Main {
    public static void main(String[] args) {
        PetVirtual p = new PetVirtual(2,2,2);
        PetVirtual p2 = p;
        PetVirtual p3 = new PetVirtual(2,2,2);

        System.out.println(p);
        System.out.println(p2);
        System.out.println(p3);
        System.out.println(p==p2);
        System.out.println(p.equals(p3));

        p2.play();
        p2.play();
        p.play();

        p.show();
        p2.show();
    }
}
