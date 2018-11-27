#!/bin/bash

FILETEMPO=/tmp/moyenne_tempo

#mysql -uroot -pJeremy96mysql -hlocalhost -Ddev -e "SELECT ROUND(AVG(note), 2), id_matiere FROM note GROUP BY id_matiere" > $FILETEMPO

#sed '1d' $FILETEMPO > fichier.tmp && mv fichier.tmp $FILETEMPO
#expand $FILETEMPO >fichier.tmp && mv fichier.tmp $FILETEMPO
#OLDIFS=$IFS
#IFS="	"

for line in $(mysql -uroot -pJeremy96mysql -hlocalhost -Ddev -e "SELECT ROUND(AVG(note), 2), id_matiere FROM note GROUP BY id_matiere")
do
	#set $line
	echo $line
	#moyenne=$1
	#matiere=$2
	#echo "Matiere : "$2" moyenne : "$1
	#query="UPDATE matiere SET moyenne_matiere = ${1} WHERE id = ${2}"
	#echo $query
	#mysql -uroot -pJeremy96mysql -hlocalhost -Ddev -e "UPDATE matiere SET moyenne_matiere = ${1} WHERE id = ${2}"
done

#IFS=$OLDIFS
