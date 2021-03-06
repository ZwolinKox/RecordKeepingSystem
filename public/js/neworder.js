// klient
document.querySelector("#submit").addEventListener("click", () => {
    fetch("/api/clients/light",
        {
            method: "get",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
        })
        .then(res => {

            if (res.ok) {
                return res.json();

            }
            else {
                document.querySelector("#error").innerHTML +=
                    `<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Uwaga!</strong> Problem z bazą danych.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>`;
            }
        })
        .then(res => {
            const clname = document.querySelector("#norder_client").value;
            //dane pobrane z bazy
            let obj = {};
            obj = JSON.parse(JSON.stringify(res));
            let table = document.querySelector("#sel");
            table.innerHTML = "";
            obj.forEach(element => {

                let siema = element.name;
                if (siema.toLowerCase().search(clname.toLowerCase()) != -1) {
                    table.innerHTML += `                   
                    <option value="${element.id}">${element.name}</option>`
                }
            });

        })
})


document.addEventListener("DOMContentLoaded", () =>{
    fetch("/api/itemtypes/light",
    {
        method: "get",
        headers:
        {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Bearer " + Cookies.get("token")
        },
    })
    .then(res => {

        if (res.ok) {
            return res.json();

        }
        else {
            document.querySelector("#error").innerHTML +=
                `<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Uwaga!</strong> Problem z bazą danych.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>`;
        }
    })
    .then(res => {

        //dane pobrane z bazy
        const obj = JSON.parse(JSON.stringify(res));
        let table = document.querySelector("#type");
        table.innerHTML = "";
        obj.forEach(element => {

            table.innerHTML += `                   
            <option value="${element.id}">${element.name}</option>`
            
        });
    });
}) 


//pracownik
document.querySelector("#employeesubmit").addEventListener("click", () => {
    fetch("/api/users/light",
        {
            method: "get",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
        })
        .then(res => {

            if (res.ok) {
                return res.json();

            }
            else {
                document.querySelector("#error").innerHTML +=
                    `<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Uwaga!</strong> Problem z bazą danych.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>`;
            }
        })
        .then(res => {
            const clname = document.querySelector("#norder_employee").value;
            //dane pobrane z bazy
            let obj = {};
            obj = JSON.parse(JSON.stringify(res));
            let table = document.querySelector("#employee");
            table.innerHTML = "";
            obj.forEach(element => {

                
                let siema = element.name;
                if (siema.toLowerCase().search(clname.toLowerCase()) != -1) {
                    table.innerHTML += `                   
                    <option value="${element.id}">${element.name}</option>`
                }
                

            });

        })
})



document.querySelector("#add_order").addEventListener("click", () => {
    let dlv;
    const dlv1 = document.querySelector("#norder_dlvr1").checked;
    const dlv2 = document.querySelector("#norder_dlvr2").checked;
    const dlv3 = document.querySelector("#norder_dlvr3").checked;
    if (dlv1 == 1) {
        dlv = 1;
    } else if (dlv2 == 1) {
        dlv = 2;
    } else {
        dlv = 3;
    }

    let pck;
    const pck1 = document.querySelector("#norder_pick1").checked;
    const pck2 = document.querySelector("#norder_pick2").checked;
    const pck3 = document.querySelector("#norder_pick3").checked;
    if (pck1 == 1) {
        pck = 1;
    } else if (pck2 == 1) {
        pck = 2;
    } else {
        pck = 3;
    }

    let typ;
    if (document.querySelector("#norder_eotype").checked) {
        typ = document.querySelector("#type").value;
    }
    else {
        typ = document.querySelector("#norder_notypeo").value;
    }


    let date="";
    let warranty="";
    if(document.querySelector("#norder_wrrnt").checked)
    {
        date=document.querySelector("#norder_stwrrnt").value;
        warranty=document.querySelector("#norder_sewrrnt").value;
    }


    const ob = {
        producer: document.querySelector("#norder_mnfctr").value,
        model: document.querySelector("#norder_model").value,
        assigned: document.querySelector("#employee").value,
        client: document.querySelector("#sel").value,
        item_type: typ,
        serial_number: document.querySelector("#norder_serial").value,
        buy_date: date,
        warranty_number: warranty,
        begin_date: document.querySelector("#norder_in").value,
        end_date: document.querySelector("#norder_out").value,
        info: document.querySelector("#norder_descom").value,
        issue: document.querySelector("#norder_desprob").value,
        delivery_method: dlv,
        pickup_method: pck,
        estimated_price: document.querySelector("#norder_cost").value,
        advance_pay: document.querySelector("#norder_poa").value
    }
    console.log(ob);
    fetch("/api/orders",
        {
            method: "put",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
            body: JSON.stringify(ob)
        })

        .then(res => {
            console.log(res.status);
            if (res.ok) {

                document.querySelector("#error").innerHTML +=
                    `<div class="alert alert-success alert-dismissible fade show" role="alert">
            Udało sie utworzyć zamówienie.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>`;
            $("#main").fadeOut("slow", () => {
            $("#successCreateOrder").fadeIn("slow", () => {
                })
            })
            }
            else {
                document.querySelector("#error").innerHTML +=
                    `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Uwaga!</strong> Nie udało sie utworzyć zamówienia.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>`;
            }
        })

})