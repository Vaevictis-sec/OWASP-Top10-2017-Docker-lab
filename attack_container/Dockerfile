FROM alpine:3.7
#Añadimos ssh, bash, nc, nano y python3
RUN apk --update add --no-cache openssh bash netcat-openbsd nano\
&& sed -i s/#PermitRootLogin.*/PermitRootLogin\ yes/ /etc/ssh/sshd_config \
&& echo "root:hacked" | chpasswd \
&& rm -rf /var/cache/apk/*\
&& apk add --no-cache python3 && \
    python3 -m ensurepip && \
    rm -r /usr/lib/python*/ensurepip && \
    pip3 install --upgrade pip setuptools && \
    if [ ! -e /usr/bin/pip ]; then ln -s pip3 /usr/bin/pip ; fi && \
    if [[ ! -e /usr/bin/python ]]; then ln -sf /usr/bin/python3 /usr/bin/python; fi && \
pip install requests && \
rm -r /root/.cache

#Añadimos una reverse shell para facilitar su uso
ADD ./reverse_shell.php xxe_web_scanner.py exfiltrar.dtd /root/

RUN sed -ie 's/#Port 22/Port 22/g' /etc/ssh/sshd_config && \
sed -ir 's/#HostKey \/etc\/ssh\/ssh_host_rsa_key/HostKey \/etc\/ssh\/ssh_host_rsa_key/g' /etc/ssh/sshd_config && \
ssh-keygen -t rsa -b 4096 -f /etc/ssh/ssh_host_rsa_key && \
echo "\"The quieter you become, the more you are able to hear\"" > /etc/motd && \
echo "Recuerda que esta máquina la utiliza más gente, no hagas nada que pueda bloquear a otros usuarios." >> /etc/motd
EXPOSE 22
CMD ["/usr/sbin/sshd","-D"]
