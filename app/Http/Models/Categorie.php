<?php
   namespace App\Http\Models;
   use Illuminate\Database\Eloquent\Model;

   class Categorie extends Model {
       /**
         * The table associated with the model.
         * @var string
         */
        protected $table = 'categories';

      public function ressource(){
         return $this->hasMany('App\Http\Models\Ressource')->orderBy('created_At', 'desc');
       }
   }
