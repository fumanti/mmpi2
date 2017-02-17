<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Condizione as Condizione;

class CondizioneTableSeeder extends Seeder {
	public function run() {
		//Condizione::truncate();
		
		// Condizioni VRIN-r
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>1,	'item_id'=>6	, 'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>1,	'item_id'=>136	, 'valore_richiesto'=>true  ]);

		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>2,	'item_id'=>8	, 'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>2,	'item_id'=>323	, 'valore_richiesto'=>true  ]);

		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>3,	'item_id'=>17	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>3,	'item_id'=>94	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>4,	'item_id'=>24	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>4,	'item_id'=>319	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>5,	'item_id'=>25	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>5,	'item_id'=>174	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>6,	'item_id'=>29	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>6,	'item_id'=>116	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>7,	'item_id'=>32	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>7,	'item_id'=>257	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>8,	'item_id'=>35	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>8,	'item_id'=>114	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>9,	'item_id'=>40	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>9,	'item_id'=>144	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>10,	'item_id'=>44	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>10,	'item_id'=>177	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>11,	'item_id'=>	44	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>11,	'item_id'=>177	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>12,	'item_id'=>47	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>12,	'item_id'=>201	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>13,	'item_id'=>55	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>13,	'item_id'=>99	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>14,	'item_id'=>55	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>14,	'item_id'=>171	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>15,	'item_id'=>58	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>15,	'item_id'=>180	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>16,	'item_id'=>60	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>16,	'item_id'=>327	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>17,	'item_id'=>62	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>17,	'item_id'=>74	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>18,	'item_id'=>66	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>18,	'item_id'=>223	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>19,	'item_id'=>67	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>19,	'item_id'=>278	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>20,	'item_id'=>71	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>20,	'item_id'=>264	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>21,	'item_id'=>79	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>21,	'item_id'=>289	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>22,	'item_id'=>83	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>22,	'item_id'=>105	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>23,	'item_id'=>88	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>23,	'item_id'=>265	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>24,	'item_id'=>89	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>24,	'item_id'=>232	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>25,	'item_id'=>93	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>25,	'item_id'=>164	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>26,	'item_id'=>93	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>26,	'item_id'=>164	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>27,	'item_id'=>95	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>27,	'item_id'=>144	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>28,	'item_id'=>108	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>28,	'item_id'=>152	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>29,	'item_id'=>108	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>29,	'item_id'=>152	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>30,	'item_id'=>119	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>30,	'item_id'=>303	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>31,	'item_id'=>123	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>31,	'item_id'=>338	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>32,	'item_id'=>134	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>32,	'item_id'=>293	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>33,	'item_id'=>141	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>33,	'item_id'=>266	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>34,	'item_id'=>146	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>34,	'item_id'=>275	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>35,	'item_id'=>147	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>35,	'item_id'=>176	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>36,	'item_id'=>156	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>36,	'item_id'=>205	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>37,	'item_id'=>158	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>37,	'item_id'=>228	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>38,	'item_id'=>158	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>38,	'item_id'=>261	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>39,	'item_id'=>165	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>39,	'item_id'=>317	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>40,	'item_id'=>166	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>40,	'item_id'=>207	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>41,	'item_id'=>175	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>41,	'item_id'=>291	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>42,	'item_id'=>175	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>42,	'item_id'=>291	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>43,	'item_id'=>187	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>43,	'item_id'=>331	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>44,	'item_id'=>194	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>44,	'item_id'=>233	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>45,	'item_id'=>196	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>45,	'item_id'=>245	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>46,	'item_id'=>213	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>46,	'item_id'=>260	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>47,	'item_id'=>219	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>47,	'item_id'=>267	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>48,	'item_id'=>239	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>48,	'item_id'=>302	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>49,	'item_id'=>246	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>49,	'item_id'=>282	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>50,	'item_id'=>252	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>50,	'item_id'=>287	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>51,	'item_id'=>299	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>51,	'item_id'=>324	, 'valore_richiesto'=>false	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>52,	'item_id'=>316	, 'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>52,	'item_id'=>329	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>53,	'item_id'=>318	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'VRIN-r', 	'set'=>53,	'item_id'=>337	, 'valore_richiesto'=>false	]);


		// Condizioni TRIN-r
		// Vero - vero => aggiungi 1
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>1,	'item_id'=>17  	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>1,	'item_id'=>44  	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>2,	'item_id'=>30  	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>2,	'item_id'=>217 	, 'valore_richiesto'=>true	]);

		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>3,	'item_id'=>37  	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>3,	'item_id'=>322 	, 'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>4,	'item_id'=>48  	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>4,	'item_id'=>182 	, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>5,	'item_id'=>57 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>5,	'item_id'=>67 	, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>6,	'item_id'=>83 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>6,	'item_id'=>120 	, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>7,	'item_id'=>101 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>7,	'item_id'=>189 	, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>8,	'item_id'=>109 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>8,	'item_id'=>278 	, 'valore_richiesto'=>true	]);

		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>9,	'item_id'=>134 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>9,	'item_id'=>248 	, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>10,	'item_id'=>146 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>10,	'item_id'=>293 	, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>11,	'item_id'=>158 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>11,	'item_id'=>202 	, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>12,	'item_id'=>169 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>12,	'item_id'=>282 	, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>13,	'item_id'=>212 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>13,	'item_id'=>264 	, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>14,	'item_id'=>234 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>14,	'item_id'=>261 	, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>15,	'item_id'=>269 	, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>15,	'item_id'=>314 	, 'valore_richiesto'=>true	]);

		// coppie falso falso => sottrai 1	
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>16,	'item_id'=>4 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>16,	'item_id'=>22 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
	 
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>17,	'item_id'=>44 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>17,	'item_id'=>94 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
	 
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>18,	'item_id'=>59 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>18,	'item_id'=>306 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
	 
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>19,	'item_id'=>73 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>19,	'item_id'=>338 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
	 
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>20,	'item_id'=>83 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>20,	'item_id'=>158 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
	 
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>21,	'item_id'=>108 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>21,	'item_id'=>246 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
	 
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>22,	'item_id'=>119 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>22,	'item_id'=>134 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
	 
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>23,	'item_id'=>147 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>23,	'item_id'=>319 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
	 
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>24,	'item_id'=>178 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>24,	'item_id'=>221 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
	 
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>25,	'item_id'=>201 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>25,	'item_id'=>278 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
	 
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>26,	'item_id'=>261 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);
		Condizione::create(['codice_scala'=>'TRIN-r', 	'set'=>26,	'item_id'=>293 	, 'valore_richiesto'=>false, 'punteggio_assegnato'=> -1		]);

		

		//F-r
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>14  , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>30  , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>46  , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>56  , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>67  , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>71  , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>74  , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>106 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>117 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>120 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>139 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>146 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>164 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>203 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>218 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>231 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>240 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>253 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>264 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>275 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>277 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>281 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>294 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>301 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>310 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>312 , 	'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>332 , 	'valore_richiesto'=>true ]);

		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>59 , 	'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>83 , 	'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>102 , 	'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>174 , 	'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'F-r',  'item_id'=>227 , 	'valore_richiesto'=>false ]);

		//Fp-r
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>40 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>41 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>79 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>86 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>124	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>129	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>150	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>168	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>178	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>191	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>208	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>252	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>255	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>270	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>314	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>317	,'valore_richiesto'=>true	]);

		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>7 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>98 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>157	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>221	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FP-r', 'item_id'=>283	,'valore_richiesto'=>false	]);

		//FS
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>15, 	'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>33, 	'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>43, 	'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>122, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>133, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>137, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>159, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>170, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>199, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>216, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>225, 'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>308, 'valore_richiesto'=>true	]);
	
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>2 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>78 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>186	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FS', 	'item_id'=>272	,'valore_richiesto'=>false	]);
	
		//FBS-r
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>6 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>15 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>43 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>76 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>77 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>79 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>93 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>101 ,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>133 ,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>187 ,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>200 ,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>210 ,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>230 ,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>247 ,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>261 ,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'FBS-r', 'item_id'=>315 ,'valore_richiesto'=>true	]);

		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>36 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>45 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>55 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>88 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>99 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>141	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>156	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>162	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>171	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>189	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>193	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>234	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>265	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'FBS-r'	, 'item_id'=>290	,'valore_richiesto'=>false	]);

		//RBS
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>6 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>24 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>26	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>31 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>68 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>74 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>79 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>92 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>101	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>106	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>120	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>132	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>136	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>137	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>159	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>242	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>252	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>268	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>273	,'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>11 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>21 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>53 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>59 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>125	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>131	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>156	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>219	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RBS', 'item_id'=>325	,'valore_richiesto'=>false	]);

		//L-r
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>61 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>182	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>268	,'valore_richiesto'=>true	]);

		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>16 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>45 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>70 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>95 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>127	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>154	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>183	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>211	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>241	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>298	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'L-r', 'item_id'=>325	,'valore_richiesto'=>false	]);

		//K-r
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>80 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>202	,'valore_richiesto'=>true	]);
		
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>10 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>23 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>36 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>44 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>72 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>89 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>99 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>155	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>171	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>187	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>322	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'K-r', 'item_id'=>338	,'valore_richiesto'=>false	]);

		// SCALE SOVRAORDINATE

		//EID
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>22 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>30 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>35 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>48 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>89 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>91 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>114	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>119	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>120	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>158	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>167	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>169	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>172	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>187	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>204	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>228	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>232	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>250	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>261	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>288	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>322	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>331	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>335	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>4 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>17 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>25 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>37 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>57 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>64 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>73 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>83 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>102	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>105	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>140	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>202	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>217	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>222	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>234	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>246	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>282	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'EID', 'item_id'=>293	,'valore_richiesto'=>false ]);


		//THD
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>12 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>14 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>46 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>71 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>92 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>110	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>122	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>129	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>139	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>150	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>168	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>179	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>199	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>203	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>216	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>252	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>264	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>270	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>273	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>287	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>294	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>311	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>330	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>332	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>85 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'THD', 'item_id'=>212	,'valore_richiesto'=>false ]);	

		//BXD
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>21 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>49 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>66 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>84 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>96 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>107	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>131	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>156	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>193	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>205	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>223	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>226	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>231	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>248	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>253	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>266	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>292	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>312	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>316	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>329	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>61 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>190	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'BXD', 'item_id'=>237	,'valore_richiesto'=>false ]);		


		// Scale Cliniche Ristrutturate

		//RCd
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>6 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>22 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>30 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>48 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>62 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>74 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>89 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>117	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>130	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>144	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>158	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>172	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>187	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>204	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>232	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>247	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>261	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>274	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>288	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>299	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>315	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>331	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>105	,'valore_richiesto'=>false ]);	
		Condizione::create(['codice_scala'=>'RCd', 'item_id'=>217	,'valore_richiesto'=>false ]);		

		//RC1
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>15 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>43 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>76 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>101	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>137	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>176	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>230	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>242	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>277	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>301	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>328	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>2 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>28 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>52 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>65 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>69 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>88 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>113	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>125	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>162	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>174	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>189	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>227	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>254	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>265	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>290	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC1', 'item_id'=>313	,'valore_richiesto'=>false ]);


		//RC2
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>4 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>17 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>25 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>53 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>64 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>83 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>102	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>140	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>160	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>182	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>195	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>202	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>222	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>246	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>282	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>302	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'RC2', 'item_id'=>323	,'valore_richiesto'=>false	]);

		//RC3
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>10 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>36 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>55 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>87 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>99 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>121	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>142	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>171	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>185	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>213	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>238	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>260	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>279	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>304	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC3', 'item_id'=>326	,'valore_richiesto'=>true	]);

		//RC4
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>5 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>21 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>49 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>66 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>96 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>141	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>156	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>173	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>205	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>218	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>223	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>253	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>266	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>297	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>312	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>329	,'valore_richiesto'=>true ]);

		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>19 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>38 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>80 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>126	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>190	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'RC4', 'item_id'=>237	,'valore_richiesto'=>false ]);

		//RC6
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>14 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>34 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>71 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>92 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>110	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>129	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>150	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>168	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>194	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>233	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>252	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>264	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>270	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>287	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>310	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>332	,'valore_richiesto'=>true ]);

		Condizione::create(['codice_scala'=>'RC6', 'item_id'=>212	,'valore_richiesto'=>false ]);
	
		//RC7
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>9 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>23 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>35 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>51 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>63 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>77 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>91 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>112	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>119	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>132	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>146	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>149	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>161	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>206	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>228	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>235	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>250	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>263	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>275	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>289	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>303	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>318	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>322	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'RC7', 'item_id'=>335	,'valore_richiesto'=>true	]);

		//RC8
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>12 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>32 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>46 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>106	,'valore_richiesto'=>true ]);		
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>122	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>139	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>159	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>179	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>199	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>203	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>216	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>240	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>257	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>273	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>294	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>311	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>330	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'RC8', 'item_id'=>85 	,'valore_richiesto'=>false ]);

		//RC9
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>13 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>26 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>39 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>47 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>72 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>84 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>97 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>107	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>118	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>131	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>143	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>155	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>166	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>181	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>193	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>207	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>219	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>231	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>244	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>248	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>256	,'valore_richiesto'=>true ]);		
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>267	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>292	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>305	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>316	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>327	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>337	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'RC9', 'item_id'=>61 	,'valore_richiesto'=>false ]);


		//Scale Somatico/Cognitive

		//MLS
		Condizione::create(['codice_scala'=>'MLS', 'item_id'=>18 	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'MLS', 'item_id'=>4 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'MLS', 'item_id'=>25 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'MLS', 'item_id'=>163	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'MLS', 'item_id'=>174	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'MLS', 'item_id'=>202	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'MLS', 'item_id'=>262	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'MLS', 'item_id'=>333	,'valore_richiesto'=>false ]);

		//GIC
		Condizione::create(['codice_scala'=>'GIC', 'item_id'=>43 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'GIC', 'item_id'=>76 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'GIC', 'item_id'=>210	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'GIC', 'item_id'=>230	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'GIC', 'item_id'=>2 	,'valore_richiesto'=>false ]);

		//HPC
		Condizione::create(['codice_scala'=>'HPC', 'item_id'=>101	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'HPC', 'item_id'=>176	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'HPC', 'item_id'=>328	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'HPC', 'item_id'=>88 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'HPC', 'item_id'=>189	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'HPC', 'item_id'=>265	,'valore_richiesto'=>false ]);

		//NUC
		Condizione::create(['codice_scala'=>'NUC', 'item_id'=>122	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NUC', 'item_id'=>277	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NUC', 'item_id'=>301	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'NUC', 'item_id'=>69 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'NUC', 'item_id'=>113	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'NUC', 'item_id'=>125	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'NUC', 'item_id'=>162	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'NUC', 'item_id'=>186	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'NUC', 'item_id'=>227	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'NUC', 'item_id'=>313	,'valore_richiesto'=>false ]);				
		
		//COG
		Condizione::create(['codice_scala'=>'COG', 'item_id'=>31 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'COG', 'item_id'=>136	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'COG', 'item_id'=>159	,'valore_richiesto'=>true ]);		
		Condizione::create(['codice_scala'=>'COG', 'item_id'=>200	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'COG', 'item_id'=>240	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'COG', 'item_id'=>257	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'COG', 'item_id'=>280	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'COG', 'item_id'=>306	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'COG', 'item_id'=>59 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'COG', 'item_id'=>102	,'valore_richiesto'=>false ]);			

		//SUI
		Condizione::create(['codice_scala'=>'SUI', 'item_id'=>93 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'SUI', 'item_id'=>120	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'SUI', 'item_id'=>164	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'SUI', 'item_id'=>251	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'SUI', 'item_id'=>334	,'valore_richiesto'=>true	]);
		
		//HLP
		Condizione::create(['codice_scala'=>'HLP', 'item_id'=>135	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'HLP', 'item_id'=>169	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'HLP', 'item_id'=>214	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'HLP', 'item_id'=>336	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'HLP', 'item_id'=>282	,'valore_richiesto'=>false ]);

		//SFD
		Condizione::create(['codice_scala'=>'SFD', 'item_id'=>48 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'SFD', 'item_id'=>89 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'SFD', 'item_id'=>232	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'SFD', 'item_id'=>288	,'valore_richiesto'=>true	]);

		//NFC
		Condizione::create(['codice_scala'=>'NFC', 'item_id'=>27 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'NFC', 'item_id'=>68 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'NFC', 'item_id'=>108	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'NFC', 'item_id'=>152	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'NFC', 'item_id'=>198	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'NFC', 'item_id'=>229	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'NFC', 'item_id'=>271	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'NFC', 'item_id'=>274	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'NFC', 'item_id'=>324	,'valore_richiesto'=>true	]);


		// Scale di Internalizzazione

		//STW
		Condizione::create(['codice_scala'=>'STW', 'item_id'=>29 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'STW', 'item_id'=>123	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'STW', 'item_id'=>167	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'STW', 'item_id'=>224	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'STW', 'item_id'=>309	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'STW', 'item_id'=>73 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'STW', 'item_id'=>234	,'valore_richiesto'=>false ]);

		//AXY
		Condizione::create(['codice_scala'=>'AXY', 'item_id'=>79 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AXY', 'item_id'=>146	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AXY', 'item_id'=>228	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AXY', 'item_id'=>275	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AXY', 'item_id'=>289	,'valore_richiesto'=>true	]);

		//ANP
		Condizione::create(['codice_scala'=>'ANP', 'item_id'=>119	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'ANP', 'item_id'=>155	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'ANP', 'item_id'=>248	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'ANP', 'item_id'=>303	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'ANP', 'item_id'=>318	,'valore_richiesto'=>true ]);

		Condizione::create(['codice_scala'=>'ANP', 'item_id'=>134	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'ANP', 'item_id'=>293	,'valore_richiesto'=>false ]);

		//BRF
		Condizione::create(['codice_scala'=>'BRF', 'item_id'=>20 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BRF', 'item_id'=>56 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BRF', 'item_id'=>90 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BRF', 'item_id'=>165	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BRF', 'item_id'=>208	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BRF', 'item_id'=>243	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BRF', 'item_id'=>284	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'BRF', 'item_id'=>317	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'BRF', 'item_id'=>128	,'valore_richiesto'=>false ]);
		
		//MSF
		Condizione::create(['codice_scala'=>'MSF', 'item_id'=>54 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'MSF', 'item_id'=>151	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'MSF', 'item_id'=>258	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'MSF', 'item_id'=>320	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'MSF', 'item_id'=>82 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'MSF', 'item_id'=>115	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'MSF', 'item_id'=>184	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'MSF', 'item_id'=>220	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'MSF', 'item_id'=>286	,'valore_richiesto'=>false ]);
		
		// Scale di Esternalizzazione

		//JCP
		Condizione::create(['codice_scala'=>'JCP', 'item_id'=>21 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'JCP', 'item_id'=>66 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'JCP', 'item_id'=>96 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'JCP', 'item_id'=>205	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'JCP', 'item_id'=>223	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'JCP', 'item_id'=>253	,'valore_richiesto'=>true	]);

		//SUB
		Condizione::create(['codice_scala'=>'SUB', 'item_id'=>49 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'SUB', 'item_id'=>86	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'SUB', 'item_id'=>141	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'SUB', 'item_id'=>192	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'SUB', 'item_id'=>266	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'SUB', 'item_id'=>297	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'SUB', 'item_id'=>237	,'valore_richiesto'=>false ]);
		
		//AGG
		Condizione::create(['codice_scala'=>'AGG', 'item_id'=>23 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AGG', 'item_id'=>26 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AGG', 'item_id'=>41 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AGG', 'item_id'=>84 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AGG', 'item_id'=>231	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AGG', 'item_id'=>312	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AGG', 'item_id'=>316	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AGG', 'item_id'=>329	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AGG', 'item_id'=>337	,'valore_richiesto'=>true	]);
		
		//ACT
		Condizione::create(['codice_scala'=>'ACT', 'item_id'=>72 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'ACT', 'item_id'=>81 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'ACT', 'item_id'=>166	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'ACT', 'item_id'=>181	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'ACT', 'item_id'=>207	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'ACT', 'item_id'=>219	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'ACT', 'item_id'=>267	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'ACT', 'item_id'=>285	,'valore_richiesto'=>true	]);

		//Scale Interpersonali

		//FML
		Condizione::create(['codice_scala'=>'FML', 'item_id'=>58 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'FML', 'item_id'=>103	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'FML', 'item_id'=>138	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'FML', 'item_id'=>180	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'FML', 'item_id'=>215	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'FML', 'item_id'=>281	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'FML', 'item_id'=>307	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'FML', 'item_id'=>19 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'FML', 'item_id'=>80 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'FML', 'item_id'=>269	,'valore_richiesto'=>false ]);

		//IPP
		Condizione::create(['codice_scala'=>'IPP', 'item_id'=>24 	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'IPP', 'item_id'=>60 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'IPP', 'item_id'=>104	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'IPP', 'item_id'=>147	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'IPP', 'item_id'=>197	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'IPP', 'item_id'=>239	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'IPP', 'item_id'=>276	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'IPP', 'item_id'=>302	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'IPP', 'item_id'=>321	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'IPP', 'item_id'=>327	,'valore_richiesto'=>false ]);

		//SAV
		Condizione::create(['codice_scala'=>'SAV', 'item_id'=>278	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'SAV', 'item_id'=>11 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'SAV', 'item_id'=>17 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'SAV', 'item_id'=>47 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'SAV', 'item_id'=>57 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'SAV', 'item_id'=>94 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'SAV', 'item_id'=>109	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'SAV', 'item_id'=>153	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'SAV', 'item_id'=>201	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'SAV', 'item_id'=>222	,'valore_richiesto'=>false ]);

		//SHY
		Condizione::create(['codice_scala'=>'SHY', 'item_id'=>35 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'SHY', 'item_id'=>44	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'SHY', 'item_id'=>91 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'SHY', 'item_id'=>114	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'SHY', 'item_id'=>177	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'SHY', 'item_id'=>249	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'SHY', 'item_id'=>295	,'valore_richiesto'=>false ]);
		
		//DSF
		Condizione::create(['codice_scala'=>'DSF', 'item_id'=>67 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DSF', 'item_id'=>124	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DSF', 'item_id'=>175	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DSF', 'item_id'=>236	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DSF', 'item_id'=>291	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'DSF', 'item_id'=>8 	,'valore_richiesto'=>false ]);

		// Scale di Interessi

		//AES
		Condizione::create(['codice_scala'=>'AES', 'item_id'=>3 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AES', 'item_id'=>50 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AES', 'item_id'=>100	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AES', 'item_id'=>145	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AES', 'item_id'=>196	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AES', 'item_id'=>245	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'AES', 'item_id'=>296	,'valore_richiesto'=>true	]);
		
		//MEC
		Condizione::create(['codice_scala'=>'MEC', 'item_id'=>1 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'MEC', 'item_id'=>42 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'MEC', 'item_id'=>75 	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'MEC', 'item_id'=>111	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'MEC', 'item_id'=>148	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'MEC', 'item_id'=>188	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'MEC', 'item_id'=>226	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'MEC', 'item_id'=>259	,'valore_richiesto'=>true	]);
		Condizione::create(['codice_scala'=>'MEC', 'item_id'=>300	,'valore_richiesto'=>true	]);

		// Scale PSY-5

		//AGGR-r
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>26 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>39 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>84 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>104	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>147	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>182	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>197	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>231	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>239	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>256	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>276	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>302	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>316	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>321	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>327	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>329	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>24 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'AGGR-r', 'item_id'=>319	,'valore_richiesto'=>false ]);

		//PSYC-r
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>12 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>14 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>34 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>40		,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>46 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>71 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>92 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>129	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>137	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>139	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>150	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>168	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>179	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>199	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>203	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>216	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>240	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>252	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>264	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>270	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>287	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>294	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>311	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>330	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>332	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'PSYC-r', 'item_id'=>85 	,'valore_richiesto'=>false ]);

		//DISC-r
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>21 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>42 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>49 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>66 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>75 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>107	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>115	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>131	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>156	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>193	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>205	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>223	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>226	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>253	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>292	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>297	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>300	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>61 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>190	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'DISC-r', 'item_id'=>237	,'valore_richiesto'=>false ]);

		//NEGE-r
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>9 		,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>23 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>29 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>56 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>77 	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>116	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>123	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>146	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>155	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>167	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>206	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>209	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>263	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>277	,'valore_richiesto'=>true ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>309	,'valore_richiesto'=>true ]);
		
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>37 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>73 	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>134	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>234	,'valore_richiesto'=>false ]);
		Condizione::create(['codice_scala'=>'NEGE-r', 'item_id'=>293	,'valore_richiesto'=>false ]);

		//INTR-r
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>4 		,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>11 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>17 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>47 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>53 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>57 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>64 	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>102	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>109	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>118	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>140	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>153	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>166	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>181	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>195	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>201	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>207	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>222	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>246	,'valore_richiesto'=>false	]);
		Condizione::create(['codice_scala'=>'INTR-r', 'item_id'=>323	,'valore_richiesto'=>false	]);

		
	}

}
