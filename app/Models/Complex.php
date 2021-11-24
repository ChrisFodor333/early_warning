<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Complex extends Model
{



    protected $table = 'complex';
    protected $primaryKey = 'id_complex';


    protected $fillable = [
        'company_name',
        'country',
        'current_year',
        'altman1',
        'altman2',
        'altman3',
        'in051',
        'in052',
        'in053',
        'quicktest1',
        'quicktest2',
        'quicktest3',
        'bonity1',
        'bonity2',
        'bonity3',
        'taffler1',
        'taffler2',
        'taffler3',
        'binkert',
        'result',
        'ratio',
        'rat1',
        'rat2',
        'rat3',
        'percentage'
    ];


}
