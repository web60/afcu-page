<?php

/**
_________  ________             ________  ___________   _____  ________   
\_   ___ \ \_____  \            \______ \ \_   _____/  /  _  \ \______ \  
/    \  \/  /   |   \    ______  |    |  \ |    __)_  /  /_\  \ |    |  \ 
\     \____/    |    \  /_____/  |    `   \|        \/    |    \|    `   \
 \______  /\_______  /          /_______  /_______  /\____|__  /_______  /
        \/         \/                   \/        \/         \/        \/ 
		
			ICQ & Telegram = @CO_DEAD
            CO-DEAD Advanced Protection Module

            
 * DO NOT SELL THIS SCRIPT !
 * DO NOT CHANGE COPYRIGHT !
            
**/ 
//eval(base64_decode('CiBnb3RvIGdzM2JLOyBHVTFxeDogJHJhbmRvbV9pZCA9IHNoYTEocmFuZCgwLCAxMDAwMDAwKSk7IGdvdG8gVjdWV2c7IEYweGkzOiAkY2hlY2tsaXN0ID0gbmV3IElwQmxvY2tMaXN0KCk7IGdvdG8gR1UxcXg7IHJldDF6OiBjbGFzcyBJcExpc3QgeyBwcml2YXRlICRpcGxpc3QgPSBhcnJheSgpOyBwcml2YXRlICRpcGZpbGUgPSAnJzsgcHVibGljIGZ1bmN0aW9uIF9fY29uc3RydWN0KCRsaXN0KSB7ICRjb250ZW50cyA9IGFycmF5KCk7ICR0aGlzLT5pcGZpbGUgPSAkbGlzdDsgJGxpbmVzID0gJHRoaXMtPnJlYWQoJGxpc3QpOyBmb3JlYWNoICgkbGluZXMgYXMgJGxpbmUpIHsgJGxpbmUgPSB0cmltKCRsaW5lKTsgaWYgKGVtcHR5KCRsaW5lKSkgeyBjb250aW51ZTsgfSBpZiAoJGxpbmVbMF0gPT0gIlx4MjMiKSB7IGNvbnRpbnVlOyB9ICR0ZW1wID0gZXhwbG9kZSgiXHgyMyIsICRsaW5lKTsgJGxpbmUgPSB0cmltKCR0ZW1wWzBdKTsgJGNvbnRlbnRzW10gPSAkdGhpcy0+bm9ybWFsKCRsaW5lKTsgfSAkdGhpcy0+aXBsaXN0ID0gJGNvbnRlbnRzOyB9IHB1YmxpYyBmdW5jdGlvbiBfX2Rlc3RydWN0KCkgeyB9IHB1YmxpYyBmdW5jdGlvbiBfX3RvU3RyaW5nKCkgeyByZXR1cm4gaW1wbG9kZSgiXDQwIiwgJHRoaXMtPmlwbGlzdCk7IH0gcHVibGljIGZ1bmN0aW9uIGlzX2lubGlzdCgkaXApIHsgJHJldHZhbCA9IGZhbHNlOyBmb3JlYWNoICgkdGhpcy0+aXBsaXN0IGFzICRpcGYpIHsgJHJldHZhbCA9ICR0aGlzLT5pcF9pbl9yYW5nZSgkaXAsICRpcGYpOyBpZiAoJHJldHZhbCA9PT0gdHJ1ZSkgeyAkdGhpcy0+cmFuZ2UgPSAkaXBmOyBicmVhazsgfSB9IHJldHVybiAkcmV0dmFsOyB9IHB1YmxpYyBmdW5jdGlvbiBpcGxpc3QoKSB7IHJldHVybiAkdGhpcy0+aXBsaXN0OyB9IHB1YmxpYyBmdW5jdGlvbiBtZXNzYWdlKCkgeyByZXR1cm4gJHRoaXMtPnJhbmdlOyB9IHB1YmxpYyBmdW5jdGlvbiBhcHBlbmQoJGlwLCAkY29tbWVudCkgeyByZXR1cm4gZmlsZV9wdXRfY29udGVudHMoJHRoaXMtPmlwZmlsZSwgJGlwLCAkY29tbWVudCk7IH0gcHVibGljIGZ1bmN0aW9uIGxpc3RuYW1lKCkgeyByZXR1cm4gJHRoaXMtPmlwZmlsZTsgfSBwcml2YXRlIGZ1bmN0aW9uIHJlYWQoJGZuYW1lKSB7IHRyeSB7ICRmaWxlID0gZmlsZSgkZm5hbWUsIEZJTEVfSUdOT1JFX05FV19MSU5FUyB8IEZJTEVfU0tJUF9FTVBUWV9MSU5FUyk7IH0gY2F0Y2ggKEV4Y2VwdGlvbiAkZSkgeyB0aHJvdyBuZXcgRXhjZXB0aW9uKCRmbmFtZSAuICJcNzJceDIwIiAuICRlLT5nZXRtZXNzYWdlKCkgLiAiXDEyIik7IH0gcmV0dXJuICRmaWxlOyB9IHByaXZhdGUgZnVuY3Rpb24gaXBfaW5fcmFuZ2UoJGlwLCAkcmFuZ2UpIHsgaWYgKHN0cnBvcygkcmFuZ2UsICJcNTciKSAhPT0gZmFsc2UpIHsgbGlzdCgkcmFuZ2UsICRuZXRtYXNrKSA9IGV4cGxvZGUoIlx4MmYiLCAkcmFuZ2UsIDIpOyBpZiAoc3RycG9zKCRuZXRtYXNrLCAiXHgyZSIpICE9PSBmYWxzZSkgeyAkbmV0bWFzayA9IHN0cl9yZXBsYWNlKCJcNTIiLCAiXDYwIiwgJG5ldG1hc2spOyAkZG5ldG1hc2sgPSBpcDJsb25nKCRuZXRtYXNrKTsgcmV0dXJuIChpcDJsb25nKCRpcCkgJiAkZG5ldG1hc2spID09IChpcDJsb25nKCRyYW5nZSkgJiAkZG5ldG1hc2spOyB9IGVsc2UgeyAkciA9IGV4cGxvZGUoIlx4MmUiLCAkcmFuZ2UpOyB3aGlsZSAoY291bnQoJHIpIDwgNCkgeyAkcltdID0gIlw2MCI7IH0gZm9yICgkaSA9IDA7ICRpIDwgNDsgJGkrKykgeyAkclskaV0gPSBlbXB0eSgkclskaV0pID8gIlw2MCIgOiAkclskaV07IH0gJHJhbmdlID0gaW1wbG9kZSgiXDU2IiwgJHIpOyAkZG5ldG1hc2sgPSB+KHBvdygyLCAzMiAtICRuZXRtYXNrKSAtIDEpOyByZXR1cm4gKGlwMmxvbmcoJGlwKSAmICRkbmV0bWFzaykgPT0gKGlwMmxvbmcoJHJhbmdlKSAmICRkbmV0bWFzayk7IH0gfSBlbHNlIHsgaWYgKHN0cnBvcygkcmFuZ2UsICJceDJhIikgIT09IGZhbHNlKSB7ICRsb3cgPSBzdHJfcmVwbGFjZSgiXHgyYSIsICJceDMwIiwgJHJhbmdlKTsgJGhpZ2ggPSBzdHJfcmVwbGFjZSgiXHgyYSIsICJcNjJceDM1XDY1IiwgJHJhbmdlKTsgJHJhbmdlID0gJGxvdyAuICJcNTUiIC4gJGhpZ2g7IH0gaWYgKHN0cnBvcygkcmFuZ2UsICJcNTUiKSAhPT0gZmFsc2UpIHsgbGlzdCgkbG93LCAkaGlnaCkgPSBleHBsb2RlKCJceDJkIiwgJHJhbmdlLCAyKTsgJGRsb3cgPSAkdGhpcy0+dG9Mb25ncygkbG93KTsgJGRoaWdoID0gJHRoaXMtPnRvTG9uZ3MoJGhpZ2gpOyAkZGlwID0gJHRoaXMtPnRvTG9uZ3MoJGlwKTsgcmV0dXJuICR0aGlzLT5jb21wYXJlKCRkaXAsICRkbG93KSAhPSAtMSAmJiAkdGhpcy0+Y29tcGFyZSgkZGlwLCAkZGhpZ2gpICE9IDE7IH0gfSByZXR1cm4gJGlwID09ICRyYW5nZTsgfSBwcml2YXRlIGZ1bmN0aW9uIG5vcm1hbCgkcmFuZ2UpIHsgaWYgKHN0cnBicmsoIlx4MmFceDJkXHgyZiIsICRyYW5nZSkgPT09IEZhbHNlKSB7ICRyYW5nZSAuPSAiXDU3XDYzXHgzMiI7IH0gcmV0dXJuIHN0cl9yZXBsYWNlKCJceDIwIiwgJycsICRyYW5nZSk7IH0gcHJpdmF0ZSBmdW5jdGlvbiB0b0xvbmdzKCRpcCkgeyAkUGFydHMgPSBleHBsb2RlKCJceDJlIiwgJGlwKTsgJElwID0gYXJyYXkoJycsICcnKTsgZm9yICgkaSA9IDA7ICRpIDwgMjsgJGkrKykgeyAkSXBbMF0gLj0gc3RyX3BhZChiYXNlX2NvbnZlcnQoJFBhcnRzWyRpXSwgMTYsIDIpLCAxNiwgMCwgU1RSX1BBRF9MRUZUKTsgfSBmb3IgKCRpID0gMjsgJGkgPCA0OyAkaSsrKSB7ICRJcFsxXSAuPSBzdHJfcGFkKGJhc2VfY29udmVydCgkUGFydHNbJGldLCAxNiwgMiksIDE2LCAwLCBTVFJfUEFEX0xFRlQpOyB9IHJldHVybiBhcnJheShiYXNlX2NvbnZlcnQoJElwWzBdLCAyLCAxMCksIGJhc2VfY29udmVydCgkSXBbMV0sIDIsIDEwKSk7IH0gcHJpdmF0ZSBmdW5jdGlvbiBjb21wYXJlKCRpcGRlYzEsICRpcGRlYzIpIHsgaWYgKCRpcGRlYzFbMF0gPCAkaXBkZWMyWzBdKSB7IHJldHVybiAtMTsgfSBlbHNlaWYgKCRpcGRlYzFbMF0gPiAkaXBkZWMyWzBdKSB7IHJldHVybiAxOyB9IGVsc2VpZiAoJGlwZGVjMVsxXSA8ICRpcGRlYzJbMV0pIHsgcmV0dXJuIC0xOyB9IGVsc2VpZiAoJGlwZGVjMVsxXSA+ICRpcGRlYzJbMV0pIHsgcmV0dXJuIDE7IH0gcmV0dXJuIDA7IH0gfSBnb3RvIEpnUXBCOyB3N0lDODogZGF0ZV9kZWZhdWx0X3RpbWV6b25lX3NldCgiXHg0MVx4NzNcMTUxXHg2MVw1N1wxMTJcMTQxXDE1M1x4NjFcMTYyXHg3NFx4NjEiKTsgZ290byBGMHhpMzsgVjdWV2c6IGZvcmVhY2ggKCRpcHMgYXMgJGlwKSB7ICRyZXN1bHQgPSAkY2hlY2tsaXN0LT5pcFBhc3MoJGlwKTsgaWYgKCEkcmVzdWx0KSB7ICRtc2cgPSAiXDEwNlwxMDFcMTExXDExNFwxMDVcMTA0XHgzYVx4MjAiIC4gJGNoZWNrbGlzdC0+bWVzc2FnZSgpOyAkaXAgPSBnZXRlbnYoIlx4NTJceDQ1XDExNVx4NGZcMTI0XHg0NVx4NWZceDQxXHg0NFwxMDRceDUyIik7IGRpZSgiXDc0XHgyMVwxMDRcMTE3XHg0M1x4NTRcMTMxXDEyMFx4NDVcNDBceDQ4XDEyNFx4NGRceDRjXDQwXDEyMFx4NTVcMTAyXHg0Y1wxMTFcMTAzXHgyMFx4MjJcNTVceDJmXHgyZlx4NDlceDQ1XDEyNFx4NDZceDJmXDU3XDEwNFx4NTRceDQ0XHgyMFwxMTBcMTI0XDExNVx4NGNceDIwXDYyXHgyZVw2MFx4MmZcNTdceDQ1XHg0ZVw0Mlx4M2VceDNjXHg2OFwxNjRceDZkXHg2Y1x4M2VcNzRcMTUwXDE0NVx4NjFceDY0XHgzZVx4M2NceDc0XDE1MVx4NzRcMTU0XDE0NVx4M2VcNjRceDMwXHgzNFw0MFx4NGVcMTU3XDE2NFw0MFx4NDZcMTU3XHg3NVwxNTZceDY0XHgzY1x4MmZceDc0XHg2OVx4NzRceDZjXHg2NVx4M2VcNzRceDJmXDE1MFwxNDVceDYxXDE0NFw3Nlx4M2NceDYyXHg2ZlwxNDRcMTcxXDc2XDc0XHg2OFx4MzFcNzZceDRlXDE1N1x4NzRcNDBcMTA2XDE1N1x4NzVceDZlXHg2NFw3NFw1N1x4NjhceDMxXHgzZVw3NFwxNjBceDNlXHg1NFwxNTBcMTQ1XDQwXHg3Mlx4NjVcMTYxXDE2NVwxNDVcMTYzXDE2NFwxNDVceDY0XHgyMFwxMjVcMTIyXHg0Y1x4MjBceDc3XHg2MVx4NzNcNDBcMTU2XDE1N1wxNjRceDIwXDE0Nlx4NmZceDc1XHg2ZVx4NjRceDIwXDE1N1wxNTZceDIwXDE2NFx4NjhcMTUxXDE2M1x4MjBcMTQyXDE1NFwxNTdcMTQzXDE1M1wxNDVcMTYyXDQwXHg3M1x4NjVcMTYyXDE2Nlx4NjVcMTYyXHgyZVw3NFx4MmZceDcwXHgzZVx4M2NceDcwXDc2XDEwMVx4NjRceDY0XDE1MVwxNjRceDY5XDE1N1x4NmVceDYxXHg2Y1x4NmNceDc5XHgyY1w0MFwxNDFcNDBceDM0XHgzMFw2NFw0MFx4NGVceDZmXDE2NFw0MFwxMDZcMTU3XDE2NVwxNTZcMTQ0XHgyMFwxNDVcMTYyXHg3Mlx4NmZcMTYyXHgyMFx4NzdcMTQxXHg3M1x4MjBcMTQ1XHg2ZVwxNDNcMTU3XDE2NVx4NmVcMTY0XDE0NVx4NzJcMTQ1XHg2NFw0MFx4NzdcMTUwXDE1MVwxNTRceDY1XHgyMFwxNjRceDcyXHg3OVwxNTFcMTU2XHg2N1w0MFx4NzRcMTU3XDQwXDE2NVx4NzNceDY1XHgyMFx4NjFceDZlXHgyMFwxMDVceDcyXHg3Mlx4NmZcMTYyXDEwNFx4NmZceDYzXDE2NVwxNTVceDY1XHg2ZVwxNjRceDIwXHg3NFwxNTdcNDBceDY4XDE0MVwxNTZcMTQ0XDE1NFwxNDVcNDBcMTY0XDE1MFwxNDVceDIwXHg3MlwxNDVceDcxXHg3NVwxNDVceDczXDE2NFx4MmVcNDBceDY2XHg2Zlx4NzVcMTU2XDE0NFw0MFwxNTdcMTU2XDQwXHg2NFx4NjJcNzRcNTdceDcwXHgzZVx4M2NceDJmXHg2MlwxNTdcMTQ0XDE3MVx4M2VceDNjXDU3XHg2OFx4NzRceDZkXHg2Y1w3NiIpOyB9IH0gZ290byByZXQxejsgZ3MzYks6ICRpcHMgPSBhcnJheSgkX1NFUlZFUlsiXHg1MlwxMDVcMTE1XHg0Zlx4NTRceDQ1XDEzN1x4NDFceDQ0XDEwNFx4NTIiXSk7IGdvdG8gdzdJQzg7IEpnUXBCOiBjbGFzcyBJcEJsb2NrTGlzdCB7IHByaXZhdGUgJHN0YXR1c2lkID0gYXJyYXkoIlx4NmVcMTQ1XDE0N1x4NjFcMTY0XHg2OVwxNjZceDY1IiA9PiAtMSwgIlwxNTZcMTQ1XDE2NVx4NzRceDcyXDE0MVwxNTQiID0+IDAsICJceDcwXDE1N1x4NzNcMTUxXDE2NFwxNTFceDc2XHg2NSIgPT4gMSk7IHByaXZhdGUgJHdoaXRlbGlzdCA9IGFycmF5KCk7IHByaXZhdGUgJGJsYWNrbGlzdCA9IGFycmF5KCk7IHByaXZhdGUgJG1lc3NhZ2UgPSBOVUxMOyBwcml2YXRlICRzdGF0dXMgPSBOVUxMOyBwdWJsaWMgZnVuY3Rpb24gX19jb25zdHJ1Y3QoJHdoaXRlbGlzdGZpbGUgPSBfX0RJUl9fIC4gIlw1N1wxNDRcMTQxXDE2NFwxNDFcMTQyXDE0MVwxNjNceDY1XDU3XDE2N1x4NjhceDY5XDE2NFx4NjVcMTU0XHg2OVwxNjNcMTY0XHgyZVx4NjRcMTQxXDE2NCIsICRibGFja2xpc3RmaWxlID0gX19ESVJfXyAuICJceDJmXDE0NFx4NjFceDc0XHg2MVx4NjJceDYxXHg3M1wxNDVceDJmXDE0Mlx4NmNcMTQxXDE0M1x4NmJcMTU0XDE1MVx4NzNceDc0XHgyZVx4NjRceDYxXDE2NCIpIHsgJHRoaXMtPndoaXRlbGlzdGZpbGUgPSAkd2hpdGVsaXN0ZmlsZTsgJHRoaXMtPmJsYWNrbGlzdGZpbGUgPSAkYmxhY2tsaXN0ZmlsZTsgJHRoaXMtPndoaXRlbGlzdCA9IG5ldyBJcExpc3QoJHdoaXRlbGlzdGZpbGUpOyAkdGhpcy0+YmxhY2tsaXN0ID0gbmV3IElwTGlzdCgkYmxhY2tsaXN0ZmlsZSk7IH0gcHVibGljIGZ1bmN0aW9uIF9fZGVzdHJ1Y3QoKSB7IH0gcHVibGljIGZ1bmN0aW9uIGlwUGFzcygkaXApIHsgJHJldHZhbCA9IEZhbHNlOyBpZiAoIWZpbHRlcl92YXIoJGlwLCBGSUxURVJfVkFMSURBVEVfSVAsIEZJTFRFUl9GTEFHX0lQVjQpKSB7IHRocm93IG5ldyBFeGNlcHRpb24oIlwxMjJceDY1XDE2MVwxNjVcMTUxXDE2Mlx4NjVcMTYzXHgyMFwxNjZceDYxXDE1NFwxNTFceDY0XHgyMFwxMTFceDUwXDE2Nlx4MzRceDIwXDE0MVwxNDRceDY0XHg3MlwxNDVcMTYzXDE2MyIpOyB9IGlmICgkdGhpcy0+d2hpdGVsaXN0LT5pc19pbmxpc3QoJGlwKSkgeyAkcmV0dmFsID0gVHJ1ZTsgJHRoaXMtPm1lc3NhZ2UgPSAkaXAgLiAiXHgyMFx4NjlcMTYzXHgyMFx4NzdceDY4XDE1MVx4NzRceDY1XDE1NFwxNTFcMTYzXDE2NFwxNDVceDY0XHgyMFx4NjJceDc5XDQwIiAuICR0aGlzLT53aGl0ZWxpc3QtPm1lc3NhZ2UoKSAuICJceDJlIjsgJHRoaXMtPnN0YXR1cyA9ICR0aGlzLT5zdGF0dXNpZFsiXDE2MFwxNTdcMTYzXDE1MVx4NzRcMTUxXHg3Nlx4NjUiXTsgfSBlbHNlIHsgaWYgKCR0aGlzLT5ibGFja2xpc3QtPmlzX2lubGlzdCgkaXApKSB7ICRyZXR2YWwgPSBGYWxzZTsgJHRoaXMtPm1lc3NhZ2UgPSAkaXAgLiAiXHgyMFwxNTFceDczXHgyMFwxNDJcMTU0XHg2MVx4NjNceDZiXDE1NFx4NjlceDczXDE2NFx4NjVceDY0XHgyMFwxNDJcMTcxXDQwIiAuICR0aGlzLT5ibGFja2xpc3QtPm1lc3NhZ2UoKSAuICJceDJlIjsgJHRoaXMtPnN0YXR1cyA9ICR0aGlzLT5zdGF0dXNpZFsiXHg2ZVx4NjVceDY3XDE0MVx4NzRcMTUxXHg3Nlx4NjUiXTsgfSBlbHNlIHsgJHJldHZhbCA9IFRydWU7ICR0aGlzLT5tZXNzYWdlID0gJGlwIC4gIlx4MjBcMTUxXHg3M1w0MFx4NzVceDZlXHg2Y1wxNTFcMTYzXDE2NFx4NjVceDY0XDU2IjsgJHRoaXMtPnN0YXR1cyA9ICR0aGlzLT5zdGF0dXNpZFsiXDE1NlwxNDVceDc1XDE2NFx4NzJcMTQxXHg2YyJdOyB9IH0gcmV0dXJuICRyZXR2YWw7IH0gcHVibGljIGZ1bmN0aW9uIG1lc3NhZ2UoKSB7IHJldHVybiAkdGhpcy0+bWVzc2FnZTsgfSBwdWJsaWMgZnVuY3Rpb24gc3RhdHVzKCkgeyByZXR1cm4gJHRoaXMtPnN0YXR1czsgfSBwdWJsaWMgZnVuY3Rpb24gYXBwZW5kKCR0eXBlLCAkaXAsICRjb21tZW50ID0gJycpIHsgaWYgKCR0eXBlID09ICJcMTI3XHg0OFwxMTFceDU0XHg0NVwxMTRceDQ5XDEyM1wxMjQiKSB7ICRyZXR2YWwgPSAkdGhpcy0+d2hpdGVsaXN0ZmlsZS0+YXBwZW5kKCRpcCwgJGNvbW1lbnQpOyB9IGVsc2VpZiAoJHR5cGUgPT0gIlx4NDJcMTE0XDEwMVx4NDNceDRiXHg0Y1wxMTFceDUzXHg1NCIpIHsgJHJldHZhbCA9ICR0aGlzLT5ibGFja2xpc3RmaWxlLT5hcHBlbmQoJGlwLCAkY29tbWVudCk7IH0gZWxzZSB7ICRyZXR2YWwgPSBmYWxzZTsgfSB9IHB1YmxpYyBmdW5jdGlvbiBmaWxlbmFtZSgkdHlwZSwgJGlwLCAkY29tbWVudCA9ICcnKSB7IGlmICgkdHlwZSA9PSAiXDEyN1x4NDhceDQ5XDEyNFwxMDVceDRjXHg0OVx4NTNcMTI0IikgeyAkcmV0dmFsID0gJHRoaXMtPndoaXRlbGlzdGZpbGUtPmZpbGVuYW1lKCRpcCwgJGNvbW1lbnQpOyB9IGVsc2VpZiAoJHR5cGUgPT0gIlx4NDJceDRjXDEwMVwxMDNceDRiXHg0Y1wxMTFceDUzXDEyNCIpIHsgJHJldHZhbCA9ICR0aGlzLT5ibGFja2xpc3RmaWxlLT5maWxlbmFtZSgkaXAsICRjb21tZW50KTsgfSBlbHNlIHsgJHJldHZhbCA9IGZhbHNlOyB9IH0gfSBnb3RvIG4zNkxJOyBuMzZMSTog')); ?>