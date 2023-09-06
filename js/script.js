function signUp() {
    var fname = document.getElementById('fname');
    var lname = document.getElementById('lname');
    var email = document.getElementById('email');
    var password = document.getElementById('password');


    var f = new FormData();
    f.append('fname',fname.value);
    f.append('lname',lname.value);
    f.append('email',email.value);
    f.append('password',password.value)


    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText; //success
            if(t == 'success'){
                window.location = 'signIn.php';
            }else{
                alert(t);
            }
        }
    }


    r.open('POST','signUpProcess.php',true);
    r.send(f);

}


function signIn(){
    
    var email = document.getElementById('email');
    var password = document.getElementById('password');

    var f = new FormData();
    f.append('email',email.value);
    f.append('pass',password.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4 && r.status == 200){
            var batman = r.responseText; //success
            if(batman == 'success'){
                window.location = 'dashboard.php';
            }else{
                alert(batman);
            }

        }
    }

    r.open('POST','signInProcess.php',true);
    r.send(f);

}



function addProduct(){
    var category = document.getElementById("category");
    var brand = document.getElementById("brand");
    var model = document.getElementById("model");
    var title = document.getElementById("title");
    var condition = 0;
    if(document.getElementById("b").checked){
        condition = 1;
    }else if(document.getElementById("u").checked){
        condition = 2;
    }
    var clr = document.getElementById("clr");
    var qty = document.getElementById("qty");
    var cost = document.getElementById("cost");
    var dwc = document.getElementById("dwc");
    var doc = document.getElementById("doc");
    var desc = document.getElementById("desc");
    var image = document.getElementById("imageuploader");


    var f = new FormData();
    f.append("ca",category.value);
    f.append("b",brand.value);
    f.append("m",model.value);
    f.append("t",title.value);
    f.append("con",condition);
    f.append("col",clr.value);
    f.append("qty",qty.value);
    f.append("cost",cost.value);
    f.append("dwc",dwc.value);
    f.append("doc",doc.value);
    f.append("desc",desc.value);
    
    var file_count = image.files.length;
    for(var x = 0;x < file_count;x++){
        f.append("img" + x,image.files[x]);
    }

    var r = new XMLHttpRequest();

    r.onreadystatechange = function (){
        if(r.status == 200 && r.readyState == 4){
            var t = r.responseText;

            if(t == "successsuccesssuccess"){
                window.location.reload();
            }else{
                alert (t);
            }
            
        }
    }

    r.open("POST","donateUseProcess.php",true);
    r.send(f);

    
}