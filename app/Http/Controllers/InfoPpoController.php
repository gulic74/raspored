<?php

namespace App\Http\Controllers;

use App\Models\InfoPPO;
use Illuminate\Http\Request;

class InfoPpoController extends Controller
{
    public function index()
    {    
        $count = InfoPPO::count();
        if($count == 0){             

            $infoPPOone = new InfoPPO;
            $infoPPOone->ciklusNB1 = "13. ciklus (2021./2022.)";
            $infoPPOone->aktivanNB1 = 1;
            $infoPPOone->ciklusNB2 = "13. ciklus (2021./2022.)";
            $infoPPOone->aktivanNB2 = 1;
            $infoPPOone->ciklusBB1 = "13. ciklus (2021./2022.)";
            $infoPPOone->aktivanBB1 = 1;
            $infoPPOone->ciklusBB2 = "13. ciklus (2021./2022.)";
            $infoPPOone->aktivanBB2 = 1;
            $infoPPOone->defaultNautikaUciona = "410b";
            $infoPPOone->defaultBrodostrojarstvoUciona = "422";
            $infoPPOone->save();

            return view('infoPPO.edit')->with('infoPPOone', $infoPPOone);
        } else {
            $infoPPOone = InfoPPO::all()->first();
            return view('infoPPO.edit')->with('infoPPOone', $infoPPOone);
        }        
    }

    public function storeInfo(Request $request)
    {
        $this->validate($request, [
            'aktivanNB1' => ['boolean'],
            'ciklusNB1' => ['required', 'string', 'max:150'],
            'aktivanNB2' => ['boolean'],
            'ciklusNB2' => ['required', 'string', 'max:150'],
            'aktivanBB1' => ['boolean'],
            'ciklusBB1' => ['required', 'string', 'max:150'],
            'aktivanBB2' => ['boolean'],
            'ciklusBB2' => ['required', 'string', 'max:150'],
            'defaultNautikaUciona' => ['required', 'string', 'max:150'],
            'defaultBrodostrojarstvoUciona' => ['required', 'string', 'max:150'],
        ]);
        $infoPPOone = InfoPPO::all()->first();
        $infoPPOone->ciklusNB1 = $request->input('ciklusNB1');
        $infoPPOone->aktivanNB1 = ($request->input('aktivanNB1')) ? 1 : 0;
        $infoPPOone->ciklusNB2 = $request->input('ciklusNB2');
        $infoPPOone->aktivanNB2 = ($request->input('aktivanNB2')) ? 1 : 0;
        $infoPPOone->ciklusBB1 = $request->input('ciklusBB1');
        $infoPPOone->aktivanBB1 = ($request->input('aktivanBB1')) ? 1 : 0;
        $infoPPOone->ciklusBB2 = $request->input('ciklusBB2');
        $infoPPOone->aktivanBB2 = ($request->input('aktivanBB2')) ? 1 : 0;
        $infoPPOone->defaultNautikaUciona = $request->input('defaultNautikaUciona');
        $infoPPOone->defaultBrodostrojarstvoUciona = $request->input('defaultBrodostrojarstvoUciona');
        $infoPPOone->save();
        return redirect('infoPPO')->with('infoPPOone', $infoPPOone)->with('success', 'Podaci PPO uspješno ažurirani');
    }
}
