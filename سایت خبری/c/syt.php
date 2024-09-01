<?php
require_once __DIR__ . "/../m/amal_ha.PHP" ; 
class Safe extends Amal_Ha
{
    public function __construct()
    {
        parent::__construct();
        echo $this->convertDate('2024-08-05');
        exit;
        $this->seen();
    }

    public function gregorianToJalali($gy, $gm, $gd) {
        // محاسبه سال شمسی
        $g_days_in_month = [31, 28 + (checkdate($gm, $gd, $gy) ? 0 : 1), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        $g_day_no = array_sum(array_slice($g_days_in_month, 0, $gm - 1)) + $gd - 1;
        $g_year_no = $gy - 1600;
        $g_day_no += 365 * $g_year_no + floor(($g_year_no + 3) / 4) - floor(($g_year_no + 99) / 100) + floor(($g_year_no + 399) / 400);

        // محاسبه تاریخ شمسی
        $j_day_no = $g_day_no - 226899;
        $j_np = floor($j_day_no / 1029983);
        $j_day_no %= 1029983;

        $j_year = 474 + 2820 * $j_np;
        $j_day_no += 226899;

        $j_year += floor($j_day_no / 365);
        $j_day_no %= 365;

        if ($j_day_no < 186) {
            $j_month = floor($j_day_no / 31) + 1;
            $j_day = $j_day_no % 31 + 1;
        } else {
            $j_month = floor(($j_day_no - 186) / 30) + 7;
            $j_day = ($j_day_no - 186) % 30 + 1;
        }

        return [$j_year, $j_month, $j_day];
    }

    public function convertDate($dateString) {
        // تجزیه تاریخ ورودی به سال، ماه و روز
        list($gy, $gm, $gd) = explode('-', $dateString);
        
        // تبدیل به تاریخ شمسی
        list($jy, $jm, $jd) = $this->gregorianToJalali((int)$gy, (int)$gm, (int)$gd);
        
        // فرمت خروجی
        return sprintf("%04d/%02d/%02d", $jy, $jm, $jd);
    }        
    
   
    public function calculateReadingTime($text) {
        $wordsPerMinute = 200; // تعداد کلمات در دقیقه
        
        // تقسیم متن به کلمات و فیلتر کردن کلمات خالی
        $words = preg_split('/\s+/', trim($text));
        $wordCount = count(array_filter($words, function($word) {
            return strlen($word) > 0;
        }));
        $minutes = $wordCount / $wordsPerMinute;
        $seconds = round($minutes * 60);
        
        $r =  [
            'minutes' => floor($minutes)
        ];
        $readingTime = $r;
        $qw = "زمان خواندن: {$readingTime['minutes']} دقیقه ";
        return $qw;
    }
    public function selektt($w , $w2)
    {
       return $this->selekt($w , $w2)  ;
    } 

    public function seen()
    {
        $p[] = $this->selekt();
        for ($i = 0; $i <count($p[0]); $i++)
         { 
            
            print_r("
    <section>
        <div class='row'>
            <div class='col-12  mt-3 d-flex'>
                <div class='col-6  d-flex justify-content-around'>

                <a href='../seene/index.php?id={$p[0][$i]['id']}'class='text-decoration-none'>
                    <div class='text-decoration-none' href='>
                        <h5 class='text-white containerr' id='p' dir='rtl'>
                        " .$p[0][$i]['mtn'] .  "
                        </h5>
                        </div>
                        </a>
                        </div>
                <div class='col-6 ' dir='rtl'>
                    <div class='d-flex'>
                        <button class='btn btn-primary d-flex'>
                            <i class='bi bi-circle-fill ms-2'></i>
                            <h6> " . $this->selektt(1 , $p[0][$i]['daste_bandi']) . "</h6>
                        </button>
                    </div>
                    <h4 class='mt-3 text-white'>" . $p[0][$i]['titel'] . "</h4>
                    <span class='d-flex'>

                        <h6 class='text-white me-3 '>" .$this->selektt(3,$p[0][$i]['user'])['user'] . "</h6>
                        <h6 class='text-white me-4 dete-section'>1403/4/21</h6>
                        <h6 class='text-white time-section'><i class='bi bi-clock fs-5 ms-1'></i> " .$this->calculateReadingTime($p[0][$i]['mtn']) . "
                            </h5>
                    </span>
                </div>
            </div>
    </section>    
            <hr>
        ");
        }
    }
    }
$safe = new safe() ; 
 
 