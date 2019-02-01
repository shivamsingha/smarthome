#include<stdio.h>
#include "bcm2835.h"
#define pin RPI_GPIO_P1_11

int main() {
	if(!bcm2835_init())
		return 1;
		
	bcm2835_gpio_fsel(pin, BCM2835_GPIO_FSEL_OUTP);
	bcm2835_gpio_write(pin, LOW);
	bcm2835_close();
	return 0;
}
