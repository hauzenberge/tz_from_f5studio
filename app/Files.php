<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Storage;
use App\PhotoGalerryItems;

class Files extends Model
{
    public function upload($fileinputname, $name, $src, $request){
    	$file = $request->file($fileinputname);
        //dd($file);
        if ($file != null) {
            $file->move(public_path() . '/storage/app/public/'.$src,$name.'.png');
        }
    	
    	return 'Complete';	
    }

    public function desletefile($src){
    	unlink(public_path($src));
    	return 'Complete';	
    }
}
