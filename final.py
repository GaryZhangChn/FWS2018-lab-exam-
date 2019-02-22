from gpiozero import LED
from time import sleep
import sys

myled = LED(17)
if sys.argv[1]=="on":
 myled.on()
 print ("LED ON")
 
elif sys.argv[1]=="off":
 myled.off()
 print ("LED OFF")
 
while True:
    sleep(1)
