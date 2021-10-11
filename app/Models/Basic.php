<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Basic extends Model
{



    protected $table = 'basic';
    protected $primaryKey = 'id_basic';


    protected $fillable = [
        'company_name', 'country', 'current_year','altman','in05','quicktest','bonity','taffler', 'binkert', 'result','ratio', 'percentage'
    ];


}
