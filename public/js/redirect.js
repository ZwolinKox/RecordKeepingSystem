    const fadeSpeed = 500;
    
    if(Cookies.get("token") != null) {
        fetch("/api/user",
        {
            method: "get",
            headers:
            {
                "Content-Type": "application/json",
                "Accept" : "application/json",
                "Authorization" : "Bearer "+Cookies.get("token")
            },
            
        }).then(res => {
            if(!res.ok) {
                if(location.pathname != "/login")
                    location.href = "login";
                else {
                    $( "#loadingContainer" ).fadeOut( fadeSpeed , () => {
                        $( "#pageContent" ).fadeIn( fadeSpeed , function() {
                        });
                    }); 
                }
            }
            else if(location.pathname == "/login")
                location.href = "/";
            else {
                $( "#loadingContainer" ).fadeOut( fadeSpeed , () => {
                    $( "#pageContent" ).fadeIn( fadeSpeed , function() {
                    });
                });        
            }   
        })

       
    } else if(location.pathname != "/login") {
        location.href = "login";
    }