document.addEventListener("DOMContentLoaded", () => {
    
    let validData = false;

    fetch("/api/clients",
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
                let table = document.querySelector("#customerTable");

                table.innerHTML = "";
                value.data.forEach(element => {
                    
                    table.innerHTML += `
                    <tr>

                        <td class="td_style_list"><a href="client_info/${element.id}" class="link-list-info">${element.name}</a></td>
                        <td class="td_style_list">${element.phone1}</td>
                        <td class="td_style_list">${element.email1}</td>

                    </tr>
                    `

                });
            }
                
        })




        


})