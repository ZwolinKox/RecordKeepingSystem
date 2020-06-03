

document.addEventListener("DOMContentLoaded", () => {
    const logouts = document.querySelectorAll(".logout");


    logouts.forEach(element => {
        element.addEventListener('click', () => {
            fetch("/api/logout",
            {
                method: "get",
                headers:
                {
                    "Content-Type": "application/json",
                    "Accept" : "application/json",
                    "Authorization" : "Bearer "+Cookies.get("token")
                },
            }).then(res => {
                location.href = "login";
            })
        
        })
    });
})