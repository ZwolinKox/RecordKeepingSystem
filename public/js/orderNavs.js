
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

function getParam() {
    return location.href.substring(location.href.lastIndexOf('/') + 1);
}
