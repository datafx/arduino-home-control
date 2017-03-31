#! /usr/bin/env python

import serial  #Call pyserial
import smtplib
from email.MIMEText import MIMEText

ser = serial.Serial('/dev/ttyACM0', 9600)  #Change /dev/ttyACM0 to your com port 

GMAIL_LOGIN = '*****@gmail.com'
GMAIL_PASSWORD = '*****'
SEND_TO = '*****@gmail.com' 
 
def send_email(subject, message, from_addr=GMAIL_LOGIN, to_addr=SEND_TO):
    msg = MIMEText(message)
    msg['Subject'] = subject
    msg['From'] = from_addr
    msg['To'] = to_addr
 
    server = smtplib.SMTP('smtp.gmail.com',587) #port 465 or 587
    server.ehlo()
    server.starttls()
    server.ehlo()
    server.login(GMAIL_LOGIN,GMAIL_PASSWORD)
    server.sendmail(from_addr, to_addr, msg.as_string())
    server.close()


while 1: #loop forever
   result = ser.readline()
   if result.strip() == "1":
    status=open('garage.txt', 'w')
    status.write("Garage door is open")
    send_email('AACS', 'The garage door is open')
    status.close()
#    print("open")

   elif result.strip() == "0":
    status=open('garage.txt', 'w')
    status.write("Garage door is closed")
    status.close()
#    print("closed")

   elif result.strip() == "2":
    status=open('security.txt', 'w')
    status.write("Armed")
    status.close()
#    print("on")

   elif result.strip() == "3":
    status=open('security.txt', 'w')
    status.write("Disarmed")
    status.close()
#    print("off")

