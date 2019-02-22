import RPi.GPIO as GPIO
from time import sleep
import sys
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(18,GPIO.OUT)

if sys.argv[1]=="on":
	print ("LED on")
	GPIO.output(18,GPIO.HIGH)
	
 
elif sys.argv[1]=="off":
	print ("LED off")
	GPIO.output(18,GPIO.LOW)
