# Deliveryreport

Register your callback URL with us and we will push the parameters appended to the URL. The URL structure is shown below.

https://www.example.com//Dlr_urlDemo.php

The parameters appended to the URL are static and are described below.

Method : POST

Field	Type	Description
status	string	Message status from Mr sms gateway
messageId	string	Message id Captured from Api response
Note: Message status may update several times , make sure to remain with messageid
