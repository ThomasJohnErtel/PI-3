<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Produto_estoque extends Model
{
    use HasFactory;
    protected $table ="PRODUTO_ESTOQUE";
    protected $primaryKey="PRODUTO_ID";
 
    public function Produto_estoque(){
        return $this->belongsTo(Produto::class,'PRODUTO_ID','PRODUTO_ID');
    }
}