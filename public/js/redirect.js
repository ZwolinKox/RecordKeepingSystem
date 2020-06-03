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
            }
            else if(location.pathname == "/login")
                location.href = "/";        
        })
    
    } else if(location.pathname != "/login") {
        location.href = "login";
    }
