# This is very simple demo how API work!

1- Register and get API key in https://izinumber.com/member/userapi
2- Edit config.php with your API Key
3- Built awsome project with Send SMS, Receive SMS and Voice.


Some of example

#########Check Balance
URL: http://userapi.izinumber.com/balance/APIKEY


######### List all your Numbers
URL: http://userapi.izinumber.com/mynumbers/APIKEY


######### Check Number
URL: http://userapi.izinumber.com/mynumbers/APIKEY/check/xxxxxxxx 
With: xxxxxxxx is the number you want to get sms and voice, number only. 

Example: 
http://userapi.izinumber.com/mynumbers/APIKEY/check/PHONENUMBER


######### Send SMS
URL: http://userapi.izinumber.com/sms/APIKEY/to/xxxxxxxxxxxx/msg/yyyyyyyyyyyyyy 
With: xxxxxxxx is the number you want send SMS to, number only. 
yyyyyyyyyyyy is the message. 

Example: 
http://userapi.izinumber.com/sms/APIKEY/to/PHONENUMBER/msg/Hello, This is test sms message