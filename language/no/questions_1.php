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

$questions = array(
   array(
        'question' => 'Å lage TV av at noen dater nakne på en øde stillehavsøy er ...',
        'alternatives' => array(
            array(
                'text' => 'et spennende sosialt eksperiment.',
                'score' => '0,0,0,25,0,0,0,0,0,5,0,0,0',
                'feedback' => 'Hmmm. Den har vi hørt før.'
            ),
            array(
                'text' => 'starten på slutten for vanlig verdighet.',
                'score' => '10,0,0,0,0,0,5,0,0,0,0,0,0',
                'feedback' => 'Det sa de om Big Brother også.'
            ),
            array(
                'text' => 'Påvirker denne testen min søknad om å være med i Adam søker Eva?',
                'score' => '0,0,0,50,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Neida, joda, neida.'
            )
        )
    ),
    array(
        'question' => 'Programmet Montebello Camping har premiere til høsten. Hva tror du det handler om?',
        'alternatives' => array(
            array(
                'text' => 'Et spennende sosialt eksperiment.',
                'score' => '0,0,0,0,0,5,0,0,10,0,0,0,0',
                'feedback' => 'Det er kanskje å dra det litt langt?'
            ),
            array(
                'text' => 'En livsglad gjeng i campingvogner på svenskegrensa.',
                'score' => '0,0,0,0,0,0,0,0,10,0,0,0,0',
                'feedback' => 'Så du har vært der?'
            ),
            array(
                'text' => 'Sakte-TV fra et snobbete boligstrøk på Oslo vest.',
                'score' => '5,0,5,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Ikke prøv å selge ideen til NRK.'
            )
        )
    ),
    array(
        'question' => 'Hvor i landet hadde du sendt Alt for Norge-deltakerne?',
        'alternatives' => array(
            array(
                'text' => 'Et sted med duvende budeier og nasjonalromantisk overdose.',
                'score' => '0,0,0,0,0,10,0,0,0,0,0,7,0',
                'feedback' => 'Smisker du nå?'
            ),
            array(
                'text' => 'Hjem til meg.',
                'score' => '0,0,0,0,0,10,4,0,0,0,0,0,0',
                'feedback' => 'Da må du ikke lære dem stygge banneord.'
            ),
            array(
                'text' => 'På harryhandel i Sverige.',
                'score' => '0,3,0,0,10,0,0,0,0,0,0,0,0',
                'feedback' => 'De hadde kost seg i Ullared.'
            )
        )
    ),
    array(
        'question' => 'Hva synes du er den beste programkombinasjonen av disse forslagene?',
        'alternatives' => array(
            array(
                'text' => 'Sinnasnekker`n gifter seg ved første blikk',
                'score' => '0,0,0,0,0,0,0,0,0,10,10,0,0',
                'feedback' => 'De seertallene kan vi bare drømme om.'
            ),
            array(
                'text' => 'Åndenes kjendiskveld',
                'score' => '0,10,0,0,0,0,0,10,0,0,0,0,0',
                'feedback' => 'Elvis og 2Pac inviterer.'
            ),
            array(
                'text' => '71° Thomas Giertsen',
                'score' => '5,0,5,0,0,0,0,0,0,0,0,10,0',
                'feedback' => 'Seriøst. Hadde du sett på det?'
            )
        )
    ),
    array(
        'question' => 'Hvordan ser vi på TV om 10 år?',
        'alternatives' => array(
            array(
                'text' => 'NRK planter kringkastingsmicrochips i nyfødte barn gjennom vaksineprogrammet, finansiert av økt lisensavgift.',
                'score' => '3,3,3,0,3,0,0,0,0,0,0,0,0',
            	'feedback' => '#KonspirasjonNRK'
            ),
            array(
                'text' => 'Google Glasses som streamer Monster-HD med 17G.',
                'score' => '0,0,0,0,5,0,5,0,0,0,0,0,0',
            	'feedback' => 'Blunk hvis du vil skifte kanal.'
            ),
            array(
                'text' => 'Cirka sånn som vi ser på TV i dag.',
                'score' => '0,0,0,0,5,0,0,5,5,5,0,0,0',
            	'feedback' => 'Det høres koseligst ut.'
            )
        )
    ),
    array(
        'question' => 'Hvilket utsagn beskriver deg best?',
        'alternatives' => array(
            array(
                'text' => 'Det er altfor lite reklame på TV nå om da`n.',
                'score' => '0,0,0,0,0,0,0,0,0,0,10,10,0',
            	'feedback' => 'Saklig. Det har du aldri sagt.'
            ),
            array(
                'text' => 'TVNorge er klart best på humor.',
                'score' => '5,5,0,0,5,0,0,0,0,0,0,0,0',
            	'feedback' => 'Motta 1 000 000 poeng!'
            ),
            array(
                'text' => 'Jeg ser nesten ikke på TV lenger, jeg. Det er så mye bra på Netflix og Popcorn Time.',
                'score' => '0,0,5,0,0,0,5,0,0,0,0,0,0',
            	'feedback' => 'Blah blah, vi hører ikke hva du sier.'
            )
        )
    ),
    array(
        'question' => 'Jeg synes TVNorge er best på ...',
        'alternatives' => array(
            array(
                'text' => 'Reality',
                'score' => '0,0,0,10,0,10,0,0,0,10,0,10,0',
                'feedback' => 'Vær deg selv 110 prosent!'
            ),
            array(
                'text' => 'Humor',
                'score' => '10,10,0,0,10,0,10,0,0,0,0,0,0',
                'feedback' => 'Har du hørt den om …'
            ),
            array(
                'text' => 'Underholdning',
                'score' => '0,0,10,0,0,0,0,10,10,0,10,0,0',
                'feedback' => 'Gullrekka må se seg over skuldra.'
            )
        )
    )
);
?>
