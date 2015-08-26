<?php
/*

1:BRILLE
2:KJENDISKVELD MED MAGNUS DEVOLD
3:I KVELD MED YLVIS LIVE
4:ADAM SØKER EVA
5:EN HELT VANLIG DAG
6:ALT FOR NORGE
7:DANSKEN OG FINGEREN: BEST I ALT
8:ÅNDENES MAKT
9:MONTEBELLO CAMPING
10:GIFT VED FØRSTE BLIKK
11:SINNASNEKKER'N
12:71 GRADER NORD
13:PÅSKEEGG: DPLAY
14:FEILMELDING

*/

$questions = [
    [
        'question' => 'Hvor gammel er du?',
        'alternatives' => [
            [
                'text' => 'Jeg husker Casino med Halvard Flatland',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' = 'Du har vel ikke glemt tause Birgitte?'
            ],
            [
                'text' => 'Jeg husker Heia Tufte med Erik Thorstvedt',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' = 'Erik er hele Norges DILF'
            ],
            [
                'text' => 'Jeg prøver å glemme Killer Karaoke',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' = 'Salgsavdelingen vår prøver også å glemme'
            ]
        ]
    ],
    [
        'question' => 'Hvilken av disse historiene tror du er fleip?',
        'alternatives' => [
            [
                'text' => 'Petter Schjerven har tapt i håndbak mot Pia Lykke',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' = 'Fakta. Det skjedde på en firmafest'
            ],
            [
                'text' => 'Thomas Giertsen brakk armen i håndbak mot en anonym dame',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' = 'Fakta. Det skjedde under et sceneshow'
            ],
            [
                'text' => 'Ine Jansen er kretsmester i håndbak',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' = 'Fleip, men hun kunne helt sikkert spilt en kretsmester'
            ]
        ]
    ],
    [
        'question' => 'Du har blitt arrestert og får lov til å ta én telefon. Hvem av disse ringer du til?',
        'alternatives' => [
            [
                'text' => 'Esben «Dansken» Selvig - Noe sier meg at han kjenner noen som kjenner noen',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' = 'Ingen dansker har vel rent mel i posen?'
            ],
            [
                'text' => 'Odd Magnus «Odda» Williamson - Han kjenner ihvertfall noen',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' = 'Snitches get stiches'
            ],
            [
                'text' => 'Bård Ylvisåker - Får jeg virkelig nummeret til Bård?',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' = 'Sorry, Bård har megahemmelig NASA-kryptert telefonnummer'
            ]
        ]
    ],
   	[
		'question' => 'Hvilken suvenir fra TVNorge-universet vil du helst hatt kloa i?',
		'alternatives' => [
		    [
		        'text' => 'Lusekofta til Asbjørn Brekke',
		        'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
		        'feedback' = 'Kanskje du ombestemmer deg når du ser rødvinsflekkene'
		    ],
		    [
		        'text' => 'En lokk av Magnus Devolds hår',
		        'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
		        'feedback' = 'Vi kan klippe av en liten lengde til deg når Magnus sover'
		    ],
		    [
		        'text' => 'Garderoben til Christine Koht',
		        'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
		        'feedback' = 'xs'
        ]
    ],
    [
        'question' => 'Hvilke ville du gjort hvis du var TVNorge-sjef en dag?',
        'alternatives' => [
            [
                'text' => 'Sendt Harald Eia til frisøren',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Lykke til'
            ],
            [
                'text' => 'Sneket deg med på innspilling av Åndenes makt for å se om spøkelsene er ekte',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Tom Strømness lover å ikke skremme deg med lommelykt under haka'
            ],
            [
                'text' => 'Gitt Magnus Devold en ordentilig TV-jobb',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Voilà. Ditt ord er lov. Kjendiskveld med Magnus Devold har premiere til høsten'
            ]
        ]
    ],
    [
        'question' => 'Hva irriterer deg når du ser på TV?',
        'alternatives' => [
            [
                'text' => 'At altfor få fremmede gifter seg på TV uten å møtes på forhånd',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Paradise Hotel burde ta ansvar og arrangere flere bryllup, spør du oss'
			],
            [
                'text' => 'At du ikke vet hva Knut Nærum gjør en helt vanlig dag',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Knut leser sikkert tegneserier på senga hele dagen'
            ],
            [
                'text' => 'At håndverkere på TV er generelt for blide',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Vi har nummeret til noen mugne rørleggere hvis du trenger'
            ]
        ]
    ],
    [
        'question' => 'Jeg synes TVNorge er best på ...',
        'alternatives' => [
            [
                'text' => 'Reality',
                'score' => '1.0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Sorry. Det blir ikke noe mer av Den siste viking'
            ],
            [
                'text' => 'Humor',
                'score' => '0,1.0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Hvordan vet du at en bil er fra Jamaica? På REGGAEstreringsskiltet!'
            ],
            [
                'text' => 'Underholdning',
                'score' => '0,0,1.0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Det var hyggelig av deg å svare'
            ]
        ]
    ]
];
?>
