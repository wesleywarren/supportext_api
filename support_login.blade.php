 <?php
 // https://github.com/wesleywarren/supportext_api
 // v0.1 beta
 // email address of the user logged into your system using Laravel
    $SPTX_EMAIL = Auth::User()->email; 
 // your https support url (cname => sppxt.com )
    $SPTX_URL = 'https://help.artquarter.com'; 
 // your api_client_id  
    $SPTX_API_CLIENT = env('SPTX_API_CLIENT'); 
  // current PST time in seconds  (eg 1608003023 )tokens expire in 10 minutes
    $SPTX_CREATED = time();
  // used to create the hash, do NOT include in FORM or API call
    $SPTX_API_SECRET = env('SPTX_API_SECRET'); 
    
    $SPTX_REQUEST_TOKEN = hash('sha256', $SPTX_API_SECRET.$SPTX_CREATED.$SPTX_EMAIL );

    ?>
    
    
 <form target="_new" method="post" action="{{$SPTX_URL}}/api/{{$SPTX_API_CLIENT}}/{{$SPTX_CREATED}}/{{$SPTX_REQUEST_TOKEN}}">
   <input type="hidden" name="user_email" value="{{$SPTX_EMAIL}}">
   <input type="hidden" name="user_name" value="{{Auth::User()->name}}">    
   <button class="btn btn-primary" name="login" value="create">Support</button>
 </form>


