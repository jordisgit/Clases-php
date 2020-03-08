<?php 
namespace App\Models; 
use CodeIgniter\Model; 
class PeliculaModel extends Model { 
    protected $table = 'PELICULA'; 
    protected $primaryKey = 'ID'; 
    protected $returnType = 'array'; 
    protected $useSoftDeletes = false; 
    protected $allowedFields = ['ID','TITULO', 'ANYO', 'PUNTUACION', 'VOTOS']; 
    protected $validationRules = [
            'ID'=> 'required|integer|is_unique[PELICULA.ID]',
            'TITULO'=>'required|string|is_unique[PELICULA.TITULO]'
    ];
   protected $validationMessages = [
        'ID'        => [
                'is_unique' => 'Ho sentim, aquest identificador ja existeix a la base de dades',
                'required' => 'Cal introduir un identificador',
                'integer' => 'L\'identifcador ha de ser un valor numèric'
        ],
        'TITULO'        => [
            'is_unique' => 'Ho sentim, ja existeix aquest títol a la base de dades',
            'required' => 'Cal introduir un títol de pelicula'
        ]
    ];
}
?>