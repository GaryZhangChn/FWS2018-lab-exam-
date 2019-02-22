from gpiozero import PWMLED
from time import sleep

led= PWMLED(18)

while True:
    led.value = 0
    led.value = 0.5
    led.value = 1

