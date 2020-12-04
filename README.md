# TheBraveHero

 Job Interview
 
 



The Brave Hero

Povestea:

Avem un erou curajos, pe nume lui Carl, la fel ca toti ceilalti eroi, Carl are puncte forte dar si

slabiciuni.

Dupa multe batalii cu monstri fiorosi, Carl are acum urmatoarele caracteristici:

● Viata: 65 – 95

● Putere: 60 - 70

● Aparare: 40 – 50

● Viteza: 40 – 50

● Noroc: 10% - 30% (0% nu are noroc deloc, 100% are noroc tot timpul).

De asemenea, eroul nostru are 2 puteri speciale:

● Forta dragonului: Aceasta vraja misterioasa ii va dubla puterea eroului; Exista 10% sanse sa

activeze aceasta putere de fiecare data cand ataca;

● Scutul fermecat: Carl are 20% sansa sa injumatateasca atacul primit din partea unui adversar, de

fiecare data cand este atacat.

Gameplay

Dupa ce si-a baut cafeaua de dimineata, Carl a plecat la vanatoare in padurea fermecata, unde a dat

de o bestie cu urmatoarele caracteristici:

● Viata: 55 - 80

● Putere: 50 – 80

● Aparare: 35 – 55

● Viteza: 40 – 60

● Noroc: 25% - 40%

Oare va castiga bravul nostru erou? Hai sa aflam impreuna!

Simuleaza o lupta intre Carl si bestie in browser sau in command line. La fiecare lupta Carl si bestia

va initializa lupta cu valori random (in range-urile fiecarui caracter).

Primul atac este initializat de caracterul cu cea mai mare viteza, daca ambele caractere au viteza

identica primul care va ataca va fi cel cu norocul cel mai mare. Dupa atac, caracterele isi schimba

rolurile: atacatorul se apara si aparatorul ataca.

Damage-ul incasat se scade din viata caracterului care se apara si el se calculeaza dupa cum

urmeaza:

Damage = Puterea atacatorului – Apararea aparatorului (daca rezultatul este mai mic ca 0 atunci el

va fi 0, daca va fi mai mare ca 100 atunci va fi 100)

Un atacator poate rata daca aparatorul are noroc in acea tura (conform sanselor din caracteristici)

Puterile lui Carl se activeaza random in fiecare tura in functie de sansele lor.

Game over

Jocul se termina atunci cand un caracter ramane fara viata sau cand au fost finalizate 20 de ture.

Aplicatia trebuie sa afiseze rezultatele fiecarei ture: ce s-a intamplat, ce abilitati au fost folosite (daca

au fost), daunele facute, sanatatea aparatorului etc.

Daca avem un castigator inainte de cele 20 de ture, acesta trebuie anuntat.

Reguli

Padurea fermecata este locul in care magia se intampla. Totusi, pentru ca aceasta magie sa

functioneze, va trebui sa urmezi cateva reguli:

• Scrie cod in plain PHP, fara frameworkuri (poti folosi cu incredere PHPUnit, chiar am fi

curiosi sa vedem cateva teste)

• Asigurate ca aplicatia ta este decuplata, codul poate fi refolosit. De exemplu, putem sa ii

adauga o noua putere lui Carl?

• Codul tau este testat si fara buguri?

• Nu ai un timp limita asa ca dorim sa gasesti cea mai buna rezolvare.

