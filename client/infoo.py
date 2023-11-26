def get_txt():
    commands = [
        "ifconfig",
        "hostname"
    "hostnamectl",
    "sudo dmidecode -s system-manufacturer",
    "sudo dmidecode -t 2",
    "cat /proc/cpuinfo",
    "cat /proc/meminfo",
    "lsb_release -a",
    "uname -a",
    "arch",
    "fdisk -l | grep '^/dev' ",
    "lsblk",
    "df -h",
    "mount | grep /dev/",
    "lsscsi",
    "ifconfig -l",
    "lspci -vt",
    "lsusb",
    "iwconfig",
    "lspi | grep -i vga",
    "lspi | grep -i audio",
    "acpi -V",
    "ls /sys/class/net",
    "cat /etc/resolv.conf",
    "systemctl list_units --type service --state running",
    "cat /etc/passwd",
    "ps aux",
    "sudo iptables -L -n -v",
    "dpkg -l",
    "cat /etc/group",
    "systemctl list-units --type service --state running",
    "sudo ss",
    "sudo lsmod"]

    result = []
    import os

    for i in commands:
        res = os.popen(i).read()
        result.append(res)

    f = open("info.txt", "w")
    f.write("")
    f.close()
    f = open("info.txt", "a+")
    ll = ""
    for i in result:
        f.write(i)
        ll+=i
    f.close()
    return ll

