# supportext_api
User integration for supportext

<h2>About Supportext</h2>
<P>
Supportext is a white label ticket management system. It allows you to create a white label support portal where you can manage customer requests.
</P>

<h2>Summary</h2>
<P>The Supportext API allows you to <B>automatically create and/or login your existing users</B>.</P>

Get your api keys at 
https://supportext.com/home/company

<HR>
<h2>Laravel Integration</h2>
Add your API keys to the .env file 

<pre>
SPTX_API_CLIENT=XXXXXXXXX
SPTX_API_SECRET=XXXXXXXXXXXXXXXXXXXXX
</pre>

<HR>
<h2>CNAME URL</h2>
<P>Create a subdomain for your support website. Add a CNAME to your DNS record to create your branded support portal.</P>
<P>If your website is FRANKSCOMPANY.COM you would create a new DNS CNAME record:<BR>
  <EM> helpdesk => sppxt.com </EM> <BR>
  This will create your branded support portal at <B>helpdesk.frankscomapny.com</B>
  <P>Help in creating a CNAME</P>
 
 <ul>
  <li> https://www.godaddy.com/help/add-a-cname-record-19236</li>
  <li>https://www.name.com/support/articles/115004895548-Adding-a-CNAME-Record</li>
 </ul>
