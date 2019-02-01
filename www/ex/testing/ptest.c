#include<stdio.h>
#include<bcm2835.h>
#define p11 17
#define p13 27
#define p15 22

int main() {
	if(!bcm2835_init())
		return 1;
		
	bcm2835_gpio_fsel(p11, BCM2835_GPIO_FSEL_OUTP);
	bcm2835_gpio_fsel(p13, BCM2835_GPIO_FSEL_OUTP);
	bcm2835_gpio_fsel(p15, BCM2835_GPIO_FSEL_OUTP);
	while(1) {
		int x=0, y=0, z=0;
		scanf("%d%d%d", &x, &y, &z);
		printf("\n\tx=%d  y=%d  z=%d", x, y, z);
		if(x!=0)
			bcm2835_gpio_write(p11, LOW);
		else
			bcm2835_gpio_write(p11, HIGH);
		if(y!=0)
			bcm2835_gpio_write(p13, LOW);
		else
			bcm2835_gpio_write(p13, HIGH);
		if(z!=0)
			bcm2835_gpio_write(p15, LOW);
		else
			bcm2835_gpio_write(p15, HIGH);
	}
	
	bcm2835_close();
	
	return 0;
}
