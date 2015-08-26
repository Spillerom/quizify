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
        'question' => 'Å lage TV av at noen dater nakne på en øde stillehavsøy er ...',
        'alternatives' => [
            [
                'text' => 'Et spennende sosialt eksperiment',
                'score' => '1.0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Hmmm. Den har vi hørt før'
            ],
            [
                'text' => 'Starten på slutten for vanlig verdighet',
                'score' => '0,1.0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Programmet er faktisk kleinest når de kler på seg på slutten'
            ],
            [
                'text' => 'Påvirker denne testen min søknad om å være med i Adam søker Eva?',
                'score' => '0.0,0,0,1.0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Neida, joda, neida'
            ]
        ]
    ],
    [
        'question' => 'Programmet Montebello camping har premiere til høsten. Hva tror du det handler om?',
        'alternatives' => [
            [
                'text' => 'Et spennende sosialt eksperiment',
                'score' => '1.0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Det er kanskje å ta det litt langt?'
            ],
            [
                'text' => 'En livsglad gjeng i campigvogner på svenskegrensa',
                'score' => '0.0,1.0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Så du har vært der?'
            ],
            [
                'text' => 'Sakte-TV fra et snobbete boligstrøk på Oslo vest',
                'score' => '0.0,0,0,1.0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Ikke prøv å selge ideen til NRK. Vi kom på den først'
            ]
        ]
    ],
    [
        'question' => 'Hvor i landet hadde du sendt Alt for Norge-deltakerne?',
        'alternatives' => [
            [
                'text' => 'Et sted med duvende budeier og nasjonalromantisk overdose',
                'score' => '1.0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Prøver du å smiske nå?'
            ],
            [
                'text' => 'Hjem til meg',
                'score' => '0,0,1.0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Da får du ikke lov til å lære dem altfor stygge banneord'
            ],
            [
                'text' => 'Til en helt vanlig dag hos Petter Schjerven',
                'score' => '0,0,1.0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Ikke spør oss om hva det innebærer'
            ]
        ]
    ],
    [
        'question' => 'Hva synes du er den beste programkombinasjonen av disse forslagene?',
        'alternatives' => [
            [
                'text' => 'Sinnasnekker`n gifter seg ved første blikk',
                'score' => '1.0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'De seertallene kan vi bare drømme om'
            ],
            [
                'text' => 'Åndenes kjendiskveld',
                'score' => '0,1.0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Elvis og 2Pac inviterer'
            ],
            [
                'text' => '71° Thomas Giertsen',
                'score' => '0,0,1.0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Var det seriøst noen som valgte denne?'
            ]
        ]
    ],
    [
        'question' => 'Hvordan ser vi på TV om 10 år?',
        'alternatives' => [
            [
                'text' => 'NRK planter kringkastingsmicrochips i nyfødte barn gjennom vaksineprogrammet, finansiert av økt lisensavgift',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
            	'feedback' => '#KonspirasjonNRK #TheTruthIsOutThere'
            ],
            [
                'text' => 'Google glasses som streamer Monster-HD med 17G',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
            	'feedback' => 'Pornobransjen må bare bli enig om standard format først'
            ],
            [
                'text' => 'Cirka sånn som vi ser på TV i dag',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
            	'feedback' => 'Det høres koseligst ut'
            ]
        ]
    ],
    [
        'question' => 'Hvilket utsagn beskriver deg best?',
        'alternatives' => [
            [
                'text' => 'Det er altfor lite reklame på TV nå om da`n',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
            	'feedback' => 'Saklig. Det har du aldri sagt'
            ],
            [
                'text' => 'TVNorge er klart best på humor',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
            	'feedback' => 'Motta 1 000 000 poeng'
            ],
            [
                'text' => 'Jeg ser nesten ikke på TV lenger, jeg. Det er så mye bra på Netflix og Popcorn Time',
                'score' => '0,0,0,0,0,0,0,0,0,0,0,0,0',
            	'feedback' => 'Blah blah blah, vi hører ikke hva du sier'
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
