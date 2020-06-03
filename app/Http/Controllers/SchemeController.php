<?php

namespace App\Http\Controllers;

use App\Scheme;
use App\User;
use App\Orders;
use App\Clients;
use Carbon\Carbon; //Bibliteka PHP, która ułatwia manipulację datą i czasem
use Illuminate\Http\Request;

class SchemeController extends Controller
{
    //
    public function updateNumber() {
        $scheme = Scheme::find(1);        
        
        $lastDate = Carbon::createFromFormat('Y-m-d', $scheme->last_date, 'Europe/Stockholm');

        switch ($scheme->cycle) {
            case 1:
                //Rozwiązanie nieco na około, sprawdzamy czy tydzień jest inny, jeżeli tak no to resetujemy numer. I zabezpieczenie w razie, jakby dokładnie rok później dopiero zmienił się numer
                if(($lastDate->weekOfYear != Carbon::now()->weekOfYear || Carbon::now()->year != $lastDate->year)) {
                    $scheme->total_number = 0;
                    $scheme->save();
                }
                break;
            case 2:
                if(($lastDate->month != Carbon::now()->month || Carbon::now()->year != $lastDate->year)) {
                    $scheme->total_number = 0;
                    $scheme->save();
                }
            break;

            case 3:
                if(Carbon::now()->year != $lastDate->year) {
                    $scheme->total_number = 0;
                    $scheme->save();
                }
            break;

        }

        $scheme->total_number++;
        $scheme->last_date = Carbon::now();
        $scheme->save();

        return $scheme->total_number;
    }

    protected function englishToPolishMonthNames($monthName)
    {
        $enMonths = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        $plMonths = array("Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień");
    
        return str_replace($enMonths, $plMonths, $monthName);
    }

    protected function englishToPolishMonthShortNames($monthName)
    {
        $enMonths = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        $plMonths = array("STY", "LUT", "MAR", "KWI", "MAJ", "CZE", "LIP", "SIE", "WRZ", "PAŹ", "LIS", "GRU");

        return str_replace($enMonths, $plMonths, $monthName);
    }

    protected function numberToRomanRepresentation($number) {
        $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
        $returnValue = '';
        while ($number > 0) {
            foreach ($map as $roman => $int) {
                if($number >= $int) {
                    $number -= $int;
                    $returnValue .= $roman;
                    break;
                }
            }
        }
        return $returnValue;
    }

    public function test()
    {
        return $this->parser(1);
    }

    public function parser($orderId) {
        $string = Scheme::find(1)->scheme;
        $resultString = "";

        $elements = explode("/", $string);
        $documentId = $this->updateNumber(); //Od razu przy aktualizacji danych dostajemy numer dokumentu, ograniczamy ilość połączeń z bazą

        foreach ($elements as $key => $value) {
            
            if($value[0] == "%") {
                switch ($value[1]) {
                    case 'N':
                        $resultString .= $documentId;
                        break;
                    case 'Y':
                        $resultString .= Carbon::now()->year;
                        break;
                    case 'y':
                        $resultString .= Carbon::now()->format('y');
                        break;
                    case 'm':
                        $resultString .= Carbon::now()->format('m');
                        break;
                    case 'M':
                        $resultString .= $this->englishToPolishMonthNames(Carbon::now()->format('F'));
                        break;
                    case 'b':
                        $resultString .= $this->englishToPolishMonthShortNames(Carbon::now()->format('M'));
                        break;
                    case 'C':
                        $resultString .=  Orders::find($orderId)->created_by;
                        break;
                    case 'R':
                        $resultString .= $this->numberToRomanRepresentation(Carbon::now()->month);
                        break;
                    case 'W':
                        $resultString .= Carbon::now()->weekOfYear;
                        break;
                    case 'D':
                        $resultString .= Carbon::now()->isoFormat('d');
                        break;
                    case 'K':
                        $resultString .=  Orders::find($orderId)->client;
                        break;
                        
                    default:
                        $number = substr($value, 1,1);
                        if(is_numeric($number) && strlen($value) == 3 && $value[3] == "N") {
                            str_pad($number, 4, '0', STR_PAD_LEFT);
                        } else {
                            return false;
                        }
                        break;
                }
                $resultString .= "/";
            }
            else 
                $resultString .= $value."/";
        }

        return substr($resultString, 0, -1); //Ucinamy ostatni "/"

    }
}
