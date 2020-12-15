# supportext_api
User integration for supportext

<h2>Summary</h2>
<P>This APi code allows you to automatically create and/or login a users in your system to your supportext ticket system.</P>

Get your api keys at 
https://supportext.com/home/company

<h2>Laravel Integration</h2>
Add your API keys to the .env file 

<pre>
SPTX_API_CLIENT=XXXXXXXXX
SPTX_API_SECRET=XXXXXXXXXXXXXXXXXXXXX
</pre>

<h2>CNAME URL</h2>
<P>Create a subdomain for your support website. Add a CNAME to your DNS record to create your branded support portal.</P>
<P>If your website is FRANKSCOMPANY.COM you would create a new DNS CNAME record:<BR>
  <EM> helpdesk => sppxt.com </EM> <BR>
  This will create your branded support portal at <B>helpdesk.frankscomapny.com</B>
