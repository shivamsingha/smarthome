#include<stdio.h>
#include<bcm2835.h>
#define p11 17
#define p13 27
#define p15 22

int main(int argc, char **argv) {
	if(!bcm2835_init())
		return 1;
		
	bcm2835_gpio_fsel(p11, BCM2835_GPIO_FSEL_OUTP);
	bcm2835_gpio_fsel(p13, BCM2835_GPIO_FSEL_OUTP);
	bcm2835_gpio_fsel(p15, BCM2835_GPIO_FSEL_OUTP);
	
	bcm2835_gpio_write(p15, LOW);
	printf("Pin15 LOW (relay 3 ON)");
	bcm2835_close();
	
	return 0;
}
