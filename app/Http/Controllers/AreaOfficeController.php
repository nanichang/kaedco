<?php

/**
* @author Nani paul
* @author nanipaul68@gmail.com
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\AreaOffice\AreaOfficeContract;

class AreaOfficeController extends Controller
{

    protected $repo;

    public function __construct(AreaOfficeContract $areaOfficeContract) {
        $this->repo = $areaOfficeContract;
    }

    public function create() {
    	$areaOffices = $this->repo->findAll();
    	return view('areaoffice.create')->with('areaOffices', $areaOffices);
    }

   
    public function store(Request $request) {
        
        $this->validate($request, [
            'area_office_name' => 'required',
            'nerc_code' => 'required|min:2|max:2',
            'kaedc_code' => 'required|min:2|max:2',
            
        ]);

        $areaOffice = $this->repo->create($request);
        if ($areaOffice->nerc_code) {
            return back()
                ->with('success', 'Area Office successfully saved.');
        } else {
            return back()
                ->withInput()
<<<<<<< HEAD
                ->with('error', 'There was a problem saving the Area Office. Try again');
=======
                ->with('error', 'There was a problem saving this Area Office. Try again');
>>>>>>> b4e641a0cdcc78e083ecc7163e9e788c1d43c7c3
        }


    }

    public function edit($nerc_code) {
    	$nerc_code -> $this->repo->edit()
    	return view('areaoffice.edit')->with('nerc_code');
    }



}
