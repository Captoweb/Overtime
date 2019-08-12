function validate() {

        var userName = document.getElementById("userName");
        var userTel = document.getElementById("userTel");
        var userTextarea = document.getElementById("userTextarea");


          if(!userName.value){
              userName.style.border = "2px solid red";
              return false;
          }

          if(!userTel.value){
              userTel.style.border = "2px solid red";
              return false;
          }

           if(!userTextarea.value){
              userTextarea.style.border = "2px solid red";
              return false;
          }


        return true;
    }

           
            