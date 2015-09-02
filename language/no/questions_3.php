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
        'question' => 'Hvor gammel er du?',
        'alternatives' => array(
            array(
                'text' => 'Jeg husker Casino med Hallvard Flatland.',
                'score' => '0,0,0,0,0,0,0,0,0,10,5,10,0',
                'feedback' => 'Hva med «Tause Birgitte» og «Haugen i bua»?'
            ),
            array(
                'text' => 'Jeg husker Heia Tufte med Erik Thorstvedt.',
                'score' => '0,0,0,0,0,5,0,0,0,0,5,0,0',
                'feedback' => 'Erik var hele Norges DILF.'
            ),
            array(
                'text' => 'Jeg prøver å glemme Killer Karaoke.',
                'score' => '5,5,0,0,5,0,0,0,0,0,0,0,0',
                'feedback' => 'Salgsavdelingen vår prøver også å glemme.'
            )
        )
    ),
    array(
        'question' => 'Hvilken av disse historiene tror du er fleip?',
        'alternatives' => array(
            array(
                'text' => 'Petter Schjerven har tapt i håndbak mot Pia Lykke.',
                'score' => '0,0,0,5,0,0,0,0,0,5,0,0,0',
                'feedback' => 'Fakta. Det skjedde på en firmafest.'
            ),
            array(
                'text' => 'Thomas Giertsen brakk armen i håndbak mot en anonym dame.',
                'score' => '0,0,5,0,0,0,5,0,0,0,0,0,0',
                'feedback' => 'Fakta. Det skjedde under et sceneshow.'
            ),
            array(
                'text' => 'Ine Jansen er kretsmester i håndbak.',
                'score' => '0,5,0,0,0,5,0,0,5,0,0,0,0',
                'feedback' => 'Fleip. Men hun har blikket til en kretsmester.'
            )
        )
    ),
    array(
        'question' => 'Du har blitt arrestert og får lov til å ta én telefon. Hvem ringer du?',
        'alternatives' => array(
            array(
                'text' => 'Esben «Dansken» Selvig. Noe sier meg at han kjenner noen som kjenner noen.',
                'score' => '0,0,0,0,0,0,25,0,0,0,0,0,0',
                'feedback' => 'Ingen dansker har vel egentlig rent mel i posen?'
            ),
            array(
                'text' => 'Odd Magnus «Odda» Williamson. Han kjenner ihvertfall noen.',
                'score' => '0,0,0,0,10,0,0,0,0,0,0,0,0',
                'feedback' => 'Har du sett gangstertatoveringene hans, eller?'
            ),
            array(
                'text' => 'Bård Ylvisåker. Får jeg virkelig telefonnummeret til Bård?',
                'score' => '0,0,50,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Sorry, Bård har megahemmelig NASA-kryptert nummer.'
            )
        )
    ),
   	array(
		'question' => 'Hvilken suvenir fra TVNorge-universet ville du helst hatt kloa i?',
		'alternatives' => array(
		    array(
		        'text' => 'Lusekofta til Asbjørn Brekke.',
		        'score' => '0,0,5,0,0,0,0,0,0,0,0,5,0',
		        'feedback' => 'Du ombestemmer deg når du ser rødvinsflekkene.'
		    ),
		    array(
		        'text' => 'En lokk av Magnus Devolds hår.',
		        'score' => '5,10,0,0,0,0,0,0,0,0,0,0,0',
		        'feedback' => 'Vi kan klippe en liten tufs til deg når Magnus sover.'
		    ),
		    array(
		        'text' => 'Garderoben til Christine Koht.',
		        'score' => '0,0,0,5,0,0,0,0,5,5,0,0,0',
		        'feedback' => 'Den har nok mer farger en fabrikken til Jotun.'
        	)
	    ),
	),
    array(
        'question' => 'Hva ville du gjort hvis du var TVNorge-sjef én dag?',
        'alternatives' => array(
            array(
                'text' => 'Tvunget Harald Eia til å holde tale i bursdagen din.',
                'score' => '10,0,0,0,5,0,0,0,0,0,0,0,0',
                'feedback' => 'Be han dra en vits om avansert spillteori.'
            ),
            array(
                'text' => 'Sneket deg med på innspilling av Åndenes makt for å se om spøkelsene er ekte.',
                'score' => '0,0,0,0,0,0,0,50,0,0,0,0,0',
                'feedback' => 'Tom Strømnæss lover å ikke skremme deg med lommelykt under haka.'
            ),
            array(
                'text' => 'Gitt Magnus Devold en ordentlig TV-jobb.',
                'score' => '0,25,10,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Voilà. Kjendiskveld med Magnus Devold har premiere 8. september.'
            )
        )
    ),
    array(
        'question' => 'Hva irriterer deg når du ser på TV?',
        'alternatives' => array(
            array(
                'text' => 'At altfor få fremmede gifter seg på TV uten å møtes på forhånd.',
                'score' => '0,0,0,0,0,0,0,0,0,25,0,0,0',
                'feedback' => 'Paradise Hotel burde ta ansvar og arrangere flere bryllup.'
			),
            array(
                'text' => 'At du ikke vet hva Knut Nærum gjør en helt vanlig dag.',
                'score' => '0,0,0,0,25,0,0,0,0,0,0,0,0',
                'feedback' => 'Knut leser sikkert bare tegneserier på senga hele dagen.'
            ),
            array(
                'text' => 'At håndverkere på TV generelt er for blide.',
                'score' => '0,0,0,0,0,0,0,0,0,0,25,0,0',
                'feedback' => 'Vi har nummeret til noen mugne rørleggere hvis du trenger.'
            )
        )
    ),
    array(
        'question' => 'Jeg synes TVNorge er best på ...',
        'alternatives' => array(
            array(
                'text' => 'Reality',
                'score' => '1.0,0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Vær deg selv 110 prosent!'
            ),
            array(
                'text' => 'Humor',
                'score' => '0,1.0,0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Har du hørt den om …'
            ),
            array(
                'text' => 'Underholdning',
                'score' => '0,0,1.0,0,0,0,0,0,0,0,0,0,0',
                'feedback' => 'Gullrekka må se seg over skuldra.'
            )
        )
    )
);
?>
