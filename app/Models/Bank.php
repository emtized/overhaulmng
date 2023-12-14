<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends BaseModel
{
    use HasFactory,Uuids;

    protected $table = 'banks_info';
    protected $guarded = ['id'];

    public function getBankValueAttribute()
    {
        switch ($this->bank_name){
            case 1:
                $result = 'ملی';
                break;
                  case 2:
                $result = 'ملت';
                break;
                  case 3:
                $result = 'تجارت';
                break;
                case 4:
                    $result = 'شهر';
                    break;
                    case 5:
                        $result = 'سپه';
                        break;
                  default :
                $result = '---';
        }
        return $result;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
