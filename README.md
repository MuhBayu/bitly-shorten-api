# bitly-shorten-api
Bitly Shorten API

# USAGE

<ul>
<li>$bitly->setAuthID('YOUR_ACCOUNT_ID') => Fill in with your Account ID </li>
<li>$bitly->setApiKey('YOUR_API_KEY') => Fill in with your API KEY </li>
</ul>

$bitly->setSLL() <br/>
Option: 
<ul>
<li>(TRUE) => enable it if your site using HTTPS</li>
<li>(FALSE) => disable it if your site using HTTP</li>
</ul>
<br/>

$bitly->setDomain() <br/>
Option Short Domain: 
<ul>
<li>(1) => bit.ly</li>
<li>(2) => j.mp</li>
<li>(3) => bitly.com</li>
</ul>
<br/>

$bitly->setFormat() <br/>
Option Format: 
<ul>
<li>json</li>
<li>xml</li>
<li>txt</li>
</ul>
<br/><br/>

>> To get the ACCOUNT ID and the KEY API please create a bitly account (http://bitly.com/a/your_api_key)
