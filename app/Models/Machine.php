<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Machine extends Model
{



    protected $table = 'machine';
    protected $primaryKey = 'id_basic';


    protected $fillable = [
        'company_name', 'country', 'current_year','altman','in05','quicktest','bonity','taffler', 'binkert', 'result','ratio', 'percentage'
    ];


}
