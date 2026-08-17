
        var teacher_id = document.getElementById('teacher_id');
        var password = document.getElementById('password');
        var submit = document.getElementById('submit');

        function login_validate(){
          if(teacher_id.value == "" && teacher_id.value.length < 2 && password.value == ""){
            alert("Nhi Nhi!");
          }
           else if(teacher_id.value == "" || password.value == ""){
            alert("Aby tujhe samajh nhi ati kya!");
          }else{
            alert("Wow!");
          }
        };


        teacher_id.addEventListener('input', function() {
            if (teacher_id.value != "" && teacher_id.value.length >= 2) {
                teacher_id.style.border = '1px solid green';
            } 
            
           else {
                teacher_id.style.border = '1px solid red';
            } 
            
        });
          password.addEventListener('input', function() {
            if (password.value != "" && password.value.length >= 8) {
                password.style.border = '1px solid green';
            } 
            else {
                password.style.border = '1px solid red';
            } 
            
        });
