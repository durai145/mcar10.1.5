<html>
<head> 
<script src="//connect.facebook.net/en_US/all.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script>
  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '105963086252194', // App ID
      channelUrl : 'http://localhost/mcar10.1.4/homeshare/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional init code here

  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>


<button class="btn btn-success" id="fb-auth">Login</button>

<script>
function updateButton(response) {
  Log.info('Updating Button', response);
  var button = document.getElementById('fb-auth');

  if (response.status === 'connected') {
    button.innerHTML = 'Logout';
    button.className = 'btn btn-danger';
    button.onclick = function() {
      FB.logout(function(response) {
        Log.info('FB.logout callback', response);
      });
    };
  } else {
    button.innerHTML = 'Login';
    button.className = 'btn btn-success';
    button.onclick = function() {
      FB.login(function(response) {
        Log.info('FB.login callback', response);
        if (response.status === 'connected') {
          Log.info('User is logged in');
        } else {
          Log.info('User is logged out');
        }
      });
    };
  }
}


FB.getLoginStatus(updateButton);
FB.Event.subscribe('auth.statusChange', updateButton);
</script>



<h1>Defaults</h1>
<fb:comments href="http://www.fbrell.com/"></fb:comments>

<script>
  FB.Event.subscribe('comments.add', function(resp) {
    Log.info('Comment was added', resp);
  });
</script>

</body>
</html>
