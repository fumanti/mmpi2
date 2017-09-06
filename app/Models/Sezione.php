<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Sezione extends Model {

	/**
	*
	* @var string
	*/
	public $table = 'sezioni';						
	
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;

    public $fillable = ['id','descrizione'];

	public function scale()
    {
        return $this->hasMany('App\Models\Scala')->orderBy('ordine');
    }
}

/*use Illuminate\Database\Eloquent\Collection;

class Sezione extends Collection{

	public static function getAll()
	{
		$sezione = [
			"Stile di risposta che non considera il contenuto" => ["CNS"=>[], "VRIN-r"=>[], "TRIN-r"=>[]],
			"Esagerazione" =>["F-r"=>[], "Fp-r"=>[], "FS"=>[], "FBS-r"=>[], "RBS"=>[]],
			"Minimizzazione dei sintomi" => ["L-r"=>[], "K-r"=>[]],
			"Disfunzioni Somatico/Cognitive" => ["RC1"=>[], "MLS"=>[], "GIC"=>[], "HPC"=>[], "NUC"=>[], "COG"=>[]],
			"Disfunzioni emozionali" => ["EID"=>[], "RCd"=>[], "SUI"=>[], "HLP"=>[], "SFD"=>[], "NFC"=>[], "RC2"=>[], "RC7"=>[], "STW"=>[], "AXY"=>[], "ANP"=>[], "BRF"=>[], "MSF"=>[], "NEGE-r"=>[], "INTR-r"=>[]],
			"Disfunzioni del pensiero" => ["THD"=>[], "RC6"=>[], "RC8"=>[], "PSYC-r"=>[]],			
			"Disfunzioni comportamentali" => ["BXD"=>[], "RC4"=>[], "JCP"=>[], "SUB"=>[], "RC9"=>[], "AGG"=>[], "ACT"=>[], "AGGR-r"=>[], "DISC-r"=>[]],			
			"Funzionamento interpersonale" => ["FML"=>[], "RC3"=>[], "IPP"=>[], "SAV"=>[], "SHY"=>[], "DSF"=>[]],
			"Interessi" => ["AES"=>[], "MEC"=>[]]
		];
		return collect($sezione);
	}
}*/