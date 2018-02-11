#!/bin/bash

FILETEMPO = /tmp/moyenne_tempo

mysql -uroot -pJeremy96mysql -hlocalhost -Djeresent -e "SELECT AVG(note) FROM note WHERE id_matiere = 1" > $FILETEMPO
