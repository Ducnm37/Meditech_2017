## xem các user trong group
ví dụ:
`$ getent group libvirtd`

<img src="https://i.imgur.com/mio2R9i.png">

## Nếu dùng lệnh virt-manager bị lỗi, hay kiểm tra xem khi ssh tới server KVM đã bật xác thực X11 chưa.
Ví dụ: ssh -X user@....

## Để biết VM đang dùng bridge nào (switch ảo) thì vào xem file cấu hình của VM đó 
`/etc/libvirt/qemu/xxx.xml`
## Có thể tạo switch từ linux bridge mà kết nối đươc với card Wifi
link hướng dẫn: https://wiki.debian.org/BridgeNetworkConnections

## Cấu hình VTP trên switch
là để đồng bộ VLAN giữa switch server và switch client. 

## Ping toàn mạng để cập nhật arp table cho KVM từ đó tìm ra IP của các VM thông qua MAC của chúng
- `fping -c 1 -g 192.168.100.0/24`
- `arp -a | grep 52:54:00:cd:76:3a`
Hoặc: sử dụng `nmap -sP 192.168.1.0/24` quét toàn bộ mạng sẽ show ra đc IP và MAC của tất cả host trong m