<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function nomor1()
    {
        return view('logic.nomor1');
    }

    public function nomor1Post(Request $request)
    {
        $no = $request->get('nomor1');
        $prima = true;
    
        if (is_numeric($no)) {
            for ($i = 2; $i <= $no-1; $i++)
            {
                if ($no % $i == 0) 
                {
                    $prima = false;
                    break;
                }
            }
            if ($prima) {
                return redirect()->route('nomor1')->with('status', $no.' adalah bilangan Prima');
            } else {
                return redirect()->route('nomor1')->with('failed', $no.' adalah bukan bilangan Prima');
            }
        } else {
            return redirect()->route('nomor1')->with('failed', 'Tolong masukan nomor yang benar');
        }
        
    }

    public function nomor2()
    {
        $bilangan = array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);
        $tot = count($bilangan);

        $maksimal = max($bilangan);

        return view('logic.nomor2', ['bilangans' => $bilangan, 'maksimal' => $maksimal]);
    }

    public function nomor3()
    {
        return view('logic.nomor3');
    }

    public function nomor3Post(Request $request)
    {
        $row = $request->get('baris');

        return view('logic.nomor3', ['row' => $row]);
    }

    public function nomor4()
    {
        $bilangan = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);

        return view('logic.nomor4', ['bilangans' => $bilangan]);
    }

    public function nomor5()
    {
        $bilangan = array(
            array(1,5,9),
            array(2,6,10),
            array(3,7,11),
            array(4,8,12),
        );

        // dd($bilangan);

        return view('logic.nomor5', ['bilangan' => $bilangan]);
    }
}
