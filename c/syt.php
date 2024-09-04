<?php
require_once __DIR__ .  '/../vendor/autoload.php';
require_once __DIR__ . "/../m/amal_ha.PHP";

use Morilog\Jalali\Jalalian;
use Carbon\Carbon;

class Safe extends Amal_Ha
{
    public function __construct()
    {

        parent::__construct();
        $this->seen();
    }

    public function format($r)
    {
        $date = Carbon::createFromFormat('Y-m-d', $r);
        $jalaliDate = Jalalian::fromCarbon($date);
        echo 'تاریخ انتشار' .  $jalaliDate->format('Y/m/d');
    }
    public function selektt($w, $w2)
    {
        return $this->selekt($w, $w2);
    }

    public function calculateReadingTime($text)
    {
        $wordsPerMinute = 200; // تعداد کلمات در دقیقه

        // تقسیم متن به کلمات و فیلتر کردن کلمات خالی
        $words = preg_split('/\s+/', trim($text));
        $wordCount = count(array_filter($words, function ($word) {
            return strlen($word) > 0;
        }));
        $minutes = $wordCount / $wordsPerMinute;
        $seconds = round($minutes * 60);

        $r =  [
            'minutes' => ceil($minutes)
        ];
        $readingTime = $r;
        $qw = "زمان خواندن: {$readingTime['minutes']} دقیقه ";
        return $qw;
    }
    public function seen()
    {
        $p[] = $this->selekt();

        for ($i = 0; $i < count($p[0]); $i++) {

            print_r("
    <section>
        <div class='row'>
            <div class='col-12  mt-3 d-flex'>
                <div class='col-6  d-flex justify-content-around'>

                <a href='../seene/index.php?id={$p[0][$i]['id']}'class='text-decoration-none'>
                    <div class='text-decoration-none' href='>
                        <h5 class='text-white containerr' id='p' dir='rtl'>
                        " . $p[0][$i]['mtn'] .  "
                        </h5>
                        </div>
                        </a>
                        </div>
                <div class='col-6 ' dir='rtl'>
                    <div class='d-flex'>
                        <button class='btn btn-primary d-flex'>
                            <i class='bi bi-circle-fill ms-2'></i>
                            <h6> " . $this->selektt(1, $p[0][$i]['daste_bandi']) . "</h6>
                        </button>
                    </div>
                    <h4 class='mt-3 text-white'>" . $p[0][$i]['titel'] . "</h4>
                    <span class='d-flex'>

                        <h6 class='text-white me-3 '>" . $this->selektt(3, $p[0][$i]['user'])['user'] . "</h6>
                        <h6 class='text-white me-4 dete-section' style='color: white;'>" . $this->format($p[0][$i]['zman']) . " </h6>
                        <h6 class='text-white time-section'><i class='bi bi-clock fs-5 ms-1'></i> " . $this->calculateReadingTime($p[0][$i]['mtn']) . "
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
$safe = new safe();
