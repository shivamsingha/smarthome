#include<stdio.h>
#include<unistd.h>
#include<bcm2835.h>
#define p11 17
#define p16 23

int main() {
	if(!bcm2835_init())
		return 1;
		
	
	bcm2835_gpio_fsel(p16, BCM2835_GPIO_FSEL_INPT);
	bcm2835_gpio_set_pud(p16, BCM2835_GPIO_PUD_DOWN);
	bcm2835_gpio_fsel(p11, BCM2835_GPIO_FSEL_OUTP);
	//printf("%d", bcm2835_gpio_lev(p16));
	while(1) {
		if(bcm2835_gpio_lev(p16)==0)
			bcm2835_gpio_write(p11, LOW);
		else
			bcm2835_gpio_write(p11, HIGH);
		sleep(1);
	}

	bcm2835_close();
	
	return 0;
}
