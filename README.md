# Dump_Temperature_Battery_Level_SmartThings
Smartapp to connect a mySQL database and dump sensors battery and temperature level every 3h
<p>
The collection is based on a SmartApp to send a httpGet to a php script hosted on webserver.
<p>This php insert the temperature and battery level currently stored in the instance of the DTH of a temperature capable sensor.
<p>The .sql file provide the database structure: Id, timestamp, sensor name, temperature, battery level.
<p>The smartapp has to be configured with the path to the php script including the port number if any.
<p>The php script has to be updated with the credential to the MySQL database and name (if a different name is used. I used "test" here).
<p>  
The php script is running on a NAS in my case, but it could be hosted by a raspberry pi as long as the storage capability is enough.
<p>
General architecture:
<img src=https://github.com/philippeportesppo/Dump_Temperature_Battery_Level_SmartThings/blob/master/DumpMySQLSensors.png >
