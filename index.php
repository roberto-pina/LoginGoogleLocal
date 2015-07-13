<!DOCTYPE html>

<html>
    <head>
        <!--<meta charset="UTF-8">-->
        <meta name="google-signin-client_id" content="328365712357-vrrv7hpojcb6mtfji2goubuqc4rooma8.apps.googleusercontent.com">
        <title>Mi Pagina Principal</title>
    </head>
    <body>
    <center>

        <h1>Bienvenido!!</h1><br>
        <h3>Por favor logeate</h3><br>
        <div id="my-signin2"></div><br>
        <a href="#" onclick="signOut();">Sign out</a>

        <script>

            function onSuccess(googleUser) {
                //Funcion para obtener los datos del usuario
                /*console.log('Logged in as: ' + googleUser.getBasicProfile().getName());*/
                console.log('ID: ' + googleUser.getBasicProfile().getId());
		console.log('Name: ' + googleUser.getBasicProfile().getName());
		console.log('Image URL: ' + googleUser.getBasicProfile().getImageUrl());
		console.log('Email: ' + googleUser.getBasicProfile().getEmail());
                //document.getElementById('my-signout').innerHTML = <a href="#" onclick="signOut();">Sign out</a>;
            }
            function onFailure(error) {
                console.log(error);
            }
            function renderButton() {
                gapi.signin2.render('my-signin2', {
                    'scope': 'https://www.googleapis.com/auth/plus.login',
                    'width': 230,
                    'height': 50,
                    'longtitle': true,
                    'theme': 'dark',
                    'onsuccess': onSuccess,
                    'onfailure': onFailure
                });
            }
            function signOut() {
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.signOut().then(function() {
                    console.log('User signed out.');
                });
            }

        </script>
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

    </center>
    </body>
</html>
