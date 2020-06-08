
document.addEventListener('DOMContentLoaded', () => {
    fetch("/api/user",
        {
            method: "post",
            headers:
            {
                "Content-Type": "application/json",
                "Accept" : "application/json",
                "Authorization" : "Bearer "+Cookies.get("token")
            },
        }).then(res => res.json())
        .then(res => {
            console.log(res);
        })
})