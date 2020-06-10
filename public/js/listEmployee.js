document.addEventListener("DOMContentLoaded", () => {
    
    let validData = false;

    fetch("/api/users",
        {
            method: "get",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
        })
        .then(res => { console.log(res);
            if(res.ok) {
                $( "#loading" ).fadeOut( "slow", () => {
                    $( "#main" ).fadeIn( "slow", function() {
                    });
                });

                validData = true;
                return res.json();               
            }
                
        }).then(res => {
            if(validData) {
                value = JSON.parse(JSON.stringify(res));
                let table = document.querySelector("#userTable");

                table.innerHTML = "";

                value.data.forEach(element => {
                    if(element.admin)
                        element.admin = "Tak";
                    else
                        element.admin = "Nie";

                    table.innerHTML += `
                    <tr>

                        <td class="td_style_list">${element.name}</td>
                        <td class="td_style_list">${element.email}</td>
                        <td class="td_style_list">${element.admin}</td>
                        <td class="td_style_list">

                             <button type="button" class="btn btn-danger list-button">Usuń</button>
                            <button type="button" class="btn btn-outline-secondary list-button"
                            onclick="window.location.href='/edit_acc/${element.id}'">Edytuj</button>

                                    </td>

                    </tr>
                    `

                });
            }
                
        })




        


})