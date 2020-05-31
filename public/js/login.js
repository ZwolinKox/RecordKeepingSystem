//Odwołujemy się do API, metoda post, w nagłówkach podajemy informacje dotyczące typu dannych, które przesyłamy i odbieramy
//W innym wypadku niż logowanie zwykle dodajemy jeszcze token do autoryzacji

//JSON.stringify - zamienienie obiektu JS na obiekt JSON
//JSON.parse - zamienienie JSON'a na obiekt JS

//Dostajemy odpowiedź, zamieniamy ją na plik JSON, pobieramy token, zapisujemy go w ciasteczkach, na sam koniec wyświetlamy sam token

document.querySelector("#login").addEventListener("click", () =>
{
    //Dane logowania
    const ob = {
        email : document.querySelector("#email").value,
        password : document.querySelector("#passwd").value
    }
    
    fetch("/api/login",
    {
        method: "post",
        headers:
        {
            "Content-Type": "application/json",
            "Accept" : "application/json"
        },
        body: JSON.stringify(ob)
    })

    .then(res => res.json())

    .then(res =>
    {
        console.log(res);
        const token = JSON.parse(JSON.stringify(res)).access_token;
        Cookies.set('token', token, { expires: 7 });
        console.log( Cookies.get('token'))
    })

})

