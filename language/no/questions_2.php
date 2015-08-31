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
        'question' => 'Hvem i TVNorge-universet er kjent for uttrykk som «legendarisk smud» og «bænkers ordnings»?',
        'alternatives' => array(
            array(
                'text' => '«Alexander Molteberg, spilt av Lene Kongsvik Johansen.', 
                'score' => '0,5,0,0,10,0,0,0,0,0,0,0,0',
            	'feedback' => 'Korrekt. Eller «sykt stålkontroll» som Alexander ville ha sagt.'
            ),
            array(
                'text' => 'Ine Jansen på TVNorges julebord i 2012.',
                'score' => '5,0,0,0,5,0,0,0,0,0,0,0,0',
            	'feedback' => 'Ine har helt andre uttrykk i sitt arsenal.'
            ),
            array(
                'text' => 'Jarle Andhøy snøvla det da han slentra forbi i stad.',
                'score' => '0,0,0,0,0,0,0,0,10,0,5,0,0',
            	'feedback' => 'Vi har ikke hørt fra Jarle etter han dro til Antarktis med Anne-Kat.'
            )
        )
	),
	array(
        'question' => 'Hvilket av disse programmene tror du hadde fått høyest seertall?',
        'alternatives' => array(
            array(
                'text' => 'Espen Eckbo rydder opp - hjemme',
                'score' => '5,3,0,0,5,0,0,0,0,0,0,0,0',
            	'feedback' => 'Kanskje hvis han rydder i sånn fransk hushjelp-kostyme'
            ),
            array(
                'text' => '«Odda» og Henrik nakendater',
                'score' => '0,0,0,5,5,0,0,0,0,0,0,0,0',
            	'feedback' => 'Eventuelt Hver gang vi nakendater eller Skal vi nakendate?'
            ),
            array(
                'text' => 'Hvem kan slå Kristian Valen og Lilli Bendriss?',
                'score' => '0,0,0,0,0,0,0,5,5,0,5,0,0',
                'feedback' => 'Vi vippser deg 100 kroner hvis du tør å foreslå konseptet for Kristian og Lilli.'
            )
        )
    ),
    array(
        'question' => 'Hva hadde du savnet mest på en øde øy?',
        'alternatives' => array(
            array(
                'text' => 'En blind date uten klær.',
                'score' => '0,0,0,10,0,0,0,0,0,5,0,0,0',
            	'feedback' => 'Sliter du kanskje på Tinder? (Eventuelt Grindr)'
            ),
            array(
                'text' => 'Skamløs kjendisjournalistikk.',
                'score' => '0,10,0,0,0,0,0,0,0,0,0,0,0',
            	'feedback' => 'Se og Hør kommer til å fremstå som IKEA-katalogen når Kjendiskveld med Magnus Devold går på lufta.'
            ),
            array(
                'text' => 'Lokkene til Vegard Ylvisåker.',
                'score' => '0,0,10,0,0,0,0,0,0,0,0,0,0',
            	'feedback' => 'Han lukter godt også, FYI.'
            )
        )
    ),
    array(
        'question' => 'Hvilken av følgende kombinasjoner foretrekker du en kveld foran TV-skjermen?',
        'alternatives' => array(
            array(
                'text' => 'Rødvin og muggost som er vrien på både uttale og smak.',
                'score' => '10,0,0,0,0,5,0,0,0,0,0,0,0',
                'feedback' => 'Hva med en flaske Alary La Font d´Estévenas og en Bleu de Gex, din snobb?'
            ),
            array(
                'text' => 'Ostepop og barnevakt.',
                'score' => '0,0,0,0,0,0,0,0,5,0,5,0,0',
                'feedback' => 'Eller en annen type snacks som TVNorges annonsører reklamerer for.'
            ),
            array(
                'text' => 'Snapchat og multitasking.',
                'score' => '0,0,0,0,5,0,10,0,0,0,0,0,0',
                'feedback' => 'Psst! Sjekk tvnorgesnap.'
            )
        )
    ),
    array(
        'question' => 'Hva hadde du sagt hvis Tom Stiansen kom inn i rommet nå?',
        'alternatives' => array(
            array(
                'text' => 'Nja, hvorfor ikke?',
                'score' => '0,0,0,0,0,5,0,0,0,0,0,5,0',
                'feedback' => 'Tom byr gjerne på seg selv.'
            ),
            array(
                'text' => 'Kan jeg by på litt rødvin og muggost som er vrien på både uttale og smak?',
                'score' => '3,0,0,0,0,3,0,0,0,0,0,10,0',
                'feedback' => 'Tom er nok litt mer på primus og pinnebrød-kjøret.'
            ),
            array(
                'text' => 'Hvem slapp inn Stalker-Stiansen?!? ALARM! ALARM!',
                'score' => '0,5,5,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Hvis du bare åpner vinduet så flyr han ut av seg selv.'
            )
        )
    ),
    array(
        'question' => 'Ylvis er tilbake på skjermen i høst. Hva tenker du om det?',
        'alternatives' => array(
            array(
                'text' => 'OMG! (:) :) :)) jeg er admin på Kløftas største Ylvis-fanside på Instagram. Er billettene til liveshowet lagt ut?',
                'score' => '0,10,50,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Keep calm and sjekk ut billettservice senere i høst.'
            ),
            array(
                'text' => 'Næh, de var bedre før da de var indie i Bergen.',
                'score' => '5,0,0,0,5,0,0,0,0,0,0,0,0',
                'feedback' => '90-tallet ringte. De vil gjerne ha grungejakka og attituden tilbake.'
            ),
            array(
                'text' => 'Hva er en Ylvis og hva er en OMG?',
                'score' => '0,0,0,0,0,0,0,5,5,0,5,5,0',
                'feedback' => 'Det er mye fint fjernsynsteater på NRK2 du kan sjekke ut.'
            )
        )
    ),
    array(
        'question' => 'Jeg synes TVNorge er best på ...',
        'alternatives' => array(
            array(
                'text' => 'Reality',
                'score' => '0,0,0,10,0,10,0,0,0,10,0,10,0',
                'feedback' => 'Sorry. Det blir ikke noe mer av Den siste viking.'
            ),
            array(
                'text' => 'Humor',
                'score' => '10,10,0,0,10,0,10,0,0,0,0,0,0',
                'feedback' => 'Hvordan vet du at en bil er fra Jamaica? På REGGAEstreringsskiltet!'
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
