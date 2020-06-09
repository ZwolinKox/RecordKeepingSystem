document.addEventListener("DOMContentLoaded", () => {
    
    let validData = false;

    fetch("/api/orders",
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
                let table = document.querySelector("#applicationTable");

                table.innerHTML = "";
                value.data.forEach(element => {
                    
                    table.innerHTML += `

        <tr>

            <td class="td_style_list"><a href="order_info" class="link-list-info">${element.name}</a></td>
            <td class="td_style_list">${element.client}</td>
            <td class="td_style_list">${element.model}</td>
            <td class="td_style_list">

                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    </div>
                </div>

            </td>
            <td class="td_style_list"><span class="badge badge-warning">Warning</span></td>

        </tr>
    `          

            });
         }
                
     })

})