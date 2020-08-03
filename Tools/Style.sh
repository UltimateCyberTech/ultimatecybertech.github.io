#!/data/data/com.termux/files/usr/bin/bash
clear
#Internet Connection check
pkg install ruby
gem install lolcat                                         clear
wget -q --spider "https://www.google.com/"

if [ $? -eq 0 ];then
	echo -e "\e[1;32mYour Internet connection is ON\e[0m"
	sl|lolcat
else
	echo -e "\e[1;31mPlease Turn on your Internet\e[0m"
	exit
fi
clear
#Coding starts from here
echo "
████████╗   ███████╗████████╗██╗   ██╗██╗     ███████╗
╚══██╔══╝   ██╔════╝╚══██╔══╝╚██╗ ██╔╝██║     ██╔════╝
   ██║      ███████╗   ██║    ╚████╔╝ ██║     █████╗
   ██║      ╚════██║   ██║     ╚██╔╝  ██║     ██╔══╝
   ██║   ██╗███████║   ██║      ██║   ███████╗███████╗
   ╚═╝   ╚═╝╚══════╝   ╚═╝      ╚═╝   ╚══════╝╚══════╝
"|lolcat -a
wget -q https://github.com/UltimateCyberTech/Cyber-Termux/raw/master/Packages/termux-style.deb
g='\e[1;32m[+]\e[0m'
r='\e[1;31m[!]\e[0m'
echo
echo
echo
echo
echo
echo -e "$g Wait a minute"|lolcat -a
echo
echo -e "$g Installing TermuX-StylE"|lolcat -a
apt-get install ./termux-style.deb -q --silent
rm termux-style.deb
echo
echo
echo -e "$r Finished :)"|lolcat -a
echo "Now type=> style"|lolcat -a
rm Style.sh

