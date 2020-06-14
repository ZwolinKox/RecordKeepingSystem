
function getStatusName(id) {
    switch (id) {
        case 1:
            return "Oczekuje na diagnoze"   
        case 2:
            return "Oczekuje na dostawe"   
        case 3:
            return "Wymaga potwierdzenia kosztów u klienta"   
        case 4:
            return "Potwierdzone"
        case 5:
            return "W trakcie naprawy"  
        case 6:
            return "Oczekuje na podzespoły"
        case 7:
            return "W trakcie testów"  
        case 8:
            return "Podsumowanie naprawy"  
        case 9:
            return "Nie zaakceptowane"  
        case 10:
            return "Anulowane"
        case 11:
            return "Naprawa nie jest możliwa"
        case 12:
            return "Do odbioru" 
        case 13:
            return "Przekazano do wysyłki"
        case 14:
            return "Odebrane"
        case 15:
            return "Zezłomowane"
        default:
            return "Nieznany";
    }
}

let patternValue = "";

function setPattern() {
    const pattern1 = document.querySelectorAll('.searchPattern')[0].value;
    const pattern2 = document.querySelectorAll('.searchPattern')[1].value;
    
    if(pattern1 != "")
        patternValue = pattern1;
    else
        patternValue = pattern2;
}

function pagination(page) {
    let validData = false;

    const ob = {
        name : patternValue,
        model: patternValue,
        client: patternValue 
    }

    fetch('/api/orders/search?page='+page,
        {
            method: "post",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
            body: JSON.stringify(ob)
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
            console.log(res);
            if(validData) {
                value = JSON.parse(JSON.stringify(res));
                let table = document.querySelector("#applicationTable");

                
                
                
                table.innerHTML = "";
                value.data.forEach(element => {
                    element.status = getStatusName(element.status);

                    const beginDate = new Date(Date.parse(element.begin_date)).getTime();
                    const endDate = new Date(Date.parse(element.end_date)).getTime();
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
                    

                        table.innerHTML += `
                        <tr>
                
                            <td class="td_style_list"><a href="/order_info/${element.id}" class="link-list-info">${element.name}</a></td>
                            <td class="td_style_list">${element.client}</td>
                            <td class="td_style_list">${element.model}</td>
                            <td class="td_style_list">
                
                                <div class="progress">
                                    <div class="progress-bar bg-${color}" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width:${procent}%">
                                        ${Math.round(procent)}%
                                    </div>
                                </div>
                
                            </td>
                            <td class="td_style_list"><span class="badge badge-warning">${element.status}</span></td>
                
                        </tr>
                    `;

                });

                let paginationBodys = document.querySelectorAll(".paginationBody");

                paginationBodys.forEach(body => {
                    let paginationBody = `<li class="page-item">
                    <a class="page-link" onclick="pagination(1)" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;1</span>
                    </a>
                    </li>`;

                    if(value.current_page-1 >= 1)
                        paginationBody += `<li class="page-item"><a onclick="pagination(${value.current_page-1})" href="#" class="page-link">${value.current_page-1}</a></li>`;
                    paginationBody += `<li class="page-item active"><a onclick="pagination(${value.current_page})" href="#" class="page-link">${value.current_page}</a></li>`;
                        
                    if(value.current_page+1 <= value.last_page)
                        paginationBody += `<li class="page-item"><a onclick="pagination(${value.current_page+1})" href="#" class="page-link">${value.current_page+1}</a></li>`;

                    paginationBody += `<li class="page-item">
                    <a class="page-link" onclick="pagination(${value.last_page})" href="#" aria-label="Next">
                        <span aria-hidden="true">${value.last_page}&raquo;</span>
                    </a>
                    </li>`;

                    body.innerHTML = paginationBody;
                });
            }
                
        })
}


document.addEventListener("DOMContentLoaded", () => {
    pagination(1);

    document.querySelectorAll(".search").forEach(element => {
        element.addEventListener('click', () => {
            setPattern();
            pagination(1);
        })
    });
})