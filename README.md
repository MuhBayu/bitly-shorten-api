# bitly-shorten-api
Bitly Shorten API

# USAGE

<ul>
<li>$bitly->setAuthID('YOUR_ACCOUNT_ID') => Isi dengan ID Akun Anda </li>
<li>$bitly->setApiKey('YOUR_API_KEY') => Isi dengan API_KEY Anda </li>
</ul>

$bitly->setSLL() <br/>
Pilihan: 
<ul>
<li>(TRUE) => Jika website Anda yang menjalankan file ini ber-SSL (https)</li>
<li>(FALSE) => Jika website Anda yang menjalankan file ini tidak ber-SSL (http)</li>
</ul>
<br/>

$bitly->setDomain() <br/>
Pilihan Short Domain: 
<ul>
<li>(1) => bit.ly</li>
<li>(2) => j.mp</li>
<li>(3) => bitly.com</li>
</ul>
<br/>

$bitly->setFormat() <br/>
Pilihan Format: 
<ul>
<li>json</li>
<li>xml</li>
<li>txt</li>
</ul>
<br/><br/>

>> Untuk mendapatkan ID AKUN dan API KEY silahkan anda membuat akun bitly (http://bitly.com/a/your_api_key)
