function getParam() {
    return location.href.substring(location.href.lastIndexOf('/') + 1);
}

document.addEventListener("DOMContentLoaded", () => {
    document.querySelector("#client_application").addEventListener("click", () => {
        location.href = "/client_application/"+getParam();
    })

    document.querySelector("#client_notes").addEventListener("click", () => {
        location.href = "/client_notes/"+getParam();
    })

    document.querySelector("#client_history").addEventListener("click", () => {
        location.href = "/client_history/"+getParam();
    })

    document.querySelector("#client_info").addEventListener("click", () => {
        location.href = "/client_info/"+getParam();
    })
})