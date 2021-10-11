<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Basic_old extends Model
{



    protected $table = 'basic_old';
    protected $primaryKey = 'id_basic';


    protected $fillable = [
        'company_name', 'country', 'current_year','altman','in05','quicktest','bonity','taffler', 'binkert', 'result'
    ];


}
