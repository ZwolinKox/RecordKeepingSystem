document.addEventListener("DOMContentLoaded", () => {
    
   
    
    fetch('/api/orders/'+getParam(),
    {
        method: "get",
        headers:
        {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Bearer " + Cookies.get("token")
        },
    }).then(res => {
        if(!res.ok) {
            location.href = "/order_info";
        }

        return res.json();
    }).then(res => {
        
        document.querySelector("#order_number").innerHTML = res.id;
        document.querySelector("#order_custid").innerHTML = res.client_name;
        document.querySelector("#order_type").innerHTML = res.item_type_name;
        document.querySelector("#order_creator").innerHTML = res.created_by_name;
        document.querySelector("#order_empl").innerHTML = res.assigned_name;        
        document.querySelector("#order_rma").innerHTML = res.name;
        document.querySelector("#order_mnfctr").innerHTML = res.producer;
        document.querySelector("#order_model").innerHTML = res.model;
        document.querySelector("#order_nr").innerHTML = res.serial_number;
        document.querySelector("#order_wrrnt").innerHTML = "Brak";
        

        console.log(res.buy_date);

        if(res.buy_date != null) {
            document.querySelector("#order_buy_date").innerHTML ="Dodać";
            document.querySelector("#order_wrrnt").innerHTML = res.buy_date;
            document.querySelector("#order_wrrnt_number").innerHTML = res.warranty_number;
        }
        
       
        switch (res.delivery_method) {
            case 1:
                document.querySelector("#order_in").innerHTML = "Dostarczenie osobiste";
            break;
            case 2:
                document.querySelector("#order_in").innerHTML = "Wysyłka na adres serwisu";
            break;

            case 3:
                document.querySelector("#order_in").innerHTML = "Odbiór przez serwisanta z podanego adresu";
            break;
        }

        switch (res.pickup_method) {
            case 1:
                document.querySelector("#order_out").innerHTML = "Odbiór osobisty";
            break;
            case 2:
                document.querySelector("#order_out").innerHTML = "Wysyłka na adres klienta";
            break;

            case 3:
                document.querySelector("#order_out").innerHTML = "Odbiór przez serwisanta na wskazany adres";
            break;
        }


        document.querySelector("#order_price").innerHTML = res.estimated_price + "PLN";
        document.querySelector("#order_advance").innerHTML = res.advance_pay + "PLN";

        if(res.info != null)
            document.querySelector("#order_info").innerHTML = res.info;

        document.querySelector("#order_status").innerHTML = getStatusName(res.status);

        
        const beginDate = new Date(Date.parse(res.begin_date)).getTime();
        const endDate = new Date(Date.parse(res.end_date)).getTime();
        const now = new Date().getTime();

        let procent = ((endDate-now) / (endDate - beginDate)) * 100;
        let color = "success";
        
        if(procent > 100)
            procent = 100;

        if(endDate <= now)
            procent = 100;

            console.log(procent);

            if(procent >= 90)
                color = "danger";
            else if (procent >= 50)
                color = "warning";

        document.querySelector("#order_progres").innerHTML = `<div class="progress">
        <div class="progress-bar bg-${color}" role="progressbar" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100" style="width:${procent}%">
            ${Math.round(procent)}%
        </div>
        </div>`;
            
        document.querySelector("#order_date_begin").innerHTML = res.begin_date;

        if(now < endDate)
            document.querySelector("#order_date_end").innerHTML = Math.floor((now - endDate) / (1000 * 60 * 60 * 24));
        else 
            document.querySelector("#order_date_end").innerHTML = "0"

        document.querySelector("#order_days_begin").innerHTML = Math.floor((now - beginDate) / (1000 * 60 * 60 * 24));
        document.querySelector("#oinfo_problem").innerHTML = res.issue;

        files = res.filles;
        files.forEach(element => {
            document.querySelector("#fileList").innerHTML += `<a target="_blank" href="/api/orders/download/${element.id}"><li class="list-group-item">${element.name}</li></a>`;
        });

    })

    })