function Validate() {
    if(document.getElementById("login").value && document.getElementById('password').value){
        var username = document.getElementById("login").value
        var response = fetch("../commands/cmdUsername.php?username="+username, { 
            method: 'GET',
            headers : { 
                'Content-Type': 'application/json',
                'Accept': 'application/json'
               }
        }).then((body) => {return body.json()}).then((data) => PasswordValidation(data));
        return false;
    }
}

function PasswordValidation(salt){
    if(salt){
        var password = document.getElementById('password').value;

        var hash = SHA256(password + salt);

        // location.href='./commands/cmdPassword.php?hash=' + hash;
        fetch("../commands/cmdPassword.php?hash="+hash, { 
            method: 'GET',
        }).then(() => location.reload());
    }
    else
        PasswordValidation();
}

function CreateUser(){
    if(document.getElementById("username").value && document.getElementById('password').value){
    var password =  document.getElementById('password').value;
    var username =  document.getElementById('username').value;

    var salt = SHA256(Math.round((new Date()).getTime() / 1000).toString());

    var hash = SHA256(password + salt);

    fetch("../commands/cmdCreate.php?hash="+hash+"&username="+username+"&salt="+salt, { 
            method: 'GET',
        }).then(() => location.reload()); 
    }
}

