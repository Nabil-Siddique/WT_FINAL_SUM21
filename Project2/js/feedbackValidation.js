    
    function get(id){
            return document.getElementById(id);
        }
    function validEmail(email)
    {
       var pos_at=email.indexOf("@");
       var pos_dot=email.indexOf(".",pos_at+1);
       if(pos_at<pos_dot)
       {
        return true;
       }
        return false;
    }
    
    
    
      function validateFeedback()
    {
        refresh();
        
        var hasError=false;
        
        if(get("fname").value=="")
        {
            get("err_fname").innerHTML= "*Firstname Required**";
            get("err_fname").style.color="red";
            hasError=true;
        }
        if(get("lname").value=="")
        {
            get("err_lname").innerHTML= "*Lastname Required**";
            get("err_lname").style.color="red";
            hasError=true;
        }
         
         if(get("email").value=="")
        {
            get("err_email").innerHTML= "**Email Required**";
            get("err_email").style.color="red";
            hasError=true;
        }
        else if(!validEmail(email.value))
        {
            get("err_email").innerHTML= "**Invalid Email Address**";
            get("err_email").style.color="red";
            hasError=true;
        }
        if(get("feedback").value=="")
        {
            get("err_feedback").innerHTML= "**Feedback Required**";
            get("err_feedback").style.color="red";
            hasError=true;
        }
        
        return !hasError;
    }
    
    
    function refresh()
    {
        get("err_fname").innerHTML= "";
        get("err_lname").innerHTML= "";
        get("err_email").innerHTML= "";
        get("err_feedback").innerHTML= "";
    }