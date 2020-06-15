function getParam() {
    return location.href.substring(location.href.lastIndexOf('/') + 1);
}

document.addEventListener("DOMContentLoaded", () => {

    
    document.querySelectorAll(".client_application").forEach(element => {
        element.addEventListener("click", () => {
            location.href = "/client_application/"+getParam();
        })
    });

    document.querySelectorAll(".client_notes").forEach(element => {
        element.addEventListener("click", () => {
            location.href = "/client_notes/"+getParam();
        })
    });

    document.querySelectorAll(".client_history").forEach(element => {
        element.addEventListener("click", () => {
            location.href = "/client_history/"+getParam();
        })
    });

    document.querySelectorAll(".client_info").forEach(element => {
        element.addEventListener("click", () => {
            location.href = "/client_info/"+getParam();
        })
    });
    
})