<?php

namespace AcervoDigital\Enum;

use AcervoDigital\Enum\BasicEnum;

abstract class GenresOfVideo extends BasicEnum {
	const Action = 0;

}

/*
 * http://www.musicgenreslist.com/
 LIST OF TYPE OF MUSIC | MUSIC GENRES

    Alternative
        Art Punk
        Alternative Rock
        College Rock
        Crossover Thrash (thx Kevin G)
        Crust Punk (thx Haug)
        Experimental Rock
        Folk Punk
        Goth / Gothic Rock
        Grunge
        Hardcore Punk
        Hard Rock
        Indie Rock
        Lo-fi (hat tip to Ben Vee Bedlamite)
        New Wave
        Progressive Rock
        Punk
        Shoegaze (with thx to Jackie Herrera)
        Steampunk (with thx to Christopher Schaeffer)
    Anime
    Blues
        Acoustic Blues
        Chicago Blues
        Classic Blues
        Contemporary Blues
        Country Blues
        Delta Blues
        Electric Blues
        Ragtime Blues (cheers GFS)
    Children�s Music
        Lullabies
        Sing-Along
        Stories
    Classical
        Avant-Garde
        Baroque
        Chamber Music
        Chant
        Choral
        Classical Crossover
        Contemporary Classical (thx Julien Palliere)
        Early Music
        Expressionist (thx Mr. Palliere)
        High Classical
        Impressionist
        Medieval
        Minimalism
        Modern Composition
        Opera
        Orchestral
        Renaissance
        Romantic (early period)
        Romantic (later period)
        Wedding Music
    Comedy
        Novelty
        Standup Comedy
        Vaudeville (cheers Ben Vee Bedlamite)
    Commercial (thank you Sheldon Reynolds)
        Jingles
        TV Themes
    Country
        Alternative Country
        Americana
        Bluegrass
        Contemporary Bluegrass
        Contemporary Country
        Country Gospel
        Country Pop (thanks Sarah Johnson)
        Honky Tonk
        Outlaw Country
        Traditional Bluegrass
        Traditional Country
        Urban Cowboy
    Dance (EDM � Electronic Dance Music � see Electronic below � with thx to Eric Shaffer-Whiting & Drew :-))
        Club / Club Dance (thx Luke Allfree)
        Breakcore
        Breakbeat / Breakstep
        Brostep (cheers Tom Berckley)
        Chillstep (thx Matt)
        Deep House (cheers Venus Pang)
        Dubstep
        Electro House (thx Luke Allfree)
        Electroswing
        Exercise
        Future Garage (thx Ran�dom Haug)
        Garage
        Glitch Hop (cheers Tom Berckley)
        Glitch Pop (thx Ran�dom Haug)
        Grime (thx Ran�dom Haug / Matthew H)
        Hardcore
        Hard Dance
        Hi-NRG / Eurodance
        Horrorcore (thx Matt)
        House
        Jackin House (with thx to Jermaine Benjamin Dale Bruce)
        Jungle / Drum�n�bass
        Liquid Dub(thx Ran�dom Haug)
        Regstep (thanks to �Melia G)
        Speedcore (cheers Matt)
        Techno
        Trance
        Trap (thx Luke Allfree)
    Disney
    Easy Listening
        Bop
        Lounge
        Swing
    Electronic
        2-Step (thx Ran�dom Haug)
        8bit � aka 8-bit, Bitpop and Chiptune � (thx Marcel Borchert)
        Ambient
        Bassline (thx Leon Oliver)
        Chillwave(thx Ran�dom Haug)
        Chiptune (kudos to Dominik Landahl)
        Crunk (with thx to Jillian Edwards)
        Downtempo
        Drum & Bass (thx Luke Allfree)
        Electro
        Electro-swing (thank you Daniel Forthofer)
        Electronica
        Electronic Rock
        Hardstyle (kudos to Dominik Landahl)
        IDM/Experimental
        Industrial
        Trip Hop (thank you Michael Tait Tafoya)
    Enka
    French Pop
    German Folk
    German Pop
    Fitness & Workout
    Hip-Hop/Rap
        Alternative Rap
        Bounce
        Dirty South
        East Coast Rap
        Gangsta Rap
        Hardcore Rap
        Hip-Hop
        Latin Rap
        Old School Rap
        Rap
        Turntablism (thank you Luke Allfree)
        Underground Rap
        West Coast Rap
    Holiday
        Chanukah
        Christmas
        Christmas: Children�s
        Christmas: Classic
        Christmas: Classical
        Christmas: Comedy
        Christmas: Jazz
        Christmas: Modern
        Christmas: Pop
        Christmas: R&B
        Christmas: Religious
        Christmas: Rock
        Easter
        Halloween
        Holiday: Other
        Thanksgiving
    Indie Pop
    Industrial
    Inspirational � Christian & Gospel
        CCM
        Christian Metal
        Christian Pop
        Christian Rap
        Christian Rock
        Classic Christian
        Contemporary Gospel
        Gospel
        Christian & Gospel
        Praise & Worship
        Qawwali (with thx to Jillian Edwards)
        Southern Gospel
        Traditional Gospel
    Instrumental
        March (Marching Band)
    J-Pop
        J-Rock
        J-Synth
        J-Ska
        J-Punk
    Jazz
        Acid Jazz (with thx to Hunter Nelson)
        Avant-Garde Jazz
        Bebop (thx Mwinogo1)
        Big Band
        Blue Note (with thx to Jillian Edwards)
        Contemporary Jazz
        Cool
        Crossover Jazz
        Dixieland
        Ethio-jazz (with thx to Jillian Edwards)
        Fusion
        Gypsy Jazz (kudos to Mike Tait Tafoya)
        Hard Bop
        Latin Jazz
        Mainstream Jazz
        Ragtime
        Smooth Jazz
        Trad Jazz
    K-Pop
    Karaoke
    Kayokyoku
    Latin
        Alternativo & Rock Latino
        Argentine tango (gracias P. Moth & Sandra Sanders)
        Baladas y Boleros
        Bossa Nova (with thx to Marcos Jos� Sant�Anna Magalh�es & Alex Ede for the reclassification)
        Brazilian
        Contemporary Latin
        Cumbia (gracias Richard Kemp)
        Flamenco / Spanish Flamenco (thank you Michael Tait Tafoya & Sandra Sanders)
        Latin Jazz
        Nuevo Flamenco (and again Michael Tafoya)
        Pop Latino
        Portuguese fado (and again Sandra Sanders)
        Ra�ces
        Reggaeton y Hip-Hop
        Regional Mexicano
        Salsa y Tropical
    New Age
        Environmental
        Healing
        Meditation
        Nature
        Relaxation
        Travel
    Opera
    Pop
        Adult Contemporary
        Britpop
        Bubblegum Pop (thx Haug & John Maher)
        Chamber Pop (thx Haug)
        Dance Pop
        Dream Pop (thx Haug)
        Electro Pop (thx Haug)
        Orchestral Pop (thx Haug)
        Pop/Rock
        Pop Punk (thx Makenzie)
        Power Pop (thx Haug)
        Soft Rock
        Synthpop (thx Haug)
        Teen Pop
    R&B/Soul
        Contemporary R&B
        Disco (not a top level genre Sheldon Reynolds!)
        Doo Wop
        Funk
        Modern Soul (Cheers Nik)
        Motown
        Neo-Soul
        Northern Soul (Cheers Nik & John Maher)
        Psychedelic Soul (thank you John Maher)
        Quiet Storm
        Soul
        Soul Blues (Cheers Nik)
        Southern Soul (Cheers Nik)
    Reggae
        2-Tone (thx GFS)
        Dancehall
        Dub
        Roots Reggae
        Ska
    Rock
        Acid Rock (with thanks to Alex Antonio)
        Adult-Oriented Rock (thanks to John Maher)
        Afro Punk
        Adult Alternative
        Alternative Rock (thx Caleb Browning)
        American Trad Rock
        Anatolian Rock
        Arena Rock
        Art Rock
        Blues-Rock
        British Invasion
        Cock Rock
        Death Metal / Black Metal
        Doom Metal (thx Kevin G)
        Glam Rock
        Gothic Metal (fits here Sam DeRenzis � thx)
        Grind Core
        Hair Metal
        Hard Rock
        Math Metal (cheers Kevin)
        Math Rock (thx Ran�dom Haug)
        Metal
        Metal Core (thx Ran�dom Haug)
        Noise Rock (genre � Japanoise � thx Dominik Landahl)
        Jam Bands
        Post Punk (thx Ben Vee Bedlamite)
        Prog-Rock/Art Rock
        Progressive Metal (thx Ran�dom Haug)
        Psychedelic
        Rock & Roll
        Rockabilly (it�s here Mark Murdock!)
        Roots Rock
        Singer/Songwriter
        Southern Rock
        Spazzcore (thx Haug)
        Stoner Metal (duuuude)
        Surf
        Technical Death Metal (cheers Pierre)
        Tex-Mex
        Time Lord Rock (Trock) ~ (thanks to �Melia G)
        Trash Metal (thanks to Pierre A)
    Singer/Songwriter
        Alternative Folk
        Contemporary Folk
        Contemporary Singer/Songwriter
        Indie Folk (with thanks to Andrew Barrett)
        Folk-Rock
        Love Song (Chanson � merci Marcel Borchert)
        New Acoustic
        Traditional Folk
    Soundtrack
        Foreign Cinema
        Movie Soundtrack (thanks Julien)
        Musicals
        Original Score
        Soundtrack
        TV Soundtrack
    Spoken Word
    Tex-Mex / Tejano (with thx to Israel Lopez)
        Chicano
        Classic
        Conjunto
        Conjunto Progressive
        New Mex
        Tex-Mex
    Vocal
        A cappella (with kudos to Sheldon Reynolds)
        Barbershop (with thx to Kelly Chism)
        Doo-wop (with thx to Bradley Thompson)
        Gregorian Chant (hat tip to Deborah Knight-Nikifortchuk)
        Standards
        Traditional Pop
        Vocal Jazz
        Vocal Pop
    World
        Africa
        Afro-Beat
        Afro-Pop
        Asia
        Australia
        Cajun
        Calypso (thx Gerald John)
        Caribbean
        Carnatic (Karnataka Sanghetha � thx Abhijith)
        Celtic
        Celtic Folk
        Contemporary Celtic
        Coup�-d�cal� (thx Samy) � Congo
        Dangdut (thank you Achmad Ivanny)
        Drinking Songs
        Drone (with thx to Robert Conrod)
        Europe
        France
        Hawaii
        Hindustani (thank you Abhijith)
        Indian Ghazal (thank you Gitika Thakur)
        Indian Pop
        Japan
        Japanese Pop
        Klezmer
        Mbalax (thank you Samy) � Senegal
        Middle East
        North America
        Ode (thank you Sheldon Reynolds)
        Piphat (cheers Samy B) � Thailand
        Polka
        Soca (thx Gerald John)
        South Africa
        South America
        Traditional Celtic
        Worldbeat
        Zydeco


 * */