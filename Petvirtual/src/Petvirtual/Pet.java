class PetVirtual{

    private int energyMax, hungryMax, cleanMax;
    private int energy, hungry, clean, diamonds, age;
    private boolean alive;

    public PetVirtual(int energyMax, int hungryMax, int cleanMax ){
        this.energyMax=energyMax;
        this.hungryMax=hungryMax;
        this.cleanMax=cleanMax;

        this.energy=energyMax;
        this.clean=cleanMax;
        this.alive = true;
    }

    private boolean isAlive() {
        return alive;
    }

    public int getHungry() {
        return hungry;
    }

    public int getHungryMax() {
        return hungryMax;
    }

    public int getEnergy() {
        return energy;
    }

    public int getEnergyMax() {
        return energyMax;
    }

    public int getClean() {
        return clean;
    }

    public int getCleanMax() {
        return cleanMax;
    }

    public int getAge() {
        return age;
    }

    public int getDiamonds() {
        return diamonds;
    }

    private void setEnergy(int value) {
        if(value <= 0) {
            energy = 0;
        } else {
            energy = value;
        }
    }

    private void setHungry(int value) {
        if(value >= hungryMax) {
            hungry = hungryMax;
        } else {
            hungry = value;
        }
    }

    private void setClean(int value) {
        if(value <= 0) {
            clean = 0;
        } else {
            clean = value;
        }
    }

    public void play(){
        if(alive){
            diamonds += 1;
            setHungry(getHungry()+1);
            setClean(getClean()-1);
            setEnergy(getEnergy()-1);

        }
    }
}
