
# Money Con -SOAP API

this SOAP-API was created to convert between different types of currency. basically converts between 50+ different currency types. JSON files are used across the entire PHP-based project to store data.


### Installation

#### Guidelines Setting Up the Server
- Clone the repository or download it directly
- add a new folder with the name "Server" to the localhost folder (www/htdocs)
- Put the source files in the "Server" folder that you set up on your localhost.
- enter the upcoming URL in your browser: http://localhost/Server/index.php?wsdl
- A browser will show the wsdl file if you strictly adhere to the instructions.

#### Setup Client Instructions:

- The client folder contains the client source files.
- type http://localhost/Server/Client/index.php into your browser.
- If you strictly adhere to the instructions, you will be transferred to the client application.
### Demo

These Are the Requests and Responses from PHP-SOAP SPI

- This is how a SOAP request looks.

```bash
<soapenv:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ind="http://localhost/Server/index.php">
   <soapenv:Header/>
   <soapenv:Body>
      <ind:convert soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
         <data_array xsi:type="ind:Bookcatalog.Transfer">
            <!--You may enter the following 3 items in any order-->
            <source_currency xsi:type="xsd:string">LKR</source_currency>
            <target_currency xsi:type="xsd:string">USD</target_currency>
            <amount xsi:type="xsd:int">1000</amount>
         </data_array>
      </ind:convert>
   </soapenv:Body>
</soapenv:Envelope>

```

- This is how the server responded to the aforementioned request

```bash
<SOAP-ENV:Envelope SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://localhost/Server/index.php" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/">
   <SOAP-ENV:Body>
      <ns1:convertResponse>
         <return xsi:type="xsd:string">5.3811211329111</return>
      </ns1:convertResponse>
   </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```