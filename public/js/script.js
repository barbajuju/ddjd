$("#submitForm").on("click", function(e){
    e.preventDefault();
    var nickname = $("#login").val();
    var password = $("#password").val();
    loadPrenom(nickname,password);
})


function loadPrenom(nickname, password){
    $.ajax(
        {
            type: "POST",
            url : "http://localhost/ddjd/public/login/api/v1/",
            data : {log:nickname,
                    pwd:password
            },
            headers : {
                accept : "application/json"
            },
            success : function( mydata ) {

                if(mydata.status = "ok"){
                    $("#loginForm").hide();
                    $("#nom").text(mydata.data.name);
                    $("#pseudo").text(mydata.data.nickname);
                    $("#mail").text(mydata.data.mail);
                    $('#divInfos').show();

                }
                else{
                    console.log("vomir du sang");
                }

            }
        }
    ).done(function(data){

    });
}


$("#newSubmitForm").on("click", function(e){
    e.preventDefault();
    var nickname = $("#nickname").val();
    var name = $("#name").val();
    var mail = $("#mail").val();
    var password = $("#password").val();
    sendUser(nickname,name,password,mail);

})

function sendUser(nickname, name, password, mail){


    var user = new Object();
    user.nickname = nickname;
    user.name=name;
    user.mail=mail;
    user.password=password;


    var userJSON = JSON.stringify(user);

    $.ajax(
        {
            type: "POST",
            url : "http://localhost/ddjd/public/newuser/api/v1/",
            data : {user:userJSON},
            headers : {
                accept : "application/json"
            },
            success : function( mydata ) {

                if(mydata.status = "ok"){
                    //location.replace('/ddjd/public');
                }
                else{
                    console.log("vomir du sang");
                }

            }
        }
    ).done(function(data){

    });

}

