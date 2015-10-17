#!/bin/bash

echo "Test"

x=2
echo "Wartość zmiennej x to $x"
echo -ne "Usłyszysz dzwonek\a\n"
echo "Polecenie date pokaże: `date`"

echo

echo '$USER'
echo $USER

x=`ls -la $PWD`
echo $x

# -n nie jest wysyłany znak nowej linii
# -e włącza inetrpretacje znaków specjalnych takich jak:
# \a czyli alert, usłyszysz dzwonek
# \b backspace
# \c pomija znak kończący nowej linii
# \f escape
# \n form feed czyli wysuw strony
# \r znak nowej linii
# \t tabulacja pozioma
# \v tabulacja pionowa
# \\ backslash
# \nnn znak, którego kod ASCII ma wartość ósemkowo
# \xnnn znak, którego kod ASCII ma wartość szesnastkowo

GDZIE_JESTEM=`pwd`
echo "Jestem w katalogu $GDZIE_JESTEM"

GDZIE_JESTEM=$(pwd)
echo "Jestem w katalogu $GDZIE_JESTEM"

echo "Nazwa skryptu: $0"
echo "Pierwsze trzy parametry: $1 $2 $3"

echo "Wszystkie parametry: $@"

echo "ID procesu: $$"
echo "Kod powrotu ostatnio wykonywanego polecenia: $?" # true, false


array=(value1 value2 value3)
echo ${array[0]}
echo ${array[1]}
echo ${array[2]}

echo ${array[*]}

echo "Długość pierwszego elementu: ${#array[0]}"

echo ${#array[*]}
echo ${#array[@]} # to samo

echo "Dodanie elementu:"
array[3]=value4
echo ${#array[*]}

echo "Usuwanie drugiego elementu:"
unset array[1]
echo ${#array[@]}
echo ${array[@]}

echo "Usunięcie całej tablicy:"
unset array[*]
echo ${#array[@]}
echo ${array[@]}

# sort - polecenie sortuje podany zbiór
# sort < plik

# wyjście dla błędów 2
# echo "error: msg" 2> error.log

# warunki
# czy plik istnieje
if [ -e ~/.bashrc ]
then
	echo "Masz plik .bashrc"
else
	echo "Nie masz pliku .bashrc"
fi

if [ -x /opt/kde/bin/startkde ]; then
	echo "Masz KDE w katalogu /opt"
elif [ -x /usr/bin/startkde ]; then
	echo "Masz KDE w katalogu /usr"
elif [ -x /usr/local/bin/startkde ]; then
	echo "Masz KDE w katalogu /usr/local"
else
	echo "Nie wiem gdzie masz KDE"
fi

# sprawdzanie warunków
# test wyrazenie1 operator wyrazenie2
# jest równe
# [ wyrazenie1 operator wyrazenie2 ]
# ! SPACJE SĄ KONIECZNE

# -a plik istnieje
# -b plik istnieje i jest blokowym plikiem specjalnym
# - plik istnieje i jest plikiem znakowym
# -e plik istnieje
# -h plik istnieje i jest linkiem symbolicznym
# = sprawdza czy wyrażenia są równe
# != sprawdza czy wyrażenia są różne
# -n wyrażenie ma długość większą niż 0
# -d wyrażenie istnieje i jest katalogiem
# -z wyrażenie ma zerową długość
# -r można czytać plik
# -w można zapisywać do pliku
# -x można plik wykonać
# -f plik istnieje i jest plikiem zwykłym
# -p plik jest łączem nazwanym
# -N plik istnieje i był zmieniany od czasu jego ostatniego odczytu
# plik1 -nt plik2 plik1 jest nowszy od pliku2
# plik1 -ot plik2 plik1 jest starszy od pliku2
# -lt mniejsze niż
# -gt większe niż
# -ge większe lub równe
# -le mniejsze lub równe

echo "Podaj cyfrę dnia tygodnia"
read d
case "$d" in
	"1") echo "Poniedziałek" ;;
	"2") echo "Wtorek" ;;
	"3") echo "Środa" ;;
	"4") echo "Czwartek" ;;
	"5") echo "Piątek" ;;
	"6") echo "Sobota" ;;
	"7") echo "Niedziela" ;;
	*)   echo "nic nie wybrałeś"
esac

# pętle
for x in jeden dwa trzy
do
	echo "To jest $x"
done

for x in *a*
do
	echo "Wszystkie pliki zawierające 'a': $x"
done

# Zamienia nazwy plików pisane dużymi literami na małe
# for nazwa in *
# do
#   mv $nazwa `echo $nazwa | tr '[A-Z]' '[a-z]'`
# done

# proste ponumerowane menu
echo "Co wybierasz?"
select y in X Y Z Quit
do
  case $y in
	"X") echo "Wybrałeś X" ;;
	"Y") echo "Wybrałeś Y" ;;
	"Z") echo "Wybrałeś Z" ;;
	"Quit") exit ;;
	*) echo "Nic nie wybrałeś"
  esac
break
done

x=1
while [ $x -le 10 ]; do
	echo "Napis pojawił się po raz: $x"
	x=$[x + 1]
done

x=1
until [ $x -ge 10 ]; do
	echo "Napis pojawił się po raz: $x"
	x=$[x + 1]
done

# input usera
# read -opcje nazwa_zmiennej
# read wpis
# echo "$wpis"
# domyślnie trafia do zmiennej answer

# ze znakiem zachęty:
# read -p "Znak zachęty: " odp
# read -a tablica

function napis
{
	echo "To jest napis"
}

napis

# wyrażenia arytmetyczne
# $((wyrazenia)) lub $[wyrazenie]
wynik=$[4*5/2]
# let wynik=liczba1*liczba2



