#include<stdio.h>
#include<unistd.h>
#include<bcm2835.h>
#define p16 23

int main() {
	if(!bcm2835_init())
		return 1;
		
	bcm2835_gpio_fsel(p16, BCM2835_GPIO_FSEL_INPT);
	bcm2835_gpio_set_pud(p16, BCM2835_GPIO_PUD_DOWN);
	printf(bcm2835_gpio_lev(p16);

	bcm2835_close();
	
	return 0;
}
