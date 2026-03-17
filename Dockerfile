FROM internetsystemsconsortium/bind9:9.18
COPY config/named.conf /etc/bind/named.conf
COPY zones/ /etc/bind/zones/
RUN chown -R bind:bind /etc/bind/
ENTRYPOINT ["/usr/sbin/named", "-g", "-c", "/etc/bind/named.conf", "-u", "bind"]
